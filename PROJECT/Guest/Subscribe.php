<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Plans</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .subscription-container {
      display: flex;
      gap: 20px;
    }

    .subscription-plan {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      width: 300px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .subscription-plan h2 {
      margin-bottom: 10px;
    }

    .subscription-plan .duration {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .subscription-plan .price {
      font-size: 24px;
      font-weight: bold;
    }

    .subscription-plan a {
      display: block;
      margin: 20px 0;
      padding: 10px 0;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .subscription-plan a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="subscription-container">
  <div class="subscription-plan">
    <h2>3-Month Plan</h2>
    <div class="duration">Enjoy 3 months of access</div>
    <div class="price">$300</div>
    <a href="Payment.php?did=<?php echo $_GET['did'] ?>&plan=3&price=300">Subscribe</a>
  </div>
  <div class="subscription-plan">
    <h2>6-Month Plan</h2>
    <div class="duration">Get 6 months of access</div>
    <div class="price">$500</div>
    <a href="Payment.php?did=<?php echo $_GET['did'] ?>&plan=6&price=500">Subscribe</a>
  </div>
  <div class="subscription-plan">
    <h2>1-Year Plan</h2>
    <div class="duration">Access for a full year</div>
    <div class="price">$1000</div>
    <a href="Payment.php?did=<?php echo $_GET['did'] ?>&plan=12&price=1000">Subscribe</a>
  </div>
</div>

</body>
</html>