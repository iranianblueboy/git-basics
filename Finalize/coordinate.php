<?php 




   $con= mysqli_connect("127.0.0.1","root","","pnw")or die("ERROR to connect");
		   

    mysqli_select_db($con,'pnw')or die("error to select");

    
    $sql="SELECT * FROM z_projects";
	$ResultPNW=mysqli_query($con,$sql)or die(mysqli_error($con));
	$SelectPNW=mysqli_fetch_assoc($ResultPNW);

 

	
	//print_r($SelectAccess);
$counter=1;
	while($SelectPNW){
		
            $PNWid=$SelectPNW['id'];
            $PNWlng=$SelectPNW['lng'];
            $PNWlat=$SelectPNW['lat'];


		    mysqli_select_db($con,'pnw_back')or die("error to select");
			$sql="UPDATE z_projects SET lat='".$PNWlat."',lng='".$PNWlng."' WHERE id=".$PNWid;
            mysqli_query($con,$sql)or die(mysqli_error($con));
           
         

	

    	$SelectPNW=mysqli_fetch_assoc($ResultPNW);
		}
	
	
	
	
	
	
	












?>