<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members by Team</title>
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
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
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
        table {
            width: 60%;
            margin: 20px auto;
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
</head>
<body>

    <?php include('nav.php'); ?>

    <h1>Members by Team</h1>
    
    <form method="GET" action="">
        <select name="team_id" required>
            <option value="" disabled selected>Select a Team</option>
            <?php
            $connection = new mysqli("localhost", "root", "", "rovers_season2");

            $teams_query = "SELECT id, name FROM Teams";
            $teams_result = $connection->query($teams_query);

            while ($team_row = $teams_result->fetch_assoc()) {
                echo "<option value='" . $team_row['id'] . "'>" . htmlspecialchars($team_row['name']) . "</option>";
            }

            $connection->close();
            ?>
        </select>
        <input type="submit" value="Show Members">
    </form>

    <?php
    if (isset($_GET['team_id']) && !empty($_GET['team_id'])) {
        $team_id = intval($_GET['team_id']);

        $connection = new mysqli("localhost", "root", "", "rovers_season2");

        $members_query = "
            SELECT name FROM Members
            WHERE team_id = $team_id
            ORDER BY name
        ";
        $members_result = $connection->query($members_query);

        if ($members_result->num_rows > 0) {
         
            echo "<table>";
            echo "<tr><th>Member Name</th></tr>";

            while ($member_row = $members_result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($member_row['name']) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No members found for this team.</p>";
        }

        $connection->close();
    }
    ?>

</body>
</html>
