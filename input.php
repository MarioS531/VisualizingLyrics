<?php
//Get the form data
if (isset($_POST['songname'])) {
    $input = $_POST['songname'];
    echo "$input";
    // //Save the form data to a file
    // $file = fopen('input.txt', 'r+') or die("can't open file");
    // fwrite($file, $input . "\n");
    // fclose($file);

    //Redirect user back to the form
//header('Location: index.html');
}
?>