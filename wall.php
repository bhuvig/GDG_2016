<?php 
ob_start();
if(isset($_POST['Length'])){ $L = $_POST['Length']; } 
if(isset($_POST['Breadth'])){ $B = $_POST['Breadth']; } 
if(isset($_POST['color'])){ $C = $_POST['color']; } 
$url="https://dummyimage.com/".strval($L*100).('x').strval($B*100).('/').($C).('/').($C).('.png');
file_put_contents("walley.png", file_get_contents($url));
// do stuff here
$url2 = 'http://localhost/simple_gray_621/furnish2.html'; // this can be set based on whatever

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

// no redirect
header( "Location: $url2" );
?>