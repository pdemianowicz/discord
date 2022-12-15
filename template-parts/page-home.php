<?php 

    /**
    * Template Name: Home
    */

defined( 'ABSPATH' ) || exit; get_header(); ?> 


<section class="hero">
    <div class="container">
        <h1><?php echo get_field('hero_tittle'); ?></h1>
        <p>...where you can belong to a school club, a gaming group, or a worldwide art community. Where just you and a handful of friends can spend time together. A place that makes it easy to talk every day and hang out more often.</p>
        <div class="wrapper">
            <a href="<?php echo get_field('hero_left_button_url')?>"><button class="button button-hero button-hero--first"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-2tQ9Jt"><g fill="currentColor"><path d="M17.707 10.708L16.293 9.29398L13 12.587V2.00098H11V12.587L7.70697 9.29398L6.29297 10.708L12 16.415L17.707 10.708Z"></path><path d="M18 18.001V20.001H6V18.001H4V20.001C4 21.103 4.897 22.001 6 22.001H18C19.104 22.001 20 21.103 20 20.001V18.001H18Z"></path></g></svg>Download for Windows</button></a>
            <button class="button button-hero button-hero--second">Open Discord in your browser</button>
        </div>
    </div>
    <div class="images">
        <img class="bg-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-image1.svg" alt="">
        <img class="bg-right" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-image2.svg" alt="">
    </div>
</section>


<div class="main-section-wrapper">
    <section class="s1">
        <div class="container" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picture-1.svg" alt="" >
            <div>
                <h2>Create an invite-only place where you belong</h2>
                <p>Discord servers are organized into topic-based channels where you can collaborate, share, and just talk about your day without clogging up a group chat.</p>
            </div>
        </div>
    </section>

    <section class="s2">
        <div class="container" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picture-2.svg" alt="" loading="lazy">
            <div>
                <h2>Where hanging out is easy</h2>
                <p>Grab a seat in a voice channel when you’re free. Friends in your server can see you’re around and instantly pop in to talk without having to call.</p>
            </div>
        </div>
    </section>

    <section class="s3">
        <div class="container" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picture-3.svg" alt="" loading="lazy">
            <div>
                <h2>From few to a fandom</h2>
                <p>Get any community running with moderation tools and custom member access. Give members special powers, set up private channels, and more.</p>
            </div>
        </div>
    </section>

    <section class="s4">
        <div class="container" data-aos="fade-up">
            <div>
                <h2>Reliable tech for staying close</h2>
                <p>Low-latency voice and video feels like you’re in the same room. Wave hello over video, watch friends stream their games, or gather up and have a drawing session with screen share.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picture-4.svg" alt="" loading="lazy">
        </div>
    </section>
</div>


<section class="newsletter">
    <h3>Ready to start your journey?</h3>
    <button class="button button-newsletter"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-2tQ9Jt"><g fill="currentColor"><path d="M17.707 10.708L16.293 9.29398L13 12.587V2.00098H11V12.587L7.70697 9.29398L6.29297 10.708L12 16.415L17.707 10.708Z"></path><path d="M18 18.001V20.001H6V18.001H4V20.001C4 21.103 4.897 22.001 6 22.001H18C19.104 22.001 20 21.103 20 20.001V18.001H18Z"></path></g></svg>Download for Windows</button>
</section>



<?php get_footer();
