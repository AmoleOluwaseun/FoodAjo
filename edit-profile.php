<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Edit Profile - FoodAjo</title>
    <meta name="description" content="Edit your FoodAjo profile">
    <meta name="keywords" content="foodajo, edit profile">

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

        .edit-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 60px 0 120px;
            color: white;
            position: relative;
        }

        .edit-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
            margin-top: -80px;
            position: relative;
            z-index: 2;
        }

        .avatar-upload {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
        }

        .avatar-preview {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .avatar-overlay {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 45px;
            height: 45px;
            background: #ce1212;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s;
            border: 3px solid white;
        }

        .avatar-overlay:hover {
            background: #a00f0f;
            transform: scale(1.1);
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #ce1212;
            font-size: 1.4rem;
        }

        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 0.2rem rgba(206, 18, 18, 0.15);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-section {
            margin-bottom: 40px;
        }

        .btn-save {
            background: #ce1212;
            color: white;
            border: none;
            padding: 14px 40px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .btn-save:hover {
            background: #a00f0f;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(206, 18, 18, 0.3);
        }

        .btn-cancel {
            background: white;
            color: #666;
            border: 2px solid #e0e0e0;
            padding: 14px 40px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .btn-cancel:hover {
            border-color: #ce1212;
            color: #ce1212;
        }

        .char-count {
            font-size: 0.85rem;
            color: #999;
            text-align: right;
            margin-top: 5px;
        }

        .form-hint {
            font-size: 0.85rem;
            color: #999;
            margin-top: 5px;
        }

        .password-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 12px;
        }

        .danger-zone {
            background: #fff5f5;
            border: 2px solid #ffe0e0;
            padding: 25px;
            border-radius: 12px;
        }

        .btn-danger-outline {
            background: white;
            color: #dc3545;
            border: 2px solid #dc3545;
            padding: 10px 25px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-danger-outline:hover {
            background: #dc3545;
            color: white;
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
                    <li class="dropdown"><a href="#"><span>Meals</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="create-meal.php">Create a Meal</a></li>
                            <li><a href="my-meals.php">My Meals</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="active"><span>Account</span> <i
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
        <section class="edit-hero">
            <div class="container">
                <div data-aos="fade-up">
                    <h1 style="font-size: 2rem; font-weight: 700;">Edit Profile</h1>
                    <p style="opacity: 0.9;">Update your personal information and preferences</p>
                </div>
            </div>
        </section>

        <!-- Edit Form Section -->
        <section class="section" style="padding: 0 0 60px;">
            <div class="container">
                <div class="edit-card" data-aos="fade-up">
                    <form id="editProfileForm">

                        <!-- Avatar Upload -->
                        <div class="text-center" data-aos="fade-up">
                            <div class="avatar-upload">
                                <img src="assets/img/testimonials/testimonials-1.jpg" alt="Profile Photo"
                                    class="avatar-preview" id="avatarPreview">
                                <label for="avatarInput" class="avatar-overlay">
                                    <i class="bi bi-camera-fill"></i>
                                </label>
                                <input type="file" id="avatarInput" accept="image/*" style="display: none;"
                                    onchange="previewAvatar(event)">
                            </div>
                            <p class="form-hint">Click the camera icon to upload a new photo</p>
                        </div>

                        <!-- Personal Information -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-person-fill"></i> Personal Information</h3>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" value="Chioma" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" value="Adeleke" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email"
                                        value="chioma.adeleke@unilag.edu.ng" required>
                                    <p class="form-hint"><i class="bi bi-info-circle"></i> Changing your email requires
                                        verification</p>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" value="+234 801 234 5678"
                                        placeholder="+234 XXX XXX XXXX">
                                </div>
                                <div class="col-12">
                                    <label for="bio" class="form-label">Bio</label>
                                    <textarea class="form-control" id="bio" maxlength="300"
                                        oninput="updateCharCount()">Hi! I'm Chioma, a final year student at UNILAG studying Computer Science. I love cooking and sharing meals with others. I believe good food brings people together, and FoodAjo has been an amazing platform to connect with fellow students while saving money.</textarea>
                                    <p class="char-count"><span id="charCount">0</span>/300 characters</p>
                                </div>
                            </div>
                        </div>

                        <!-- Location & University -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-geo-alt-fill"></i> Location & Education</h3>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="university" class="form-label">University / Institution</label>
                                    <select class="form-select" id="university">
                                        <option value="">Select your institution</option>
                                        <option value="unilag" selected>University of Lagos (UNILAG)</option>
                                        <option value="yabatech">Yaba College of Technology</option>
                                        <option value="lasu">Lagos State University (LASU)</option>
                                        <option value="unilorin">University of Ilorin</option>
                                        <option value="ui">University of Ibadan</option>
                                        <option value="oau">Obafemi Awolowo University</option>
                                        <option value="futa">Federal University of Technology, Akure</option>
                                        <option value="covenant">Covenant University</option>
                                        <option value="babcock">Babcock University</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="department" class="form-label">Department / Course</label>
                                    <input type="text" class="form-control" id="department" value="Computer Science"
                                        placeholder="e.g. Computer Science">
                                </div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label">Area / Neighbourhood</label>
                                    <select class="form-select" id="location">
                                        <option value="">Select your area</option>
                                        <option value="yaba" selected>Yaba</option>
                                        <option value="surulere">Surulere</option>
                                        <option value="ikeja">Ikeja</option>
                                        <option value="lekki">Lekki</option>
                                        <option value="ajah">Ajah</option>
                                        <option value="gbagada">Gbagada</option>
                                        <option value="victoria-island">Victoria Island</option>
                                        <option value="maryland">Maryland</option>
                                        <option value="ogba">Ogba</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select" id="state">
                                        <option value="lagos" selected>Lagos</option>
                                        <option value="oyo">Oyo</option>
                                        <option value="ogun">Ogun</option>
                                        <option value="osun">Osun</option>
                                        <option value="ondo">Ondo</option>
                                        <option value="kwara">Kwara</option>
                                        <option value="abuja">FCT Abuja</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Dietary Preferences -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-egg-fried"></i> Dietary Preferences</h3>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Select all that apply</label>
                                    <div class="row g-2">
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pref-none" checked>
                                                <label class="form-check-label" for="pref-none">No restrictions</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pref-halal">
                                                <label class="form-check-label" for="pref-halal">Halal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pref-vegetarian">
                                                <label class="form-check-label" for="pref-vegetarian">Vegetarian</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pref-vegan">
                                                <label class="form-check-label" for="pref-vegan">Vegan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pref-gluten">
                                                <label class="form-check-label" for="pref-gluten">Gluten-free</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pref-nut">
                                                <label class="form-check-label" for="pref-nut">Nut-free</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="allergies" class="form-label">Allergies or special notes</label>
                                    <input type="text" class="form-control" id="allergies"
                                        placeholder="e.g. Allergic to shellfish, lactose intolerant">
                                </div>
                            </div>
                        </div>

                        <!-- Change Password -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-shield-lock-fill"></i> Change Password</h3>
                            <div class="password-section">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="currentPassword" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="currentPassword"
                                            placeholder="Enter current password">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="newPassword" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="newPassword"
                                            placeholder="Enter new password">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirmPassword"
                                            placeholder="Confirm new password">
                                    </div>
                                    <div class="col-12">
                                        <p class="form-hint"><i class="bi bi-info-circle"></i> Password must be at least
                                            8 characters with a mix of letters, numbers, and symbols</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-3 justify-content-between flex-wrap" style="margin-bottom: 40px;">
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-save"><i class="bi bi-check-circle-fill"></i> Save
                                    Changes</button>
                                <a href="profile.php" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>

                        <!-- Danger Zone -->
                        <div class="danger-zone">
                            <h5 style="color: #dc3545; font-weight: 700; margin-bottom: 10px;"><i
                                    class="bi bi-exclamation-triangle-fill"></i> Danger Zone</h5>
                            <p style="color: #666; margin-bottom: 15px; font-size: 0.95rem;">Once you delete your
                                account, there is no going back. All your meal history, reviews, and data will be
                                permanently removed.</p>
                            <button type="button" class="btn-danger-outline" onclick="confirmDelete()"><i
                                    class="bi bi-trash3-fill"></i> Delete Account</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer dark-background">
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

        // Update character count on load
        updateCharCount();

        function updateCharCount() {
            const bio = document.getElementById('bio');
            document.getElementById('charCount').textContent = bio.value.length;
        }

        function previewAvatar(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('avatarPreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }

        function confirmDelete() {
            if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
                if (confirm('This is your LAST chance. All your data, meals, and reviews will be permanently deleted. Continue?')) {
                    alert('Account deletion request submitted. You will receive a confirmation email.');
                }
            }
        }

        // Form submission
        document.getElementById('editProfileForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Validate passwords match if changing
            const newPass = document.getElementById('newPassword').value;
            const confirmPass = document.getElementById('confirmPassword').value;

            if (newPass && newPass !== confirmPass) {
                alert('New passwords do not match!');
                return;
            }

            if (newPass && newPass.length < 8) {
                alert('Password must be at least 8 characters!');
                return;
            }

            alert('Profile updated successfully!');
            window.location.href = 'profile.php';
        });
    </script>

</body>

</html>