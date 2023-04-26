 <?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once("db.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "UPDATE USERS SET name = '$name' , email = '$email' , password = '$password' , phone = '$phone' WHERE  id = '$id'";
    $result = $mysql->query($query);

    if ($mysql->affected_rows > 0){
        if ($result === TRUE){
            echo "update succesfully";
        }else
        echo "error";
    }else{
        echo "not found any rows";
    }
    $mysql->close();

 }