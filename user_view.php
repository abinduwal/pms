
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<table>
		<tr>
			<th>User ID</th>
			<th> Name </th>
			<th> Company</th>
		</tr>
		<?php
			foreach ($userArray as $key => $value) {
				echo"
				<tr>
					<td>".$value["id"]."</td>
					<td>".$value["username"]."</td>
					<td>".$value["company"]."</td>
				</tr>";
			}
		?>
	</table>

</body>
</html>