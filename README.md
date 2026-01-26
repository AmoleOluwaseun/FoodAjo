# FoodAjo - Community Meal Sharing Platform

## Project Overview

**FoodAjo** is a community-driven meal-sharing platform designed specifically for university students and budget-conscious individuals. The platform enables users to pool resources together to prepare affordable, nutritious meals that would otherwise be too expensive for individuals to afford alone.

### Core Concept

The fundamental idea is simple but powerful: Instead of one person trying to buy a meal for ₦1,000 (which might be insufficient), 10 people can each contribute ₦1,000 to create a ₦10,000 budget. This pooled amount can prepare a rich, healthy meal for all 10 participants - achieving better nutrition and value through collective action.

### Target Audience

- University students
- Young professionals on tight budgets
- Budget-conscious individuals
- Community members seeking affordable, quality meals

---

## Key Features

### 1. User Management

- **User Registration & Authentication**
  - Sign up with email/phone number
  - Secure login system
  - Profile management
  - User verification

### 2. Meal Posting System

- **Create Meal Posts** with:
  - Meal photo upload
  - Meal name/description
  - Contribution amount per person
  - Maximum number of participants
  - Preparation timeframe
  - Pickup/delivery location
  - Dietary information (optional)

### 3. Discovery & Joining

- Browse available meal postings
- Filter by:
  - Location/area
  - Price range
  - Meal type
  - Preparation time
  - Number of spots available
- Join meal groups with one click
- Real-time participant count updates

### 4. User Profiles & Trust System

- View user profiles showing:
  - Previous meal postings
  - Reviews and ratings
  - Completion rate
  - Member since date
  - Verified status
- Leave reviews after meal completion
- Star rating system (1-5 stars)

### 5. Payment Integration

- Secure payment processing
- Escrow system (funds held until meal preparation confirmed)
- Refund mechanism for cancelled meals
- Payment history tracking

### 6. Notifications

- New meal postings in your area
- Meal group filled notifications
- Preparation time reminders
- Payment confirmations
- Review requests

### 7. Messaging System

- In-app chat between meal organizer and participants
- Group chat for meal participants
- Share preparation updates

---

## Pages/Screens Needed

### Public Pages

1. **Landing Page** (`index.php`)
   - Hero section explaining the concept
   - How it works section
   - Featured meal postings
   - Testimonials
   - Call-to-action buttons

2. **About Page** (`about.php`)
   - Mission and vision
   - How FoodAjo works
   - Benefits of joining

3. **Login Page** (`login.php`)
   - Email/phone login form
   - Password recovery link
   - Sign up redirect

4. **Registration Page** (`register.php`)
   - User registration form
   - Terms and conditions
   - Email verification

### User Dashboard Pages

5. **Dashboard** (`dashboard.php`)
   - Overview of active meal groups
   - Quick stats (meals joined, meals hosted, money saved)
   - Recent activity
   - Upcoming meals

6. **Browse Meals** (`browse-meals.php`)
   - Grid/list view of available meals
   - Filter and search functionality
   - Map view (optional)

7. **Meal Details** (`meal-details.php?id=`)
   - Full meal information
   - Organizer profile preview
   - Participant list
   - Join button
   - Share options

8. **Create Meal Post** (`create-meal.php`)
   - Meal posting form
   - Image upload
   - Price calculator
   - Location selector

9. **My Meals** (`my-meals.php`)
   - Meals I'm hosting
   - Meals I've joined
   - Past meals
   - Cancelled meals

10. **User Profile** (`profile.php?id=`)
    - User information
    - Past meal history
    - Reviews and ratings
    - Statistics

11. **Edit Profile** (`edit-profile.php`)
    - Update personal information
    - Change password
    - Notification preferences
    - Payment methods

12. **Messages** (`messages.php`)
    - Inbox
    - Conversation threads
    - Meal group chats

13. **Notifications** (`notifications.php`)
    - All notifications
    - Mark as read functionality

14. **Payment History** (`payments.php`)
    - Transaction history
    - Receipts
    - Refunds

### Admin Pages (Optional)

15. **Admin Dashboard** (`admin/dashboard.php`)
16. **Manage Users** (`admin/users.php`)
17. **Manage Meals** (`admin/meals.php`)
18. **Reports** (`admin/reports.php`)

