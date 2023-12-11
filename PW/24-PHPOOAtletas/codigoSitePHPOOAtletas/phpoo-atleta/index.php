<?php
	spl_autoload_register (function($class_name){
		require_once 'classes/' . $class_name . '.php';
	});
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wid_atletath=device-wid_atletath, initial-scale=1" />
   <title>PHP OO - Atletas</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Beatriz Cristina"/>
   <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" />
</head>
<body style="background-image: url('fundo.png'); background-size: cover; background-position: center center;">

	<div class="container">

		<?php
	
		$atletas = new Atletas();

		if(isset($_POST['cadastrar'])):

			$atleta  = $_POST['atleta'];
			$peso = $_POST['peso'];
			$altura = $_POST['altura'];
			$IMC  = $_POST['IMC'];
			$nacionalidade = $_POST['nacionalidade'];
			$modalidade = $_POST['modalidade'];

			$atletas->setAtleta($atleta);
			$atletas->setPeso($peso);
			$atletas->setAltura($altura);
			$atletas->setIMC($IMC);
			$atletas->setNacionalidade($nacionalidade);
			$atletas->setModalidade($modalidade);

			if($atletas->insert()){
				echo "Atleta inserido com sucesso!";
			}

		endif;

		?>
		<header class="masthead">
			<h1 class="muted">PHP OO - Atletas</h1>
			<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="index.php">Página inicial</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<?php 
		if(isset($_POST['atualizar'])):

			$id_atleta = $_POST['id_atleta'];
			$atleta = $_POST['atleta'];
			$peso = $_POST['peso'];
			$altura = $_POST['altura'];
			$IMC  = $_POST['IMC'];
			$nacionalidade = $_POST['nacionalidade'];
			$modalidade = $_POST['modalidade'];

			$atletas->setAtleta($atleta);
			$atletas->setPeso($peso);
			$atletas->setAltura($altura);
			$atletas->setIMC($IMC);
			$atletas->setNacionalidade($nacionalidade);
			$atletas->setModalidade($modalidade);

			if($atletas->update($id_atleta)){
				echo "Dados do atleta atualizados com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id_atleta = (int)$_GET['id_atleta'];
			if($atletas->delete($id_atleta)){
				echo "Dados do atleta deletados com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id_atleta = (int)$_GET['id_atleta'];
			$resultado = $atletas->find($id_atleta);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="atleta" value="<?php echo $resultado->atleta; ?>" placeholder="Atleta:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-info-sign"></i></span>
				<input type="text" name="peso" value="<?php echo $resultado->peso; ?>" placeholder="Peso:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-arrow-up"></i></span>
				<input type="text" name="altura" value="<?php echo $resultado->altura; ?>" placeholder="Altura:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-info-sign"></i></span>
				<input type="text" name="IMC" value="<?php echo $resultado->IMC; ?>" placeholder="IMC:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-plane"></i></span>
				<input type="text" name="nacionalidade" value="<?php echo $resultado->nacionalidade; ?>" placeholder="Nacionalidade:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-th-list"></i></span>
				<input type="text" name="modalidade" value="<?php echo $resultado->modalidade; ?>" placeholder="Modalidade:" />
			</div>
			
			<input type="hid_atletaden" name="id_atleta" value="<?php echo $resultado->id_atleta; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="atleta" placeholder="Atleta:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-info-sign"></i></span>
				<input type="text" name="peso" placeholder="Peso:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-arrow-up"></i></span>
				<input type="text" name="altura" placeholder="Altura:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-info-sign"></i></span>
				<input type="text" name="IMC" placeholder="IMC:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-plane"></i></span>
				<input type="text" name="nacionalidade" placeholder="Nacionalidade:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-th-list"></i></span>
				<input type="text" name="modalidade" placeholder="Modalidade:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>atleta:</th>
					<th>peso:</th>
					<th>altura:</th>
					<th>IMC:</th>
					<th>nacionalidade:</th>
					<th>modalidade:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($atletas->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id_atleta; ?></td>
					<td><?php echo $value->atleta; ?></td>
					<td><?php echo $value->peso; ?></td>
					<td><?php echo $value->altura; ?></td>
					<td><?php echo $value->IMC; ?></td>
					<td><?php echo $value->nacionalidade; ?></td>
					<td><?php echo $value->modalidade; ?></td>
					<td>
						<?php echo "<a href='index.php?acao=editar&id_atleta=" . $value->id_atleta . "'>Editar</a>"; ?>
						<?php echo "<a href='index.php?acao=deletar&id_atleta=" . $value->id_atleta . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>