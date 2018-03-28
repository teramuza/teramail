<?php 
include "include/auth.php";
include "include/config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>
				<?php echo $_SESSION['id_user'];?>
			</td>
		</tr>
	</table>
</body>
</html>