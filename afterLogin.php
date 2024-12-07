<!DOCTYPE html>
<html>
    <?php
        session_start();
    ?>
    <head>
        
        <title>Visita Pinas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="afterLogin.css">
    </head>

    <body>
        
        <!-- Top Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">

            <!-- Logo -->
            <a class="navbar-brand" href="#">
              <img src="images/visitaLogo.png" alt="Logo" width="150" height="40" class="d-inline-block align-top"></a>

            <!-- Hamburger Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Home -->
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <!-- Destinations -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="destinationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Destination
                    </a>
                    <div class="dropdown-menu" aria-labelledby="destinationDropdown">
                        <a class="dropdown-item" href="destinationAfter.php">All</a>
                        <a class="dropdown-item" href="#">Beaches and Islands</a>
                        <a class="dropdown-item" href="#">Mountains and Hiking Trails</a>
                        <a class="dropdown-item" href="#">Cultural Gateways</a>
                        <a class="dropdown-item" href="#">Theme Parks and Rides</a>
                    </div>
                    </li>
                    <!-- About Us -->
                    <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                    <!-- Contact Us -->
                    <li class="nav-item">
                    <a class="nav-link" href="contactUs.html">Contact Us</a>
                    </li>
                </ul>
                <a class="btn btn-signin ml-3" href="signout.php">Sign Out</a>
            </div>
        </nav>

        <!-- Start of the homepage -->
        <div class="homepage-section">
            <div class="left-side">
                <div class="text-content">
                    <h1>Welcome User!</h1>
                    <p class="welcome-text">PLAN YOUR NEXT TRIP WITH US!</p>
                    <p class="explore-text">Explore personalized travel options, special deals, and everything you need for your next adventure.</p>
                    <a href="#" class="book-now-btn">Book Now</a> 
                </div>
            </div>
            <div class="right-side">
                
            </div>
        </div>

        <!-- Promo -->
        <section class="promo-section">
            <h1>Exclusive Package Promos Just for You</h1>
            <p>Find personalized travel packages, special deals, and discounts designed to make your next trip unforgettable.</p>
            <div class="promo-grid">
                <div class="promo-card">
                    <img src="palawantour.png" alt="Island Hopping Adventure">
                    <h2>Island Hopping Adventure</h2>
                    <p>Explore Palawan's hidden island gems.</p>
                    <button data-bs-toggle="modal" data-bs-target="#palawanModal">Details →</button>
                </div>
                <div class="promo-card">
                    <img src="siaotour.png" alt="Wedding and Honeymoon Package">
                    <h2>Wedding and Honeymoon Package</h2>
                    <p>Romantic getaway in serene Siargao.</p>
                    <button data-bs-toggle="modal" data-bs-target="#siargaoModal">Details →</button>
                </div>
                <div class="promo-card">
                    <img src="vigantour.png" alt="Cultural Tour Special">
                    <h2>Cultural Tour Special</h2>
                    <p>Experience Vigan's historic beauty now.</p>
                    <button data-bs-toggle="modal" data-bs-target="#viganModal">Details →</button>
                </div>
                <div class="promo-card">
                    <img src="boratour.png" alt="Beach Resort Escape">
                    <h2>Beach Resort Escape</h2>
                    <p>Exclusive discounts to Boracay beaches.</p>
                    <button data-bs-toggle="modal" data-bs-target="#boracayModal">Details →</button>
                </div>
                <div class="promo-card large">
                    <img src="cebu.png" alt="Special Promo">
                    <h2>Family Fun Package</h2>
                    <p>Discover affordable trips to Cebu’s finest resorts, offering breathtaking views, luxurious amenities, and unforgettable experiences without breaking the bank. Start planning your dream getaway today</p>
                    <div class="buttons">
                        <button>Book now →</button>
                        <button data-bs-toggle="modal" data-bs-target="#cebuModal">Details →</button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Modals -->

        <!-- Palawan Promo Modal -->
        <div class="modal fade" id="palawanModal" tabindex="-1" aria-labelledby="palawanModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 850px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="palawanModalLabel">Island Hopping Adventure: Explore Palawan's Hidden Island Gems</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="pawa.png" alt="" style="width: 820px; height: auto;"> <br><br>
                        <h5><b>Price per person:  ₱3,500</b></h5>
                        <h5>Duration: 2 Days, 1 Night</h5>
                        <h5>Location: Palawan, Philippines</h5>
                        <br>
                        <h6><b>Day 1: Arrival and Nature Expedition</b></h6>
                        <ul>
                            <li> <b> 8:00 AM: Arrival in Puerto Prinsesa </b> </li>
                            <p>Guests are welcomed with refreshing tropical drinks and given a short briefing about the adventure.</p>

                            <li><b>10:00AM - 1:00PM: Underground River Tour</b></li>
                            <p>Discover the UNESCO-listed Puerto Princesa Subterranean River National Park, a world wonder known for its stunning limestone karst landscapes and mysterious cave systems.</p>
                                <ul>
                                    <li>Guided paddle boat exploration through the underground river</li>
                                    <li>Fascinating insights into the cave's ecosystem and history</li>
                                </ul>
                            
                            <li><b> 1:30 PM: Lunch by the Beach</b> </li>
                            <p>Enjoy a buffet featuring fresh seafood and local Filipino dishes on a pristine beach near the underground river.</p>

                            <li><b>3:00 PM - 5:00 PM: Kayaking Adventure</b></li>
                            <p>Glide through turquoise waters, weaving between mangroves and rock formations in Honda Bay.</p>

                            <li><b>6:30 PM: Dinner and Overnight Stay</b></li>
                            <p>Check-in at a charming beachfront resort or glamping site. Spend the evening relaxing under the stars with a bonfire.</p>
                        </ul>
                            
                        <hr>

                        <h6><b>Day 2: Island Hopping and Snorkling</b></h6>
                        <ul>
                            <li><b>7:00AM: Breakfast</b></li>
                            <p>Fuel up with a delicious tropical breakfast featuring fruits, juices, and local specialties.</p>
                            
                            <li><b>8:30 AM - 2:00 PM: Island Hopping & Snorkeling Adventure</b></li>
                            <p>Visit three picturesque islands in Honda Bay:</p>

                                <ul>
                                    <li>Starfish Island: Admire marine life, including vibrant starfish.</li>
                                    <li>Cowrie Island: Lounge on white sandy beaches and enjoy water sports.</li>
                                    <li>Pandan Island: Snorkel in crystal-clear waters to see coral reefs teeming with tropical fish.
                                        A seafood lunch will be served on one of the islands.</li>
                                </ul>
                            
                                <li>3:30 PM: Return to Puerto Princesa</li>
                                <p>Transfer back to the city for shopping and souvenir hunting before departure.</p>
                        </ul>

                        <hr>
                        <h6><b>Additional Informations</b></h6>
                        <ul>
                            <li><b>Inclusions</b></li>
                            <ul>
                                <li>Accomodation (1-night stay)</li>
                                <li>All meals and snacks</li>
                                <li>Island transfers and tour guide services</li>
                                <li>Equipment for snorkling and kayaking</li>
                                <li>Environmetal fees and permits</li>
                            </ul>

                            <li>Exlusions</li>
                            <ul>
                                <li>Airfare to/from Palawan</li>
                                <li>Personal expenses and optional activities</li>
                            </ul>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Siargao Promo Modal -->
        <div class="modal fade" id="siargaoModal" tabindex="-1" aria-labelledby="siargaoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 850px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="siargaoModalLabel">Wedding and Honeymoon Package</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="xiao.png" alt="">
                        <br> <br>
                        <h5><b>Price per person:  ₱3,000</b></h5>
                        <h5>Duration: 1 Day</h5>
                        <h5>Locations: Siargao Island, Philippines</h5>
                        <br>
                        <h6><b>Morning: Sugba Lagoon Adventure</b></h6>
                        <ul>
                            <li><b>8:00 AM: Arrival at Sugba Lagoon</b></li>

                            <ul>
                                <li>Experience the thrill of diving off the famous wooden board into the lagoon's emerald-green waters.</li>
                                <li>Enjoy kayaking and paddleboarding amidst the tranquil scenery.</li>
                                <li>Capture stunning photos with your partner against the picturesque backdrop of limestone cliffs and pristine waters.</li>
                            </ul>
                        </ul>

                        <h6><b>Midday: Island Hopping with Boodle Feast Upgrade</b></h6>
                        <ul>
                            <li>11:30 AM: Hop aboard a traditional banca (boat) to explore nearby islands, including Naked Island, Daku Island, and Guyam Island.</li>
                            <li>1:00 PM: Lunch at Daku Island featuring a premium boodle feast</li>
                            <ul>
                                <li>A spread of freshly grilled seafood, meats, tropical fruits, and Filipino specialties.</li>
                                <li>Served with a personalized romantic setup by the beach.</li>
                            </ul>
                        </ul>

                        <h6><b>Afternoon: Maasin River Adventure</b></h6>
                        <ul>
                            <li>3:00 PM: Visit the iconic Maasin River</li>
                            <ul>
                                <li>Take a tandem swing off the famous coconut tree and plunge into the river's cool waters.</li>
                                <li>Enjoy a leisurely boat ride through the river, lined with lush mangroves.</li>
                            </ul>
                        </ul>

                        <liEvening: Sunset Photoshoot and Farewell></li>
                        <ul>
                            <li>5:00 PM: Relax on the beach while watching the breathtaking Siargao sunset. A professional photographer captures candid and posed moments to commemorate your special day. </li>
                        </ul>
                        
                        <hr>
                        <h6><b>Inclusions: </b></h6>   
                        <ul>
                            <li>Transportation to all destinations</li>
                            <li>Romantic beachside setup for lunch</li>
                            <li>Personalized souvonir for the couple</li>
                            <li>Tour guide services and safety equipment</li>
                            <li>Photographer for the day</li>
                        </ul> 

                        <h6><b>Exclusions: </b></h6>
                        <ul>
                            <li>Airfare to/from Siargao</li>
                            <li>Accomodation</li>
                        </ul>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Vigan Promo Modal -->
        <div class="modal fade" id="viganModal" tabindex="-1" aria-labelledby="viganModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 850px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="viganModalLabel">Cultural Tour Special</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="viagaan.png" alt="">
                        <br> <br>
                        <h5><b>Price per person:  ₱2,000</b></h5>
                        <h5>Duration: 1 Day</h5>
                        <h5>Location: Vigan City, Ilocos Sur, Philippines</h5>

                        <h6><b>Itinerary</b></h6>
                        <h6><b>Morning: Exploring Vigan's Rich Heritage</b></h6>
                        <ul>
                            <li><b>8:00 AM: Discover Calle Crisologo</b></li>
                            <ul>
                                <li>Stroll along the cobblestone streets of this Spanish colonial-era neighborhood.</li>
                                <li>Marvel at the ancestral houses, enjoy shopping for handicrafts, and taste local delicacies from nearby food stalls.</li>
                            </ul>

                            <li><b>9:30 AM: Visit Crisologo Museum</b></li>
                            <ul>
                                <li>Immerse yourself in the history of Vigan and the Crisologo family.</li>
                                <li>Explore exhibits showcasing antique furniture, personal memorabilia, and artifacts from the Spanish colonial period.</li>
                            </ul>
                        </ul>

                        <h6><b>Midday: Hands-On Cultural Experience</b></h6>
                        <ul>
                            <li><b>11:30 AM: Pagburnayan Jar Factory Tour</b></li>
                            <ul>
                                <li>Witness traditional pottery-making techniques passed down through generations.</li>
                                <li>Try your hand at shaping clay into jars with the guidance of local artisans.</li>
                                <li>Learn the cultural significance of pottery in Vigan's history.</li>
                            </ul>
                        </ul>

                        <h6><b>Lunch Break</b></h6>
                        <ul>
                            <li>12:30 PM: Enjoy an authentic Ilocano meal at a heritage restaurant. Signature dishes include bagnet, pinakbet, and empanada.</li>
                        </ul>

                        <h6><b>Afternoon: Vigan Souvenirs and Free Exploration</b></h6>
                        <ul>
                            <li>2:00 PM: Spend time revisiting your favorite spots or shop for keepsakes at nearby markets.</li>
                            <li>3:30 PM: Tour ends. Guests are free to extend their stay or head back.</li>
                        </ul>

                        <hr>

                        <h6><b>Inclusions:</b></h6>
                        <ul>
                            <li>Guided tours for all activities</li>
                            <li>Entrance fees to Crisologo Museum and Pagburnayan Factory</li>
                            <li>Complimentary light snacks and bottled water</li>
                            <li>Cultural souvenir (e.g., mini pottery jar or local craft item)</li>
                        </ul>

                        <h6><b>Exclusions</b></h6>
                        <ul>
                            <li>Transportation to/from Vigan</li>
                            <li>Lunch (can be arranged for an additional fee)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Boracay Promo Modal -->
        <div class="modal fade" id="boracayModal" tabindex="-1" aria-labelledby="boracayModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 850px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="boracayModalLabel">Beach Resort Escape</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="boracauy.png" alt="">
                        <br> <br>
                        <h5><b>Price per person:  ₱6,500</b></h5>
                        <h5>Duration: 1 Day</h5>
                        <h5>Location: Boracay Island, Aklan, Philippines</h5>

                        <h6><b>Itinerary</b></h6>
                        <h6><b>Morning: Adventure and Fun</b></h6>
                        <ul>
                            <li>9:00 AM - 11:00 AM: Windsurfing Session at Bulabog Beach</li>
                            <ul>
                                <li>Experience the thrill of gliding over the water with professional instructors guiding beginners and advanced windsurfers.</li>
                            </ul>

                            <li>11:30 AM - 1:30 PM: Snorkeling Excursion</li>
                            <ul>
                                <li>Explore vibrant coral reefs and underwater life in the crystal-clear waters near Crocodile Island.</li>
                                <li>Snorkeling gear and safety guides are provided for a worry-free experience.</li>
                            </ul>
                        </ul>

                        <h6><b>Afternoon: Relaxation and Exploration</b></h6>
                        <ul>
                            <li>3:00 PM - 7:00 PM: Sunset Viewing at Diniwid Beach</li>
                            <ul>
                                <li>Escape the crowds and enjoy a peaceful, romantic sunset with breathtaking views.</li>
                                <li>Perfect for couples or groups seeking tranquility.
                                </li>
                            </ul>
                        </ul>

                        <h6><b>Evening: Socializing and Nighlife</b></h6>
                        <ul>
                            <li>8:00 PM - 10:00 PM: Join the Boracay Island Pub Crawl</li>
                            <ul>
                                <li>Meet new friends while hopping between the island's best bars and clubs.</li>
                                <li>Includes free welcome shots, exclusive drink discounts, and lots of fun games.</li>
                            </ul>
                        </ul>
                        <hr>
                        <h6><b>Inclusions:</b></h6>
                        <ul>
                            <li>Windsurfing equipment and lessons</li>
                            <li>Snorkling gear and guide</li>
                            <li>Admission to the Boracay Island Pub Crawl</li>
                            <li>Complimentary bottled water and light snacks</li>
                        </ul>

                        <h6><b>Exclusions:</b></h6>
                        <ul>
                            <li>Transportation to/from Boracay</li>
                            <li>Meals and drinks not included in the pub crawl</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Cebu Promo Modal -->
        <div class="modal fade" id="cebuModal" tabindex="-1" aria-labelledby="cebuModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 850px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="cebuModalLabel">Family Fun Package</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="cebuuuu.png" alt="">
                        <br> <br>
                        <h5><b>Price per person:  ₱7,000</b></h5>
                        <h5>Duration: 3 Days, 2 Nights</h5>
                        <h5>Location: Cebu, Philippines</h5>

                        <h6><b>Day 1: Cultural Exploration and Gastronomy</b></h6>
                        <ul>
                            <li><b>8:00 AM: Arrival and Check-in at Resort</b></li>
                            <p>Check-in at your chosen family-friendly resort with breathtaking views of Cebu’s coastline or mountains. Settle in and enjoy a relaxing morning by the pool or beach.</p>

                            <li><b>11:00 AM - 1:00PM: Lechon Food Trip</b></li>
                            <p>Discover Cebu’s famous lechon (roast pig) by visiting local eateries and markets renowned for serving the best lechon in town. Enjoy the crispy skin and tender meat in this quintessential Filipino culinary experience.</p>

                            <li><b>3:00 PM - 4:30 PM: Climb the 81 Steps of the Cebu Taoist Temple</b></li>
                            <p>Experience the serenity and panoramic views of Cebu City as you climb the 81 steps leading to the Cebu Taoist Temple. Enjoy the peaceful ambiance and learn about Taoist beliefs and traditions.</p>

                            <li><b>Evening: Free Time and Dinner</b></li>
                            <p>Relax and enjoy a family dinner at the resort's restaurant, offering a variety of local and international dishes.</p>
                        </ul>

                        <hr>

                        <h6><b>Day 2: Nature and Adventure</b></h6>
                        <ul>
                            <li><b>8:00 AM - 9:00 AM: Breakfast at Resort</b></li>
                            <li>9:30 AM - 12:00 PM: Leisurely Hike to Osmeña Peak</li>
                            <p>Begin the day with a scenic and leisurely hike to Osmeña Peak, the highest point in Cebu. The short trek offers stunning views of the island's rugged mountains and crystal-clear coastlines. This is a great spot for family photos.</p>

                            <li><b>12:30 PM: Lunch with a View</b></li>
                            <p>Enjoy a hearty meal at a local restaurant near the peak, serving traditional Filipino comfort food.</p>

                            <li><b>2:00 PM - 4:00 PM: Visit Sirao Garden (Little Amsterdam)</b></li>
                            <p>Take a relaxing stroll through Sirao Garden, known for its vibrant flower fields. It’s the perfect place to take in the natural beauty and take family photos surrounded by colorful blooms.</p>

                            <li><b>5:00 PM - 7:00 PM: Dinner at the Resort</b></li>
                        </ul>

                        <hr>

                        <h6><b>Day 3: Thrill and Adventure</b></h6>
                        <ul>
                            <li><b>7:00 AM - 8:00 AM: Breakfast at Resort</b></li>
                            <li><b>9:00 AM - 1:00 PM: Canyoneering to Kawasan Falls</b></li>
                            <p>Embark on an exciting canyoneering adventure to the stunning Kawasan Falls. Enjoy swimming, cliff jumping, and trekking through the turquoise waters and lush jungle terrain. This thrilling activity is perfect for adventurous families.</p>

                            <li><b>1:30 PM: Lunch at Kawasan Falls</b></li>
                            <p>Enjoy a picnic-style lunch near the falls, surrounded by natural beauty.</p>

                            <li><b>3:00 PM - 5:00 PM: Return to Resort and Check-out</b></li>
                        </ul>

                        <hr>
                        <h6><b>Inclusions:</b></h6>
                        <ul>
                            <li>2-night accommodation at a family-friendly resort</li>
                            <li>Guided tours for all activities (Lechon Food Trip, Taoist Temple, Osmeña Peak, Sirao Garden, Kawasan Falls)</li>
                            <li>Meals: Breakfasts, lunches, and dinners as outlined in the itinerary </li>
                            <li>All entrance fees and permits for the activities</li>
                            <li>Canyoneering equipment (life jackets, helmets, etc.)</li>
                            <li>Resort amenities: Swimming pool, beach access, etc.</li>
                        </ul>

                        <h6><b>Exclusions</b></h6>
                        <ul>
                            <li>Airfare to/from Cebu</li>
                            <li>Personal expenses</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <!-- FAVORITES FROM DESTINATION -->
        <section class="container my-5">
            <h2 class="text-center mb-4">Your Favorites</h2>
            <div id="favorites-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="favorites-list">
                    <?php
                    // Database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "iceicebabybaby99!";
                    $dbname = "visita_db";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch favorites for user (assuming user ID 1)
                    $sql = "SELECT d.id, d.name, d.image, d.description, d.price, d.duration 
                            FROM favorites f
                            JOIN destinations d ON f.destination_id = d.id
                            WHERE f.user_id = 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $activeClass = 'active'; // Set the first item as active
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="carousel-item ' . $activeClass . '">';
                            echo '<div class="d-flex justify-content-center">';
                            echo '<div class="card" style="width: 18rem;">';
                            echo '<img src="images/' . htmlspecialchars($row['image']) . '" class="card-img-top" alt="' . htmlspecialchars($row['name']) . '">
        ';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>';
                            echo '<p class="card-text">' . htmlspecialchars(substr($row['description'], 0, 100)) . '...</p>';
                            echo '<div class="d-flex justify-content-between">';
                            echo '<span class="text-success fw-bold">$' . number_format($row['price'], 2) . '</span>';
                            echo '<span class="text-muted">' . htmlspecialchars($row['duration']) . '</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            $activeClass = ''; // Unset active for subsequent items
                        }
                    } else {
                        echo '<div class="carousel-item active">';
                        echo '<div class="text-center">No favorites found</div>';
                        echo '</div>';
                    }

                    $conn->close();
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#favorites-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#favorites-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/splide/3.6.9/splide.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Initialize Splide Carousel
            const splide = new Splide('#favorites-carousel', {
                type   : 'loop',
                perPage: 3,
                gap    : '1rem',
            });
            splide.mount();
    
            // Fetch favorites and populate carousel
            fetch('fetchFavorites.php')
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }
    
                    const favoritesList = document.getElementById('favorites-list');
                    favoritesList.innerHTML = ''; // Clear existing content
    
                    data.forEach(item => {
                        const listItem = document.createElement('li');
                        listItem.className = 'splide__slide';
    
                        listItem.innerHTML = `
                            <div class="card">
                                <img src="${item.image}" alt="${item.name}">
                                <div class="card-body">
                                    <h3>${item.name}</h3>
                                    <h6><strong>$${item.price.toFixed(2)}</strong>/${item.duration}</h6>
                                    <p>${item.description}</p>
                                    <a href="#book"><span>Book Now</span></a>
                                </div>
                            </div>
                        `;
    
                        favoritesList.appendChild(listItem);
                    });
    
                    // Refresh Splide with new slides
                    splide.refresh();
                })
                .catch(error => {
                    console.error('Error fetching favorites:', error);
                });
        </script>

        <!-- script src for top navigation -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- script for pop up modal in promos -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>