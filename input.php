<?php
//Get the form data
if (isset($_POST['input'])) {
    $input = $_POST['input'];

    //Save the form data to a file
    $file = fopen('/input.txt', 'a');
    fwrite($file, $input);
    fclose($file);

    //Redirect user back to the form
    //header('Location: index.html');
}
?>