<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisitaPinas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="destinationAfter.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->

    <!--Text Effects-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
    <!--Text Effects-->

</head>
<body>
    
        <!-- Top Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light animate__animated animate__fadeInDown">

            <!-- Logo -->
            <a class="navbar-brand" href="#">
              <img src="logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-top"> VisitaPinas
            </a>

            <!-- Hamburger Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Home -->
                    <li class="nav-item">
                    <a class="nav-link animate__fadeInDown" href="afterLogin.php">Home</a>
                    </li>
                    <!-- Destinations -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle animate__fadeInDown" href="#" id="destinationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Destination
                    </a>
                    <div class="dropdown-menu" aria-labelledby="destinationDropdown">
                        <a class="dropdown-item" href="#">All</a>
                        <a class="dropdown-item" href="#">Beaches and Islands</a>
                        <a class="dropdown-item" href="#">Mountains and Hiking Trails</a>
                        <a class="dropdown-item" href="#">Cultural Gateways</a>
                        <a class="dropdown-item" href="#">Theme Parks and Rides</a>
                    </div>
                    </li>
                    <!-- About Us -->
                    <li class="nav-item">
                    <a class="nav-link animate__fadeInDown" href="aboutus.html">About Us</a>
                    </li>
                    <!-- Contact Us -->
                    <li class="nav-item">
                    <a class="nav-link animate__fadeInDown" href="#">Contact Us</a>
                    </li>
                </ul>
                <a class="btn btn-signin ml-3 animate__fadeInDown" href="signout.php">Sign Out</a>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="bg5.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                <img src="bg2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="bg4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        

