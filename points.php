<?php include('nav.php'); ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }
    table {
        width: 60%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 15px;
        text-align: center;
        font-size: 18px;
    }
    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
</style>

</style>
<h1>Points Table</h1>
<table>
    <tr>
        <th>Team Name</th>
        <th>Points</th>
    </tr>
    <?php
    $connection = new mysqli("localhost", "root", "", "rovers_season2");

    $query = "SELECT * FROM Teams ORDER BY points DESC LIMIT 10";
    $result = $connection->query($query);

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['points'] . "</td>";
        echo "</tr>";
    }

    $connection->close();
    ?>
</table>
