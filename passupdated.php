<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
      background-image: url('https://media.istockphoto.com/id/1257429592/photo/blood-cells.webp?b=1&s=170667a&w=0&k=20&c=8m1xNzoiKoe9hhtd3iK0BK0_ZwJWEots8usPGiAT8zI='); /* Replace with your actual image URL */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      overflow: hidden;
    }

    header {
      background-color: #cc0000;
      color: #fff;
      padding: 1em;
      text-align: center;
    }

    section {
      margin: auto;
      margin-top: 45px;
      width: 350px;
      height: 24em;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Add transparency to the background */
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 0.5em;
      font-size:larger;
      font-weight: 600px;
    }

    input {
      width: 22em;
      padding: 0.5em;
      margin-bottom: 1em;
      box-sizing: border-box;
    }

    button {
      background-color: #cc0000;
      color: #fff;
      padding: 0.5em 1em;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-left: auto;
      margin-right: auto;
        display:block;
      font-size: 18px;
      margin-top: 20px;
    }

    button:hover {
      background-color: #990000;
    }
    h2{
        text-align: center;
        font-weight: bolder;
    }
    
    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    font-family: 'Times New Roman', Times, serif;
    background-color: #d11616; /* Change the background color as needed */
    color: #fff; /* Change text color as needed */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Optional: add shadow for depth */
  }
  
  .navbar-title {
    font-size: 30px; /* Adjust font size as needed */
  }
  .logout-button {
    padding: 5px 10px; /* Adjust padding as needed */
    border-radius: 5px;/* Change button color as needed */
    text-decoration: none;
    font-weight: bolder; /* Set font weight to bold */
    color:white;
    float:left;
    font-size:20px;
  }
  
  .back-button {
    padding: 5px 10px; /* Adjust padding as needed */
    border-radius: 5px;/* Change button color as needed */
    text-decoration: none;
    font-weight: bold; /* Set font weight to bold */
    color:white;
    float:left;
    font-size:20px;
  }

    
    </style>
</head>
<body>
    
    <nav class="navbar">
        <div>
          <a class="back-button" href="admin.html"> Back</a>
        </div>
        <div class="navbar-title">
          Haemo Search
        </div>
        <div>
          <a class="logout-button" href="frontp.html"> Logout</a>
        </div>
      </nav>
      
      
    
    
      <section>
        <h2>Reset Password</h2>
        <form action="reset.php" method="post">
          <label for="username"> Username:</label>
          <input type="text" id="username" name="username" required>
    
          <label for="Old_Password">Old password:</label>
          <input type="text" id="old_password" name="old_password" required>
    
          <label for="New_password"> New password:</label>
          <input type="new_password" id="new_password" name="new_password" required>

          <?php
    // Display error message if it exists
    if (isset($_GET['error']) && !empty($_GET['error'])) {
        echo '<p style="color:green; text-align:center; font-weight:bold;">' . $_GET['error'] . '</p>';
    }
    ?>
      <!-- <input type="submit" name="change_password" value="Change Password" style="width:200px; margin-left:70px; background-color: rgb(207, 194, 194);"> -->
          <button type="submit"  name="change_password" value="Change Password">Change </button>
         
          
          
    
        </form>
      </section>
</body>
</html>