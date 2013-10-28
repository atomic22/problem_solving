<?php
require_once 'room_temp_task.inc.php';
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
	
	for ($i=0; $i < count($temp); $i++) {
		$avgtemp = $floor_info->avg_temp_per_floor($temp[$i], $i);
	}
	
	var_dump($avgtemp);
	
	$total_floors = $floor_info->number_of_floors($room_info);
	
	echo "number of floors = " . count($total_floors) ."<br />";