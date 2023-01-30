<?php
$con=mysqli_init();
if (!$con)
{
    die("mysqli_init failed");
}

if (!mysqli_real_connect($con,"wenyimysql.mysql.database.azure.com","azureuser","SUNwenyi1234","school"))
{
    die("Connect Error: " . mysqli_connect_error());
}
echo "connection succeeded";
mysqli_close($con);

?>