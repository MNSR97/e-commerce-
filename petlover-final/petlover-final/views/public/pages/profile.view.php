<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #224abe;
            --light-bg: #f8f9fc;
            --dark-text: #5a5c69;
            --light-text: #858796;
            --white: #fff;
            --shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            --border-radius: 0.35rem;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 
                'Helvetica Neue', Arial, sans-serif;
        }
        
        body {
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }
        
        .profile-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px;
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 0.8s ease-in-out;
        }
        
        .profile-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 2rem 0 rgba(58, 59, 69, 0.2);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e3e6f0;
            animation: slideInLeft 0.5s ease-in-out;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.15);
        }
        
        .profile-avatar::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: skewX(-25deg);
            transition: 0.5s;
        }
        
        .profile-avatar:hover::after {
            left: 150%;
            transition: 0.7s ease-in-out;
        }
        
        .profile-avatar i {
            font-size: 50px;
            color: var(--white);
        }
        
        .profile-header-content h1 {
            color: var(--dark-text);
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .profile-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
            animation: fadeInUp 0.6s ease-in-out;
            animation-delay: 0.2s;
            animation-fill-mode: both;
        }
        
        .info-card {
            background-color: var(--white);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.3s ease;
            transform-origin: left center;
        }
        
        .info-card:hover {
            transform: translateX(5px) scale(1.02);
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            border-left-width: 8px;
        }
        
        .info-card h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            transition: color 0.3s ease;
        }
        
        .info-card:hover h3 {
            color: var(--secondary-color);
        }
        
        .info-card p {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-text);
        }
        
        .profile-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 30px;
            animation: fadeInUp 0.6s ease-in-out;
            animation-delay: 0.4s;
            animation-fill-mode: both;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.3s;
            z-index: -1;
        }
        
        .btn:hover::before {
            left: 0;
        }
        
        .btn i {
            margin-right: 8px;
            transition: transform 0.3s ease;
        }
        
        .btn:hover i {
            transform: translateX(-3px);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        
        .btn-primary:active {
            transform: translateY(-1px);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: var(--primary-color);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        
        .btn-outline:active {
            transform: translateY(-1px);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: var(--white);
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            box-shadow: var(--shadow);
            transition: all 0.3s;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .back-to-top:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.15);
        }
        
        .back-to-top i {
            transition: transform 0.3s;
        }
        
        .back-to-top:hover i {
            transform: translateY(-3px);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes slideInLeft {
            from {
                transform: translateX(-30px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        /* Shimmer effect for cards */
        .info-card {
            position: relative;
            overflow: hidden;
        }
        
        .info-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: skewX(-25deg);
            transition: 0.5s;
        }
        
        .info-card:hover::after {
            left: 150%;
        }
        
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-avatar {
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .profile-info {
                grid-template-columns: 1fr;
            }
            
            .profile-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation bar from your original code -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/public/nav.php'; ?>

    <div class="profile-container">
        <?php if (isset($_SESSION['user'])): $user = $_SESSION['user']; ?>
            <div class="profile-header">
                <div class="profile-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="profile-header-content">
                    <h1>Welcome, <?= htmlspecialchars($user['username']) ?>!</h1>
                    <p>Manage your account information and preferences here.</p>
                </div>
            </div>
            
            <div class="profile-info">
                <div class="info-card">
                    <h3>Username</h3>
                    <p><?= htmlspecialchars($user['username']) ?></p>
                </div>
                
                <div class="info-card">
                    <h3>Email Address</h3>
                    <p><?= htmlspecialchars($user['email']) ?></p>
                </div>
                
                <div class="info-card">
                    <h3>Account Role</h3>
                    <p><?= htmlspecialchars($user['role']) ?></p>
                </div>
                
                <div class="info-card">
                    <h3>Member Since</h3>
                    <p><?= isset($user['created_at']) ? date('F d, Y', strtotime($user['created_at'])) : 'N/A' ?></p>
                </div>
            </div>
            
            
            
        <?php else: ?>
            <div class="profile-header">
                <div class="profile-header-content">
                    <h1>You are not logged in</h1>
                    <p>Please log in to view your profile information.</p>
                </div>
            </div>
            <div class="profile-actions">
                <a href="/signup" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Log In</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Footer from your original code -->
    <?php require_once __DIR__.'../../../layout/public/footer.php'; ?>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>

    <!-- JavaScript Libraries --> 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('/lib/easing/easing.min.js')?>"></script> 
    <script src="<?= asset('/lib/owlcarousel/owl.carousel.min.js')?>"></script> 
    <script src="<?= asset('/lib/tempusdominus/js/moment.min.js')?>"></script> 
    <script src="<?= asset('/lib/tempusdominus/js/moment-timezone.min.js')?>"></script> 
    <script src="<?= asset('/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>
    
    <!-- Contact Javascript File --> 
    <script src="<?= asset('/js/mail/jqBootstrapValidation.min.js')?>"></script> 
    <script src="<?= asset('/js/mail/contact.js')?>"></script>
    
    <!-- Template Javascript --> 
    <script src="<?= asset('/js/main.js')?>"></script>
    
    <!-- Custom JavaScript for additional effects -->
    <script>
        $(document).ready(function() {
            // Add staggered animation delay to info cards
            $('.info-card').each(function(index) {
                $(this).css('animation-delay', (0.2 + (index * 0.1)) + 's');
            });
            
            // Back to top button visibility
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').addClass('visible');
                } else {
                    $('.back-to-top').removeClass('visible');
                }
            });
            
            // Smooth scroll to top
            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800, 'easeInOutExpo');
                return false;
            });
            
            // Add hover effect to info cards
            $('.info-card').hover(
                function() {
                    $(this).find('h3').css('transform', 'translateX(5px)');
                },
                function() {
                    $(this).find('h3').css('transform', 'translateX(0)');
                }
            );
            
            // Fun effect: Add pulse animation to avatar on page load
            setTimeout(function() {
                $('.profile-avatar').addClass('animate__animated animate__pulse');
            }, 1500);
        });
    </script>
</body>
</html>