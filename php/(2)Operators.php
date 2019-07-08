<html>
	<head>
		<title>
			Operators
		</title>
	</head>
	<body>
		
		<?php
			$a=4;
			$b=6;
		?>
		
		<h2><?php
				echo "No 1 is :".$a."<br/>";
				echo "No 2 is :".$b."<br/> <br/>";
				
				echo "Arithmetic Operations";
		?></h2>	

		<?php	
			$c=$a + $b;
			echo "Addition of ".$a. " and " .$b. " is = " .$c."<br/>" ;
				
			$c=$a - $b;
			echo "Subtraction of ".$a. " and " .$b. " is = " .$c. "<br/>";
			
			$c=$a * $b;
			echo "Multiplication of ".$a. " and " .$b. " is = " .$c. "<br/>";
				
			$c=$a / $b;
			echo "Division of ".$a. " and " .$b. " is = " .$c. "<br/>";
				
			$c=$a % $b;
			echo "Modulo of ".$a. " and " .$b. " is = " .$c. "<br/>";
				
			$c=$a ++;
			echo "Increment of ".$a. " is = " .$c. "<br/>";
				
			$c=$a --;
			echo "Decrement of ".$a. " is = " .$c ."<br/>";
		?>
		
		<h2><?php 
				echo "Comparison Operations";
		?></h2>
		
		<?php	
			$c=$a == $b;
			echo "NO 1 is equal to NO 2 : " .$c."<br/>" ;
			
			$c=$a != $b;
			echo "NO 1 is not equal to NO 2 : " .$c."<br/>" ;
			
			$c=$a > $b;
			echo "NO 1 is greater than NO 2 : " .$c."<br/>" ;
				
			$c=$a < $b;
			echo "NO 1 is less than NO 2 : " .$c."<br/>" ;
				
			$c=$a >= $b;
			echo "NO 1 is greater than or equal to NO 2 : " .$c."<br/>" ;
				
			$c=$a <= $b;
			echo "NO 1 is less tahn or equal to NO 2 : " .$c."<br/>" ;
				
		?>
		<h2><?php
				echo "Logical Operators";
		?></h2>
		
		<?php
			$a == 4 and $b == 6;
			echo "N0 1 and NO 2 are same.<br/>";
			
			$a == 4 or $b == 6;
			echo "One of the number is same.<br/>"
		?>
	</body>
</html>