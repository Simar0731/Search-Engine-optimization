<?php
if (!function_exists('generate_meta_tags')) {
    function generate_meta_tags($title, $description, $keywords) {
        return "
            <title>$title</title>
            <meta name='description' content='$description'>
            <meta name='keywords' content='$keywords'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='./css/styles.css'>
        ";
    }
}
?>
