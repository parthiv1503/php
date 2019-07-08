<html>
	<head>
		<title>
			Matrix Addition
		</title>
	</head>
	<body>
		<?php
			echo "Matrix<br /> Array 1<br />";
			$ar1=array(
				array(1,2),
				array(3,4)
			);
			$ar2=array(
				array(1,2),
				array(3,4)	
			);
			$sum=array(
				array(),
				array()
			);
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $ar1[$i][$j]. "    ";
				}
				echo "<br />";
			}
			echo "Array 2<br />";
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $ar2[$i][$j]. "    ";
				}
				echo "<br />";
			}
			echo "Addition of both the arrays<br />";
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $sum[][]=$ar1[$i][$j]+$ar2[$i][$j]." ";
				}
				echo "<br />";
			}
		?>
	</body>
</html>