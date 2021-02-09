<?php

include("connection.php");

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if( mysqli_num_rows($result) > 0){
  //we have data
  //output data
  echo "<table><tr><th>ID</th><th>Username</th><th>EMAIL</th></tr>";

  while( $row = mysqli_fetch_assoc($result) ){
    echo "<br>". "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["email"] ."</td></tr>";
  }
  echo "</table>";
}else{
  echo "Whoops! no results";
}

mysqli_close($conn);
?>
