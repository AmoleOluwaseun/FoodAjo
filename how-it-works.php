<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>How It Works - FoodAjo</title>
    <meta name="description" content="Learn how FoodAjo helps you eat better for less by pooling resources with others">
    <meta name="keywords" content="foodajo, how it works, meal sharing, group meals">

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

        .hiw-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 100px 0 80px;
            color: white;
            text-align: center;
        }

        .hiw-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hiw-hero p {
            font-size: 1.2rem;
            opacity: 0.95;
            max-width: 650px;
            margin: 0 auto;
        }

        /* Steps Section */
        .steps-section {
            padding: 80px 0;
        }

        .step-card {
            text-align: center;
            padding: 40px 25px;
            border-radius: 20px;
            background: white;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            position: relative;
            height: 100%;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 35px rgba(206, 18, 18, 0.15);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin: 0 auto 25px;
        }

        .step-icon {
            width: 80px;
            height: 80px;
            background: #fff5f5;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #ce1212;
            margin: 0 auto 20px;
        }

        .step-card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .step-card p {
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        .step-connector {
            position: absolute;
            top: 50%;
            right: -30px;
            font-size: 2rem;
            color: #ce1212;
            display: none;
        }

        @media (min-width: 992px) {
            .step-connector {
                display: block;
            }
        }

        /* Comparison Section */
        .comparison-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .section-heading p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .comparison-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            text-align: center;
        }

        .comparison-card.highlight {
            border: 3px solid #ce1212;
            position: relative;
        }

        .comparison-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: #ce1212;
            color: white;
            padding: 5px 25px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .comparison-price {
            font-size: 3rem;
            font-weight: 700;
            margin: 20px 0;
        }

        .comparison-card .price-bad {
            color: #dc3545;
        }

        .comparison-card .price-good {
            color: #28a745;
        }

        .comparison-list {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .comparison-list li {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
        }

        .comparison-list li:last-child {
            border-bottom: none;
        }

        .comparison-list .icon-yes {
            color: #28a745;
            font-size: 1.2rem;
        }

        .comparison-list .icon-no {
            color: #dc3545;
            font-size: 1.2rem;
        }

        /* Roles Section */
        .roles-section {
            padding: 80px 0;
        }

        .role-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: all 0.3s;
        }

        .role-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .role-icon {
            width: 70px;
            height: 70px;
            background: #fff5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #ce1212;
            margin-bottom: 20px;
        }

        .role-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .role-features {
            list-style: none;
            padding: 0;
        }

        .role-features li {
            padding: 8px 0;
            color: #555;
            display: flex;
            align-items: start;
            gap: 10px;
        }

        .role-features li i {
            color: #ce1212;
            margin-top: 3px;
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 12px !important;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .accordion-button {
            font-weight: 600;
            font-size: 1.05rem;
            color: #333;
            padding: 20px 25px;
            background: white;
        }

        .accordion-button:not(.collapsed) {
            background: #fff5f5;
            color: #ce1212;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-body {
            color: #666;
            line-height: 1.8;
            padding: 20px 25px;
        }

        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            text-align: center;
            color: white;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.2rem;
            opacity: 0.95;
            margin-bottom: 30px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-cta {
            background: white;
            color: #ce1212;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
        }

        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: #ce1212;
        }

        .btn-cta-outline {
            background: transparent;
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: 2px solid white;
        }

        .btn-cta-outline:hover {
            background: white;
            color: #ce1212;
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
                    <li><a href="how-it-works.php" class="active">How It Works</a></li>
                    <li class="dropdown"><a href="#"><span>Meals</span> <i
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
        <section class="hiw-hero">
            <div class="container">
                <h1 data-aos="fade-up">How FoodAjo Works</h1>
                <p data-aos="fade-up" data-aos-delay="100">Pool your resources with others, eat better meals, and spend
                    less. It's that simple.</p>
            </div>
        </section>

        <!-- Steps Section -->
        <section class="steps-section">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <h2>Getting Started in 4 Easy Steps</h2>
                    <p>From sign-up to your first meal, it takes less than 5 minutes</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-card">
                            <div class="step-number">1</div>
                            <div class="step-icon"><i class="bi bi-person-plus-fill"></i></div>
                            <h3>Create an Account</h3>
                            <p>Sign up with your email and tell us your university and location. Verification takes
                                seconds.</p>
                            <i class="bi bi-arrow-right step-connector"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-card">
                            <div class="step-number">2</div>
                            <div class="step-icon"><i class="bi bi-search"></i></div>
                            <h3>Browse or Post</h3>
                            <p>Browse available meals near you, or create a posting for a meal you want to prepare and
                                share.</p>
                            <i class="bi bi-arrow-right step-connector"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-card">
                            <div class="step-number">3</div>
                            <div class="step-icon"><i class="bi bi-cash-coin"></i></div>
                            <h3>Contribute & Join</h3>
                            <p>Contribute a small amount to the meal pool. Once enough people join, the cook begins
                                preparing.</p>
                            <i class="bi bi-arrow-right step-connector"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-card">
                            <div class="step-number">4</div>
                            <div class="step-icon"><i class="bi bi-emoji-smile-fill"></i></div>
                            <h3>Enjoy Your Meal</h3>
                            <p>Pick up your meal at the scheduled time, eat well, and leave a review for the organizer!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comparison Section -->
        <section class="comparison-section">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <h2>Why Pooling Makes Sense</h2>
                    <p>See how much better you eat when you share the cost with others</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="comparison-card">
                            <h3 style="color: #666;">Eating Alone</h3>
                            <div class="comparison-price price-bad">₦1,000</div>
                            <p style="color: #666; margin-bottom: 25px;">What you get spending ₦1,000 by yourself</p>
                            <ul class="comparison-list">
                                <li><i class="bi bi-x-circle-fill icon-no"></i> Small portion, basic ingredients</li>
                                <li><i class="bi bi-x-circle-fill icon-no"></i> Limited variety</li>
                                <li><i class="bi bi-x-circle-fill icon-no"></i> No protein or sides</li>
                                <li><i class="bi bi-x-circle-fill icon-no"></i> Monotonous meals daily</li>
                                <li><i class="bi bi-x-circle-fill icon-no"></i> No community connection</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="comparison-card highlight">
                            <span class="comparison-badge"><i class="bi bi-star-fill"></i> FoodAjo Way</span>
                            <h3 style="color: #ce1212; margin-top: 10px;">With FoodAjo</h3>
                            <div class="comparison-price price-good">₦1,000</div>
                            <p style="color: #666; margin-bottom: 25px;">What you get spending ₦1,000 with 9 others</p>
                            <ul class="comparison-list">
                                <li><i class="bi bi-check-circle-fill icon-yes"></i> Rich, generous portions</li>
                                <li><i class="bi bi-check-circle-fill icon-yes"></i> Quality ingredients (₦10,000 total
                                    budget)</li>
                                <li><i class="bi bi-check-circle-fill icon-yes"></i> Protein, sides, and extras included
                                </li>
                                <li><i class="bi bi-check-circle-fill icon-yes"></i> Different meals available daily
                                </li>
                                <li><i class="bi bi-check-circle-fill icon-yes"></i> Meet new people, build community
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Roles Section -->
        <section class="roles-section">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <h2>Two Ways to Use FoodAjo</h2>
                    <p>Whether you love cooking or just love eating well, there's a role for you</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="role-card">
                            <div class="role-icon"><i class="bi bi-fire"></i></div>
                            <h3>As a Meal Organizer</h3>
                            <p style="color: #666; margin-bottom: 20px;">You love cooking and want to share your skills
                                while earning from the convenience.</p>
                            <ul class="role-features">
                                <li><i class="bi bi-check2-circle"></i> Post a meal with photos, price, and time</li>
                                <li><i class="bi bi-check2-circle"></i> Set the number of participants you can serve
                                </li>
                                <li><i class="bi bi-check2-circle"></i> Collect contributions through the platform</li>
                                <li><i class="bi bi-check2-circle"></i> Build your reputation with reviews and ratings
                                </li>
                                <li><i class="bi bi-check2-circle"></i> Cook in bulk — save time and effort</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="role-card">
                            <div class="role-icon"><i class="bi bi-people-fill"></i></div>
                            <h3>As a Participant</h3>
                            <p style="color: #666; margin-bottom: 20px;">You want to eat better without cooking or
                                spending too much.</p>
                            <ul class="role-features">
                                <li><i class="bi bi-check2-circle"></i> Browse available meals in your area</li>
                                <li><i class="bi bi-check2-circle"></i> Check organizer reviews before joining</li>
                                <li><i class="bi bi-check2-circle"></i> Pay your small contribution securely</li>
                                <li><i class="bi bi-check2-circle"></i> Leave notes for the organizer (e.g. spice level)
                                </li>
                                <li><i class="bi bi-check2-circle"></i> Pick up your meal and enjoy!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                    <p>Everything you need to know before getting started</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1">
                                        Is FoodAjo safe to use?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes! All users are verified and organizers have public profiles with ratings and
                                        reviews from previous participants. We also recommend meeting in public or
                                        campus locations for meal pickups. All payments go through the platform for
                                        security.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2">
                                        What happens if a meal is cancelled?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        If a meal doesn't reach the minimum number of participants or the organizer
                                        cancels, all contributions are automatically refunded to participants. No
                                        questions asked.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3">
                                        How do I know the food will be good?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Every organizer has a public profile showing their meal history, ratings, and
                                        reviews from past participants. You can check their track record, success rate,
                                        and photos of previous meals before joining. Start with highly-rated organizers!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq4">
                                        Can I be both an organizer and a participant?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Absolutely! Many users cook and post meals some days, and join other people's
                                        meals on other days. You can switch roles freely — there's no restriction.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq5">
                                        How does payment work?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Participants pay their contribution through the platform when they join a meal.
                                        The organizer receives the pooled funds once the meal is confirmed and the
                                        minimum participants have joined. We use secure payment gateways to handle all
                                        transactions.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="350">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq6">
                                        Do I have to be a university student?
                                    </button>
                                </h2>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Not at all! While FoodAjo was built with students in mind, anyone who wants to
                                        eat better for less is welcome. Whether you're a student, a young professional,
                                        or anyone on a budget — you belong here.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container" data-aos="fade-up">
                <h2>Ready to Eat Better for Less?</h2>
                <p>Join thousands of students already saving money and enjoying delicious meals together</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="register.php" class="btn-cta"><i class="bi bi-rocket-takeoff-fill"></i> Get Started
                        Free</a>
                    <a href="browse-meals.php" class="btn-cta-outline"><i class="bi bi-search"></i> Browse Meals</a>
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
            <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">FoodAjo</strong> <span>All Rights
                    Reserved</span></p>
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