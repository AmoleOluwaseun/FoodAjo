<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Meal Details - FoodAjo</title>
    <meta name="description" content="View meal details">
    <meta name="keywords" content="foodajo, meal details">

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

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .meal-hero {
            height: 500px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .meal-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7));
        }

        .meal-hero-content {
            position: relative;
            z-index: 2;
            color: white;
            padding-top: 150px;
        }

        .meal-badge {
            background: #ce1212;
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
        }

        .detail-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .detail-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: #fff5f5;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ce1212;
            font-size: 1.5rem;
        }

        .info-content h6 {
            margin: 0;
            font-size: 0.85rem;
            color: #666;
        }

        .info-content p {
            margin: 0;
            font-weight: 600;
            color: #333;
            font-size: 1rem;
        }

        .organizer-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .organizer-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .organizer-stats {
            display: flex;
            gap: 25px;
            margin-top: 10px;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: #ce1212;
        }

        .stat-label {
            font-size: 0.8rem;
            color: #666;
        }

        .participant-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .participant-item:last-child {
            border-bottom: none;
        }

        .participant-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

        .progress-bar-custom {
            height: 12px;
            border-radius: 10px;
            background: #f0f0f0;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #ce1212, #ff6b6b);
            transition: width 0.3s;
        }

        .price-box {
            background: linear-gradient(135deg, #ce1212, #ff6b6b);
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        .price-amount {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .btn-join-large {
            background: white;
            color: #ce1212;
            border: none;
            padding: 15px 40px;
            border-radius: 10px;
            width: 100%;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .btn-join-large:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .share-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-share {
            flex: 1;
            padding: 10px;
            border: 2px solid white;
            background: transparent;
            color: white;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-share:hover {
            background: white;
            color: #ce1212;
        }

        .review-item {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .review-item:last-child {
            border-bottom: none;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .review-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .review-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .review-rating {
            color: #ffc107;
        }

        /* Share Modal Styles */
        .share-modal-body {
            padding: 25px;
            text-align: center;
        }

        .share-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 25px 0;
            flex-wrap: wrap;
        }

        .share-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #333;
            transition: transform 0.3s;
        }

        .share-option:hover {
            transform: translateY(-5px);
            color: #ce1212;
        }

        .share-icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            transition: all 0.3s;
        }

        .share-option:hover .share-icon-wrapper {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .bg-whatsapp {
            background-color: #25D366;
        }

        .bg-instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }

        .bg-facebook {
            background-color: #1877F2;
        }

        .bg-copy {
            background-color: #6c757d;
        }

        .copy-link-input {
            display: flex;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 5px;
            margin-top: 15px;
        }

        .copy-link-input input {
            border: none;
            background: transparent;
            flex: 1;
            padding: 8px;
            outline: none;
            color: #666;
            font-size: 0.9rem;
        }

        .copy-link-input button {
            border: none;
            background: #333;
            color: white;
            padding: 5px 15px;
            border-radius: 6px;
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
        <section class="meal-hero" style="background-image: url('assets/img/menu/menu-item-1.png');">
            <div class="container meal-hero-content">
                <div data-aos="fade-up">
                    <span class="meal-badge">6 spots available</span>
                    <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 15px;">Jollof Rice & Chicken</h1>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><i class="bi bi-geo-alt-fill"></i> Yaba, Lagos •
                        <i class="bi bi-clock-fill"></i> Today, 6:00 PM
                    </p>
                </div>
            </div>
        </section>

        <!-- Details Section -->
        <section class="section" style="padding: 60px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Meal Info -->
                        <div class="detail-card" data-aos="fade-up">
                            <h2 class="detail-title">Meal Details</h2>
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-icon"><i class="bi bi-people-fill"></i></div>
                                    <div class="info-content">
                                        <h6>Participants</h6>
                                        <p>4 / 10 Joined</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-icon"><i class="bi bi-calendar-check"></i></div>
                                    <div class="info-content">
                                        <h6>Preparation Date</h6>
                                        <p>Jan 23, 2026</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-icon"><i class="bi bi-clock"></i></div>
                                    <div class="info-content">
                                        <h6>Preparation Time</h6>
                                        <p>6:00 PM</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-icon"><i class="bi bi-geo-alt"></i></div>
                                    <div class="info-content">
                                        <h6>Location</h6>
                                        <p>Yaba, Lagos</p>
                                    </div>
                                </div>
                            </div>

                            <h4 style="margin-bottom: 15px;">Description</h4>
                            <p style="color: #666; line-height: 1.8;">
                                Join me for a delicious pot of authentic Nigerian Jollof Rice with grilled chicken! I'm
                                preparing a large batch and looking for 9 others to share the cost. The meal will
                                include perfectly seasoned jollof rice, grilled chicken, fried plantain, and coleslaw.
                                <br><br>
                                This is perfect for students or anyone looking to enjoy a quality meal without breaking
                                the bank. By pooling our resources, we can afford better ingredients and larger
                                portions. The meal will be ready for pickup at 6:00 PM today.
                            </p>

                            <div class="progress-bar-custom" style="margin-top: 25px;">
                                <div class="progress-fill" style="width: 40%;"></div>
                            </div>
                            <p style="font-size: 0.9rem; color: #666;">40% funded • ₦4,800 of ₦12,000 raised</p>
                        </div>

                        <!-- Organizer Info -->
                        <div class="detail-card" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="detail-title">About the Organizer</h2>
                            <div class="organizer-card">
                                <img src="assets/img/testimonials/testimonials-1.jpg" alt="Organizer"
                                    class="organizer-avatar">
                                <div style="flex: 1;">
                                    <h4 style="margin-bottom: 5px;">Chioma Adeleke</h4>
                                    <div style="color: #ffc107; margin-bottom: 10px;">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span style="color: #666; margin-left: 5px;">4.5 (28 reviews)</span>
                                    </div>
                                    <p style="color: #666; margin-bottom: 15px;">UNILAG Student • Member since Jan 2025
                                    </p>
                                    <div class="organizer-stats">
                                        <div class="stat">
                                            <div class="stat-number">42</div>
                                            <div class="stat-label">Meals Hosted</div>
                                        </div>
                                        <div class="stat">
                                            <div class="stat-number">98%</div>
                                            <div class="stat-label">Success Rate</div>
                                        </div>
                                        <div class="stat">
                                            <div class="stat-number">156</div>
                                            <div class="stat-label">Total Participants</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="profile.php?id=1" class="btn"
                                    style="background: #ce1212; color: white; padding: 10px 25px; border-radius: 8px; text-decoration: none;">View
                                    Profile</a>
                            </div>
                        </div>

                        <!-- Participants -->
                        <div class="detail-card" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="detail-title">Participants (4)</h2>
                            <div class="participant-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" alt="Participant"
                                    class="participant-avatar">
                                <div style="flex: 1;">
                                    <h6 style="margin: 0; font-weight: 600;">Tunde Bakare</h6>
                                    <p style="margin: 0; font-size: 0.85rem; color: #666;">Joined 2 hours ago</p>
                                </div>
                                <span style="color: #28a745; font-weight: 600;"><i class="bi bi-check-circle-fill"></i>
                                    Paid</span>
                            </div>
                            <div class="participant-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" alt="Participant"
                                    class="participant-avatar">
                                <div style="flex: 1;">
                                    <h6 style="margin: 0; font-weight: 600;">Amaka Johnson</h6>
                                    <p style="margin: 0; font-size: 0.85rem; color: #666;">Joined 5 hours ago</p>
                                </div>
                                <span style="color: #28a745; font-weight: 600;"><i class="bi bi-check-circle-fill"></i>
                                    Paid</span>
                            </div>
                            <div class="participant-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" alt="Participant"
                                    class="participant-avatar">
                                <div style="flex: 1;">
                                    <h6 style="margin: 0; font-weight: 600;">Emeka Okonkwo</h6>
                                    <p style="margin: 0; font-size: 0.85rem; color: #666;">Joined 1 day ago</p>
                                </div>
                                <span style="color: #ffc107; font-weight: 600;"><i class="bi bi-clock-fill"></i>
                                    Pending</span>
                            </div>
                            <div class="participant-item">
                                <img src="assets/img/chefs/chefs-1.jpg" alt="Participant" class="participant-avatar">
                                <div style="flex: 1;">
                                    <h6 style="margin: 0; font-weight: 600;">Yusuf Mohammed</h6>
                                    <p style="margin: 0; font-size: 0.85rem; color: #666;">Joined 1 day ago</p>
                                </div>
                                <span style="color: #28a745; font-weight: 600;"><i class="bi bi-check-circle-fill"></i>
                                    Paid</span>
                            </div>
                        </div>

                        <!-- Reviews -->
                        <div class="detail-card" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="detail-title">Notes for Chioma</h2>
                            <div class="review-item">
                                <div class="review-header">
                                    <div class="review-author">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="Reviewer"
                                            class="review-avatar">
                                        <div>
                                            <h6 style="margin: 0; font-weight: 600;">Tunde Bakare</h6>
                                            <p style="margin: 0; font-size: 0.85rem; color: #666;">1 hour ago</p>
                                        </div>
                                    </div>

                                </div>
                                <p style="color: #666; margin: 0;">Please make sure the food is well packaged and
                                    delivered on time.</p>
                            </div>
                            <div class="review-item">
                                <div class="review-header">
                                    <div class="review-author">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" alt="Reviewer"
                                            class="review-avatar">
                                        <div>
                                            <h6 style="margin: 0; font-weight: 600;">Amaka Johnson</h6>
                                            <p style="margin: 0; font-size: 0.85rem; color: #666;">12 minutes ago</p>
                                        </div>
                                    </div>
                                </div>
                                <p style="color: #666; margin: 0;">Please make sure the food is not very spicy.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div style="position: sticky; top: 100px;">
                            <div class="price-box" data-aos="fade-left">
                                <div class="price-amount">₦1,200</div>
                                <p style="margin-bottom: 25px; opacity: 0.95;">per person</p>
                                <button class="btn btn-join-large" onclick="joinMeal()">Join This Meal</button>
                                <div class="share-buttons">
                                    <button class="btn-share" onclick="openShareModal()"><i
                                            class="bi bi-share-fill"></i> Share</button>
                                    <button class="btn-share"><i class="bi bi-heart-fill"></i> Save</button>
                                </div>
                            </div>

                            <div class="detail-card" data-aos="fade-left" data-aos-delay="100">
                                <h5 style="margin-bottom: 15px;"><i class="bi bi-shield-check"
                                        style="color: #28a745;"></i> Safety Tips</h5>
                                <ul style="color: #666; font-size: 0.9rem; line-height: 1.8;">
                                    <li>Only pay through the platform</li>
                                    <li>Meet in public locations</li>
                                    <li>Check organizer's reviews</li>
                                    <li>Report suspicious activity</li>
                                </ul>
                            </div>

                            <div class="detail-card" data-aos="fade-left" data-aos-delay="200">
                                <h5 style="margin-bottom: 15px;"><i class="bi bi-info-circle"
                                        style="color: #ce1212;"></i> Need Help?</h5>
                                <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">Have questions about
                                    this meal?</p>
                                <a href="messages.php?user=1" class="btn"
                                    style="background: #f8f9fa; color: #333; width: 100%; padding: 10px; border-radius: 8px; text-decoration: none; display: block; text-align: center;">
                                    <i class="bi bi-chat-dots-fill"></i> Message Organizer
                                </a>
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

    <!-- Share Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px; border: none;">
                <div class="modal-header" style="border-bottom: none; padding: 20px 25px 0;">
                    <h5 class="modal-title" id="shareModalLabel" style="font-weight: 700;">Share this meal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body share-modal-body">
                    <p style="color: #666; margin-bottom: 5px;">Invite friends to join "Jollof Rice & Chicken"</p>

                    <div class="share-options">
                        <a href="#" class="share-option" onclick="shareTo('whatsapp')">
                            <div class="share-icon-wrapper bg-whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <span>WhatsApp</span>
                        </a>
                        <a href="#" class="share-option" onclick="shareTo('instagram')">
                            <div class="share-icon-wrapper bg-instagram">
                                <i class="bi bi-instagram"></i>
                            </div>
                            <span>Instagram</span>
                        </a>
                        <a href="#" class="share-option" onclick="shareTo('facebook')">
                            <div class="share-icon-wrapper bg-facebook">
                                <i class="bi bi-facebook"></i>
                            </div>
                            <span>Facebook</span>
                        </a>
                        <a href="#" class="share-option" onclick="copyLink()">
                            <div class="share-icon-wrapper bg-copy">
                                <i class="bi bi-link-45deg"></i>
                            </div>
                            <span>Copy Link</span>
                        </a>
                    </div>

                    <div class="copy-link-input">
                        <input type="text" value="https://foodajo.com/meal-details.php?id=1" readonly
                            id="shareLinkInput">
                        <button onclick="copyLink()">Copy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        function joinMeal() {
            if (confirm('Join this meal for ₦1,200?')) {
                // Redirect to payment page
                window.location.href = 'payment.php?meal_id=1';
            }
        }

        // Initialize modal
        const shareModal = new bootstrap.Modal(document.getElementById('shareModal'));

        function openShareModal() {
            shareModal.show();
        }

        function shareTo(platform) {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("Check out this delicious meal on FoodAjo: Jollof Rice & Chicken!");

            let shareUrl = '';

            switch (platform) {
                case 'whatsapp':
                    shareUrl = `https://wa.me/?text=${text}%20${url}`;
                    break;
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                    break;
                case 'instagram':
                    // Instagram doesn't support direct web sharing, usually just copying link or opening app
                    alert('Link copied! Open Instagram to share.');
                    copyLink();
                    return;
            }

            if (shareUrl) window.open(shareUrl, '_blank');
        }

        function copyLink() {
            const copyText = document.getElementById("shareLinkInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(copyText.value);

            // Change button text temporarily
            const btn = document.querySelector('.copy-link-input button');
            const originalText = btn.innerText;
            btn.innerText = 'Copied!';
            setTimeout(() => {
                btn.innerText = originalText;
            }, 2000);
        }
    </script>

</body>

</html>