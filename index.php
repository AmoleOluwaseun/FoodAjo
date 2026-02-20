<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FoodAjo - Eat Better Together, Spend Less</title>
  <meta name="description"
    content="FoodAjo is a community meal-sharing platform for university students and budget-conscious individuals. Pool resources, eat better, spend less.">
  <meta name="keywords"
    content="foodajo, meal sharing, community meals, university students, group cooking, affordable meals, Nigeria">

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
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* How It Works Steps */
    .hiw-step-card {
      text-align: center;
      padding: 35px 20px;
      border-radius: 16px;
      background: white;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
      transition: all 0.3s;
      height: 100%;
    }

    .hiw-step-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 35px rgba(206, 18, 18, 0.15);
    }

    .hiw-step-number {
      width: 55px;
      height: 55px;
      background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      font-weight: 700;
      color: white;
      margin: 0 auto 20px;
    }

    .hiw-step-icon {
      width: 70px;
      height: 70px;
      background: #fff5f5;
      border-radius: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.2rem;
      color: #ce1212;
      margin: 0 auto 18px;
    }

    .hiw-step-card h4 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 12px;
    }

    .hiw-step-card p {
      color: #666;
      line-height: 1.7;
      margin: 0;
      font-size: 0.95rem;
    }

    /* Comparison Section */
    .comparison-card {
      background: white;
      border-radius: 20px;
      padding: 35px;
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
      white-space: nowrap;
    }

    .comparison-price {
      font-size: 2.8rem;
      font-weight: 700;
      margin: 18px 0;
    }

    .price-bad {
      color: #dc3545;
    }

    .price-good {
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
    .role-card {
      background: white;
      border-radius: 20px;
      padding: 35px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
      height: 100%;
      transition: all 0.3s;
    }

    .role-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .role-icon {
      width: 65px;
      height: 65px;
      background: #fff5f5;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: #ce1212;
      margin-bottom: 18px;
    }

    .role-card h4 {
      font-size: 1.3rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 12px;
    }

    .role-features {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .role-features li {
      padding: 7px 0;
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
    .faq-accordion .accordion-item {
      border: none;
      margin-bottom: 12px;
      border-radius: 12px !important;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .faq-accordion .accordion-button {
      font-weight: 600;
      font-size: 1.02rem;
      color: #333;
      padding: 18px 22px;
      background: white;
    }

    .faq-accordion .accordion-button:not(.collapsed) {
      background: #fff5f5;
      color: #ce1212;
      box-shadow: none;
    }

    .faq-accordion .accordion-button:focus {
      box-shadow: none;
    }

    .faq-accordion .accordion-body {
      color: #666;
      line-height: 1.8;
      padding: 18px 22px;
    }
  </style>

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">FoodAjo</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="browse-meals.php">Browse Meals</a></li>
          <li><a href="how-it-works.php">How It Works</a></li>
          <li class="dropdown"><a href="#"><span>Meals</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="create-meal.php">Create a Meal</a></li>
              <li><a href="my-meals.php">My Meals</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Eat Better Together,<br>Spend Less</h1>
            <p data-aos="fade-up" data-aos-delay="100">Pool resources with others, enjoy richer meals, and save money.
              Built for students and budget-conscious people.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="register.php" class="btn-get-started">Join FoodAjo</a>
              <a href="#how-it-works" class="glightbox btn-watch-video d-flex align-items-center"><i
                  class="bi bi-arrow-down-circle"></i><span>Learn How</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="FoodAjo - Community Meal Sharing">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- How It Works Section -->
    <section id="how-it-works" class="section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How It Works</h2>
        <p><span>Getting Started in</span> <span class="description-title">4 Easy Steps</span></p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="hiw-step-card">
              <div class="hiw-step-number">1</div>
              <div class="hiw-step-icon"><i class="bi bi-person-plus-fill"></i></div>
              <h4>Create an Account</h4>
              <p>Sign up with your email and tell us your university and location. Verification takes seconds.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="hiw-step-card">
              <div class="hiw-step-number">2</div>
              <div class="hiw-step-icon"><i class="bi bi-search"></i></div>
              <h4>Browse or Post a Meal</h4>
              <p>Browse available meals near you, or create a posting for a meal you want to prepare and share.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="hiw-step-card">
              <div class="hiw-step-number">3</div>
              <div class="hiw-step-icon"><i class="bi bi-cash-coin"></i></div>
              <h4>Contribute & Join</h4>
              <p>Contribute a small amount to the meal pool. Once enough people join, the cook begins preparing.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="hiw-step-card">
              <div class="hiw-step-number">4</div>
              <div class="hiw-step-icon"><i class="bi bi-emoji-smile-fill"></i></div>
              <h4>Enjoy Your Meal</h4>
              <p>Pick up your meal at the scheduled time, eat well, and leave a review for the organizer!</p>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /How It Works Section -->

    <!-- Why FoodAjo / Comparison Section -->
    <section id="why-foodajo" class="section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why FoodAjo</h2>
        <p><span>See Why</span> <span class="description-title">Pooling Makes Sense</span></p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="comparison-card">
              <h4 style="color: #666;">Eating Alone</h4>
              <div class="comparison-price price-bad">₦1,000</div>
              <p style="color: #666; margin-bottom: 20px;">What you get spending ₦1,000 by yourself</p>
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
              <h4 style="color: #ce1212; margin-top: 10px;">With FoodAjo</h4>
              <div class="comparison-price price-good">₦1,000</div>
              <p style="color: #666; margin-bottom: 20px;">What you get spending ₦1,000 with 9 others</p>
              <ul class="comparison-list">
                <li><i class="bi bi-check-circle-fill icon-yes"></i> Rich, generous portions</li>
                <li><i class="bi bi-check-circle-fill icon-yes"></i> Quality ingredients (₦10,000 total budget)</li>
                <li><i class="bi bi-check-circle-fill icon-yes"></i> Protein, sides, and extras included</li>
                <li><i class="bi bi-check-circle-fill icon-yes"></i> Different meals available daily</li>
                <li><i class="bi bi-check-circle-fill icon-yes"></i> Meet new people, build community</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /Why FoodAjo Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Active Users</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Meals Shared</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Universities</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>% Satisfaction</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Roles Section -->
    <section id="roles" class="section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Get Involved</h2>
        <p><span>Two Ways to</span> <span class="description-title">Use FoodAjo</span></p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="role-card">
              <div class="role-icon"><i class="bi bi-fire"></i></div>
              <h4>As a Meal Organizer</h4>
              <p style="color: #666; margin-bottom: 18px;">You love cooking and want to share your skills while earning
                from the convenience.</p>
              <ul class="role-features">
                <li><i class="bi bi-check2-circle"></i> Post a meal with photos, price, and time</li>
                <li><i class="bi bi-check2-circle"></i> Set the number of participants you can serve</li>
                <li><i class="bi bi-check2-circle"></i> Collect contributions through the platform</li>
                <li><i class="bi bi-check2-circle"></i> Build your reputation with reviews and ratings</li>
                <li><i class="bi bi-check2-circle"></i> Cook in bulk — save time and effort</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="role-card">
              <div class="role-icon"><i class="bi bi-people-fill"></i></div>
              <h4>As a Participant</h4>
              <p style="color: #666; margin-bottom: 18px;">You want to eat better without cooking or spending too much.
              </p>
              <ul class="role-features">
                <li><i class="bi bi-check2-circle"></i> Browse available meals in your area</li>
                <li><i class="bi bi-check2-circle"></i> Check organizer reviews before joining</li>
                <li><i class="bi bi-check2-circle"></i> Pay your small contribution securely</li>
                <li><i class="bi bi-check2-circle"></i> Leave notes for the organizer (e.g. spice level)</li>
                <li><i class="bi bi-check2-circle"></i> Pick up your meal and enjoy!</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /Roles Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Our <span class="description-title">Community Is Saying</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>FoodAjo changed how I eat at school. I used to eat plain bread and eggs every day. Now I
                          eat jollof rice, fried rice, and even pounded yam with egusi for just ₦1,000. It's
                          unbelievable!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Tunde Bakare</h3>
                      <h4>300L, University of Lagos</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>I love cooking for people and FoodAjo gives me a platform to do that while earning. I
                          hosted 12 meals last month and met so many amazing people on campus. Highly recommend!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Chioma Adeleke</h3>
                      <h4>Final Year, Computer Science</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>As a corper posted to a new city, I didn't know anyone. FoodAjo helped me find affordable
                          meals and connect with people in my area. It's more than food — it's community.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Amaka Johnson</h3>
                      <h4>NYSC Corps Member, Ilorin</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>I save over ₦15,000 a month using FoodAjo instead of buying food from vendors. The meals
                          are healthier, the portions are bigger, and the organizers are amazing cooks!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Emeka Okonkwo</h3>
                      <h4>200L, Yaba College of Technology</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events / Meal Ideas Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/events-1.jpg)">
              <h3>Campus Lunch Pools</h3>
              <div class="price align-self-start">From ₦500</div>
              <p class="description">
                Perfect for busy lecture days. Join a lunch pool and enjoy a hot, homemade meal between classes without
                breaking the bank.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/events-2.jpg)">
              <h3>Weekend Feast Groups</h3>
              <div class="price align-self-start">From ₦1,000</div>
              <p class="description">
                Saturday and Sunday are for special meals. Pool together for jollof rice, fried rice, pounded yam, and
                all the trimmings.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/events-3.jpg)">
              <h3>Study Group Meals</h3>
              <div class="price align-self-start">From ₦700</div>
              <p class="description">
                Fuel your study sessions with proper meals. Organizers prepare food while you focus on your books —
                brain food, sorted.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(assets/img/events-4.jpg)">
              <h3>Celebration Meals</h3>
              <div class="price align-self-start">From ₦1,500</div>
              <p class="description">
                Birthday, end of exams, or just because? Organize a special group meal and celebrate affordably with
                friends new and old.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- FAQ Section -->
    <section id="faq" class="section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>FAQ</h2>
        <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion faq-accordion" id="faqAccordion">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Is FoodAjo safe to use?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes! All users are verified and organizers have public profiles with ratings and reviews from
                    previous participants. We also recommend meeting in public or campus locations for meal pickups. All
                    payments go through the platform for security.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2">
                    What happens if a meal is cancelled?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    If a meal doesn't reach the minimum number of participants or the organizer cancels, all
                    contributions are automatically refunded to participants. No questions asked.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq3">
                    How do I know the food will be good?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Every organizer has a public profile showing their meal history, ratings, and reviews from past
                    participants. You can check their track record, success rate, and photos of previous meals before
                    joining.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq4">
                    Can I be both an organizer and a participant?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Absolutely! Many users cook and post meals some days, and join other people's meals on other days.
                    You can switch roles freely — there's no restriction.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq5">
                    How does payment work?
                  </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Participants pay their contribution through the platform when they join a meal. The organizer
                    receives the pooled funds once the meal is confirmed and the minimum participants have joined. We
                    use secure payment gateways to handle all transactions.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq6">
                    Do I have to be a university student?
                  </button>
                </h2>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Not at all! While FoodAjo was built with students in mind, anyone who wants to eat better for less
                    is welcome. Whether you're a student, a young professional, or anyone on a budget — you belong here.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section><!-- /FAQ Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0177734489784!2d3.3792057!3d6.5158438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c58aa4e0837%3A0x78e8a8d0a908db47!2sYaba%2C%20Lagos!5e0!3m2!1sen!2sng!4v1700000000000"
            frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Yaba, Lagos, Nigeria</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+234 800 123 4567</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>support@foodajo.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Support Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 8AM - 10PM; <strong>Sunday:</strong> 10AM - 6PM</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

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
            <p>
              <strong>Phone:</strong> <span>+234 800 123 4567</span><br>
              <strong>Email:</strong> <span>support@foodajo.com</span>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Support Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>8AM - 10PM</span><br>
              <strong>Sunday:</strong> <span>10AM - 6PM</span>
            </p>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">FoodAjo</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
          href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>