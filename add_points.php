<?php include('admin_nav.php'); ?>
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
    form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    select, 
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    p {
        text-align: center;
        font-size: 16px;
        color: #333;
        margin-top: 20px;
    }
</style>

<h1>Add Points to Team</h1>
<form method="POST">
    <select name="team_id" required>
        <?php
        $connection = new mysqli("localhost", "root", "", "rovers_season2");
        $query = "SELECT * FROM Teams";
        $result = $connection->query($query);

        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }

        $connection->close();
        ?>
    </select>
    <input type="number" name="points" placeholder="Points" required>
    <input type="submit" name="add_points" value="Add Points">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_points'])){
    $connection = new mysqli("localhost", "root", "", "rovers_season2");
    $team_id = $_POST['team_id'];
    $points = $_POST['points'];
    
    $query = "UPDATE Teams SET points = points + $points WHERE id = $team_id";
    if($connection->query($query) === TRUE) {
        echo "<p style='text-align: center; color: green;'>Points added successfully!</p>";
    } else {
        echo "<p style='text-align: center; color: red;'>Error adding points: " . $connection->error . "</p>";
    }
    $connection->close();
}
?>
