<! DOCTYPE HTML>
<html lang="pt-br"> <!-- indicando a linguagem que iremos usar no codigo html -->
<head>
<title>Minha Loja</title>
<meta charset="utf-8"> <!-- indicando o sistema de caractere utf-8 -->

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.navbar{ margin-bottom: 0; }
</style>

</head>
<body>
<?php include'nav.php' ?>
<?php include'cabecalho.html' ?>
<?php include 'conexao.php';

$cat = $_GET['cat'];

$consulta = $cn->query("select nm_livro, vl_preco,ds_capa, qt_estoque from vw_livro where ds_categoria = '$cat'");
?>



<div class="container-fluid">
<div class="row">
<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){?>
<div class="col-sm-3">
<img src="imagens/<?php echo $exibe['ds_capa'];?>.jpg" class="img-responsive" style="width:100%">
<div><h4><b><?php echo mb_strimwidth ($exibe['nm_livro'],0,30,'...');?>.<b/></h4></div>
<div><h5> R$ <?php echo number_format ($exibe['vl_preco'], 2,',','.');?></h5></div>
<div class="text-center">
<button class="btn btn-lg btn-block btn-info">
<span class="glyphicon glyphicon-info-sign">Detalhes</span>
</button>
</div>
<div class="text-center" style="margin-top:5px; margin-bottom:5px;">
<?php if($exibe['qt_estoque'] >0) { ?>
<button class="btn btn-lg btn-block btn-success">
<span class="glyphicon glyphicon-usd">Comprar</span>
</button>
<?php } else{ ?>
<button class="btn btn-lg btn-block btn-danger" disabled>
<span class="glyphicon glyphicon-minus-sign">Indisponível</span>
</button>
<?php } ?>
</div>
</div>
<?php } ?>



</div>
</div>

<?php include 'rodape.html' ?>
<body>

</body>
</html>