<!DOCTYPE html>
<?php 
    # Start session for the login system
    session_start();

    # Randomly makes a number between 0-255
    function random_color_part() {
        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    }
    
    # Request a random color to be made
    function random_color() {
        return "#" . random_color_part() . random_color_part() . random_color_part();
    }

    # Easy to change variables for the title, description, and image

    $page_title = "title";
    $page_keywords = "Dralle, dralle.me, rebuilding, website, brasseriemathisen, brasserie, mathisen, hotelranders, randers, hotel, denmark, danmark, dk"
    $page_author = "Dralle";
    $page_description = "This website was made with ♥ by ". $page_author;
    $page_fav_icon = null;
    $page_image = null;
    $page_link = "https://dralle.me/"
    $page_color_hex = random_color();

?>
<html>
    
<head>
        <!-- What characters are allowed on the site -->
	    <meta charset="UTF-8">
        <!-- The title of the page -->
		<title><?php echo $page_title; ?></title>
        <!-- Adds a little icon next to the title in the page tab on the browser -->
        <link rel="icon" href="<?php echo $page_fav_icon; ?>" type="image/icon" sizes="16x16">
        <!-- Keywords the people can search for to find this page -->
		<meta name="keywords" content="<?php echo $page_keywords; ?>">
		<!-- The author of the website -->
        <meta name="author" content="<?php echo $page_author; ?>">
        <!-- The description of the current page -->
        <meta name="description" content="<?php echo $page_description; ?>">
        <!-- This makes the website viewable on any device -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- This makes the website viewable on any device -->
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- These og meta tags help with embeds in chat rooms on other apps -->
		<meta property="og:title" content="<?php echo $page_title; ?>">
		<meta property="og:site_name" content="dralle.me" >
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $page_link; ?>">
		<meta property="og:image" content="<?php echo $page_image; ?>">
		<meta property="og:description" content="<?php echo $page_description; ?>">
		<meta name="theme-color" content="<?php echo $page_color_hex; ?>">
        <!-- Here you will find all the css the page uses -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- These are the scripts the page uses -->
		<script src="assets/scripts/script.js" async defer></script>
	</head>

<body>

    

</body>

</html>