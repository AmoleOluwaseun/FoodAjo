<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Browse Meals - FoodAjo</title>
    <meta name="description" content="Browse available meal postings">
    <meta name="keywords" content="foodajo, meals, browse, student meals">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .browse-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 80px 0 40px;
            color: white;
        }

        .search-bar {
            background: white;
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            margin-top: 30px;
        }

        .search-bar input {
            border: none;
            outline: none;
            flex: 1;
            padding: 10px;
            font-size: 1rem;
        }

        .search-bar button {
            background: #ce1212;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .filter-sidebar {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 100px;
        }

        .filter-title {
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .filter-section {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .filter-section:last-child {
            border-bottom: none;
        }

        .filter-section h6 {
            font-weight: 600;
            margin-bottom: 15px;
            color: #555;
        }

        .meal-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            margin-bottom: 30px;
            cursor: pointer;
        }

        .meal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .meal-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            position: relative;
        }

        .meal-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ce1212;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .meal-content {
            padding: 20px;
        }

        .meal-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .meal-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
            font-size: 0.9rem;
        }

        .meta-item i {
            color: #ce1212;
        }

        .meal-organizer {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .organizer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .organizer-info {
            flex: 1;
        }

        .organizer-name {
            font-weight: 600;
            color: #333;
            font-size: 0.95rem;
        }

        .organizer-rating {
            color: #ffc107;
            font-size: 0.85rem;
        }

        .meal-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ce1212;
            margin-bottom: 10px;
        }

        .price-label {
            font-size: 0.85rem;
            color: #666;
        }

        .participants-bar {
            background: #f0f0f0;
            height: 8px;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .participants-fill {
            background: linear-gradient(90deg, #ce1212, #ff6b6b);
            height: 100%;
            transition: width 0.3s;
        }

        .btn-join {
            background: #ce1212;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-join:hover {
            background: #a00f0f;
            transform: translateY(-2px);
        }

        .btn-join:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .no-meals {
            text-align: center;
            padding: 60px 20px;
        }

        .no-meals i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">FoodAjo</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="browse-meals.php" class="active">Browse Meals</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="my-meals.php">My Meals</a></li>
                    <li><a href="messages.php">Messages</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="create-meal.php">Create Meal</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section class="browse-hero">
            <div class="container">
                <h1 data-aos="fade-up" style="font-size: 2.5rem; font-weight: 700;">Discover Delicious Meals</h1>
                <p data-aos="fade-up" data-aos-delay="100" style="font-size: 1.1rem; opacity: 0.95;">Join a meal group
                    and save money while eating better</p>

                <div class="search-bar" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-search" style="color: #999; font-size: 1.2rem; margin-right: 10px;"></i>
                    <input type="text" placeholder="Search for meals, locations, or cuisines..." id="searchInput">
                    <button type="button" onclick="searchMeals()">Search</button>
                </div>
            </div>
        </section>

        <!-- Browse Section -->
        <section class="section" style="padding: 60px 0;">
            <div class="container-fluid px-5">
                <div class="row">
                    <!-- Filter Sidebar -->
                    <div class="col-lg-3">
                        <div class="filter-sidebar" data-aos="fade-right">
                            <div class="filter-title">
                                <span>Filters</span>
                                <a href="#" style="color: #ce1212; font-size: 0.9rem; text-decoration: none;">Clear
                                    All</a>
                            </div>

                            <div class="filter-section">
                                <h6>Location</h6>
                                <select class="form-select" id="locationFilter">
                                    <option value="">All Locations</option>
                                    <option value="yaba">Yaba</option>
                                    <option value="surulere">Surulere</option>
                                    <option value="ikeja">Ikeja</option>
                                    <option value="lekki">Lekki</option>
                                    <option value="ajah">Ajah</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h6>Price Range</h6>
                                <div class="mb-2">
                                    <label for="priceRange" class="form-label">Max: ₦<span
                                            id="priceValue">5000</span></label>
                                    <input type="range" class="form-range" id="priceRange" min="500" max="10000"
                                        step="500" value="5000"
                                        oninput="document.getElementById('priceValue').textContent = this.value">
                                </div>
                            </div>

                            <div class="filter-section">
                                <h6>Meal Type</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="breakfast">
                                    <label class="form-check-label" for="breakfast">Breakfast</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lunch">
                                    <label class="form-check-label" for="lunch">Lunch</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dinner">
                                    <label class="form-check-label" for="dinner">Dinner</label>
                                </div>
                            </div>

                            <div class="filter-section">
                                <h6>Availability</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="all" checked>
                                    <label class="form-check-label" for="all">All Meals</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="open">
                                    <label class="form-check-label" for="open">Open Only</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="today">
                                    <label class="form-check-label" for="today">Today</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meals Grid -->
                    <div class="col-lg-9">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 style="margin: 0;">Available Meals (24)</h4>
                            <select class="form-select" style="width: auto;">
                                <option>Sort by: Latest</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Most Popular</option>
                            </select>
                        </div>

                        <div class="row" id="mealsContainer">
                            <!-- Meal Card 1 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=1'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-1.png" alt="Jollof Rice" class="meal-image">
                                        <span class="meal-badge">6 spots left</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Jollof Rice & Chicken</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Yaba,
                                                Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Today, 6:00
                                                PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/testimonials/testimonials-1.jpg" alt="Organizer"
                                                class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Chioma Adeleke</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                    <span style="color: #666;">(4.5)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦1,200 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 40%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">4 of 10
                                            participants joined</p>

                                        <button class="btn btn-join">Join Meal</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 2 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=2'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-2.png" alt="Fried Rice" class="meal-image">
                                        <span class="meal-badge">3 spots left</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Fried Rice & Turkey</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Surulere,
                                                Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Tomorrow, 1:00
                                                PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/testimonials/testimonials-2.jpg" alt="Organizer"
                                                class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Tunde Bakare</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <span style="color: #666;">(5.0)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦1,500 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 70%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">7 of 10
                                            participants joined</p>

                                        <button class="btn btn-join">Join Meal</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 3 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="200">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=3'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-3.png" alt="Yam & Eggs" class="meal-image">
                                        <span class="meal-badge">8 spots left</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Yam & Egg Sauce</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Ikeja,
                                                Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Today, 8:00
                                                AM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/testimonials/testimonials-3.jpg" alt="Organizer"
                                                class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Amaka Johnson</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                    <span style="color: #666;">(4.0)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦800 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 20%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">2 of 10
                                            participants joined</p>

                                        <button class="btn btn-join">Join Meal</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 4 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="300">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=4'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-4.png" alt="Beans & Plantain"
                                            class="meal-image">
                                        <span class="meal-badge" style="background: #28a745;">Full</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Beans & Plantain</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Lekki,
                                                Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Today, 2:00
                                                PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/testimonials/testimonials-4.jpg" alt="Organizer"
                                                class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Emeka Okonkwo</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                    <span style="color: #666;">(4.5)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦1,000 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 100%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">10 of 10
                                            participants joined</p>

                                        <button class="btn btn-join" disabled>Meal Full</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 5 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="400">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=5'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-5.png" alt="Pounded Yam" class="meal-image">
                                        <span class="meal-badge">5 spots left</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Pounded Yam & Egusi</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Gbagada, Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Sun, 2:00 PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/chefs/chefs-1.jpg" alt="Organizer" class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">David Okon</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                    <span style="color: #666;">(4.2)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦2,000 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 50%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">5 of 10 participants joined</p>

                                        <button class="btn btn-join">Join Meal</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 6 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="500">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=6'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-6.png" alt="Spaghetti" class="meal-image">
                                        <span class="meal-badge">2 spots left</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Spaghetti & Meatballs</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Yaba, Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Mon, 7:00 PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/chefs/chefs-2.jpg" alt="Organizer" class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Sarah James</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                    <span style="color: #666;">(4.7)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦1,500 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 80%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">8 of 10 participants joined</p>

                                        <button class="btn btn-join">Join Meal</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 7 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="600">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=7'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-3.png" alt="Pepper Soup" class="meal-image">
                                        <span class="meal-badge">9 spots left</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Catfish Pepper Soup</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Lekki, Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Fri, 6:00 PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/chefs/chefs-3.jpg" alt="Organizer" class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Michael Chen</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <span style="color: #666;">(4.9)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦3,000 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 10%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">1 of 10 participants joined</p>

                                        <button class="btn btn-join">Join Meal</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meal Card 8 -->
                            <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="700">
                                <div class="meal-card" onclick="window.location.href='meal-details.php?id=8'">
                                    <div style="position: relative;">
                                        <img src="assets/img/menu/menu-item-1.png" alt="Amala" class="meal-image">
                                        <span class="meal-badge" style="background: #28a745;">Full</span>
                                    </div>
                                    <div class="meal-content">
                                        <h3 class="meal-title">Amala & Ewedu</h3>
                                        <div class="meal-meta">
                                            <span class="meta-item"><i class="bi bi-geo-alt-fill"></i> Surulere, Lagos</span>
                                            <span class="meta-item"><i class="bi bi-clock-fill"></i> Sat, 1:00 PM</span>
                                        </div>

                                        <div class="meal-organizer">
                                            <img src="assets/img/testimonials/testimonials-3.jpg" alt="Organizer" class="organizer-avatar">
                                            <div class="organizer-info">
                                                <div class="organizer-name">Blessing A.</div>
                                                <div class="organizer-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                    <span style="color: #666;">(4.3)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meal-price">₦1,800 <span class="price-label">per person</span></div>

                                        <div class="participants-bar">
                                            <div class="participants-fill" style="width: 100%;"></div>
                                        </div>
                                        <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">10 of 10 participants joined</p>

                                        <button class="btn btn-join" disabled>Meal Full</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6">
                    <h4>FoodAjo</h4>
                    <p>Eat better together, spend less.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="about.php" style="color: white; text-decoration: none;">About Us</a></li>
                        <li><a href="browse-meals.php" style="color: white; text-decoration: none;">Browse Meals</a>
                        </li>
                        <li><a href="how-it-works.php" style="color: white; text-decoration: none;">How It Works</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Contact</h4>
                    <p>Email: support@foodajo.com<br>Phone: +234 800 123 4567</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">FoodAjo</strong> <span>All Rights Reserved</span>
            </p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        function searchMeals() {
            const searchTerm = document.getElementById('searchInput').value;
            console.log('Searching for:', searchTerm);
            // Add AJAX search functionality here
        }
    </script>

</body>

</html>