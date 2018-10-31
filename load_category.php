<?php
$con=mysqli_connect("localhost","root","","farmersfriend");

if(isset($_POST["category"]))
 {  
  echo $category=$_POST["category"];
 }

 
 /* 
  if($_POST["category"] != '') 
  {
        $query="SELECT * FROM `postad` WHERE category = '".$_POST["category"]."'";
  }
  else
  {
    $query="SELECT * FROM `postad`";
  }

	$run=mysqli_query($con,$query);
		
	if(mysqli_num_rows($run) >0)
	{
	while($data=mysqli_fetch_assoc($run))
	{
	echo "hello";
}
}
}
?>*/



