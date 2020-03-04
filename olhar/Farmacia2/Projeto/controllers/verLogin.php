<?php
// Incluindo classe Banco
require '../models/Banco.php';
// Classe validar os dados do usuário.
class verLogin extends Banco {
    //
    public function vl() {
        // Verificar se algo foi enviado
        if(empty($_POST['campoEmail']) && empty($_POST['campoSenha'])) {
            header('Location: ../views/index.php');
            exit();
        }

        // Objeto da classe banco.
        $conexao = $this->verBanco();
        
        // Variaveis com dados do post
        $email = mysqli_real_escape_string($conexao, $_POST['campoEmail']);
        $senha = mysqli_real_escape_string($conexao, $_POST['campoSenha']);
        
        // query para verificar os dados do banco com o login
        $query = "SELECT * FROM funcionario WHERE email = '{$email}'AND
        senha = '{$senha}' ";

        // retorno dos dados da busca       
        $resultado = mysqli_query($conexao, $query);
        $linha = mysqli_num_rows($resultado);

        // verificando os dados
        if($linha == 0) {
            header('Location: ../views/index.php');
            exit();
        
        } else {
            header('Location: ../views/Menu.php');
            exit();
        } 

    }
}
//
$ver = new verLogin();
$ver->vl();