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
    .game {
        background-color: #fff;
        padding: 20px;
        margin: 20px auto;
        width: 70%;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    h2 {
        color: #4CAF50;
        margin-bottom: 10px;
        font-size: 24px;
    }
    p {
        color: #666;
        line-height: 1.6;
        font-size: 16px;
    }
    .game:hover {
        background-color: #f9f9f9;
    }
</style>

<h1>Games and Rules</h1>
<?php
$connection = new mysqli("localhost", "root", "", "rovers_season2");

$query = "SELECT * FROM Games";
$result = $connection->query($query);

while($row = $result->fetch_assoc()) {
    echo "<div class='game'>";
    echo "<h2>" . $row['name'] . "</h2>";
    echo "<p>" . $row['rules'] . "</p>";
    echo "</div>";
}

$connection->close();
?>