<!-- Section Packages Start -->
<section class="packages" id="packages">
    <div class="container">
        <div class="main-txt">
            <h1><span>Popular Destination</span></h1>
            <p class="section__description">
                Discover iconic travel spots known for their beauty, culture, and unforgettable experiences.
                <br> Whether it's beaches, city life, or nature, these destinations offer something for every traveler.
            </p>
            <a href="#discover" class="discover-btn">Discover More</a>
        </div>

        <div class="row" style="margin-top: 30px;">
            <!-- Card Template -->
            <?php
                $conn = new mysqli("localhost", "root", "iceicebabybaby99!", "visita_db");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM destinations";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card">
                                <div class="heart-icon" data-id="' . $row['id'] . '">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <img src="' . $row['image'] . '" alt="' . $row['name'] . '">
                                <div class="card-body">
                                    <div class="card-header">
                                        <h3>' . $row['name'] . '</h3>
                                        <h6><strong>$' . $row['price'] . '</strong>/' . $row['duration'] . '</h6>
                                    </div>
                                    <p class="text-muted">' . $row['description'] . '</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star checked"></i>
                                        <i class="fa-solid fa-star checked"></i>
                                        <i class="fa-solid fa-star checked"></i>
                                        <i class="fa-solid fa-star checked"></i>
                                        <i class="fa-solid fa-star checked"></i>
                                    </div>
                                    <a href="#book"><span>Book Now</span></a>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "<p>No destinations available.</p>";
                }

                $conn->close();
                ?>

    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<!-- Section Packages End -->



    <!--Categories-->
    <section class="custom-slider-section">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Categories</h2>
            <p class="text-muted">Explore various travel categories, each catering to different interests and preferences. 
                <br>From adventure and relaxation to cultural exploration and luxury, there's a perfect travel experience for everyone.</p>
        </div>
        <input type="radio" name="custom-testimonial" id="custom-ct-1">
        <input type="radio" name="custom-testimonial" id="custom-ct-2">
        <input type="radio" name="custom-testimonial" id="custom-ct-3" checked>
        <input type="radio" name="custom-testimonial" id="custom-ct-4">
        <input type="radio" name="custom-testimonial" id="custom-ct-5">
    
        <div class="custom-testimonials">
            <label class="custom-item" for="custom-ct-1">
                <img src="beachhh.jpg" alt="Image 1">
                <div class="description">BEACH<br><br>Escape to the beach for a relaxing getaway filled with sun, sand, and sea. 
                    Whether you're lounging under an umbrella, swimming in crystal-clear waters, or enjoying water sports, 
                    the beach offers the perfect setting to unwind and connect with nature. Let the sound of the waves and the warmth of the sun rejuvenate your spirit.</div>
            </label>
            <label class="custom-item" for="custom-ct-2">
                <img src="hikinggg.jpg" alt="Image 2">
                <div class="description">HIKING<br><br>Embark on a thrilling hiking adventure through breathtaking landscapes, from lush forests to towering mountains. 
                    Experience the beauty of nature up close as you trek along scenic trails, challenge yourself with rugged terrains, and enjoy the peaceful solitude of the great outdoors.</div>
            </label>
            <label class="custom-item" for="custom-ct-3">
                <img src="campinggg.jpg" alt="Image 3">
                <div class="description">CAMPING<br><br>Immerse yourself in the great outdoors with a camping trip, where you can disconnect from the hustle and bustle of daily life. 
                    Set up your tent under the stars, enjoy campfire stories, and embrace the simplicity of nature. Whether you’re hiking, fishing, or simply relaxing, 
                    camping offers the perfect escape to recharge and create lasting memories with friends and family.</div>
            </label>
            <label class="custom-item" for="custom-ct-4">
                <img src="adventure.jpg" alt="Image 4">
                <div class="description">ADVENTURE <br><br>Unleash your inner explorer with an adventure trip that promises excitement and discovery. 
                    From thrilling activities like zip-lining and bungee jumping to navigating remote landscapes, every moment is filled with adrenaline and wonder. 
                    Embrace the unknown, push your limits, and create unforgettable memories as you dive into new challenges and experiences.</div>
            </label>
            <label class="custom-item" for="custom-ct-5">
                <img src="roadtrip.jpg" alt="Image 5">
                <div class="description">ROADTRIP<br><br> Embark on an unforgettable road trip adventure, exploring scenic routes, hidden gems, and iconic landmarks. 
                    Whether you're cruising along coastal highways, traversing mountain passes, or discovering charming small towns, a road trip offers the freedom to travel at your own pace and create lasting memories. 
                    Pack your bags, hit the road, and let the journey unfold!</div>
            </label>
        </div>
    
        <div class="custom-dots">
            <label for="custom-ct-1"></label>
            <label for="custom-ct-2"></label>
            <label for="custom-ct-3"></label>
            <label for="custom-ct-4"></label>
            <label for="custom-ct-5"></label>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-dark view-all-btn">View all</a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
    <!--Categories End-->
        
    <!-- Unique Carousel Banner Container -->
    <div class="custom-banner-container my-4">
        <div id="customBannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner custom-carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active custom-carousel-item">
                    <div class="custom-banner-slide" style="background-image: url('banner1.png');">
                    </div>
                </div>
                <!-- Second Slide -->
                <div class="carousel-item custom-carousel-item">
                    <div class="custom-banner-slide" style="background-image: url('banner2.png');">
                    </div>
                </div>
                <!-- Third Slide -->
                <div class="carousel-item custom-carousel-item">
                    <div class="custom-banner-slide" style="background-image: url('banner3.png');">
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#customBannerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#customBannerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Unique Carousel Container End-->

    <!--Special Offer Card-->
    <div class="container py-5">
        <div class="text-left mb-4">
            <h2 class="fw-bold ">Special Offer</h2>
            <p class="text-muted">Take advantage of exclusive deals and discounts on select travel packages. 
                <br>Enjoy incredible savings on your next adventure and make unforgettable memories at a fraction of the price.</p>
        </div>
        <div class="row g-4 special-offer-cards">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card category-card position-relative">
                    <img src="batanes.jpg" alt="Hiking Image" class="card-img-top">
                    <div class="rating">
                        5.0 <span class="star">★</span>
                    </div>
                    <div class="card-body">
                        <div class="card-title-container">
                            <h5 class="card-title fw-bold">Batanes</h5>
                            <button class="btn btn-outline-dark rounded-circle">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                        <p class="text-muted">
                            <span class="original-price">$399.00</span>
                            <span class="discounted-price">$299.00</span>/Person
                        </p>
                        <p class="text-muted">Experience unique cultural tours and picturesque landscapes at exclusive rates.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card category-card position-relative">
                    <img src="cebu.jpg" alt="Beach Image" class="card-img-top">
                    <div class="rating">
                        4.9 <span class="star">★</span>
                    </div>
                    <div class="card-body">
                        <div class="card-title-container">
                            <h5 class="card-title fw-bold">Cebu's Moalboal</h5>
                            <button class="btn btn-outline-dark rounded-circle">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                        <p class="text-muted">
                            <span class="original-price">$499.00</span>
                            <span class="discounted-price">$399.00</span>/Person
                        </p>
                        <p class="text-muted">Dive into underwater adventures with discounted dive packages and eco-tours.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card category-card position-relative">
                    <img src="palawan.jpg" alt="Camping Image" class="card-img-top">
                    <div class="rating">
                        4.8 <span class="star">★</span>
                    </div>
                    <div class="card-body">
                        <div class="card-title-container">
                            <h5 class="card-title fw-bold">Palawan</h5>
                            <button class="btn btn-outline-dark rounded-circle">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                        <p class="text-muted">
                            <span class="original-price">$399.00</span>
                            <span class="discounted-price">$349.00</span>/Person
                        </p>
                        <p class="text-muted">Unlock savings on boat tours, diving adventures, and luxury resorts.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-dark view-all-btn">View all</button>
        </div>
    </div>
        <br>
        <br>
        <br>
    <!--Special Offer Card End-->

     <!-- Footer Section -->
