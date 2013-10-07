<?php
	$j = NULL;
	$k = NULL;
	function fib($end){
		$j = 0;
		$k = 1;
		$a = "";
		$b = "";
		$c = array();
		$d = 0;
		$e = 1;
		for ($i=0; $i < $end; $i++) {
			
			if ($i == 0 ){
				$j = 0;
			}else{
				$j = $j + $k;
			}
			
			$k = $j + $k;
			
			$a = $j;
			$b =  $k;
			
			$c[$d] = $a;
			$c[$e] = $b;
			$d += 2;
			$e += 2;
		}
		return $c;
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Fib</h1>
		<form  method="POST" action=" ?">
		<p>Number of Sequence: <input type="text" name="precision" /><input type="submit" value="Submit" name="Submit"/></p>
		</form>
		<?php
		if(isset($_POST["precision"])){
		$precision =  $_POST["precision"];
		$result = fib($_POST["precision"]);
		echo '<table border=\'1\'>';
		echo '<tr bgcolor="999FFF" style="text-align:center;">';
		for ($i=0; $i < ($precision + 1); $i++) { 
		echo '<td>';
			echo "<b>F</b><sub>" .$i ."</sub>";
			echo '</td>';	
		}
		echo '</tr>';
		echo '<tr bgcolor="BBBBB" style="text-align:center;">';
		for ($i=0; $i < $precision +1; $i++) { 
		echo '<td>';
			echo $result[$i];
			echo '</td>';	
		}
		echo '</tr>';			
		echo '</table>';
		}
		
		?>
	</body>
</html>