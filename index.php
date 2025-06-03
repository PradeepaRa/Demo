<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jenkins CI/CD Demo</title>
  <style>
    body {
      background: #f4f6f8;
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 100px;
    }
    h1 {
      color: #2d3748;
      font-size: 3em;
    }
    .box {
      background: #ffffff;
      display: inline-block;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .box:hover {
      transform: scale(1.02);
    }
    .footer {
      margin-top: 50px;
      color: #718096;
      font-size: 0.9em;
    }
  </style>
</head>
<body>
  <div class="box">
    <h1>🚀 Jenkins CI/CD Pipeline - Automation Demo</h1>
    <p>This page was deployed automatically using Jenkins!</p>
    <p>Thank You Everyone for your time! </p>
  </div>
  <div class="footer">
    &copy; <?php echo date("Y"); ?> DevOps Demo • PHP Deployment
  </div>
</body>
</html>
