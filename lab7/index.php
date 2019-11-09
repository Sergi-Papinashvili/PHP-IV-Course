<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br><br>    
    <form action="index.php" method="post">
        <input type="varchar" name="fname" placeholder="FirstName" value="">
        <input type="varchar" name="lname" placeholder="LastName" value="">
        <input type="varchar" name="age" placeholder="Mobile" value="">
        <input type="varchar" name="bday" placeholder="Birthday" value="">
        <input type="varchar" name="reg_date" placeholder="Registration Date" value="">
        <input type="varchar" name="password" placeholder="Password" value="">
        <input type="varchar" name="gender" placeholder="Address" value="">

        
        <div>
            <br><br>
            <input type="submit" name="insert" value="Add">
        </div>

    </form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydata";

// try {
//     $conn = new PDO("mysql:host=$servername;dbName=$database", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected successfully";
//     var_dump($conn);
//     $conn.exec("INSERT INTO users(lastName) VALUES ('John Doe')");
// }
// catch(PDOException $e){
//     echo "connection failed:" . $e->getMessage();
// }
$query = "SELECT * FROM mydata.users";
$data = $conn->query($query);
echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
        <tr>
            <th>ID</th>
            <th>first name</th>
            <th>last name</th>
            <th>age</th>
            <th>birthDay</th>
            <th>reg_Date</th>
            <th>password</th>
            <th>gender</th>

        </tr>
     ';

foreach($data as $row){
    echo '
        <tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["name"].'</td>
            <td>'.$row["lastName"].'</td>
            <td>'.$row["age"].'</td>
            <td>'.$row["birthDay"].'</td>
            <td>'.$row["reg_Date"].'</td>
            <td>'.$row["password"].'</td>
            <td>'.$row["gender"].'</td>


        </tr>
     ';
}
echo '</table>';
if(isset($_POST['insert'])){
    
    $fname = $_POST['fname'];
    $conn.exec("INSERT INTO users(namel) VALUES ('John')");
    $Result = $conn->prepare($query);
$Result->bindparam(':firstName', $fname);
$Result->execute();


}

?>
