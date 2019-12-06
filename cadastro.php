<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> vo chora </title>
	<script type="text/javascript">
		function valida(){
			if (document.getElementById("i1").value == "" || document.getElementById("i1").value == null) {
				return false;
			}
			if (document.getElementById("i2").value == "" || document.getElementById("i2").value == null) {
				return false;
			}
			if (document.getElementById("i3").value == "" || document.getElementById("i3").value = null) {
				return false;
			}
		}
	</script>
</head>
<body>
	<form method="POST" action="processamento.php">
		<fieldset><legend> CADASTRO </legend>
			<br>
			Nome: <input type="text" name="nome" id="i1" onclick="return valida();"/><br><br>
			CPF: <input type="text" name="cpf" id="i2"/><br><br>
			senha: <input type="text" name="senha" id="i3"/><br><br>
			<input type="submit" name="insert" value="INSERT"/>
			<input type="submit" name="select" value="SELECT"/>
			<input type="submit" name="selectall" value="SELECT ALL"/>
			<input type="submit" name="delete" value="DELETE"/>
			<input type="submit" name="update" value="UPDATE"/>
		</fieldset>
	</form>
</body>
</html>