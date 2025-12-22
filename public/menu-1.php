<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

    <div class="menu1-banner-box">
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


    <!-- MENU PAGE -->
<section class="menu-section section-entry">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Delicious Menu</h2>
            <p class="section-subtitle">Freshly prepared dishes & beverages to satisfy your cravings</p>
        </div>

        <!-- 1. Starters / Appetizers -->
        <div class="menu-category anim-fade-up">
            <h3 class="category-title">Our Special Coffee</h3>
            <p>Discover the rich flavors and unique blends that make our special coffee menu unforgettable. From the deep and bold taste of classic Filter Coffee, to the smooth, refreshing delight of Cold Coffee, and the creamy indulgence of a perfectly prepared Cappuccino — each cup is crafted with care and creativity. Whether you're a coffee connoisseur or just exploring, these signature selections are brewed to impress and priced to please.</p>
            <div class="row g-4 mt-3">
                <div class="col-md-4 anim-fade-up anim-delay-1">
                    <div class="menu-card menu-item item-1">
                        <h4>Filter Coffee</h4>
                        <p>Grilled bread with fresh tomatoes, basil, and olive oil</p>
                        <span class="price">$5.99</span>
                    </div>
                </div>
                <div class="col-md-4 anim-fade-up anim-delay-2">
                    <div class="menu-card menu-item item-2">
                        <h4>Cold Coffee</h4>
                        <p>Toasted bread with garlic butter and herbs</p>
                        <span class="price">$4.50</span>
                    </div>
                </div>
                <div class="col-md-4 anim-fade-up anim-delay-3">
                    <div class="menu-card menu-item item-3">
                        <h4>Cappuccino</h4>
                        <p>Button mushrooms stuffed with cheese & herbs</p>
                        <span class="price">$6.25</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Main Courses / Specials -->
        <div class="menu-category anim-fade-up mt-5">
            <h3 class="category-title">Main Courses & Specials</h3>
            <p>Satisfy your cravings with our handpicked selection of main courses and daily specials. From the soft, buttery richness of our Croissants, to indulgent Cookies & Brownies, and the sweet comfort of Classic Pancakes — every dish is thoughtfully made to complement your favorite brews.</p>
            <div class="row g-4 mt-3">
                <div class="col-md-4 anim-fade-up anim-delay-1">
                    <div class="menu-card menu-item item-4">
                        <h4>Cookies & Brownies</h4>
                        <p>Served with garlic mashed potatoes & seasonal veggies</p>
                        <span class="price">$12.99</span>
                    </div>
                </div>
                <div class="col-md-4 anim-fade-up anim-delay-2">
                    <div class="menu-card menu-item item-5">
                        <h4>Croissant</h4>
                        <p>Creamy fettuccine with mushrooms & parmesan cheese</p>
                        <span class="price">$10.50</span>
                    </div>
                </div>
                <div class="col-md-4 anim-fade-up anim-delay-3">
                    <div class="menu-card menu-item item-6">
                        <h4>Classic Pancakes</h4>
                        <p>Grilled veggie patty with fresh greens & sauce</p>
                        <span class="price">$9.75</span>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</section>


  <div class="service-reviews section-entry">
            <div class="container">
               <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-container">
                            <div class="about-us">
                            <img src="img/service-img.jpg" alt="Barista Illustration" class="img-fluid br15">
                            <div class="visit-info">
                            
                            </div>
                            </div>


                            <div class="reviews">
                            <h2>Customer Reviews</h2>
                            <div class="review">
                            <strong>Emma J.</strong> <span class="stars">★★★★★</span>
                            <p>Amazing coffee and pastries! The cappuccino is perfect every time, and the croissants are to die for.</p>
                            </div>
                            <div class="review">
                            <strong>Mark W.</strong> <span class="stars">★★★★★</span>
                            <p>Fantastic place to relax and enjoy a great cup of coffee. Excellent service and cozy atmosphere!</p>
                            </div>
                            <a href="#" class="order-button">Order Online</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  




    </div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>