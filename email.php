<?php 
$inputJSON = file_get_contents('php://input');
$input= json_decode( $inputJSON, TRUE ); //convert JSON into array

mail('my@email.com', 'Feedback', $input['content']);

?>
