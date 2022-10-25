<div><a href="/">Главная</a></div>
<?php
$connection = mysqli_connect('localhost', 'admin', 'admin');

if($connection == false)
{
    exit();
    echo '<pre>no conection with database</pre>';
} else
{
 echo  '<pre>Conection with database is fine</pre>';
}

$db=mysqli_select_db($connection, "phonebase");
mysqli_set_charset($connection, "utf8");
if (!$connection || !$db)
{
exit(mysqli_error($connection));
}


$name = $_POST['name'];
$last = $_POST['last']; 
$email = $_POST['email'];
$phone = $_POST['phone'];


$result = mysqli_query($connection, "INSERT INTO `lead`(`name`, `surname`, `mail`, `number`) VALUES ('$name','$last','$email', '$phone')");
if ($result) {
    echo "Data added successfully";
}
else {
    echo "An error occurred while adding data";
} 

?>