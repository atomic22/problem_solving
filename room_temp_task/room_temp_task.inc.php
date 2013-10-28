<?php
/* SOME OF THE FUNCTIONS COULD BE COMBINE
 * BUT I'M TRYING TO HAVE ONLY 1 RETURN PER FUNCTION
 * 
 * IF I HAD MORE TIME I'D CREATE A FUNCTION TO DETERMINE 
 * THE NUMBER OF FLOORS FOR A DYNAMIC SWITCH CASE STATEMENT
 */ 

class floor_info{

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
		$avgtemp = array_sum($temps) / count($temps);
		$floor_num +=1;
		$average_information = array($avgtemp, $floor_num);
		
		return $average_information;
	}
	
	
	public function number_of_floors($room_info){
		$total_floors = array();
	
		for ($i=0; $i < count($room_info); $i++) {
		
			$floor = array("floor" => $room_info[$i]);
			if(!in_array($floor, $total_floors)){
				$total_floors[] = $floor;
			}
		}
		return $total_floors;
	}
	
	
	public function find_coldest_area($room_info, $floor_num){
		$start_temp = 100;
		$coldest_area = array();
		
		for ($i=0; $i < count($room_info) ; $i++) {
			//echo $room_info[$i][];
			if($room_info[$i]['temp'] < $start_temp){
				$floor_num = $floor_num;
				$start_temp = $room_info[$i]['temp'];
				$coldest_area = $room_info[$i];
			}
		}	
			$coldest_area = array($coldest_area, $floor_num);
			
			return $coldest_area;
	}
	
	
	
}