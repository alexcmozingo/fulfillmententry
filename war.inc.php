<?php
 $conn = mysqli_connect("localhost", "root", "", "company");
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 $sql = "SELECT Name, Value, Quantity FROM login";

 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
 // output data of each row

 while($row = $result->fetch_assoc()) {
 echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Value"] . "</td><td>"
 . $row["Quantity"]. "</td></tr>";
 }
 echo "</table>";
 } else { echo "0 results"; }
 $conn->close();