<?php 

//include 
include 'scripts/db_connection.php';

$sql = "SELECT * from users;";
$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){

    // array variable
    while($row = mysqli_fetch_assoc($result)){

        echo "
        
        <div class='row_item'>
            <p><strong> Name: </strong> " . $row['name'] . " </p>
            <p><strong> Age: </strong> " . $row['age'] . " </p>
            <p><strong> Occupation: </strong> ". $row['occupation'] . " </p>

        </div>

        ";

    }

} else {
    echo "<h1>no data found in database</h1>";
}
    
?>