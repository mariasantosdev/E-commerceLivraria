<! DOCTYPE HTML>
<html lang="pt-br"> 
<head>
<meta charset="utf-8">
<title>Mostrar Produtos</title>
</head>
<body>
<?php
include 'conexao.php';
$consulta = $cn->query('select * from vm_livro');
while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
echo $exibe['nm_livro'].'<br>';
echo $exibe['vl_preco'].'<br>';
echo '<hr>';
//* echo $exibe['ds_categoria'].'<br>';//*
}
?>
</body>
</html>