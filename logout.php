<?php
session_start();
session_unset();

// destroy the session
session_destroy();
        if (!isset($_SESSION['token'])) {
          echo "1";
        }
