<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - FoodAjo</title>
    <meta name="description" content="Your FoodAjo Dashboard">
    <meta name="keywords" content="foodajo, dashboard">

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

        .dashboard-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 40px 0;
            color: white;
        }

        .user-welcome {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 0.95rem;
        }

        .section-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            margin: 0;
        }

        .activity-item {
            display: flex;
            gap: 15px;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            background: #f8f9fa;
            transition: all 0.3s;
        }

        .activity-item:hover {
            background: #fff5f5;
        }

        .activity-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .activity-time {
            font-size: 0.85rem;
            color: #999;
        }

        .meal-mini-card {
            border: 2px solid #f0f0f0;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 15px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .meal-mini-card:hover {
            border-color: #ce1212;
            background: #fff5f5;
        }

        .meal-mini-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 10px;
        }

        .meal-mini-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .meal-mini-meta {
            font-size: 0.85rem;
            color: #666;
        }

        .badge-status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .badge-open {
            background: #d4edda;
            color: #155724;
        }

        .badge-full {
            background: #fff3cd;
            color: #856404;
        }

        .badge-completed {
            background: #d1ecf1;
            color: #0c5460;
        }

        .quick-action {
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .quick-action:hover {
            border-color: #ce1212;
            background: #fff5f5;
            transform: translateY(-3px);
            color: #ce1212;
        }

        .quick-action i {
            font-size: 2.5rem;
            color: #ce1212;
            margin-bottom: 10px;
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
                    <li><a href="dashboard.php" class="active">Dashboard</a></li>
                    <li><a href="my-meals.php">My Meals</a></li>
                    <li><a href="messages.php">Messages <span class="badge bg-danger">3</span></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="dropdown">
                <a class="btn-getstarted dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i> Chioma
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                    <li><a class="dropdown-item" href="edit-profile.php">Settings</a></li>
                    <li><a class="dropdown-item" href="payments.php">Payment History</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section class="dashboard-hero">
            <div class="container">
                <div class="user-welcome" data-aos="fade-up">
                    <img src="assets/img/testimonials/testimonials-1.jpg" alt="User" class="user-avatar">
                    <div>
                        <h1 style="font-size: 2rem; margin-bottom: 5px;">Welcome back, Chioma! 👋</h1>
                        <p style="margin: 0; opacity: 0.95;">Here's what's happening with your meals today</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="section" style="padding: 40px 0;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="stat-card">
                            <div class="stat-icon" style="background: #fff5f5; color: #ce1212;">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <div class="stat-number">12</div>
                            <div class="stat-label">Meals Hosted</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-card">
                            <div class="stat-icon" style="background: #e7f5ff; color: #0066cc;">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="stat-number">28</div>
                            <div class="stat-label">Meals Joined</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-card">
                            <div class="stat-icon" style="background: #e7ffe7; color: #28a745;">
                                <i class="bi bi-piggy-bank-fill"></i>
                            </div>
                            <div class="stat-number">₦45K</div>
                            <div class="stat-label">Money Saved</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-card">
                            <div class="stat-icon" style="background: #fff9e6; color: #ffc107;">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="stat-number">4.8</div>
                            <div class="stat-label">Average Rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="section" style="padding: 0 0 60px;">
            <div class="container">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-8">
                        <!-- Active Meals -->
                        <div class="section-card" data-aos="fade-up">
                            <div class="section-header">
                                <h3 class="section-title">Active Meals</h3>
                                <a href="my-meals.php"
                                    style="color: #ce1212; text-decoration: none; font-weight: 600;">View All <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>

                            <div class="meal-mini-card" onclick="window.location.href='meal-details.php?id=1'">
                                <div class="meal-mini-header">
                                    <div>
                                        <div class="meal-mini-title">Jollof Rice & Chicken</div>
                                        <div class="meal-mini-meta"><i class="bi bi-clock"></i> Today, 6:00 PM • <i
                                                class="bi bi-geo-alt"></i> Yaba</div>
                                    </div>
                                    <span class="badge-status badge-open">6 spots left</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-weight: 600; color: #ce1212;">₦1,200 per person</span>
                                    <span style="font-size: 0.85rem; color: #666;">4/10 participants</span>
                                </div>
                            </div>

                            <div class="meal-mini-card" onclick="window.location.href='meal-details.php?id=2'">
                                <div class="meal-mini-header">
                                    <div>
                                        <div class="meal-mini-title">Fried Rice & Turkey</div>
                                        <div class="meal-mini-meta"><i class="bi bi-clock"></i> Tomorrow, 1:00 PM • <i
                                                class="bi bi-geo-alt"></i> Surulere</div>
                                    </div>
                                    <span class="badge-status badge-full">Full</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-weight: 600; color: #ce1212;">₦1,500 per person</span>
                                    <span style="font-size: 0.85rem; color: #666;">10/10 participants</span>
                                </div>
                            </div>

                            <div class="meal-mini-card" onclick="window.location.href='meal-details.php?id=3'">
                                <div class="meal-mini-header">
                                    <div>
                                        <div class="meal-mini-title">Yam & Egg Sauce</div>
                                        <div class="meal-mini-meta"><i class="bi bi-clock"></i> Jan 25, 8:00 AM • <i
                                                class="bi bi-geo-alt"></i> Ikeja</div>
                                    </div>
                                    <span class="badge-status badge-open">8 spots left</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-weight: 600; color: #ce1212;">₦800 per person</span>
                                    <span style="font-size: 0.85rem; color: #666;">2/10 participants</span>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity -->
                        <div class="section-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="section-header">
                                <h3 class="section-title">Recent Activity</h3>
                            </div>

                            <div class="activity-item">
                                <div class="activity-icon" style="background: #e7f5ff; color: #0066cc;">
                                    <i class="bi bi-person-plus-fill"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Tunde joined your "Jollof Rice & Chicken" meal</div>
                                    <div class="activity-time">2 hours ago</div>
                                </div>
                            </div>

                            <div class="activity-item">
                                <div class="activity-icon" style="background: #e7ffe7; color: #28a745;">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Payment received for "Fried Rice & Turkey"</div>
                                    <div class="activity-time">5 hours ago</div>
                                </div>
                            </div>

                            <div class="activity-item">
                                <div class="activity-icon" style="background: #fff9e6; color: #ffc107;">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Amaka left you a 5-star review</div>
                                    <div class="activity-time">1 day ago</div>
                                </div>
                            </div>

                            <div class="activity-item">
                                <div class="activity-icon" style="background: #fff5f5; color: #ce1212;">
                                    <i class="bi bi-calendar-plus-fill"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">You created a new meal posting</div>
                                    <div class="activity-time">2 days ago</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-4">
                        <!-- Quick Actions -->
                        <div class="section-card" data-aos="fade-left">
                            <h3 class="section-title" style="margin-bottom: 20px;">Quick Actions</h3>

                            <div class="row g-3">
                                <div class="col-6">
                                    <a href="create-meal.php" class="quick-action">
                                        <i class="bi bi-plus-circle-fill"></i>
                                        <div style="font-weight: 600;">Create Meal</div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="browse-meals.php" class="quick-action">
                                        <i class="bi bi-search"></i>
                                        <div style="font-weight: 600;">Browse Meals</div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="messages.php" class="quick-action">
                                        <i class="bi bi-chat-dots-fill"></i>
                                        <div style="font-weight: 600;">Messages</div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="payments.php" class="quick-action">
                                        <i class="bi bi-wallet2"></i>
                                        <div style="font-weight: 600;">Payments</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Meals -->
                        <div class="section-card" data-aos="fade-left" data-aos-delay="100">
                            <h3 class="section-title" style="margin-bottom: 20px;">Upcoming Meals</h3>

                            <div style="padding: 15px; background: #f8f9fa; border-radius: 10px; margin-bottom: 15px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                    <span style="font-weight: 600; color: #333;">Today</span>
                                    <span style="color: #ce1212; font-weight: 600;">6:00 PM</span>
                                </div>
                                <div style="font-size: 0.9rem; color: #666;">Jollof Rice & Chicken</div>
                            </div>

                            <div style="padding: 15px; background: #f8f9fa; border-radius: 10px; margin-bottom: 15px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                    <span style="font-weight: 600; color: #333;">Tomorrow</span>
                                    <span style="color: #ce1212; font-weight: 600;">1:00 PM</span>
                                </div>
                                <div style="font-size: 0.9rem; color: #666;">Fried Rice & Turkey</div>
                            </div>

                            <div style="padding: 15px; background: #f8f9fa; border-radius: 10px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                    <span style="font-weight: 600; color: #333;">Jan 25</span>
                                    <span style="color: #ce1212; font-weight: 600;">8:00 AM</span>
                                </div>
                                <div style="font-size: 0.9rem; color: #666;">Yam & Egg Sauce</div>
                            </div>
                        </div>

                        <!-- Tips -->
                        <div class="section-card" data-aos="fade-left" data-aos-delay="200"
                            style="background: linear-gradient(135deg, #ce1212, #ff6b6b); color: white;">
                            <h3 style="color: white; margin-bottom: 15px;"><i class="bi bi-lightbulb-fill"></i> Pro Tip
                            </h3>
                            <p style="margin: 0; opacity: 0.95;">Upload clear photos of your meals to attract more
                                participants. Meals with photos get 3x more joins!</p>
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