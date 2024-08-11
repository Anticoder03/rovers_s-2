<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        body {
            padding-top: 60px; /* Add padding to avoid content hiding behind the navbar */
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="add_member.php">Add Member</a>
    <a href="add_points.php">Add Points</a>
    <a href="add_rules.php">Add Rules</a>
</div>
        
</body>
</html>
