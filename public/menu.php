<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">


    <div class="menu3-banner-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="banner-txt">
                        <h3>Coffee First. Everything Else Later</h3> 
                        <h5>Artisan Roasts & Vibes Worth Staying For</h5> 
                        <p>
                            Welcome to [Your Café Name], where coffee meets culture. We serve small-batch brews, creative blends, and an atmosphere designed for thinkers, dreamers, and doers. Free Wi-Fi, handcrafted drinks, and curated playlists? Check. Whether you're working remote or catching up with friends, you'll always find your space—and your flavor—here.
                        </p> 
                    </div>
                </div> 
            </div>         
        </div>   
    </div>

<!-- <div class="menu-info-wrapper mt-5">
    <div class="container">
        <div class="row">
            <div class="menu-head-box text-center">
                <h3>Our Menu: A Delight for Every Coffee & Cafe Lover </h3>
                <p>At [Your Coffee Café Name], we believe that every great day starts with the perfect cup of coffee. Our carefully curated menu offers something for everyone—from classic espresso drinks to refreshing iced beverages and a variety of mouthwatering pastries. We take pride in using the finest ingredients and locally sourced products to create memorable flavors in every sip and bite.</p>
            </div>
        </div>
    </div>
</div> -->


   <div class="menu3-wrapper section-entry">
       <div class="container">
          <div class="row">

<div class="filters mb-5">
<button class="filter-btn active" onclick="filterItems('all')">All</button>
<button class="filter-btn" onclick="filterItems('hot')">Hot</button>
<button class="filter-btn" onclick="filterItems('cold')">Cold</button>
<button class="filter-btn" onclick="filterItems('popular')">Popular</button>
</div>


<div class="grid" id="menuGrid">
<div class="menu-card" data-category="hot popular">
<img src="img/coffee-1.jpg" alt="Cappuccino">
<div class="menu-info">
<h4>Cappuccino</h4>
<p>Classic espresso with steamed milk.</p>
<div class="price">$3.99</div>
</div>
</div>
<div class="menu-card" data-category="cold vegan">
<img src="img/coffee-2.jpg" alt="Iced Latte">
<div class="menu-info">
<h4>Iced Latte</h4>
<p>Chilled espresso with plant-based milk.</p>
<div class="price">$4.29</div>
</div>
</div>
<div class="menu-card" data-category="hot">
<img src="img/coffee-3.jpg" alt="Americano">
<div class="menu-info">
<h4>Americano</h4>
<p>Espresso diluted with hot water.</p>
<div class="price">$2.99</div>
</div>
</div>
<div class="menu-card" data-category="cold popular vegan">
<img src="img/coffee-4.jpg" alt="Cold Brew">
<div class="menu-info">
<h4>Cold Brew</h4>
<p>Slow-steeped for 12 hours.</p>
<div class="price">$4.50</div>
</div>
</div>
<div class="menu-card" data-category="hot popular">
<img src="img/dessert-1.jpg" alt="Cappuccino">
<div class="menu-info">
<h4>Cappuccino</h4>
<p>Classic espresso with steamed milk.</p>
<div class="price">$3.99</div>
</div>
</div>
<div class="menu-card" data-category="hot popular">
<img src="img/dessert-2.jpg" alt="Cappuccino">
<div class="menu-info">
<h4>Cappuccino</h4>
<p>Classic espresso with steamed milk.</p>
<div class="price">$3.99</div>
</div>
</div>
<div class="menu-card" data-category="hot popular">
<img src="img/dessert-3.jpg" alt="Cappuccino">
<div class="menu-info">
<h4>Cappuccino</h4>
<p>Classic espresso with steamed milk.</p>
<div class="price">$3.99</div>
</div>
</div>
<div class="menu-card" data-category="hot popular">
<img src="img/dessert-4.jpg" alt="Cappuccino">
<div class="menu-info">
<h4>Cappuccino</h4>
<p>Classic espresso with steamed milk.</p>
<div class="price">$3.99</div>
</div>
</div>
</div>
          </div>
       </div>
   </div>






        </div>
</main>



<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>