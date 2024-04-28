<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Employee Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


<style type="text/tailwindcss">
    @layer utilities {
        .bg-blue{
            background: #9086f6;
        }
        .bg-black{
            background: #161717;
        }
        .text-black{
            color: #161717;
        }
        .text-blue{
            color: #9086f6;
        }
        .bg-red{
            background:#e02c2c;
        }
        .text-red{
            color: #e02c2c;
        }
        input{
            background: white;
        }
        input:focus{
            outline: 0;
        }
    }
</style>


<?php wp_head(); ?>
</head>

<body>