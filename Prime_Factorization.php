<?php
	if (isset($_POST["Submit"])){
		$n = $_POST["prime"];
	};
	function allprimes($n){
		if ($n > 2){
				//find out if the number is even
			if(($n % 2) == 1){
					//loop to find all the primes up to the number entered
					$prime = range(3, $n, 2);
					print_r($prime);
		for ($i=2; $i < sqrt($n); $i++) {
			 	
			 echo $n;
						
				}
			}
		}
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Calculate PI</h1>
		<form  method="POST" action=" ?">
		<p>Number to find all Prime Factors: <input type="text" name="prime" /><input type="submit" value="Submit" name="Submit"/></p>
		</form>
		<?php
		if(isset($_POST["Submit"])){
			$prime = $_POST["prime"];
		allprimes($prime);
		//echo $primes;	
		}
		?>
	</body>
</html>