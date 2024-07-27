<!DOCTYPE html>
<html>
<head>
<title>RED STONE SHOP</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/main.css" >
<meta name="viewport" content="width=device=width,initial-scale=1,user-scaleable=o">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

</script>

<script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-defaults navbar-fixed-top" id="navbar">

  <div class="container">
  	<a href="/tutorial/index.php" class="navbar-brand" id="text"> Red Stone Shop</a>
  	<ul class="nav navbar-nav">
      <!---Drop Down Menu--->

     <li class="dropdown">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>
   <ul  class="dropdown-menu" role="menu">
   <li><a href="#">Shirts</a></li>
   <li><a href="#">Pants</a></li>
   <li><a href="#">Shoes</a></li>
   <li><a href="#">Accessories</a></li>
                     </ul>

                 </li>
               </ul>
  </div>
  </nav>
  <div id="background-image">
    <div id="image1"></div>
    <div id="image2"></div>

  </div>
  <!-- Remove the spaces and center the products-->
  <div class="col-md-2"></div>

  <!--main content of featured products-->

  <div class="col-md-8" >

    <h2 class=" text-center">Featured Products</h2>
    <div class="row" style="display:flex; flex-wrap:wrap;">

        <div class="col-md-3">
          <h4 class="text-center">Levis jean</h4>
          <img src="images/Levis jean.jpeg" alt="Levis jean" id="images"/>
          <p class="list-price text-danger">List Price: <s>$24.99</s></p>
          <p class="price">Our Price:$19.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</buttom>

        </div>
        <div class="col-md-3">
          <h4 class="text-center">Wallet</h4>
          <img src="images/wallet.jpeg" alt="wallet" id="images"/>
          <p class="list-price text-danger">List Price: <s>$10.99</s></p>

          <p class="price">Our Price:$7.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</buttom>
        </div>

        <div class="col-md-3">
          <h4 class="text-center">Polo T-shirt</h4>
          <img src="images/polo shirt.jpeg" alt="polo shirt" id="images"/>
          <p class="list-price text-danger">List Price: <s>$20.99</s></p>
          <p class="price">Our Price:$15.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</buttom>
        </div>

        <div class="col-md-3">

          <h4 class="text-center">Polo-Ralph</h4>
          <img src="images/Polo-ralph.jpg" alt="Polo-ralph" id="images"/>
          <p class="list-price text-danger">List Price: <s>$8.99</s></p>

          <p class="price">Our Price:$6.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</buttom>
        </div>

        <div class="col-md-3">
          <h4 class="text-center">Men Bag</h4>
          <img src="images/Men Bag.jpg" alt="Men Bag" id="images"/>
          <p class="list-price text-danger">List Price: <s>$12.99</s></p>

          <p class="price">Our Price:$10.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</buttom>
        </div>

        <div class="col-md-3">
          <h4 class="text-center">Handbag</h4>
          <img src="images/Handbag.jpg" alt="Handbag" id="images"/>
          <p class="list-price text-danger">List Price: <s>$15.99</s></p>

          <p class="price">Our Price:$12.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</buttom>

        </div>

        <div class="col-md-3">
          <h4 class="text=center">Nike Air</h4>
          <img src="images/Nike Air.webp" alt="Nike Air" id="images"/>
          <p class="list-price text-danger">List Price: <s>$30.99</s></p>

          <p class="price">Our Price:$26.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</buttom>
        </div>

        <div class="col-md-3">
          <h4 class="text-center">Men belt</h4>
          <img src="images/Men belt.jpg" alt="Men belt" id="images"/>
          <p class="list-price text-danger">List Price: <s>$10.99</s></p>

          <p class="price">Our Price:$7.99</p>
          <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</buttom>

        </div>

      <div class="col-md-3">
        <h4 class="text-center">Classic Watch</h4>
        <img src="images/Classic Watch.jpg" alt="Classic Watch" id="images"/>
        <p class="list-price text-danger">List Price: <s>$19.99</s></p>

        <p class="price">Our Price:$15.99</p>
        <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-9">Details</buttom>

      </div>

      <div class="col-md-3">
        <h4 class="text-center">Shirt</h4>
        <img src="images/Shirt.jpg" alt="Shirt" id="images"/>
        <p class="list-price text-danger">List Price: <s>$13.99</s></p>

        <p class="price">Our Price:$10.99</p>
        <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-10">Details</buttom>

      </div>

      <div class="col-md-3">
        <h4 class="text-center">Shirt Cotton</h4>
        <img src="images/Shirt Cotton.jpg" alt="Shirt Cotton" id="images"/>
        <p class="list-price text-danger">List Price: <s>$13.99</s></p>

        <p class="price">Our Price:$10.99</p>
        <buttom type="buttom" class="btn btn-success" data-toggle="modal" data-target="#details-11">Details</buttom>

      </div>

  </div>

  <footer class="text-center" id="footer">&copy:copyright 2024-2025 Red Store Shop</footer>
  </div>

  </div>

  <!--details-modal-->

    <?php include'details-modal-Levis jean.php';
          include'details-modal-wallet.php';
            include'details-modal-polo shirt.php';
            include'details-modal-Polo ralph.php';
            include'details-modal-Men Bag.php';
            include'details-modal-Handbag.php';
            include'details-modal-Nike Air.php';
            include'details-modal-Men belt.php';
            include'details-modal-Classic Watch.php';
            include'details-modal-Shirt.php';
            include'details-modal-Shirt Cotton.php';
      ?>
      <!--end of details-modal-->


  </body>

  </html>
