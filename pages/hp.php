<?php
require_once(__DIR__ . '/../includes/system_core.php');
session_start();

// Update icon path
<link rel="icon" type="image/x-icon" href="../favicon.ico">

// Update the error redirect
if (isset($_GET['error'])) {
    header("Location: /index.php?error");  // Remove the ../ since it will be at root
}

// Update sidebar links to remove 'pages/' prefix if needed
<div class="sidebar">
    <a href="/manage_events.php">🏆 Manage Events</a>
    <a href="/manage_judge.php">🧑‍⚖️ Manage Judges</a>
    <a href="/manage_ranking.php">📊 Manage Ranking & Scoring</a>
    <a href="/manage_criteria.php">📝 Manage Criteria</a>
    <a href="/manage_contestants.php">👤 Manage Contestants</a>
    <a href="/manage_rounds.php">🔄 Manage Rounds</a>
    <a href="/manage_accounts.php">👥 Manage Accounts</a>
    <a href="/manage_special_awards.php">🌟 Manage Special Awards</a>
    <a href="/log-out.php" class="btn-custom">🚪 Logout</a>
</div>
    
    <div class="content">
        <div class="overview-container">
            <h1>Welcome to the Automated Judging System</h1>
            <div class="welcome-message">
                Welcome, Admin! Please use the sidebar menu to access and manage different aspects of the judging system. Each module provides specific functionality for managing events, judges, contestants, scoring, and other essential components of the competition system.
            </div>
            <div class="overview-text">
                An automated judging system is a technology-driven solution designed to evaluate and score submissions in various competitions or assessments by using predefined criteria and algorithms, offering a fast, consistent, and objective approach to decision-making, while minimizing human intervention and reducing the potential for bias or errors. These systems can handle large volumes of submissions simultaneously, providing accurate results in real-time and often generating feedback for participants, making them ideal for scenarios like coding contests, sports events, educational assessments, and creative competitions.
            </div>
        </div>
    </div>
    <?php 
    $footer = getFooterSettings();
    if ($footer['enabled']) {
        echo '<footer style="
            background: #0d1b2a;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            font-size: 14px;
            z-index: -1;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.4);">
            ' . htmlspecialchars($footer['text']) . '
        </footer>';
        
        echo '<div style="height: 60px;"></div>'; // Add spacing to prevent content overlap
    }
    ?>
</body>
</html>
