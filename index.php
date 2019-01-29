<?php 
	$students = array(
		array(
			'id' => 1,
			'firstname' => 'John',
			'lastname' => 'Doe',
			'mail' => 'john@doe.com',	
		),
		
		array(
			'id' => 2,
			'firstname' => 'Piere',
			'lastname' => 'Durand',
			'mail' => 'pierre@durand.com',			
		),
	);
	

	
?>


<html>
<head>

</head>
<body> 
<h1>Students</h1>
<p>
<?php
 foreach ($students as $student){
	 echo "<li>".$student['firstname']." ".$student['lastname']." (".$student['mail'].")</li>";
 }
?>


</p>


</body>
</html>

