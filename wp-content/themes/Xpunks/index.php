<?php get_header(); ?>
<!-- Your HTML/CSS code goes here -->

<?php $cur_directory =  'http://' . $_SERVER['HTTP_HOST'] . '/xpunks/wp-content/themes/Xpunks'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>XPUNKS</title>
    <link rel="stylesheet" href="<?php echo $cur_directory; ?>/css/style.css">
    <!-- <link rel="stylesheet" href="/xpunks/css/style.css"> -->
</head>
<body>
    <div class="container">
        <nav class="nav">
            <div class="nav-content">
                <div class="nav-content-logo">
                    <img src="<?php echo $cur_directory; ?>/img/logo.svg" alt="logo"/>
                </div>
                <div class="nav-content-bar"></div>
                <div class="nav-content-social-icons">
                    <a href="#" class="social-icon discord">
                        <img src="<?php echo $cur_directory; ?>/img/discord.svg" alt=""/>
                    </a>
                    
                    <a href="#" class="social-icon">
                        <img src="<?php echo $cur_directory; ?>/img/youtube.svg" alt=""/>
                    </a>

                    <a href="#" class="social-icon">
                        <img src="<?php echo $cur_directory; ?>/img/reddit.svg" alt=""/>
                    </a>

                    <a href="#" class="social-icon">
                        <img src="<?php echo $cur_directory; ?>/img/facebook.svg" alt=""/>
                    </a>

                    <a href="#" class="social-icon">
                        <img src="<?php echo $cur_directory; ?>/img/instagram.svg" alt=""/>
                    </a>

                </div>
            </div>
        </nav>

        <div class="main-content">
            <div class="content content-left">
                <img class="logo-title" src="<?php echo $cur_directory; ?>/img/logotitle.svg" width="290.7" height="56.67" alt="logo"/>
                <p class="tx-chapter">CHAPTER 2</p>

                <div class="buttons">
                    <div class="whitepaper">
                        <span class="witepaper-tx witepaper-tx-1">witepaper</span>
                        <span class="witepaper-tx witepaper-tx-2">witepaper</span>
                    </div>

                    <div class="xpunks">
                        <span class="xpunks-tx">Join the XPUNKS</span>
                    </div>
                    
                </div>
            </div>
    
            <div class="video-container content-right">
                <img src="<?php echo $cur_directory; ?>/img/player.svg" alt="player icon" />
            </div>
        </div>

        <footer>
            <hr class="footer-bar"/>
            <div class="footer-text">
                <span class="footer-tx left copyright-tx">Copyright 2023 XPUNK</span>
                <span class="footer-tx right business-tx">XPUNK Business Inquiries</span>
            </div>
        </footer>
        
    </div>
</body>
</html>

<?php get_footer(); ?>
