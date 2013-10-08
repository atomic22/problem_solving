<?php
	$a = 3;
	$b = 5;
	$c = array();
	$total = NULL;
	function multiples(){
	for ($i=1; $i < 1000; $i++) { 
	
	if($i%3 == 0 || $i%5 == 0){
		
		$c[] =$i;			
		}
	
	}
		return $c;
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		
		$numbers = multiples();
		//print_r($numbers);
		for ($i=0; $i < count($numbers); $i++) { 
			//echo $numbers[$i];
			$total += $numbers[$i];
		}
		echo $total;
		?>
	</body>
</html>