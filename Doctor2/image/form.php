<?
    $firstName=$POST['firstName'];
    $lastName=$POST['lastName'];
    $email=$POST['email'];
    $password=$POST['password'];
    $number=$POST['number'];


    //connection
    $conn=new mysqli('localhost', 'root',' ' ,' ' ,'test');
    if($conn->connect_error)
{
    die('connection failed :' .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(firstName,lastName,email,password,number) 
    values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$firstName,$lastname,$email,$password,$number);
    $stmt->execute();
    echo"Registration Successfull";
}
?>