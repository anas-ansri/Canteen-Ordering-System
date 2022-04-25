<?php
include_once 'config/Database.php';
include_once 'class/Customer.php';
include_once 'class/Food.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);
$food = new Food($db);


if (!$customer->loggedIn()) {
	header("Location: login.php");
}

include('inc/header.php');
?>
<title>Welcome to VIIT Canteen </title>
<link rel="stylesheet" type="text/css" href="css/foods.css">

<?php include('inc/container.php'); ?>

<body>
	<div class="content">
		<div class="container-fluid">
			<div class='row'>
				<?php
				$result = $food->itemsList();
				$count = 0;
				while ($item = $result->fetch_assoc()) {
					if ($count == 0) {
						echo "<div class='row'>";
					}
				?>
					<div class="col-md-3">
						<form method="post" action="cart.php?action=add&food_id=<?php echo $item["food_id"]; ?>">
							<div class="mypanel" align="center" ;>
								<img src="images/<?php echo $item["images"]; ?>" width="400" height="500" class="img-responsive">
								<h4 class="text-dark"><?php echo $item["name"]; ?></h4>
								<h5 class="text-info"><?php echo $item["description"]; ?></h5>
								<h5 class="text-danger">₹ <?php echo $item["price"]; ?>/-</h5>
								<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
								<input type="hidden" name="item_name" value="<?php echo $item["name"]; ?>">
								<input type="hidden" name="item_price" value="<?php echo $item["price"]; ?>">
								<input type="hidden" name="item_id" value="<?php echo $item["food_id"]; ?>">
								<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
							</div>
						</form>
					</div>

				<?php
					$count++;
					if ($count == 4) {
						echo "</div>";
						$count = 0;
					}
				}
				?>
			</div>

		</div>
</body>



<?php include('inc/footer.php'); ?>