<footer class="footer py-5">
    <div class="container ">
        <div class="row">
            <!-- Company Info -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <h5 class="text-uppercase fw-bold">VisitaPinas</h5>
                <p>
                    Your ultimate travel companion. Explore the world with us, one journey at a time.
                </p>
                <div class="social-icons">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- Quick Links -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <h5 class="text-uppercase fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Home</a></li>
                    <li><a href="#" class="text-light">Destinations</a></li>
                    <li><a href="#" class="text-light">About Us</a></li>
                    <li><a href="#" class="text-light">Contact Us</a></li>
                </ul>
            </div>
            <!-- Newsletter -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <h5 class="text-uppercase fw-bold">Subscribe to Our Newsletter</h5>
                <form>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                        <button class="btn " type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bottom Bar -->
        <div class="text-center mt-4">
            <p class="mb-0">&copy; 2024 VisitaPinas. All Rights Reserved.</p>
        </div>
    </div>
</footer>

    <!-- script src for carousel/effects -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/cc86d7b31d.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- script src for carousel/effects -->
    
    <!--Script for Footer-->
    <script>
    AOS.init({
        duration: 1000,
        once: true
     });
    </script>
    <!--Script for Footer End-->

    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Check if user is logged in (you might want to pass this from PHP)
    const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

    document.querySelectorAll('.heart-icon').forEach(icon => {
        const heart = icon.querySelector('i');

        // Only add click listener if user is logged in
        if (isLoggedIn) {
            icon.addEventListener('click', function () {
                const destinationId = this.getAttribute('data-id');
                const isFavorited = heart.classList.contains('fa-solid');

                // Optimistically update UI
                heart.classList.toggle('fa-solid', !isFavorited);
                heart.classList.toggle('fa-regular', isFavorited);

                // Add animation effect only when favorited
                if (!isFavorited) {
                    const iconRect = this.getBoundingClientRect();
                    const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    for (let i = 0; i < 10; i++) {
                        const heartEffect = document.createElement('i');
                        heartEffect.classList.add('fa', 'fa-heart', 'heart-spam');
                        document.body.appendChild(heartEffect);

                        const x = iconRect.left + iconRect.width / 2 + scrollLeft;
                        const y = iconRect.top - 10 + scrollTop;
                        heartEffect.style.left = `${x}px`;
                        heartEffect.style.top = `${y}px`;

                        setTimeout(() => heartEffect.remove(), 1000);
                    }
                }

                // Send favorite/unfavorite request to server
                fetch('favorites.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        destination_id: destinationId,
                        action: isFavorited ? 'remove' : 'add',
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        // Revert state if the server operation fails
                        heart.classList.toggle('fa-solid', isFavorited);
                        heart.classList.toggle('fa-regular', !isFavorited);
                        alert(data.message || 'Failed to update favorite.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Revert state if an error occurs
                    heart.classList.toggle('fa-solid', isFavorited);
                    heart.classList.toggle('fa-regular', !isFavorited);
                    alert('Failed to update favorite. Please try again.');
                });
            });
        } else {
            // If not logged in, add a click event to prompt login
            icon.addEventListener('click', function() {
                alert('Please log in to add favorites.');
            });
        }
    });
});
</script>
    

    
</body>
</html>
