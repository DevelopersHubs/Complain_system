<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complain</title>
</head>
<body>

    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="complain" placeholder="complain">
        <input type="submit" name="submit" value="submit">
    </form>


    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $complain = $_POST['complain'];

            $conn = mysqli_connect("localhost", "root", "", "complain");
            $sql = "INSERT INTO complain (name, email, complain) VALUES ('$name', '$email', '$complain')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "complain submitted";
            }else{
                echo "complain not submitted";
            }
        }
    ?>
        
    
    
</body>
</html>