---

## Database Structure

### Tables

#### 1. `users`

```sql
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(20) UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    profile_photo VARCHAR(255),
    location VARCHAR(255),
    university VARCHAR(255),
    bio TEXT,
    is_verified BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_phone (phone)
);
```

#### 2. `meal_posts`

```sql
CREATE TABLE meal_posts (
    post_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    meal_name VARCHAR(255) NOT NULL,
    description TEXT,
    meal_photo VARCHAR(255),
    contribution_amount DECIMAL(10, 2) NOT NULL,
    max_participants INT NOT NULL,
    current_participants INT DEFAULT 1,
    preparation_timeframe VARCHAR(100),
    preparation_date DATETIME,
    location VARCHAR(255) NOT NULL,
    status ENUM('open', 'full', 'in_progress', 'completed', 'cancelled') DEFAULT 'open',
    dietary_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    INDEX idx_status (status),
    INDEX idx_user_id (user_id),
    INDEX idx_preparation_date (preparation_date)
);
```

#### 3. `meal_participants`

```sql
CREATE TABLE meal_participants (
    participant_id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT NOT NULL,
    user_id INT NOT NULL,
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payment_status ENUM('pending', 'paid', 'refunded') DEFAULT 'pending',
    has_reviewed BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (post_id) REFERENCES meal_posts(post_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    UNIQUE KEY unique_participant (post_id, user_id),
    INDEX idx_post_id (post_id),
    INDEX idx_user_id (user_id)
);
```

#### 4. `reviews`

```sql
CREATE TABLE reviews (
    review_id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT NOT NULL,
    reviewer_id INT NOT NULL,
    reviewed_user_id INT NOT NULL,
    rating INT NOT NULL CHECK (rating BETWEEN 1 AND 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES meal_posts(post_id) ON DELETE CASCADE,
    FOREIGN KEY (reviewer_id) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (reviewed_user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    UNIQUE KEY unique_review (post_id, reviewer_id),
    INDEX idx_reviewed_user (reviewed_user_id)
);
```

#### 5. `payments`

```sql
CREATE TABLE payments (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT NOT NULL,
    user_id INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    payment_method VARCHAR(50),
    transaction_reference VARCHAR(255) UNIQUE,
    status ENUM('pending', 'successful', 'failed', 'refunded') DEFAULT 'pending',
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES meal_posts(post_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    INDEX idx_transaction_ref (transaction_reference),
    INDEX idx_user_id (user_id)
);
```

#### 6. `messages`

```sql
CREATE TABLE messages (
    message_id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT,
    sender_id INT NOT NULL,
    receiver_id INT,
    message_text TEXT NOT NULL,
    is_group_message BOOLEAN DEFAULT FALSE,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES meal_posts(post_id) ON DELETE CASCADE,
    FOREIGN KEY (sender_id) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (receiver_id) REFERENCES users(user_id) ON DELETE CASCADE,
    INDEX idx_post_id (post_id),
    INDEX idx_sender_id (sender_id),
    INDEX idx_receiver_id (receiver_id)
);
```

#### 7. `notifications`

```sql
CREATE TABLE notifications (
    notification_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    type VARCHAR(50) NOT NULL,
    title VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    related_id INT,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    INDEX idx_user_id (user_id),
    INDEX idx_is_read (is_read)
);
```

#### 8. `user_stats`

```sql
CREATE TABLE user_stats (
    stat_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE NOT NULL,
    meals_hosted INT DEFAULT 0,
    meals_joined INT DEFAULT 0,
    total_spent DECIMAL(10, 2) DEFAULT 0.00,
    average_rating DECIMAL(3, 2) DEFAULT 0.00,
    total_reviews INT DEFAULT 0,
    completion_rate DECIMAL(5, 2) DEFAULT 100.00,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);
```

---

## API Endpoints

### Authentication

- `POST /api/auth/register` - Register new user
- `POST /api/auth/login` - User login
- `POST /api/auth/logout` - User logout
- `POST /api/auth/forgot-password` - Request password reset
- `POST /api/auth/reset-password` - Reset password
- `POST /api/auth/verify-email` - Verify email address

### Users

