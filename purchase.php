<?php
    include "header.php"
?>
     <section class="contact py-5">
      <div class="container">
          <h2 class="section-heading">Purchase Form</h2>
          <form class="col-lg-6 offset-lg-3">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter name">
                </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter Password">
              </div>
              <div class="form-group">
                  <label for="Card#">Card Number</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter Card Number">
              </div> <div class="form-group">
                  <label for="exp-date">Card Experation Date</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter Card Experation Date">
              </div> <div class="form-group">
                  <label for="security#">Card Security Number</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter Card Security Number">
              </div>
              </div> <div class="form-group">
                  <label for="Biliing-adrs">Billing Adress</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter Billing Adress">
              </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Express Shipping</label>
              </div>
              <div class="text-center">
                  <button class="btn btn-lg btn-color cont-btn">If you click this your pet Monkey will be slaughtered.</button>
                <h5>Please don't put actual information</h5>
              </div>
          </form>
      </div>
  </section>
<?php
    include "footer.php"
?>