<?php 
	
	if (isset($_POST['submit'])) {
		
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$op = $_POST['op'];

		if ($number1=='') {
			$error1 =  "Number 1 Can Not be blank";
		}

		if ($number2=='') {
			$error2 =  "Number 2 Can Not be blank";
		}

		if ($op=='') {
			$error3 =  "Operation Must be Selected";
		}

		if ($number1!='' && $number2!='' && $op!='') {
			
			switch ($op) {
				case '+':
					$result = $number1 + $number2;
					break;
				case '-':
					$result = $number1 - $number2;
					break;
				case '*':
					$result = $number1 * $number2;
					break;
				case '/':
					$result = $number1 / $number2;
					break;
				
				default:
					$result = "Error";
					break;
			}

		}
		
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style type="text/css">
		table {
			margin: auto;
		}
		table tr th,td {
			padding: 15px;
		}


	</style>
</head>
<body>

	<table border="1" style="border-collapse: collapse; width: 300px;">
		<form method="POST">
			<tr>
				<th><label>Number1</label></th>
				<td><input type="number" name="number1">
				<?php 
					if (isset($error1)) {
						echo "<span style='color:red;'>".$error1."</span>";	
					} 
					
				?>
				</td>
			</tr>
			<tr>
				<th><label>Number2</label></th>
				<td><input type="number" name="number2">
				<?php 
					if (isset($error2)) {
						echo "<span style='color:red;'>".$error2."</span>";	
					} 
					
				?></td>
			</tr>
			<tr>
				<th><label>Operation</label></th>
				<td>
					<select name="op">
						<option value="">Select</option>
						<option value="+">Plus</option>
						<option value="-">Minus</option>
						<option value="*">Multi</option>
						<option value="/">Div</option>
					</select>
					<?php 
					if (isset($error3)) {
						echo "<span style='color:red;'>".$error3."</span>";	
					} 
					
				?>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="submit" value="Calculate">
				</th>
			</tr>

		</form>
	</table>
	<br>
	<?php 
		if (isset($result)) {
			?>
			<table border="1" style="border-collapse: collapse; width: 310px;">
					<tr>
						<th>Result</th>
						<td><?php echo $result; ?></td>
					</tr>
				</table>
			<?php
		}
	?>
</body>
</html>