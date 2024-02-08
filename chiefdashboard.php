<?php
    require "header.php";
?>


<body>

  <header>
    <!-- Link to view registered items -->
    <a href="#" id="viewRegisteredItemsLink" onclick="showItems('registered')">View Registered Items</a>
    <!-- Link to view bought items -->
    <a href="#" id="viewBoughtItemsLink" onclick="showItems('bought')">View Bought Items</a>
    <!-- Link to logout -->
    <a href="logout.php" id="logout">Logout</a>

  </header>

  <main>
    <!-- Items Container -->
    <div class="items-container" id="itemsContainer">
      <!-- Items will be displayed here dynamically -->
    </div>
  </main>

  <script>
    // Sample data for registered and bought items
    const registeredItems = ['Item 1', 'Item 2', 'Item 3'];
    const boughtItems = ['Bought Item 1', 'Bought Item 2', 'Bought Item 3'];

    // Initial load: Show registered items
    showItems('registered');

    function showItems(type) {
      const itemsContainer = document.getElementById('itemsContainer');
      const viewRegisteredItemsLink = document.getElementById('viewRegisteredItemsLink');
      const viewBoughtItemsLink = document.getElementById('viewBoughtItemsLink');

      // Clear previous items
      itemsContainer.innerHTML = '';

      // Update active link style
      if (type === 'registered') {
        viewRegisteredItemsLink.style.fontWeight = 'bold';
        viewBoughtItemsLink.style.fontWeight = 'normal';
        displayItems(registeredItems);
      } else {
        viewBoughtItemsLink.style.fontWeight = 'bold';
        viewRegisteredItemsLink.style.fontWeight = 'normal';
        displayItems(boughtItems);
      }
    }

    function displayItems(items) {
      const itemsContainer = document.getElementById('itemsContainer');

      // Display each item
      items.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.classList.add('item');
        itemElement.textContent = item;
        itemsContainer.appendChild(itemElement);
      });
    }

    $(documen. ready(){

    });


   
  </script>

</body>
</html>
