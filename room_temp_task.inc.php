<?php
class floor_info{
		
	//public $floors;
	public function number_of_floors($room_info){
		$total_floors = array();
	
		for ($i=0; $i < count($room_info); $i+=3) {
		
			$floor = array("floor" => $room_info[$i]);
			if(!in_array($floor, $total_floors)){
				$total_floors[] = $floor;
			}
		}
		return $total_floors;
	}
	
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
		///FIND THE COLDEST TEMP AND FLOOR AND ROOM
		///LEFT OFF HERE
		$coldest_temp = min($temp);
		echo "coldest area - " . $coldest_temp;
			$floor1 = array();
			$floor2 = array();
			$floor3 = array();
			
			for ($i=0; $i < count($temp); $i++) {
			
			switch ($temp[$i]['floor']) {
				case '1':
					$room = array("room" => $temp[$i]['room']);
					$tempature = array("temp" => $temp[$i]['temp']); 
					$floor1[] = array_merge($room, $tempature);
					break;
				
				case '2':
					$room = array("room" => $temp[$i]['room']);
					$tempature = array("temp" => $temp[$i]['temp']); 
					$floor2[] = array_merge($room, $tempature);
					break;
				
				case '3':
					$room = array("room" => $temp[$i]['room']);
					$tempature = array("temp" => $temp[$i]['temp']); 
					$floor3[] = array_merge($room, $tempature);
					break;
				default:
					
					break;
			}
		}
	
	
		$floors = array($floor1, $floor2, $floor3);
		return $floors;
	  }
	
	public function avg_temp_per_floor($temps_for_floors, $floor_num){

		
		for ($i=0; $i < count($temps_for_floors); $i++) { 
			$temps[] = $temps_for_floors[$i]['temp'];
		}
		//return the temps array
		$avgtemp = array_sum($temps) / count($temps);
		$floor_num +=1;
		echo "Average temp for floor " .$floor_num . " is  " . $avgtemp ."<br />" ;
	}
	
}