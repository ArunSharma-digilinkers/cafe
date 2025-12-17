<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>img/logo-white.png" alt="" class="img-fluid logo-img">
            <img src="<?php echo $path; ?>img/logo-white.png" alt="" class="img-fluid logo-img dark-mode">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img src="<?php echo $path; ?>img/toggler.png" alt="" class="img-fluid">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Home 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index2">Home 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index-3">Home 3</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about-us">About 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about-2">About 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about-3">About 3</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>component">Components</a>
                </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contact-us">Contact 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Contact-2">Contact 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Contact-3">Contact 3</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <!-- <li class="nav-item nav-item-modal">
                    <a class="nav-link btn c-btn btn-show-modal" href="#">Quick Enquiry</a>
                </li> -->
                <li class="nav-item">
                    <!-- <a class="nav-link" href="<?php //echo $path; ?>contact-us">Contact</a> -->
                     <!-- <div class="mode-toggler">
                        <input type="checkbox" class="theme-btn" id="theme-btn">
                        <label for="theme-btn" class="theme-btn-label">
                            <span class="active-mode hidden"><i class="fas fa-moon"></i>Dark Mode</span>
                            <span class="active-mode"><i class="fas fa-sun"></i>Light Mode</span>
                        </label>
                     </div> -->
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-point"></div>