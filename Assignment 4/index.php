<?php
$backgroundImage = "./Image/img1.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('<?php echo $backgroundImage ?>');
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
    }

    .weather-container {
      max-width: 400px;
      margin: auto;
    }

    .weather-heading {
      font-size: 2em;
      margin-bottom: 20px;
    }

    .search-form {
      margin-top: 20px;
    }

    .form-label,
    .form-control {
      color: #fff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
  <title>Assignment-4</title>
</head>

<body>
  <div class="weather-container">
    <h1 class="weather-heading">Weather Forecast<br>For the Next 5 Days</h1>

    <div class="search-form">
      <form action="weather.php" method="GET">
        <div class="form-group">
          <label for="city" class="form-label">Enter Your Location</label>
          <input type="text" class="form-control" id="city" placeholder="Enter Any City/Country" name="city" required>
        </div>

        <button type="Enter" class="btn btn-primary">Find Forecast</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
