<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "cs641avsx_final") or die(mysql_error());
    if(isset($title)) {
    $sql = "SELECT * FROM cs641avsx_final.gallery WHERE id=" . $title;
    $result = mysqli_query($conn, "$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>"
    . mysql_error());
    $row = mysqli_fetch_array($result);
    header("Content-type: " . $row["type"]);
    echo $row["bin_data"];
    }
    mysqli_close($conn);
?>