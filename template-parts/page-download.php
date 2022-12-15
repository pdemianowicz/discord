<?php 

    /**
    * Template Name: Download
    */

defined( 'ABSPATH' ) || exit; get_header(); ?> 


<?php 

$heroImage = get_field('hero_image');

?>

<div class="page-download">
    <section class="hero">
        <div class="container">
            <div class="wrapper">
                <h1>Get Discord for any device</h1>
                <p>.An adventure awaits. Hang out with your friends on our desktop app and keep the conversation going on mobile.</p>
                <div class="wrapper">
                    <button class="button button-hero button-hero--first"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-2tQ9Jt"><g fill="currentColor"><path d="M17.707 10.708L16.293 9.29398L13 12.587V2.00098H11V12.587L7.70697 9.29398L6.29297 10.708L12 16.415L17.707 10.708Z"></path><path d="M18 18.001V20.001H6V18.001H4V20.001C4 21.103 4.897 22.001 6 22.001H18C19.104 22.001 20 21.103 20 20.001V18.001H18Z"></path></g></svg>Download for Windows</button>
                    <span>Windows 7 or higher</span>
                </div>
            </div>

            <img src="
                <?php if( $heroImage ){
                    echo $heroImage;
                } else {
                    echo get_template_directory_uri();?>/assets/img/download-hero.svg
                <?php } ?>
                    " alt="<?php echo get_field("alt_for_image"); ?>">
            
        </div>
    </section>

    <section class="download-system">
        <div class="container">
            <ul>
                <li>
                    <h3>iOS</h3>
                    <button class="button">Download</button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ios.svg" alt="">
                </li>
                <li>
                    <h3>Android</h3>
                    <button class="button">Download</button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/android.svg" alt="" loading="lazy">
                </li>
                <li>
                    <h3>Linux</h3>
                    <button class="button">Download</button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linux.svg" alt="" loading="lazy">
                </li>
                <li>
                    <h3>Mac</h3>
                    <button class="button">Download</button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mac.svg" alt="" loading="lazy">
                </li>
                <li>
                    <h3>Feeling experimental?</h3>
                    <p>Try our Public Test Build and test new features before they launch.</p>
                    <button class="button">Download Public Test Build</button>
                </li>
            </ul>
        </div>
    </section> 
</div>


<?php get_footer();
