<div style="margin-left: auto;margin-right: auto;">
<h3 > Students List </h3>

<h4><a href="<?php echo APP_URL ?>/student/register">Home</a></h4>

<!-- START tabel with students information -->
<table style="margin-left: auto;margin-right: auto;" border="1" cellpadding="2" cellspacing="2" summary = "Table holds student information" >
<tr bgcolor="#D3D3D3">
    <th> ID  </th>
  <th> First Name </th>
  <th> Last Name   </th>
  <th> Gender  </th>
  <th> Day of Birth  </th>
  <th> Telephone </th>
  <th> Email Address  </th>
  <th> Password </th>
  <th> Program </th>
  <th> Home Address  </th>
  <th> Registration Date  </th>
  <th> Details </th>
</tr>

<?php foreach ($students as $student): ?>
  <tr>
    <td><?php echo $student["id"] ?> </td>
    <td><?php echo $student["firstName"] ?> </td>
    <td><?php echo $student["lastName"] ?> </td>
    <td><?php echo $student["gender"] ?> </td>
    <td><?php echo $student["dayOfBirth"] ?> </td>
    <td><?php echo $student["telephone"] ?> </td>
    <td><?php echo $student["email"] ?> </td>
    <td><?php echo $student["password"] ?> </td>
    <td><?php echo $student["program"] ?> </td>
    <td><?php echo $student["address"] ?> </td>
    <td><?php echo $student["registrationDate"] ?> </td>
    <td><a href=\"details.php?id=<?php echo $student["id"] ?>\">Details</a> </td>
  </tr>
<?php endforeach ?>

<?php
/*#put all selections into a string called result and the result into an Array called row
$result = mysqli_query($conn, "SELECT * FROM student   ORDER BY id ASC");
while ($row = mysqli_fetch_array($result) ) //since we select everything the array has all students info
  {   // as long as we have a row echo rows items
    echo  "<tr>";
    echo  "<td>" .$row["id"] .  "</td>";
    echo  "<td>" .$row["firstName"] .  "</td>";
      echo  "<td>" .$row["lastName"] .  "</td>";
    echo  "<td>" .$row["gender"] .  "</td>";
    echo  "<td>" .$row["dayOfBirth"] .  "</td>";
    echo  "<td>" .$row["telephone"] .  "</td>";
    echo  "<td>" .$row["email"] .  "</td>";
    echo  "<td>" .$row["password"] .  "</td>";
    echo  "<td>" .$row["program"] .  "</td>";
    echo  "<td>" .$row["address"] .  "</td>";
    echo  "<td>" .$row["registrationDate"] .  "</td>";
    //link to details for that student
      echo  "<td>" ."<a href=\"details.php?id=" . $row["id"] . "\">Details</a>" . "</td>";
    echo  "</tr>";
  }*/
  ?>
</table>
<!-- END TABLE -->
<br>
</div>