<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Chained Select Tutorial</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<?php
// An array of options for the first select box.
$makes = array('Acura', 'BMW', 'Lexus', 'Toyota', 'Honda');

// Displays the posted info 
if(isset($_POST['submit']))
{ echo '<pre>'; print_r($_POST); echo '</pre>'; }
?>
<form action="" method="post">
<select id="makes" name="makes"><!-- Make sure to give the select box a id, this will make it much easier to target with jquery. -->
<?php
// Build the options for the first select box
foreach($makes as $m){ echo '<option value="'.$m.'">'.$m.'</option>'; }
?>
</select>
<select id="models" name="models"><!-- Make sure to give the select box a id, this will make it much easier to target with jquery. -->
</select>
<input type="submit" name="submit" value="Submit">
</form>

<script>
$('#makes').change(function(){ //Basically saying when the first select box changes values run the function below.
	var make = $(this).val(); // Grab the value of the selection to send to the select-request.php via ajax
	$.post('select-request.php', {make:make}, function(data){ // Run a ajax request and send the var make as a post variable named "make" and return the info in the "data" var.
		$('#models').html(data); // Have jquery change the html within the second select box with the "data" we got back from the ajax request.
	});
});
</script>

</body>

</html>