- `GET /api/users/profile/:id` - Get user profile
- `PUT /api/users/profile` - Update own profile
- `GET /api/users/:id/stats` - Get user statistics
- `GET /api/users/:id/reviews` - Get user reviews
- `POST /api/users/upload-photo` - Upload profile photo

### Meal Posts

- `GET /api/meals` - Get all available meals (with filters)
- `GET /api/meals/:id` - Get specific meal details
- `POST /api/meals` - Create new meal post
- `PUT /api/meals/:id` - Update meal post
- `DELETE /api/meals/:id` - Delete meal post
- `GET /api/meals/user/:userId` - Get meals by specific user
- `POST /api/meals/:id/join` - Join a meal
- `POST /api/meals/:id/leave` - Leave a meal
- `PUT /api/meals/:id/status` - Update meal status

### Reviews

- `GET /api/reviews/meal/:postId` - Get reviews for a meal
- `GET /api/reviews/user/:userId` - Get reviews for a user
- `POST /api/reviews` - Create a review
- `PUT /api/reviews/:id` - Update a review
- `DELETE /api/reviews/:id` - Delete a review

### Payments

- `POST /api/payments/initialize` - Initialize payment
- `POST /api/payments/verify` - Verify payment
- `GET /api/payments/history` - Get payment history
- `POST /api/payments/refund` - Request refund

### Messages

- `GET /api/messages` - Get all conversations
- `GET /api/messages/:postId` - Get messages for a meal group
- `POST /api/messages` - Send a message
- `PUT /api/messages/:id/read` - Mark message as read

### Notifications

- `GET /api/notifications` - Get all notifications
- `PUT /api/notifications/:id/read` - Mark notification as read
- `PUT /api/notifications/read-all` - Mark all as read
- `DELETE /api/notifications/:id` - Delete notification

### Search & Filters

- `GET /api/search/meals?q=` - Search meals
- `GET /api/search/users?q=` - Search users
- `GET /api/filters/locations` - Get available locations
- `GET /api/filters/universities` - Get universities list

---

## Technical Stack

### Frontend

- HTML5
- CSS3 (Bootstrap 5)
- JavaScript (ES6+)
- jQuery (if needed)
- AJAX for API calls

### Backend

- PHP 7.4+
- MySQL/MariaDB
- RESTful API architecture

### Additional Tools

- Image upload handling (PHP GD/ImageMagick)
- Payment gateway integration (Paystack/Flutterwave for Nigerian Naira)
- Email service (PHPMailer)
- Session management
- CSRF protection
- Input validation and sanitization

---

## User Flow Examples

### Creating a Meal Post

1. User logs in
2. Clicks "Create Meal Post"
3. Fills in meal details (name, photo, amount, participants, time)
4. Submits post
5. Post appears in browse section
6. User becomes the organizer

### Joining a Meal

1. User browses available meals
2. Clicks on interesting meal
3. Views meal details and organizer profile
4. Clicks "Join Meal"
5. Proceeds to payment
6. Receives confirmation
7. Gets added to meal group chat

### After Meal Completion

1. Organizer marks meal as completed
2. Participants receive notification to review
3. Users leave ratings and comments
4. Stats update for organizer
5. Payment released from escrow

---

## Security Considerations

- Password hashing (bcrypt/Argon2)
- SQL injection prevention (prepared statements)
- XSS protection
- CSRF tokens
- Secure file upload validation
- Rate limiting on API endpoints
- Email verification
- Payment security (PCI compliance)
- HTTPS enforcement

---

## Future Enhancements

- Mobile app (iOS/Android)
- Real-time chat with WebSockets
- Recipe sharing
- Meal planning calendar
- Dietary preference matching
- Loyalty/rewards system
- Social media integration
- Meal recommendations based on preferences
- Multi-language support
- Advanced analytics dashboard

---

## Installation & Setup

1. Clone the repository
2. Import database schema from `/database/schema.sql`
3. Configure database connection in `/config/database.php`
4. Set up payment gateway credentials
5. Configure email settings
6. Set proper file permissions for upload directories
7. Access via `http://localhost/foodajo`

---

## Contributing

Contributions are welcome! Please follow the coding standards and submit pull requests for review.

---

## License

[Specify your license here]

---

## Contact

For questions or support, contact: [Your contact information]

---

**FoodAjo** - Eat Better Together, Spend Less! 🍲
