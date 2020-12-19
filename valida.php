<php
include 'conexao.php';
$Vusuario = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

$consulta = $cn->query("select cd_usuario,nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$Vusuario' and ds_senha = '$Vsenha'");
if($consulta->rowCount() == 1){
echo 'Usuario está cadastrado';
}
else{
echo 'Usuario não está cadastrado';
}
?>