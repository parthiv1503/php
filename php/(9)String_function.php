<html>
	<head>
		<title>
			String Function
		</title>
	</head>
	<body>
		<h1>
			Program with String Function....
		</h1>
		<form name='name' method="GET">
			Enter the string: <input type="text" name="string" id="ustr" value=""><br>
		</form>
		<?php
			$iustr=$_GET['string'];
			echo "String you entered is: ".$iustr."<br>";
			echo "Length of string is: ".strlen($iustr)."<br>";
			echo "Reverse string is: ".strrev($iustr)."<br>";
			echo "String shuffle is: ".str_shuffle($iustr)."<br>";
			echo "Total words are: ".str_word_count($iustr)."<br>";
			echo "Binary To Hexa: ".bin2hex($iustr)."<br>";
			echo "To Upper Case: ".strtoupper($iustr)."<br>";
			echo "To Lower Case: ".strtolower($iustr)."<br>";
			echo "First Letter in Small: ".lcfirst($iustr)."<br>";
		?>
	</body>
</html>