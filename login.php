<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - FoodAjo</title>
    <meta name="description" content="Login to FoodAjo - Share meals, save money">
    <meta name="keywords" content="foodajo, login, meal sharing, student meals">

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
            background: url('assets/img/stats-bg.jpg') center/cover no-repeat fixed;
            padding: 20px;
            position: relative;
        }

        .auth-page::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .auth-card {
            position: relative;
            z-index: 1;
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            display: flex;
            position: relative;
            z-index: 1;
        }

        .auth-left {
            flex: 1;
            padding: 60px 50px;
            background: white;
        }

        .auth-right {
            flex: 1;
            background:
                linear-gradient(135deg, rgba(206, 18, 18, 0.85) 0%, rgba(255, 107, 107, 0.8) 100%),
                url('assets/img/about.jpg') center/cover no-repeat;
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
            margin-bottom: 20px;
        }

        .form-control:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 0.2rem rgba(206, 18, 18, 0.25);
        }

        .btn-login {
            background: #ce1212;
            color: white;
            padding: 12px 40px;
            border-radius: 10px;
            border: none;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background: #a00f0f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(206, 18, 18, 0.3);
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 45%;
            height: 1px;
            background: #e0e0e0;
        }

        .divider::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            width: 45%;
            height: 1px;
            background: #e0e0e0;
        }

        .feature-item {
            display: flex;
            align-items: start;
            margin-bottom: 25px;
        }

        .feature-item i {
            font-size: 2rem;
            margin-right: 15px;
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
                <p class="auth-subtitle">Welcome back! Login to continue</p>

                <form action="auth/login-handler.php" method="POST" id="loginForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-login">Login</button>

                    <div class="text-center mt-3">
                        <a href="forgot-password.php" style="color: #ce1212; text-decoration: none;">Forgot
                            Password?</a>
                    </div>

                    <div class="divider">
                        <span style="background: white; padding: 0 10px; color: #999;">OR</span>
                    </div>

                    <div class="text-center">
                        <p>Don't have an account? <a href="register.php"
                                style="color: #ce1212; font-weight: 600; text-decoration: none;">Sign Up</a></p>
                    </div>
                </form>
            </div>

            <div class="auth-right">
                <h2 style="font-size: 2rem; margin-bottom: 20px;">Eat Better Together</h2>
                <p style="font-size: 1.1rem; margin-bottom: 40px; opacity: 0.95;">Join thousands of students saving
                    money and eating healthier through community meal sharing.</p>

                <div class="feature-item">
                    <i class="bi bi-people-fill"></i>
                    <div>
                        <h4>Community Driven</h4>
                        <p>Connect with others in your area to share meal costs</p>
                    </div>
                </div>

                <div class="feature-item">
                    <i class="bi bi-piggy-bank-fill"></i>
                    <div>
                        <h4>Save Money</h4>
                        <p>Pool resources to afford better, healthier meals</p>
                    </div>
                </div>

                <div class="feature-item">
                    <i class="bi bi-shield-check"></i>
                    <div>
                        <h4>Safe & Secure</h4>
                        <p>Verified users and secure payment processing</p>
                    </div>
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
    </script>

</body>

</html>