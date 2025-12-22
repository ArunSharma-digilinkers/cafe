<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

    <div class="home3-banner-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Awaken Your Day at BrewCoffee Café</h2>
                    <p>
                        At BrewCoffee Café, every cup is crafted with care—from farm to filter. We serve more than just coffee; we create a cozy space where people come to connect, unwind, and feel at home. Whether you're here for a quick espresso or a long conversation, your perfect brew awaits.
                    </p>

                </div>
            </div>
        </div>
    </div>


    <div class="reservation-form-wrapper">
        <div class="continer">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="reservation-form">
                        <h2>PLEASE BOOK A TABLE</h2>
                        <form>
                            <div class="form-row">
                                <input type="text" placeholder="Enter Your Name" required>
                                <input type="email" placeholder="Email Address" required>
                                <input type="tel" placeholder="Telephone Number" required>
                            </div>
                            <div class="form-row">
                                <select required>
                                    <option value="" disabled selected>Number of Guests</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6+</option>
                                </select>
                                <input type="date" placeholder="Date (mm-dd-yyyy)" required>
                                <select required>
                                    <option value="" disabled selected>Time</option>
                                    <option value="12:00">12:00 PM</option>
                                    <option value="12:30">12:30 PM</option>
                                    <option value="13:00">1:00 PM</option>
                                    <option value="13:30">1:30 PM</option>
                                    <!-- More time options can be added here -->
                                </select>
                            </div>

                            <button type="submit" class="hm-form-btn">RESERVATION</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="home3-hero-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="hero-section-box">
                        <h3 class="mb-3">BrewCoffee Café – Where Every Sip Feels Like Home</h3>
                        <h5>Handcrafted coffee, warm vibes, and community in every cup. Join us for your perfect brew.</h5>
                        <p>
                            At BrewCoffee Café, we believe great coffee sparks great moments. Whether you're starting your day, catching up with friends, or seeking a peaceful corner to unwind, our doors are open. With ethically sourced beans, passionate baristas, and cozy surroundings, we’re more than a café—we're your neighborhood coffee haven.
                        </p> 
                        
                        <div class="icon-content">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="ab-value-wrap">
                                        <div class="ab-icon-wrap">
                                            <img src="img/ab-icons-1.png" class="img-fluid">
                                        </div>
                                        <div class="ab-txt-wrap">
                                            <h5>Qualified Chef</h5>
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="ab-value-wrap">
                                        <div class="ab-icon-wrap">
                                            <img src="img/food-icon.png" class="img-fluid">
                                        </div>
                                        <div class="ab-txt-wrap">
                                            <h5>Super Quality Food</h5>
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                 <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="img/home3-hero-img.png" class="img-fluid br60">
                </div>
            </div>
        </div>
    </div>


    <div class="home3-info-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="img/home3-info-img.png" class="img-fluid br60">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <h3>The Heart Behind the Beans</h3>
                    <p>
                        Welcome to BrewCoffee Cafe, where every cup tells a story. We’re more than just a coffee shop—we’re a cozy corner for conversation, creativity, and community. From carefully sourced beans to handcrafted brews, our mission is to serve quality coffee with heart.Come sip, relax, and stay awhile.
                    </p>

                    <section class="features-section">
                        <div class="feature-box">
                            <div class="number">1</div>
                            <div>
                            <h3>Menu Highlights</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="number">2</div>
                            <div>
                            <h3>Online Ordering</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.
                            </p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="number">3</div>
                            <div>
                            <h3>Online Tour Site</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.
                            </p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="number">4</div>
                            <div>
                            <h3>Customer Reviews</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.
                            </p>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>


    <div class="our-mission-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 offset-md-1 col-sm-12">
                    <div class="mission-txt-box mb-4">
                        <h2>Our Mission</h2>
                        <p>
                            To craft exceptional coffee experiences that awaken the senses and inspire connection. We are committed to sourcing ethically grown beans, roasting them to perfection, and serving each cup with warmth and purpose. Whether you're here for a quick espresso or a quiet moment with a book, our mission is to make every visit feel like a coffee ritual worth savoring.
                        </p>
                    </div>
                    <div class="mission-txt-box text-end">
                        <h2>Our Vision</h2>
                        <p>
                            To become a beloved community hub where quality coffee and meaningful moments come together. We envision a world where every cup we serve supports sustainability, empowers farmers, and builds local connection. Our goal is to spread the love of great coffee—one cup, one conversation, one community at a time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="timing-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="timing-wrap">
                            <h3>Opening Hours</h3>
                            <p>
                                A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar opens in the center..
                            </p>
                            <table class="opening-hours-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6>Sunday to Tuesday:</h6>
                                        </td>
                                        <td>10:00 - 09:00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6>Wednesday to Thursday:</h6>
                                        </td>
                                        <td>11:30 - 10:30</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6>Friday &amp; Saturday:</h6>
                                        </td>
                                        <td>10:30 - 12:00</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p data-aos-duration="1000" data-aos="fade-up" class="aos-init aos-animate">
                                " On holidays and special days, we will open with a special offer "
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="chef-special-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mrb40">
                        <h3 class="text-center mb-5">Chef's Special</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="chef-special-box">
                            <img src="img/chef-1.jpg" class="img-fluid" alt="Chef's Special">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 content-center">
                        <div class="chef-special-description">
                            <h5>Caramel Macchiato Delight</h5>
                            <p>
                                This week's feature is our signature Caramel Macchiato—a rich blend of smooth espresso layered with velvety steamed milk, topped with a generous swirl of caramel drizzle. It's the perfect mix of bold and sweet, handcrafted to satisfy your coffee cravings any time of day.
                            </p>
                            <h4>$55.00</h4>
                            
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="chef-special-box">
                            <img src="img/chef-2.jpg" class="img-fluid" alt="Chef's Special">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 content-center">
                        <div class="chef-special-description">
                            <h5>Vanilla Cold Brew Bliss</h5>
                            <p>
                               Experience refreshment with our bold Vanilla Cold Brew. Brewed for 18 hours, this coffee is smooth, energizing, and infused with natural vanilla essence. Served chilled over ice—ideal for warm days or a morning boost.
                            </p>
                            <h4>$4.25</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</main>


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>