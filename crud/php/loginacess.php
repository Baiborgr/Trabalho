 <?php
 session_start();
 include_once('conexao.php');
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
}
       $email= $_POST["email"];
       $senha= $_POST["senha"];
       $sql="SELECT count(*) FROM usuario WHERE email = '$email' AND senha='$senha' LIMIT 1";
       $resultado=$pdo->prepare($sql);
       $resultado->execute();
       $numero_registro=$resultado->fetchColumn();

       if($email == 'admin@admin' && $senha == 'admin'){
            header('Location:adm.php');
        }else if($numero_registro == 1){
       		$_SESSION['email'] = $email;
       		header('Location:usu.php');
       		exit();
       }else{
          $_SESSION['naoAutenticado'] = true;
       		header('Location:login.php');
       		exit();
       }
?>    