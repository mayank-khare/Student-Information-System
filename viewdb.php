<?php
$conn=mysqli_connect("localhost","root","","student");
$tablename="Student";
$sql = "SELECT * FROM student";
if ($result = $conn->query($sql)) {
    $conn->close();  // Close table
    $fields_num = $result->field_count;
    $count_rows = $result->num_rows;

    if ($count_rows == 0) {
        die ("No data found in table: [" . $tablename . "]" );  //quit 
        } 
    } else {
    $conn->close();  // Close table
    die ("Error running SQL:<br>" . $sql );  //quit
}

// Start drawing table
echo "<!DOCTYPE html><html><head><title>{$tablename}</title>";
echo "<style> table, th, td { border: 1px solid black; border-collapse: collapse; }</style></head>";
echo "<body bgcolor=OrangeRed><center><span style='font-size:45px'>Table: <strong>{$tablename}</strong></span><br>";  
echo "<span style='font-size:32px'>({$count_rows} records, {$fields_num} fields)</span><br>";
echo "<br><span style='font-size:32px'><table><tr>";        

// Print table Field Names
while ($finfo = $result->fetch_field()) {
    echo "<td><center><strong>{$finfo->name}</strong></center></td>";
}
echo "</tr>"; // Finished Field Names

/* Loop through records in object array */
while ($row = $result->fetch_row()) {
    echo "<tr>";    // start data row
    for( $i = 0; $i<$fields_num; $i++ ) {
        echo "<td>{$row[$i]}</td>";
    }
    echo "</tr>";   // end data row
}

echo '</table><br><a href="index.php">Go Back</a></center>';  // End table
echo "<center><h2>The Project is Developed by Mayank Khare(53), Bharat Maheshwari(34) ,Manish Bodhke(50)  IT-'C' ,Oriental College of Technology.</h2> <br><h3>This Web Application is Powered by PHP, MySQL, HTML, CSS .<h3></center>";
$result->close();  // Free result set
?>