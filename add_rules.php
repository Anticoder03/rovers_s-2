<?php include('admin_nav.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rules</title>
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
        textarea,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
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
</head>
<body>


    <h1>Add Rules</h1>
    
    <form method="POST" action="">
        <select name="game_id" required>
            <option value="" disabled selected>Select a Game</option>
            <?php
            $connection = new mysqli("localhost", "root", "", "rovers_season2");

            $games_query = "SELECT id, name FROM Games";
            $games_result = $connection->query($games_query);

            while ($game_row = $games_result->fetch_assoc()) {
                echo "<option value='" . $game_row['id'] . "'>" . htmlspecialchars($game_row['name']) . "</option>";
            }

            $connection->close();
            ?>
        </select>
        <textarea name="rules" placeholder="Enter the rules here..." required></textarea>
        <input type="submit" value="Add Rules">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $game_id = intval($_POST['game_id']);
        $rules = $_POST['rules'];

        $connection = new mysqli("localhost", "root", "", "rovers_season2");

        $update_query = "
            UPDATE Games
            SET rules = ?
            WHERE id = ?
        ";

        $stmt = $connection->prepare($update_query);
        $stmt->bind_param('si', $rules, $game_id);

        if ($stmt->execute()) {
            echo "<p>Rules have been updated successfully!</p>";
        } else {
            echo "<p>Error updating rules. Please try again.</p>";
        }

        $stmt->close();
        $connection->close();
    }
    ?>

</body>
</html>
