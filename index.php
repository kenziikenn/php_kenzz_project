<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Selection - Automated Judging System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            min-height: 100vh;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        main {
            width: 100%;
            max-width: 1200px;
            padding: 20px;
        }

        .logo {
            width: 150px;
            height: 150px;
            margin: -20px auto 30px;  /* Adjusted margin to move logo higher */
            display: block;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .header p {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .select-text {
            color: white;
            font-size: 16px;
            text-align: center;
            margin-bottom: 30px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }

        .container {
            display: flex;
            gap: 30px;
            padding: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .portal-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 24px;
            width: 320px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .portal-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: #e73c7e;
            transition: all 0.3s ease;
        }

        .portal-card i {
            font-size: 40px;
            color: #e73c7e;
            margin-bottom: 20px;
        }

        .login-btn {
            background: #e73c7e;
            color: white;
            padding: 14px 30px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            box-shadow: 0 5px 15px rgba(231, 60, 126, 0.2);
        }

        .login-btn:hover {
            background: #d62e6c;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(231, 60, 126, 0.3);
        }

        .portal-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
            background: white;
        }

        .portal-card:hover::before {
            height: 6px;
        }

        .portal-card h2 {
            color: #2d3436;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }

        .portal-card p {
            color: #636e72;
            margin-bottom: 30px;
            font-size: 15px;
            line-height: 1.6;
            height: auto;
        }

        .portal-card i {
            font-size: 40px;
            color: #6C5CE7;
            margin-bottom: 20px;
        }

        .login-btn {
            background: #6C5CE7;
            color: white;
            padding: 14px 30px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.2);
        }

        .login-btn:hover {
            background: #5849c2;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(108, 92, 231, 0.3);
        }

        .signup-link {
            display: block;
            margin-top: 15px;
            color: #666;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .signup-link:hover {
            color: #e73c7e;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 32px;
            }
            .header p {
                font-size: 16px;
            }
            .container {
                gap: 20px;
            }
            .portal-card {
                width: 100%;
                max-width: 320px;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <main>
        <img src="assets/images/logo.jpg" alt="Piapi High School Logo" class="logo">
        <div class="header">
            <h1>Piapi High School</h1>
            <p>Automated Judging System</p>
        </div>
        
        <div class="select-text">
            Please select a portal to sign in
        </div>
        
        <div class="container">
            <div class="portal-card">
                <i class='bx bxs-user-badge'></i>
                <h2>Admin Portal</h2>
                <p>Manage events, candidates, judges, and system settings.</p>
                <a href="admin-login.php" class="login-btn">Login as Admin</a>
            </div>

            <div class="portal-card">
                <i class='bx bxs-user-voice'></i>
                <h2>Judge Portal</h2>
                <p>Score candidates based on various criteria.</p>
                <a href="judge-login.php" class="login-btn">Login as Judge</a>
            </div>

            <div class="portal-card">
                <i class='bx bxs-calculator'></i>
                <h2>Tabulator Portal</h2>
                <p>View and verify final scores and rankings.</p>
                <a href="tabulator-login.php" class="login-btn">Login as Tabulator</a>
                <a href="register.php" class="signup-link">Don't have an account? Sign up</a>
            </div>
        </div>
    </main>
</body>
</html>
