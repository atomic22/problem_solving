<?php
class floor_info{
		
	//public $floors;
	
	public function parsed_info($room_info){
	//LOOP THROUGH ARRAY TO SEPERATE OUT INFO TO FLOORS 
	$rooms = array();
	$floors = array();
	
	for ($i=0; $i < count($room_info); $i+=3) {
		
		$floor = array("floor" => $room_info[$i]);
		//NEED ROOMS ASSOCIATED WITH THE FLOOR NUMBERS AND THE TEMPS
		$room = array_merge($floor, array("room" => $room_info[$i+1]));		
		
		//NEED ROOMS ASSOCIATED WITH THE FLOOR NUMBERS AND THE TEMPS
		$temp[] = array_merge($room, array("temp" => $room_info[$i+2]));
		
	}
	return $temp;
  }
	
	public function avg_temp_per_floor($temps_for_floors){
	
		$floors = array();
		//creates an array of floors
		foreach ($temps_for_floors as $key) {
			$floor = $key[0];
			if(!in_array($floor, $floors)){
		 		$floors[] = $floor;			
			}
			
		}	
		var_dump($floors);
		$floor_temp = array();
		foreach ($temps_for_floors as $key) {
			$tsfloor = $key[0];
			$temp = $key[1];
	
			for ($i=0; $i < count($floors) ; $i++) { 
				$floor_number = $floors[$i];
				if($tsfloor == $floor_number){
				$floor_temp[$i] .= $temp;
				
				}
			}
				
		}
		var_dump($floor_temp);
		
		//return $floorvariable;
	}
}

/**     TASK IS TO TAKE AN ARRAY OF DATA AND FIGURE OUT:
* 		THE NUMBER OF FLOOR, 
* 		THE AVERAGE TEMP PER FLOOR,
*		THE NUMER OF ROOMS PER FLOOR, 
* 		AND COLDEST ROOM IN THE BUILDING.
**/
	//ARRAY IS IN GROUPS OF 3, FLOOR, ROOM, TEMP
	$room_info = array(1,1,50,
					   1,2,62,
					   2,6,54,
					   2,2,98,
					   1,4,65,
					   3,5,64,
					   1,6,89,
					   2,1,65,
					   3,1,98,
					   2,3,65,
					   3,6,98,
					   2,5,78,
					   2,4,98,
					   1,5,78,
					   3,2,98,
					   3,3,45,
					   3,4,87,
					   1,3,85,
					   );

	$floors = array();
	
	

	$floor_info = new floor_info;
	
	$temp = $floor_info->parsed_info($room_info);
	
	foreach ($temp as $key) {
		//ALL INFORMATION PARSED
		//echo "temp in room " .$key['room'] ." on floor " . $key['floor'] . " is ". $key['temp'] . "<br />";
		$floor = $key['floor'];
		$temps_for_floor[] = array($key['floor'], $key['temp']);
		
		//GET NUMBER OF FLOORS BY PUTTING ONLY THE UNIQUE FLOOR NUMBERS INTO A VARIABLE
		if(!in_array($floor, $floors)){
		 	$floors[] = $floor;			
		}
		
	}
	//var_dump($temps_for_floor);
	
	//send up the floor information
	$avgtemp = $floor_info->avg_temp_per_floor($temps_for_floor); 
	
	//print_r($avgtemp);
	//var_dump($floors);
	
	echo "number of floors = " . count($floors) ."<br />";
	
	
	echo "<br />";
