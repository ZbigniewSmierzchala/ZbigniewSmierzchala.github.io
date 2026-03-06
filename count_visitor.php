<?php
// count_visitor.php

$file = 'counter.txt';

// Check if file exists
if (file_exists($file)) {
    // Read current number
    $count = (int)file_get_contents($file);
    
    // Simple Bot Filter (Optional: Don't count Google/Bing bots)
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $isBot = preg_match('/(bot|crawl|spider|google|bing|yahoo)/i', $userAgent);

    if (!$isBot) {
        // Add 1
        $count++;
        // Save back to file
        file_put_contents($file, $count);
    }
}
?>