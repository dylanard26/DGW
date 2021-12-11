<?php
  require "header.php";
 require "includes/dbh.inc.php";
  $sql = "SELECT * FROM recipes";
  $featured = $conn->query($sql);

?>
<div class="col-md-2"></div>

  <div>
    <div class="row">
      <h1 class="text-center">Recipes</h1> <br> <br>
      <?php
        while($product = mysqli_fetch_assoc($featured)):


      ?>
      <div class="text-center" class="col-md-10">
        <h3> <?=$product['title'];?></h3>
        <img class="r-img-size" src="<?=$product['image'];?>"/>
        <h4><p class="step1">1. <?= $product['step 1'];?></p></h4>
        <h4><p class="step2">2. <?= $product['step 2'];?></p></h4>
        <h4><p class="step3">3. <?= $product['step 3'];?></p></h4>
        <h4><p class="step4">4. <?= $product['step 4'];?></p></h4>
        <h4><p class="step5">5. <?= $product['step 5'];?></p></h4>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
 require "footer.php"; 
  ?>