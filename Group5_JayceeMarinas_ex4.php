<html lang="en">
<head>
  <title>Login Form</title>
  <style>
  * {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Arial', sans-serif;
}

body {
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background-color: #f3f4f6;
}

.login-container {
background-color: #fff;
padding: 30px;
border-radius: 10px;
box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
width: 350px;
}

.login-form h2 {
text-align: center;
margin-bottom: 20px;
color: #333;
}

.input-group {
margin-bottom: 15px;
}

.input-group label {
display: block;
font-size: 14px;
color: #555;
margin-bottom: 5px;
}

.input-group input {
width: 100%;
padding: 10px;
border: 1px solid #ddd;
border-radius: 5px;
font-size: 14px;
}

button {
width: 100%;
padding: 10px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
font-size: 16px;
}

button:hover {
background-color: #45a049;
}

  </style>
</head>
<body>
  <div class="login-container">
    <form action="ex2.php" class="login-form" method="GET">
      <h2>Log in</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="section">Section</label>
        <input id="password" name="section" required>
      </div>
      <button type="submit">Log In</button>
    </form>
  </div>
</body>
</html>
