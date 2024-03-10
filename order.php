<?php
require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>request Car Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>request Car Form</h2>
    <form action="controller.php" method="POST">
      <div class="form-group">
        <label for="Customer_Name">Full Name:</label>
        <input type="text" id="Customer_Name" name="Customer_Name"value="" required onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="Phone">Phone Number:</label>
        <input type="tex" id="Phone" name="Phone" required>
      </div>
      <div class="form-group">
        <label for="Pickup_Location">Pickup Location:</label>
        <input type="text" id="Pickup_Location" name="Pickup_Location"value="" required onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="Destination">Destination:</label>
        <input type="text" id="Destination" name="Destination" value="" required onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="Ride_Price">Price charged:</label>
        <input type="text" id="Ride_Price" name="Ride_Price" min="0" required>
      </div>
      <button type="submit">request Car</button>
    </form>
    <script>
document.getElementById("inputText")
.addEventListener("onkeyup", 
function() {
  var input = this.value;
  this.value = input.charAt(0).toUpperCase() + input.slice(1);
});
</script>

  </div>
</body>
</html>