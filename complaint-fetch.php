<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "complainttemp";
  // CREATE CONNECTION
  $conn = new mysqli($id,
    $category, $services, $databasename); 
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  // SQL QUERY
  $query = "SELECT * FROM `complainttemp`;";
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "id: ".
                $row["id"]. " - category: " .
                $row["category"]. " | services: " . 
                $row["services"]. " | discription: " . 
                $row["discription"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
   $conn->close();
?>