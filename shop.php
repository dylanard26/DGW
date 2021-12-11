<?php
  require "header.php";
 require "includes/dbh.inc.php";
  $sql = "SELECT * FROM products";
  $featured = $conn->query($sql);

?>
<div class="col-md-2"></div>

  <div>
    <div class="row">
      <h2 class="text-center">All Products</h2> <br> <br>
      <?php
        while($product = mysqli_fetch_assoc($featured)):


      ?>
      <div class="col-md-4">
        <h4> <?=$product['title'];?></h4>
        <img class="img-size" src="<?=$product['image'];?>"/>
        <p class="lprice">$ <?= $product['price'];?></p>
        <a href="details.php">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
        </a>
        <a href="purchase.php">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Purchase</button>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
 require "footer.php"; 
  ?>