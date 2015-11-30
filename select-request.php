<?php
error_reporting(E_ALL); //Remove this line for production, it simply will allow php to display any errors

// I built arrays based on the value names in the $makes array
$acura = array('Integra', 'TSX', 'MDX');
$bmw = array('1 Series', '3 Series', '5 Series', 'X5');
$lexus = array('ES300', 'GX470', 'GS350', 'LS400H');
$toyota = array('Venza', 'Camry', 'Corolla', 'Echo');
$honda = array('Pilot', 'Accord', 'Civic', 'Ridgeline');

//We check to see if the "make" post has come through before we do any processing.
if(isset($_POST['make']))
{
	// In my example I assign the posted make to a variable and use strtolower() to put all the text in lowercase so it will match an array above.
	$model = strtolower($_POST['make']);
	
	// Using a varable variable I put it into a foreach loop and just like the first select box build the options.
	// Using echo we are able to essentially send back the data.
	// Basically whatever you echo on this page will be output on the main page.
	foreach($$model as $mo){ echo '<option value="'.$mo.'">'.$mo.'</option>'; }
}


?>
