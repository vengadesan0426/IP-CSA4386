<?php
// Include the database connection code here
include 'submit_payment.php';
$sql = "SELECT * FROM pay_table"; // Replace with your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>user_id</th>
                <th>pet_name</th>
                <th>appointment_type</th>
                <th>caretaker</th>
                <th>date_of_appointment</th>
                <th>fees</th>
                <th>payment_type</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["user_id"]."</td>
                <td>".$row["pet_name"]."</td>
                <td>".$row["appointment_type"]."</td>
                <td>".$row["caretaker"]."</td>
                <td>".$row["date_of_appointment"]."</td>
                <td>".$row["fees"]."</td>
                <td>".$row["payment_type"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
