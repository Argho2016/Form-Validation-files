<html>
	<head>
		<title> Degree </title>
	</head>

	<body>
		<form action="degreevalidation.php" method="post">
			<fieldset>
				<legend> Degree:</legend>
					<input type="checkbox" name="check_list[]" value="HSC" checked/><label>HSC</label>
					<input type="checkbox" name="check_list[]" value="SSC" checked/><label>SSC</label>
					<input type="checkbox" name="check_list[]" value="BSc"/><label>BSc</label>
					<input type="checkbox" name="check_list[]" value="MSc"/><label>MSc</label>
					<br/><br/>
					<input type="submit" />
			</fieldset>
		</form>
	</body>
</html>