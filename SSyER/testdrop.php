<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
    <select name="cursos">
        <option value="php y mysql">php y mysql</option>
        <option value="framework codeigniter">framework codeigniter</option>
        <option value="wordpress">wordpress</option>
        <option value="ajax">ajax</option>
    </select>
    <button onclick="save();">Guardar Selección</button>
</form>
<script type="text/javascript">
	function Save(){
		<?php echo $_POST['cursos'] ?>
	}
</script>
</body>
</html>