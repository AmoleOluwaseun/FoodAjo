<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>User Profile - FoodAjo</title>
    <meta name="description" content="User profile on FoodAjo">
    <meta name="keywords" content="foodajo, profile">

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

        .profile-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 60px 0 120px;
            color: white;
            position: relative;
        }

        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
            margin-top: -80px;
            position: relative;
            z-index: 2;
        }

        .profile-header {
            display: flex;
            gap: 30px;
            align-items: start;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .profile-info {
            flex: 1;
        }

        .profile-name {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .profile-meta {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 15px;
            color: #666;
        }

        .meta-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 5px 12px;
            background: #f8f9fa;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .meta-badge i {
            color: #ce1212;
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat-box {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #ce1212;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        .profile-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-profile {
            padding: 10px 25px;
            border-radius: 10px;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
        }

        .btn-primary-profile {
            background: #ce1212;
            color: white;
        }

        .btn-primary-profile:hover {
            background: #a00f0f;
        }

        .btn-secondary-profile {
            background: white;
            color: #ce1212;
            border: 2px solid #ce1212;
        }

        .btn-secondary-profile:hover {
            background: #ce1212;
            color: white;
        }

        .section-tabs {
            border-bottom: 2px solid #f0f0f0;
            margin-bottom: 30px;
        }

        .nav-tabs {
            border: none;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #666;
            font-weight: 600;
            padding: 15px 25px;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }

        .nav-tabs .nav-link:hover {
            color: #ce1212;
            border-bottom-color: #ffb3b3;
        }

        .nav-tabs .nav-link.active {
            color: #ce1212;
            border-bottom-color: #ce1212;
            background: none;
        }

        .meal-history-item {
            display: flex;
            gap: 20px;
            padding: 20px;
            border: 2px solid #f0f0f0;
            border-radius: 12px;
            margin-bottom: 15px;
            transition: all 0.3s;
        }

        .meal-history-item:hover {
            border-color: #ce1212;
            background: #fff5f5;
        }

        .meal-history-img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            object-fit: cover;
        }

        .meal-history-content {
            flex: 1;
        }

        .meal-history-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .meal-history-meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .review-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .reviewer-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .rating-stars {
            color: #ffc107;
        }

        .bio-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
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
                    <li><a href="browse-meals.php">Browse Meals</a></li>
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
        <section class="profile-hero">
            <div class="container">
                <div data-aos="fade-up">
                    <h1 style="font-size: 2rem; font-weight: 700;">User Profile</h1>
                </div>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="section" style="padding: 0 0 60px;">
            <div class="container">
                <div class="profile-card" data-aos="fade-up">
                    <div class="profile-header">
                        <img src="assets/img/testimonials/testimonials-1.jpg" alt="Profile" class="profile-avatar">

                        <div class="profile-info">
                            <h1 class="profile-name">Chioma Adeleke</h1>

                            <div class="profile-meta">
                                <span class="meta-badge">
                                    <i class="bi bi-geo-alt-fill"></i> Yaba, Lagos
                                </span>
                                <span class="meta-badge">
                                    <i class="bi bi-mortarboard-fill"></i> University of Lagos
                                </span>
                                <span class="meta-badge">
                                    <i class="bi bi-calendar-fill"></i> Joined Jan 2025
                                </span>
                                <span class="meta-badge" style="background: #d4edda; color: #155724;">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>

                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                                <div class="rating-stars" style="font-size: 1.2rem;">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <span style="font-weight: 600; color: #333;">4.8</span>
                                <span style="color: #666;">(28 reviews)</span>
                            </div>

                            <div class="profile-stats">
                                <div class="stat-box">
                                    <div class="stat-number">42</div>
                                    <div class="stat-label">Meals Hosted</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-number">156</div>
                                    <div class="stat-label">Participants Served</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">Success Rate</div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-number">₦45K</div>
                                    <div class="stat-label">Money Saved</div>
                                </div>
                            </div>

                            <div class="profile-actions">
                                <button class="btn-profile btn-primary-profile">
                                    <i class="bi bi-chat-dots-fill"></i> Send Message
                                </button>
                                <button class="btn-profile btn-secondary-profile">
                                    <i class="bi bi-flag-fill"></i> Report User
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- About Section -->
                    <div class="bio-section">
                        <h4 style="margin-bottom: 15px;"><i class="bi bi-person-fill" style="color: #ce1212;"></i> About
                            Me</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">
                            Hi! I'm Chioma, a final year student at UNILAG studying Computer Science. I love cooking and
                            sharing meals with others. I believe good food brings people together, and FoodAjo has been
                            an amazing platform to connect with fellow students while saving money. I specialize in
                            Nigerian dishes, especially jollof rice and soups. Looking forward to sharing more delicious
                            meals with you all! 🍲
                        </p>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs section-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#meals" type="button">
                                <i class="bi bi-calendar-check"></i> Meal History
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews" type="button">
                                <i class="bi bi-star"></i> Reviews (28)
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Meals Tab -->
                        <div class="tab-pane fade show active" id="meals">
                            <div class="meal-history-item">
                                <img src="assets/img/menu/menu-item-1.png" alt="Meal" class="meal-history-img">
                                <div class="meal-history-content">
                                    <div class="meal-history-title">Jollof Rice & Chicken</div>
                                    <div class="meal-history-meta">
                                        <i class="bi bi-calendar"></i> Jan 20, 2026 •
                                        <i class="bi bi-people"></i> 10 participants •
                                        <i class="bi bi-geo-alt"></i> Yaba, Lagos
                                    </div>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <span
                                            style="background: #d1ecf1; color: #0c5460; padding: 5px 12px; border-radius: 15px; font-size: 0.85rem; font-weight: 600;">
                                            <i class="bi bi-check-circle-fill"></i> Completed
                                        </span>
                                        <span style="font-weight: 600; color: #ce1212;">₦1,200 per person</span>
                                    </div>
                                </div>
                            </div>

                            <div class="meal-history-item">
                                <img src="assets/img/menu/menu-item-2.png" alt="Meal" class="meal-history-img">
                                <div class="meal-history-content">
                                    <div class="meal-history-title">Fried Rice & Turkey</div>
                                    <div class="meal-history-meta">
                                        <i class="bi bi-calendar"></i> Jan 15, 2026 •
                                        <i class="bi bi-people"></i> 8 participants •
                                        <i class="bi bi-geo-alt"></i> Surulere, Lagos
                                    </div>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <span
                                            style="background: #d1ecf1; color: #0c5460; padding: 5px 12px; border-radius: 15px; font-size: 0.85rem; font-weight: 600;">
                                            <i class="bi bi-check-circle-fill"></i> Completed
                                        </span>
                                        <span style="font-weight: 600; color: #ce1212;">₦1,500 per person</span>
                                    </div>
                                </div>
                            </div>

                            <div class="meal-history-item">
                                <img src="assets/img/menu/menu-item-3.png" alt="Meal" class="meal-history-img">
                                <div class="meal-history-content">
                                    <div class="meal-history-title">Yam & Egg Sauce</div>
                                    <div class="meal-history-meta">
                                        <i class="bi bi-calendar"></i> Jan 10, 2026 •
                                        <i class="bi bi-people"></i> 10 participants •
                                        <i class="bi bi-geo-alt"></i> Ikeja, Lagos
                                    </div>
                                    <div style="display: flex; gap: 10px; align-items: center;">
                                        <span
                                            style="background: #d1ecf1; color: #0c5460; padding: 5px 12px; border-radius: 15px; font-size: 0.85rem; font-weight: 600;">
                                            <i class="bi bi-check-circle-fill"></i> Completed
                                        </span>
                                        <span style="font-weight: 600; color: #ce1212;">₦800 per person</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews">
                            <div class="review-card">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="Reviewer"
                                            class="reviewer-avatar">
                                        <div>
                                            <div style="font-weight: 600; color: #333;">Tunde Bakare</div>
                                            <div style="font-size: 0.85rem; color: #666;">2 weeks ago</div>
                                        </div>
                                    </div>
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <p style="color: #666; margin: 0;">Amazing meal! The jollof was perfectly cooked and the
                                    portions were generous. Chioma is very organized and communicative. Highly
                                    recommend!</p>
                            </div>

                            <div class="review-card">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" alt="Reviewer"
                                            class="reviewer-avatar">
                                        <div>
                                            <div style="font-weight: 600; color: #333;">Amaka Johnson</div>
                                            <div style="font-size: 0.85rem; color: #666;">1 month ago</div>
                                        </div>
                                    </div>
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                                <p style="color: #666; margin: 0;">Great experience! The food was delicious and ready on
                                    time. Will definitely join again.</p>
                            </div>

                            <div class="review-card">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="assets/img/testimonials/testimonials-4.jpg" alt="Reviewer"
                                            class="reviewer-avatar">
                                        <div>
                                            <div style="font-weight: 600; color: #333;">Emeka Okonkwo</div>
                                            <div style="font-size: 0.85rem; color: #666;">1 month ago</div>
                                        </div>
                                    </div>
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <p style="color: #666; margin: 0;">Excellent! Chioma is a great cook and very
                                    professional. The meal was worth every naira. Thank you!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer dark-background">
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
    </script>

</body>

</html>