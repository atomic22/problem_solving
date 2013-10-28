<?php
	//FORMAT IS FLOOR, ROOM, TEMP
	$room_info = array(1,2,30,3,3,70,1,6,78,1,4,88,1,3,67,1,1,55,2,1,88,2,2,99,2,3,55,2,4,66,2,4,89,2,5,66,2,6,56,3,1,45,3,2,78,3,4,99,3,5,78,3,6,77);
	
	for ($i=0; $i < count($room_info); $i+=3) { 
		//echo $room_info[$i] ."<br />";
		
		$floors[] = array($room_info[$i]);
		$j = $i + 1;
		echo '$j =' . $j ."<br />";
		$room[] = array($room_info[$j]);
		$k = $i + 2;
		$temp[] = array($room_info[$k]);
	}
			//print_r($floors) . "<br />";
			print_r($temp);
	//FIGURE OUT THE HIGHEST FLOOR OR NUMBER OF FLOORS
	//STRIP OUT ALL DUPLICATE IN ARRAY
	//AVG TEMP PER FLOOR
	
	//COLDEST ROOM ANYWHERE
	
	
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		
		?>
	</body>
</html>