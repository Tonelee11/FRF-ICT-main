<body>
  <header>
    <h4><?=$_SESSION['chief']?></h4>
  <!-- Link to view registered items -->
      <a href="chiefdashboard.php" id="viewRegisteredItemsLink" onclick="showItems('registered')">View Registered Items</a>
      <!-- Link to view bought items -->
      <a href="boughtitems.php" id="viewBoughtItemsLink" onclick="showItems('bought')">View Bought Items</a>
      <!-- link to register items -->
      <a href="registeritems.php" id="registerItemsLink" onclick="showItems('bought')">Register Bought Items</a>
      <!-- Link to update -->
      <a href="registeritems.php" id="update">Update Items</a>
       <!-- Link to logout -->
       <a href="logout.php" id="logout">Logout</a>
       <!-- Link to change password -->
       <a href="changePassword.php" id="logout">Change Password</a>
  </header>