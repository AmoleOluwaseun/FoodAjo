<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Create Meal - FoodAjo</title>
    <meta name="description" content="Create a new meal posting">
    <meta name="keywords" content="foodajo, create meal">

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

        .create-hero {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            padding: 60px 0 120px;
            color: white;
            position: relative;
        }

        .form-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
            margin-top: -80px;
            position: relative;
            z-index: 2;
        }

        .form-section {
            margin-bottom: 35px;
            padding-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
        }

        .form-section:last-child {
            border-bottom: none;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #ce1212;
            font-size: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            padding: 12px 20px;
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #ce1212;
            box-shadow: 0 0 0 0.2rem rgba(206, 18, 18, 0.25);
        }

        .image-upload {
            border: 3px dashed #e0e0e0;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: #f8f9fa;
        }

        .image-upload:hover {
            border-color: #ce1212;
            background: #fff5f5;
        }

        .image-upload i {
            font-size: 3rem;
            color: #ce1212;
            margin-bottom: 15px;
        }

        .image-preview {
            max-width: 100%;
            max-height: 300px;
            border-radius: 15px;
            margin-top: 20px;
            display: none;
        }

        .price-calculator {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-top: 20px;
        }

        .calc-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .calc-row:last-child {
            border-bottom: none;
            font-weight: 700;
            font-size: 1.2rem;
            color: #ce1212;
        }

        .btn-create {
            background: #ce1212;
            color: white;
            padding: 15px 50px;
            border-radius: 10px;
            border: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .btn-create:hover {
            background: #a00f0f;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(206, 18, 18, 0.3);
        }

        .btn-preview {
            background: white;
            color: #ce1212;
            border: 2px solid #ce1212;
            padding: 15px 50px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .btn-preview:hover {
            background: #ce1212;
            color: white;
        }

        .info-box {
            background: #fff5f5;
            border-left: 4px solid #ce1212;
            padding: 15px 20px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .info-box i {
            color: #ce1212;
            margin-right: 10px;
        }

        /* Modal Styles */
        .modal-preview .modal-dialog {
            max-width: 800px;
        }

        .modal-preview .modal-content {
            border-radius: 20px;
            border: none;
        }

        .modal-preview .modal-header {
            background: linear-gradient(135deg, #ce1212 0%, #ff6b6b 100%);
            color: white;
            border-radius: 20px 20px 0 0;
            padding: 20px 25px;
        }

        .modal-preview .modal-title {
            font-weight: 700;
            font-size: 1.3rem;
        }

        .modal-preview .btn-close {
            filter: brightness(0) invert(1);
        }

        .modal-preview .modal-body {
            padding: 25px;
        }

        .preview-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .preview-section {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .preview-section:last-child {
            border-bottom: none;
        }

        .preview-label {
            font-weight: 600;
            color: #666;
            font-size: 0.85rem;
            margin-bottom: 3px;
        }

        .preview-value {
            font-size: 1rem;
            color: #333;
            font-weight: 600;
        }

        .preview-price {
            font-size: 1.6rem;
            color: #ce1212;
            font-weight: 700;
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
        <section class="create-hero">
            <div class="container text-center">
                <h1 data-aos="fade-up" style="font-size: 2.5rem; font-weight: 700;">Create a Meal Posting</h1>
                <p data-aos="fade-up" data-aos-delay="100" style="font-size: 1.1rem; opacity: 0.95;">Share a meal and
                    save money together</p>
            </div>
        </section>

        <!-- Form Section -->
        <section class="section" style="padding: 0 0 60px;">
            <div class="container">
                <div class="form-card" data-aos="fade-up">
                    <form action="api/meals/create-meal.php" method="POST" enctype="multipart/form-data"
                        id="createMealForm">

                        <!-- Meal Photo -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-camera-fill"></i> Meal Photo</h3>
                            <div class="image-upload" onclick="document.getElementById('mealPhoto').click()">
                                <i class="bi bi-cloud-upload"></i>
                                <h5>Click to upload meal photo</h5>
                                <p style="color: #999; margin: 0;">JPG, PNG or JPEG (Max 5MB)</p>
                            </div>
                            <input type="file" id="mealPhoto" name="meal_photo" accept="image/*" style="display: none;"
                                onchange="previewImage(event)">
                            <img id="imagePreview" class="image-preview" alt="Preview">
                            <div class="info-box">
                                <i class="bi bi-info-circle-fill"></i>
                                <strong>Tip:</strong> Upload a clear, appetizing photo of the meal you're planning to
                                prepare. Good photos get more participants!
                            </div>
                        </div>

                        <!-- Meal Details -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-card-text"></i> Meal Details</h3>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="mealName" class="form-label">Meal Name *</label>
                                    <input type="text" class="form-control" id="mealName" name="meal_name"
                                        placeholder="e.g., Jollof Rice & Chicken" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="description" class="form-label">Description *</label>
                                    <textarea class="form-control" id="description" name="description" rows="4"
                                        placeholder="Describe what you're preparing, ingredients, and any special details..."
                                        required></textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="mealType" class="form-label">Meal Type *</label>
                                    <select class="form-select" id="mealType" name="meal_type" required>
                                        <option value="">Select meal type</option>
                                        <option value="breakfast">Breakfast</option>
                                        <option value="lunch">Lunch</option>
                                        <option value="dinner">Dinner</option>
                                        <option value="snack">Snack</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="dietaryInfo" class="form-label">Dietary Information</label>
                                    <input type="text" class="form-control" id="dietaryInfo" name="dietary_info"
                                        placeholder="e.g., Vegetarian, Halal, etc.">
                                </div>
                            </div>
                        </div>

                        <!-- Location & Time -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-geo-alt-fill"></i> Location & Time</h3>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="location" class="form-label">Pickup Location *</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="e.g., Yaba, Lagos or specific address" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="prepDate" class="form-label">Preparation Date *</label>
                                    <input type="date" class="form-control" id="prepDate" name="preparation_date"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="prepTime" class="form-label">Preparation Time *</label>
                                    <input type="time" class="form-control" id="prepTime" name="preparation_time"
                                        required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="timeframe" class="form-label">Preparation Timeframe</label>
                                    <input type="text" class="form-control" id="timeframe" name="preparation_timeframe"
                                        placeholder="e.g., 2-3 hours">
                                </div>
                            </div>
                        </div>

                        <!-- Pricing & Participants -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="bi bi-people-fill"></i> Pricing & Participants</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="maxParticipants" class="form-label">Maximum Participants *</label>
                                    <input type="number" class="form-control" id="maxParticipants"
                                        name="max_participants" min="2" max="50" value="10" required
                                        oninput="calculateTotal()">
                                    <small class="text-muted">Including yourself (2-50 people)</small>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="contributionAmount" class="form-label">Contribution per Person (₦)
                                        *</label>
                                    <input type="number" class="form-control" id="contributionAmount"
                                        name="contribution_amount" min="100" step="50" placeholder="1000" required
                                        oninput="calculateTotal()">
                                    <small class="text-muted">Minimum ₦100</small>
                                </div>
                            </div>

                            <div class="price-calculator">
                                <h5 style="margin-bottom: 20px;">Budget Calculator</h5>
                                <div class="calc-row">
                                    <span>Contribution per person:</span>
                                    <span id="perPerson">₦0</span>
                                </div>
                                <div class="calc-row">
                                    <span>Number of participants:</span>
                                    <span id="numParticipants">0</span>
                                </div>
                                <div class="calc-row">
                                    <span>Total Budget:</span>
                                    <span id="totalBudget">₦0</span>
                                </div>
                            </div>

                            <div class="info-box">
                                <i class="bi bi-lightbulb-fill"></i>
                                <strong>Pricing Tip:</strong> Set a fair price that covers quality ingredients and
                                preparation. Remember, the goal is to eat better while saving money!
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="text-center" style="margin-top: 40px;">
                            <button type="button" class="btn btn-preview me-3" onclick="previewMeal()">
                                <i class="bi bi-eye-fill"></i> Preview
                            </button>
                            <button type="submit" class="btn btn-create">
                                <i class="bi bi-check-circle-fill"></i> Create Meal Posting
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Preview Modal -->
    <div class="modal fade modal-preview" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel"><i class="bi bi-eye-fill"></i> Meal Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="previewImageDisplay" src="" alt="Meal Preview" class="preview-image"
                        style="display: none;">

                    <div class="preview-section">
                        <h4 id="previewMealName"
                            style="font-size: 1.5rem; font-weight: 700; color: #333; margin-bottom: 10px;">Meal Name
                        </h4>
                        <p id="previewDescription" style="color: #666; line-height: 1.6; margin: 0;">Meal description
                            will appear here...</p>
                    </div>

                    <div class="preview-section">
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="preview-label"><i class="bi bi-tag-fill" style="color: #ce1212;"></i> Type
                                </div>
                                <div class="preview-value" id="previewMealType">-</div>
                            </div>
                            <div class="col-4">
                                <div class="preview-label"><i class="bi bi-info-circle-fill"
                                        style="color: #ce1212;"></i> Dietary</div>
                                <div class="preview-value" id="previewDietary">-</div>
                            </div>
                            <div class="col-4">
                                <div class="preview-label"><i class="bi bi-geo-alt-fill" style="color: #ce1212;"></i>
                                    Location</div>
                                <div class="preview-value" id="previewLocation">-</div>
                            </div>
                            <div class="col-4">
                                <div class="preview-label"><i class="bi bi-calendar-fill" style="color: #ce1212;"></i>
                                    Date</div>
                                <div class="preview-value" id="previewDate" style="font-size: 0.9rem;">-</div>
                            </div>
                            <div class="col-4">
                                <div class="preview-label"><i class="bi bi-clock-fill" style="color: #ce1212;"></i> Time
                                </div>
                                <div class="preview-value" id="previewTime" style="font-size: 0.9rem;">-</div>
                            </div>
                            <div class="col-4">
                                <div class="preview-label"><i class="bi bi-hourglass-split" style="color: #ce1212;"></i>
                                    Duration</div>
                                <div class="preview-value" id="previewTimeframe" style="font-size: 0.9rem;">-</div>
                            </div>
                        </div>
                    </div>

                    <div class="preview-section">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="preview-label"><i class="bi bi-people-fill" style="color: #ce1212;"></i>
                                    Participants</div>
                                <div class="preview-value" id="previewParticipants">-</div>
                            </div>
                            <div class="col-6">
                                <div class="preview-label"><i class="bi bi-cash" style="color: #ce1212;"></i> Per Person
                                </div>
                                <div class="preview-price" id="previewPrice">₦0</div>
                            </div>
                        </div>
                    </div>

                    <div style="background: #f8f9fa; padding: 15px 20px; border-radius: 10px;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #666; font-size: 0.95rem;">Total Budget:</span>
                            <span id="previewTotalBudget"
                                style="font-size: 1.4rem; font-weight: 700; color: #28a745;">₦0</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-create"
                        onclick="document.getElementById('createMealForm').dispatchEvent(new Event('submit'))">
                        <i class="bi bi-check-circle-fill"></i> Looks Good, Create Meal
                    </button>
                </div>
            </div>
        </div>
    </div>

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

        // Set minimum date to today
        document.getElementById('prepDate').min = new Date().toISOString().split('T')[0];

        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB');
                    event.target.value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    const preview = document.getElementById('imagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }

        function calculateTotal() {
            const participants = parseInt(document.getElementById('maxParticipants').value) || 0;
            const contribution = parseInt(document.getElementById('contributionAmount').value) || 0;
            const total = participants * contribution;

            document.getElementById('perPerson').textContent = '₦' + contribution.toLocaleString();
            document.getElementById('numParticipants').textContent = participants;
            document.getElementById('totalBudget').textContent = '₦' + total.toLocaleString();
        }

        function previewMeal() {
            const mealName = document.getElementById('mealName').value;
            const description = document.getElementById('description').value;
            const mealType = document.getElementById('mealType').value;
            const dietaryInfo = document.getElementById('dietaryInfo').value;
            const location = document.getElementById('location').value;
            const prepDate = document.getElementById('prepDate').value;
            const prepTime = document.getElementById('prepTime').value;
            const timeframe = document.getElementById('timeframe').value;
            const maxParticipants = document.getElementById('maxParticipants').value;
            const contributionAmount = document.getElementById('contributionAmount').value;
            const mealPhoto = document.getElementById('mealPhoto').files[0];

            // Validate required fields
            if (!mealName || !description) {
                alert('Please fill in at least the meal name and description to preview');
                return;
            }

            // Populate modal with form data
            document.getElementById('previewMealName').textContent = mealName || 'Meal Name';
            document.getElementById('previewDescription').textContent = description || 'No description provided';
            document.getElementById('previewMealType').textContent = mealType ? mealType.charAt(0).toUpperCase() + mealType.slice(1) : 'Not specified';
            document.getElementById('previewDietary').textContent = dietaryInfo || 'Not specified';
            document.getElementById('previewLocation').textContent = location || 'Not specified';
            document.getElementById('previewTimeframe').textContent = timeframe || 'Not specified';

            // Format date (shorter format)
            if (prepDate) {
                const dateObj = new Date(prepDate);
                const options = { month: 'short', day: 'numeric', year: 'numeric' };
                document.getElementById('previewDate').textContent = dateObj.toLocaleDateString('en-US', options);
            } else {
                document.getElementById('previewDate').textContent = 'Not set';
            }

            // Format time
            if (prepTime) {
                const [hours, minutes] = prepTime.split(':');
                const hour = parseInt(hours);
                const ampm = hour >= 12 ? 'PM' : 'AM';
                const displayHour = hour % 12 || 12;
                document.getElementById('previewTime').textContent = `${displayHour}:${minutes} ${ampm}`;
            } else {
                document.getElementById('previewTime').textContent = 'Not set';
            }

            document.getElementById('previewParticipants').textContent = maxParticipants || '0';
            document.getElementById('previewPrice').textContent = contributionAmount ? '₦' + parseInt(contributionAmount).toLocaleString() : '₦0';

            // Calculate total budget
            const total = (parseInt(maxParticipants) || 0) * (parseInt(contributionAmount) || 0);
            document.getElementById('previewTotalBudget').textContent = '₦' + total.toLocaleString();

            // Show image preview if available
            const previewImageDisplay = document.getElementById('previewImageDisplay');
            if (mealPhoto) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImageDisplay.src = e.target.result;
                    previewImageDisplay.style.display = 'block';
                }
                reader.readAsDataURL(mealPhoto);
            } else {
                previewImageDisplay.style.display = 'none';
            }

            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('previewModal'));
            modal.show();
        }

        // Form validation
        document.getElementById('createMealForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const mealPhoto = document.getElementById('mealPhoto').files[0];
            if (!mealPhoto) {
                alert('Please upload a meal photo');
                return;
            }

            const contribution = parseInt(document.getElementById('contributionAmount').value);
            if (contribution < 100) {
                alert('Minimum contribution is ₦100');
                return;
            }

            // If validation passes, submit the form
            alert('Meal posting created successfully! (Backend integration pending)');
            // this.submit(); // Uncomment when backend is ready
        });
    </script>

</body>

</html>