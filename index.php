<?php
require_once("Controller.php");
//創 資料庫
// $sql = "CREATE DATABASE myDB2"; 
// if ($con->query($sql) === TRUE) { 
// echo "數據庫創建成功"; 
// } else { 
// echo "Error creating database: " . $con->error; 
// } 

// 創建table

// $sql = "CREATE TABLE OOXX(
//     Id int,
//     LastName varchar(255),
//     FirstName varchar(255)
// )";

// if($con->query($sql) === TRUE){
// echo "數據庫創建成功"; 
// } else { 
// echo "Error creating database: " . $con->error; 
// } ;

//插入資料
// $query = "INSERT INTO OOXX(id, LastName, FirstName) values(3, 'C', 'D')";
// // $con->query($query);

// if($con->query($query) === TRUE){
// echo "數據庫創建成功"; 
// } else { 
// echo "Error creating database: " . $con->error; 
// } ;

//更新
// $query = "UPDATE OOXX SET id = 1 WHERE 2";
// // $con->query($query);

// if($con->query($query) === TRUE){
// echo "數據庫創建成功"; 
// } else { 
// echo "Error creating database: " . $con->error; 
// } ;

//查詢資料表輸出
// $query = "SELECT * FROM OOXX WHERE LastName like'%C%'";
// $result = $con->query($query);

// if ($result) {

//     /* fetch object array */
    
//     while ($row = $result->fetch_row()) {
//         print_r ($row);
//     }

//     /* free result set */
//     $result->close();
// }

//查詢資料表輸出
// $query = "SELECT * FROM OOXX WHERE LastName like'%C%' ORDER BY Id desc";
// $query = "SELECT * FROM OOXX WHERE LastName like'%C%' ORDER BY Id desc";
// $result = $con->query($query);

// if ($result) {

//     /* fetch object array */
    
//     while ($row = $result->fetch_row()) {
//         print_r ($row);
//     }

//     /* free result set */
//     $result->close();
// }else{
//     echo '錯誤';
// }

//資料表每行輸出
// if ($result->num_rows > 0) { 
//     // 輸出每行數據 
//     while($row = $result->fetch_assoc()) { 
//     echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " - stat:" . $row["stat"];
//     } 
//     } else { 
//     echo "0 個結果"; 
//     } 


//where 條件查詢
    // $result = mysqli_query($con,"SELECT * FROM sample
    // WHERE stat='2'");
    
    // while($row = mysqli_fetch_array($result))
    // {
    //     echo $row['id'] . " " .$row['name'] . " " . $row['stat'];
    //     echo "<br>";
    // }

//ORDER BY
// $result = mysqli_query($con,"SELECT * FROM Sample ORDER BY stat");

// while($row = mysqli_fetch_array($result))
// {
// 	echo $row['id'];
// 	echo " " . $row['name'];
// 	echo " " . $row['stat'];
// 	echo "<br>";
// }
// /* close connection */
// $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script type="text/javascript">
</script>

<body>
<form action="post.php" method="post">
    <input type="text" name="Id">
    <input type="text" name="FristName">
    <input type="text" name="LastName">
    <input type="submit" name="submit" value="Send" />

</form>
</body>
</html>