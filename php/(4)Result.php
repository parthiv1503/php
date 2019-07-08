<html>
	<head>
		<title>
			Result
		</title>
	</head>
	<body>
		<center>
		<?php

			$name="Parthiv Patel";
			$class="IMSC";
	
			$no1= rand(1,100);
			$no2= rand(1,100);
			$no3= rand(1,100);
			$no4= rand(1,100);
			$no5= rand(1,100);
			echo "<h1>";
			echo "Marksheet";
			echo "</h1>";
			echo"<hr>";
			echo "<table border=1>";
			echo "<tr>";
			echo "<td>";
			echo "Name: </td><td>".$name;
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Class: </td><td>".$class;
			echo "</td>";
			echo "</tr>";
			echo "<tr><td>";
			echo "Marks of subject 1 is : </td><td>" .$no1;
			echo "</tr></td>";
			echo "<tr><td>";
			echo "Marks of subject 2 is :  </td><td> " .$no2;
			echo "</tr></td>";
			echo "<tr><td>";
			echo "Marks of subject 3 is : </td><td> " .$no3;
			echo "</tr></td>";
			echo "<tr><td>";
			echo "Marks of subject 4 is : </td><td>" .$no4;
			echo "</tr></td>";
			echo "<tr><td>";
			echo "Marks of subject 5 is : </td><td>" .$no5;
			echo "</tr></td>";
	
			echo "<tr><td>";
	
			$avg=($no1+$no2+$no3+$no4+$no5)/5;
	
			echo "Average of marks of 5 subjects is : </td><td>" .$avg;
	
			echo "</tr></td>";
			echo "<tr><td>";
	
			if($avg<35)
			{
				echo "Grade </td><td> F-A-I-L";
			}
			else if($avg>35 && $avg<60)
			{
				echo "Grade : </td><td> D";
			}
			else if($avg>60& $avg<70)
			{
				echo "Grade : </td><td> C";
			}
			else if($avg>70 && $avg<80)
			{
				echo "Grade : </td><td> B";
			}
			else if($avg>80 && $avg<90)
			{
				echo "Grade : </td><td> A";
			}
			else if($avg>90 && $avg<100)
			{
				echo "Grade : </td><td> A+";
			}
			echo "</tr></td>";
			echo "</table>";
		?>
		</center>
	</body>
</html>