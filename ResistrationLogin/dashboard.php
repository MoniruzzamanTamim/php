<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "❌ Access Denied. Please login.";
    exit;
}

echo "👋 Welcome, " . $_SESSION['user_name'];
?>
