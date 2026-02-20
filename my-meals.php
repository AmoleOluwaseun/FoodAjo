<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>My Meals - FoodAjo</title>
    <meta name="description" content="Manage your meals on FoodAjo">
    <meta name="keywords" content="foodajo, my meals">

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

        .page-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 80px 0 40px;
            color: white;
        }

        .nav-pills {
            background: white;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .nav-pills .nav-link {
            border-radius: 10px;
            padding: 12px 25px;
            color: #666;
            font-weight: 600;
            transition: all 0.3s;
        }

        .nav-pills .nav-link:hover {
            background: #fff5f5;
            color: #ce1212;
        }

        .nav-pills .nav-link.active {
            background: #ce1212;
            color: white;
        }

        .meal-card-full {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
            transition: all 0.3s;
        }

        .meal-card-full:hover {
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .meal-card-body {
            padding: 25px;
        }

        .meal-card-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 15px;
        }

        .meal-title-full {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }

        .meal-meta-full {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 15px;
            color: #666;
            font-size: 0.9rem;
        }

        .meta-item-full {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .meta-item-full i {
            color: #ce1212;
        }

        .participants-section {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .participants-avatars {
            display: flex;
            margin-bottom: 10px;
        }

        .participant-avatar-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 2px solid white;
            margin-left: -10px;
        }

        .participant-avatar-small:first-child {
            margin-left: 0;
        }

        .progress-bar-meal {
            height: 8px;
            background: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 8px;
        }

        .progress-fill-meal {
            height: 100%;
            background: linear-gradient(90deg, #ce1212, #ff6b6b);
        }

        .meal-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-action {
            padding: 8px 20px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-view {
            background: #f8f9fa;
            color: #333;
        }

        .btn-view:hover {
            background: #e0e0e0;
        }

        .btn-edit {
            background: #fff5f5;
            color: #ce1212;
        }

        .btn-edit:hover {
            background: #ce1212;
            color: white;
        }

        .btn-cancel {
            background: #fff3cd;
            color: #856404;
        }

        .btn-cancel:hover {
            background: #856404;
            color: white;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state h4 {
            color: #666;
            margin-bottom: 15px;
        }

        .badge-pill {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
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
                    <li><a href="how-it-works.php">How It Works</a></li>
                    <li class="dropdown"><a href="#" class="active"><span>Meals</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="create-meal.php">Create a Meal</a></li>
                            <li><a href="my-meals.php">My Meals</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Account</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="profile.php">My Profile</a></li>
                            <li><a href="edit-profile.php">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="login.php">Login</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section class="page-hero">
            <div class="container">
                <h1 data-aos="fade-up" style="font-size: 2.5rem; font-weight: 700;">My Meals</h1>
                <p data-aos="fade-up" data-aos-delay="100" style="font-size: 1.1rem; opacity: 0.95;">Manage all your
                    meal postings and participations</p>
            </div>
        </section>

        <!-- Content Section -->
        <section class="section" style="padding: 60px 0;">
            <div class="container">
                <!-- Navigation Pills -->
                <ul class="nav nav-pills justify-content-center" data-aos="fade-up">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#hosting">
                            <i class="bi bi-calendar-plus"></i> Meals I'm Hosting (3)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#joined">
                            <i class="bi bi-people"></i> Meals I've Joined (5)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#past">
                            <i class="bi bi-clock-history"></i> Past Meals (12)
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Hosting Tab -->
                    <div class="tab-pane fade show active" id="hosting">
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <div class="meal-card-full">
                                    <div class="meal-card-body">
                                        <div class="meal-card-header">
                                            <div style="flex: 1;">
                                                <div class="meal-title-full">Jollof Rice & Chicken</div>
                                                <div class="meal-meta-full">
                                                    <span class="meta-item-full"><i class="bi bi-calendar"></i> Today,
                                                        6:00 PM</span>
                                                    <span class="meta-item-full"><i class="bi bi-geo-alt"></i> Yaba,
                                                        Lagos</span>
                                                    <span class="meta-item-full"><i class="bi bi-cash"></i> ₦1,200 per
                                                        person</span>
                                                </div>
                                            </div>
                                            <span class="badge-pill" style="background: #d4edda; color: #155724;">
                                                <i class="bi bi-check-circle"></i> Open
                                            </span>
                                        </div>

                                        <div class="participants-section">
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                <strong style="color: #333;">Participants</strong>
                                                <span style="color: #666; font-size: 0.9rem;">4 of 10 joined</span>
                                            </div>
                                            <div class="participants-avatars">
                                                <img src="assets/img/testimonials/testimonials-2.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <img src="assets/img/testimonials/testimonials-3.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <img src="assets/img/chefs/chefs-1.jpg" class="participant-avatar-small"
                                                    alt="Participant">
                                                <div class="participant-avatar-small"
                                                    style="background: #f0f0f0; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; color: #666;">
                                                    +6</div>
                                            </div>
                                            <div class="progress-bar-meal">
                                                <div class="progress-fill-meal" style="width: 40%;"></div>
                                            </div>
                                            <div style="font-size: 0.85rem; color: #666;">₦4,800 of ₦12,000 raised</div>
                                        </div>

                                        <div class="meal-actions">
                                            <button class="btn-action btn-view"
                                                onclick="window.location.href='meal-details.php?id=1'">
                                                <i class="bi bi-eye"></i> View Details
                                            </button>
                                            <button class="btn-action btn-edit">
                                                <i class="bi bi-pencil"></i> Edit
                                            </button>
                                            <button class="btn-action btn-cancel">
                                                <i class="bi bi-x-circle"></i> Cancel Meal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                                <div class="meal-card-full">
                                    <div class="meal-card-body">
                                        <div class="meal-card-header">
                                            <div style="flex: 1;">
                                                <div class="meal-title-full">Fried Rice & Turkey</div>
                                                <div class="meal-meta-full">
                                                    <span class="meta-item-full"><i class="bi bi-calendar"></i>
                                                        Tomorrow, 1:00 PM</span>
                                                    <span class="meta-item-full"><i class="bi bi-geo-alt"></i> Surulere,
                                                        Lagos</span>
                                                    <span class="meta-item-full"><i class="bi bi-cash"></i> ₦1,500 per
                                                        person</span>
                                                </div>
                                            </div>
                                            <span class="badge-pill" style="background: #fff3cd; color: #856404;">
                                                <i class="bi bi-people"></i> Full
                                            </span>
                                        </div>

                                        <div class="participants-section">
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                                <strong style="color: #333;">Participants</strong>
                                                <span style="color: #666; font-size: 0.9rem;">10 of 10 joined</span>
                                            </div>
                                            <div class="participants-avatars">
                                                <img src="assets/img/testimonials/testimonials-1.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <img src="assets/img/testimonials/testimonials-2.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <img src="assets/img/testimonials/testimonials-3.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                                    class="participant-avatar-small" alt="Participant">
                                                <div class="participant-avatar-small"
                                                    style="background: #f0f0f0; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; color: #666;">
                                                    +6</div>
                                            </div>
                                            <div class="progress-bar-meal">
                                                <div class="progress-fill-meal" style="width: 100%;"></div>
                                            </div>
                                            <div style="font-size: 0.85rem; color: #666;">₦15,000 of ₦15,000 raised
                                            </div>
                                        </div>

                                        <div class="meal-actions">
                                            <button class="btn-action btn-view"
                                                onclick="window.location.href='meal-details.php?id=2'">
                                                <i class="bi bi-eye"></i> View Details
                                            </button>
                                            <button class="btn-action btn-edit">
                                                <i class="bi bi-pencil"></i> Edit
                                            </button>
                                            <button class="btn-action" style="background: #d4edda; color: #155724;">
                                                <i class="bi bi-check-circle"></i> Mark as Complete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Joined Tab -->
                    <div class="tab-pane fade" id="joined">
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <div class="meal-card-full">
                                    <div class="meal-card-body">
                                        <div class="meal-card-header">
                                            <div style="flex: 1;">
                                                <div class="meal-title-full">Beans & Plantain</div>
                                                <div style="font-size: 0.9rem; color: #666; margin-bottom: 10px;">
                                                    Organized by <a href="profile.php?id=2"
                                                        style="color: #ce1212; text-decoration: none; font-weight: 600;">Emeka
                                                        Okonkwo</a>
                                                </div>
                                                <div class="meal-meta-full">
                                                    <span class="meta-item-full"><i class="bi bi-calendar"></i> Today,
                                                        2:00 PM</span>
                                                    <span class="meta-item-full"><i class="bi bi-geo-alt"></i> Lekki,
                                                        Lagos</span>
                                                    <span class="meta-item-full"><i class="bi bi-cash"></i> ₦1,000 per
                                                        person</span>
                                                </div>
                                            </div>
                                            <span class="badge-pill" style="background: #d4edda; color: #155724;">
                                                <i class="bi bi-check-circle"></i> Paid
                                            </span>
                                        </div>

                                        <div class="meal-actions">
                                            <button class="btn-action btn-view"
                                                onclick="window.location.href='meal-details.php?id=4'">
                                                <i class="bi bi-eye"></i> View Details
                                            </button>
                                            <button class="btn-action" style="background: #e7f5ff; color: #0066cc;">
                                                <i class="bi bi-chat-dots"></i> Message Organizer
                                            </button>
                                            <button class="btn-action btn-cancel">
                                                <i class="bi bi-x-circle"></i> Leave Meal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Tab -->
                    <div class="tab-pane fade" id="past">
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <div class="meal-card-full">
                                    <div class="meal-card-body">
                                        <div class="meal-card-header">
                                            <div style="flex: 1;">
                                                <div class="meal-title-full">Egusi Soup & Pounded Yam</div>
                                                <div class="meal-meta-full">
                                                    <span class="meta-item-full"><i class="bi bi-calendar"></i> Jan 20,
                                                        2026</span>
                                                    <span class="meta-item-full"><i class="bi bi-geo-alt"></i> Yaba,
                                                        Lagos</span>
                                                    <span class="meta-item-full"><i class="bi bi-cash"></i> ₦1,800 per
                                                        person</span>
                                                </div>
                                            </div>
                                            <span class="badge-pill" style="background: #d1ecf1; color: #0c5460;">
                                                <i class="bi bi-check-circle"></i> Completed
                                            </span>
                                        </div>

                                        <div
                                            style="background: #f8f9fa; padding: 15px; border-radius: 10px; margin-bottom: 15px;">
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: center;">
                                                <span style="color: #666;">10 participants • All paid</span>
                                                <span style="font-weight: 600; color: #28a745;">₦18,000 raised</span>
                                            </div>
                                        </div>

                                        <div class="meal-actions">
                                            <button class="btn-action btn-view"
                                                onclick="window.location.href='meal-details.php?id=5'">
                                                <i class="bi bi-eye"></i> View Details
                                            </button>
                                            <button class="btn-action" style="background: #fff9e6; color: #856404;">
                                                <i class="bi bi-star"></i> Leave Review
                                            </button>
                                            <button class="btn-action" style="background: #e7ffe7; color: #28a745;">
                                                <i class="bi bi-arrow-repeat"></i> Create Similar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div class="address">
                        <h4>Address</h4>
                        <p>Yaba, Lagos</p>
                        <p>Nigeria</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Contact</h4>
                        <p><strong>Phone:</strong> <span>+234 800 123 4567</span><br><strong>Email:</strong>
                            <span>support@foodajo.com</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Support Hours</h4>
                        <p><strong>Mon-Sat:</strong> <span>8AM - 10PM</span><br><strong>Sunday:</strong> <span>10AM -
                                6PM</span></p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mt-3">
                <div class="col-lg-4 col-md-6">
                    <h4>Quick Links</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 8px;"><a href="browse-meals.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">Browse Meals</a></li>
                        <li style="margin-bottom: 8px;"><a href="how-it-works.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">How It Works</a></li>
                        <li style="margin-bottom: 8px;"><a href="create-meal.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">Create a Meal</a></li>
                        <li style="margin-bottom: 8px;"><a href="register.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Account</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 8px;"><a href="dashboard.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">Dashboard</a></li>
                        <li style="margin-bottom: 8px;"><a href="my-meals.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">My Meals</a></li>
                        <li style="margin-bottom: 8px;"><a href="profile.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">My Profile</a></li>
                        <li style="margin-bottom: 8px;"><a href="login.php"
                                style="color: rgba(255,255,255,0.7); text-decoration: none;">Login</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">FoodAjo</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href="https://themewagon.com">ThemeWagon</a>
            </div>
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