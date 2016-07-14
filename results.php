<?php
require "connection/connect.php";
require "includes/header.php";

$sql = "SELECT time, name, email, grade FROM grades ORDER BY time DESC";
$result = $conn->query($sql);
?>

<div class="container">
  <h1>Service Tech Quiz Grades</h1>
  <p>These are the grades of potential service tech canidates. Any grades below an 80% will be red. You may click the email address to contact canidate.</p>

  <!-- Table -->
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Time</th>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Grade</th>
	      </tr>
	    </thead>
	    <tbody>

	        <?php

	        	if ($result->num_rows > 0) {
    				// output data of each row
				    while($row = $result->fetch_assoc()) {
                  if ($row['grade'] <= 80) {
                    $color = "red";
                  }  else {
                    $color = "green";
                  }
				          echo "<tr><td>" . $row["time"] . "</td><td>" . $row["name"] . '</td><td><a href="mailto:'.$row["email"].'?subject=Service Tech Position">' . $row["email"] . '</a></td><td style="color:'.$color.'">' . $row["grade"] . "%</td>";
				          }
				    } else {
					         echo "0 results";
				    }
	        ?>

	    </tbody>
	  </table>
	  <!-- End Table -->

</div>
