<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
  $email=$_POST['email'];
	$phone=$_POST['phone'];
	$comment=$_POST['message'];
  $date=$_POST['date'];
  $gender=$_POST['gender'];
	$age=$_POST['age'];
	$attend=$_POST['attend'];
    
  $field1="<b>Appointment Date:</b> ".$date;
  $field2="<b>Gender:</b> ".$gender."<br><b>Age:</b> ".$age."<br><b>Have you previously attended our facility?:</b> ".$attend;
  
  $field3="<b>Type of appointment:</b> ".$type1.",".$type2.",".$type3;
	$field4="<b>If Yes, state on which condition and when?:</b> ".$comment;
}
else
{
echo "Thanks";	
exit();	
}

$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email, 'field_1'=>$field1."<br>".$field2."<br>".$field3."<br>".$field4);

header("Location:thanks.php");
exit();
//echo $response;
?>