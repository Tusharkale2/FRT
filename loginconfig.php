<?php
$host = 'frt.mysql.database.azure.com';
$username = 'tushar@frt';
$password = 'Tazz@12345';
$db_name = 'FRT';

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL,'C:\wamp64\www\Jnex\DigiCertGlobalRootG2.crt.pem', NULL, NULL); 
mysqli_real_connect($conn, "frt.mysql.database.azure.com", "tushar@frt", 'Tazz@12345', 'FRT', 3306);
if(isset($_POST['register'])){
//$id= $_POST['id'];
       // $edate= $_POST['edate'];
       
if(!empty($_POST['insert']))
{
  $s = $_POST['id'];
   $pass= $_POST['pass'];
    $sql ="SELECT * from login where userid = '$s' ";
    $result = mysqli_query($conn,$sql);
    //$a=$sql;
   $queryresult = mysqli_num_rows($result);
    if($queryresult > 0){
 while($row = mysqli_fetch_assoc($result)){
    
  /*<input type="text" name="name" value=" <?php //echo "".$row. ""?>;"
    <!--<input type="text" name="name" value=" <?php  //echo $row['name'] ?>"/>-->*/
    
     
    $a=$row['id'];
    $b=$row['pass'];
    
  //insert1.attr('disabled',true);
}
  if('id'==$a && 'pass' == $b){
	echo "<script>alert('login successfully');</script>";
}
else
{

echo "<script>alert('incorrect id password');</script>";
}

  }

}

?>
<?php
$host = 'frt.mysql.database.azure.com';
$username = 'tushar@frt';
$password = 'Tazz@12345';
$db_name = 'FRT';

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL,'C:\wamp64\www\Jnex\DigiCertGlobalRootG2.crt.pem', NULL, NULL); 
mysqli_real_connect($conn, "frt.mysql.database.azure.com", "tushar@frt", 'Tazz@12345', 'FRT', 3306);

?>
