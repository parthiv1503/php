<html>
	<head>
		<title>
			Registration Form
		</title>
	</head>
	<body>
		<h1>
			Student Registration Form
		</h1>
		<form method="GET" action="(14)Data.php">
			<table border=2>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname" /></td> 
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname" /></td> 
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input type="text" name="mail" /></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="radio1" value="male" />Male
					<input type="radio" name="radio1" value="female" />Female</td> 
				</tr>
				<tr>
					<td>Contact No:</td>
					<td><input type="number" name="mno" /></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address" /></td>
				</tr>
				<tr>
					<td>Collage Name:</td>
					<td><input type="text" name="cname" /></td>
				</tr>
				<tr>
					<td>Enrollment No:</td>
					<td><input type="text" name="eno" /></td>
				</tr>
				<tr>
					<td>Course Name:</td>
					<td><select name="course">
						<option>Inte. MScCA&IT)</option>
						<option>Inte. MCA</option>
						<option>MScIT</option>
						<option>MCA</option>
						<option>IMBA</option>
						<option>MBA</option>
				</tr>
				<tr>
					<td>Current Sem:</td>
					<td><select name="csem">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td><input type="checkbox" name="check1" value="gaming" />Gaming<br />
						<input type="checkbox" name="check2" value="travelling" />Travelling</br>
						<input type="checkbox" name="check3" value="riding" />Riding</td>
				</tr>
			</table>
			<input type="Submit" value="Submit">
		</form>
	</body>
</html>