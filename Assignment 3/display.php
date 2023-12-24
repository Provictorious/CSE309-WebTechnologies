<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Details</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url("./ABCD.jpg")
            background-size: cover;
            text-align: center;
            color: black;
        }

        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.747);
            border-radius: 5%;
            border: 5px solid rgba(130, 77, 179, 0.685);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Form Details</h2>

        <?php
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "cont";

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            echo "Server error: " . mysqli_connect_error();
            die();
        }

        $sql = "SELECT * FROM form_detail";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Contact Number</th><th>Email</th><th>Message</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['cno'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }

        mysqli_close($conn);
        ?>

    </div>
</body>
</html>
