<?php 
	if (isset($_POST['insert'])) {
		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		$cpf = isset($_POST["cpf"])?$_POST["cpf"]:"";
		$s = isset($_POST["senha"])?$_POST["senha"]:"";
		include("conexao2.php");

		$resultset = mysqli_query($con,"INSERT INTO tabela_cadastro(nome,cpf,senha)values('$nome','$cpf','$s')");
		mysqli_close($con);
	}
	if (isset($_POST['select'])) {
		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		include("conexao2.php");
		$resultset = mysqli_query($con,"select * from tabela_cadastro where nome='$nome'");
		echo "<table border=\"1\">";
		echo "<tr>";
		echo "<th> NOME </th>";
		echo "<th> CPF </th>";
		echo "<th> SENHA </th>";
		echo "</tr>";
		while ($linha = mysqli_fetch_array($resultset,MYSQLI_BOTH)){
		 	echo "<tr>";  
		 	echo "<td>"; 
		 	echo $linha['nome']."<br>";
		 	echo "</td>";
		 	echo "<td>";
		 	echo $linha['cpf']."<br>";
		 	echo "</td>";
		 	echo "<td>";
		 	echo $linha['senha']."<br>";
		 	echo "</td>";
		 	echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	}
	if (isset($_POST['selectall'])){
		include("conexao2.php");
		$resultset = mysqli_query($con,"select * from tabela_cadastro");
		
		echo "<table border=\"1\">";
		echo "<tr>";
		echo "<th> NOME </th>";
		echo "<th> CPF </th>";
		echo "<th> SENHA </th>";
		echo "</tr>";
		while ($linha = mysqli_fetch_array($resultset,MYSQLI_BOTH)){
		 	echo "<tr>";  
		 	echo "<td>"; 
		 	echo $linha['nome']."<br>";
		 	echo "</td>";
		 	echo "<td>";
		 	echo $linha['cpf']."<br>";
		 	echo "</td>";
		 	echo "<td>";
		 	echo $linha['senha']."<br>";
		 	echo "</td>";
		 	echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	}
	if (isset($_POST['delete'])) {
		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		include("conexao2.php");
		$resultset = mysqli_query($con,"delete from tabela_cadastro where nome='$nome'");
		mysqli_close($con);
		
	}
	if(isset($_POST['update'])){
		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		$cpf = isset($_POST["cpf"])?$_POST["cpf"]:"";
		$senha = isset($_POST["senha"])?$_POST["senha"]:"";
		include("conexao2.php");
		$resultset = mysqli_query($con,"UPDATE tabela_cadastro SET cpf='$cpf',senha='$senha' WHERE nome='$nome'");

		if(mysqli_affected_rows($con) > 0){
		  echo "Sucesso: Atualizado corretamente!";
		}else{
		  echo "Aviso: Não foi atualizado!";
		}
		mysqli_close($con);
	}
?>