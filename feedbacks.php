<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group 5 Team Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            color: #333;
            overflow-x: hidden;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .message {
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 1150px;
        }
        .message h2{
          text-align: center;
        }


        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
<div class="container">

        <div class="message">
          <h2>FEEDBACKS</h2>
          <div class="texts">
            <h4>Name:<?php echo $_POST["name"]; ?></h4>
            <h4>Gender: <?php echo $_POST["gender"]; ?></h4>
            <h4>Age: <?php echo $_POST["age"]; ?> </h4>
            <p> <?php echo $_POST["feedback"]; ?> </p>
          </div>
       </div>
</div>


</body>
</html>
