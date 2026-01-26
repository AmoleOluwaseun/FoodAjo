<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sign Up - FoodAjo</title>
    <meta name="description" content="Join FoodAjo - Share meals, save money">
    <meta name="keywords" content="foodajo, signup, meal sharing, student meals">

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
        .auth-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 20px;
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            display: flex;
        }

        .auth-left {
            flex: 1;
            padding: 60px 50px;
            background: white;
        }

        .auth-right {
            flex: 1;
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 60px 50px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .auth-logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ce1212;
            margin-bottom: 10px;
            font-family: 'Amatic SC', cursive;
        }

        .auth-subtitle {
            color: #666;
            margin-bottom: 30px;
        }

        .form-control {
            padding: 12px 20px;
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 0.2rem rgba(206, 18, 18, 0.25);
        }

        .btn-register {
            background: #ce1212;
            color: white;
            padding: 12px 40px;
            border-radius: 10px;
            border: none;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-register:hover {
            background: #a00f0f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(206, 18, 18, 0.3);
        }

        .stat-item {
            text-align: center;
            margin-bottom: 30px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            display: block;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .auth-card {
                flex-direction: column;
            }

            .auth-right {
                display: none;
            }

            .auth-left {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="auth-page">
        <div class="auth-card" data-aos="fade-up">
            <div class="auth-left">
                <h1 class="auth-logo">FoodAjo</h1>
                <p class="auth-subtitle">Create your account and start saving!</p>

                <form action="auth/register-handler.php" method="POST" id="registerForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="John"
                                required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Doe"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="john@university.edu" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="08012345678"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="university" class="form-label">University (Optional)</label>
                        <input type="text" class="form-control" id="university" name="university"
                            placeholder="University of Lagos">
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Yaba, Lagos"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Min. 8 characters" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                            placeholder="Re-enter password" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" style="color: #ce1212;">Terms & Conditions</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-register">Create Account</button>

                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="login.php"
                                style="color: #ce1212; font-weight: 600; text-decoration: none;">Login</a></p>
                    </div>
                </form>
            </div>

            <div class="auth-right">
                <h2 style="font-size: 2rem; margin-bottom: 20px;">Join Our Community</h2>
                <p style="font-size: 1.1rem; margin-bottom: 40px; opacity: 0.95;">Thousands of students are already
                    eating better and saving money with FoodAjo.</p>

                <div class="row">
                    <div class="col-6">
                        <div class="stat-item">
                            <span class="stat-number">5K+</span>
                            <span class="stat-label">Active Users</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <span class="stat-number">10K+</span>
                            <span class="stat-label">Meals Shared</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <span class="stat-number">₦2M+</span>
                            <span class="stat-label">Money Saved</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <span class="stat-number">4.8★</span>
                            <span class="stat-label">Average Rating</span>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 40px; padding: 20px; background: rgba(255,255,255,0.1); border-radius: 10px;">
                    <p style="margin: 0; font-size: 0.95rem;">
                        <i class="bi bi-quote" style="font-size: 1.5rem;"></i>
                        "FoodAjo helped me eat healthier meals without breaking my budget. The community is amazing!"
                    </p>
                    <p style="margin-top: 10px; margin-bottom: 0; font-weight: 600;">- Chioma, UNILAG Student</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        // Password validation
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                return false;
            }

            if (password.length < 8) {
                e.preventDefault();
                alert('Password must be at least 8 characters long!');
                return false;
            }
        });
    </script>

</body>

</html>