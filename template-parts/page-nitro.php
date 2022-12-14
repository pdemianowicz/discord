<?php 

    /**
    * Template Name: Nitro
    */

defined( 'ABSPATH' ) || exit; get_header(); ?> 



<div class="page-nitro">

    <section class="page-nitro__hero">
        <div class="container">
            <div>
                <h1>Unleash more fun with Nitro</h1>
                <p>Subscribe to Nitro to upgrade your emoji, personalize your profile,  share bigger files, and so much more.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nitro-hero.png" alt="Nitro discord">
        </div>
    </section>

    <section class="subscribe-plan">
        <div class="container">
            <div class="card">
                <h2>Nitro Basic</h2>
                <ul>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/></svg>50MB uploads</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 32 32" ><path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM22 8c1.105 0 2 1.343 2 3s-0.895 3-2 3-2-1.343-2-3 0.895-3 2-3zM10 8c1.105 0 2 1.343 2 3s-0.895 3-2 3-2-1.343-2-3 0.895-3 2-3zM16 28c-5.215 0-9.544-4.371-10-9.947 2.93 1.691 6.377 2.658 10 2.658s7.070-0.963 10-2.654c-0.455 5.576-4.785 9.942-10 9.942z"></path></svg>Custom emoji anywhere</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 32 32" ><path d="M16 2c8.837 0 16 7.163 16 16 0 6.025-3.331 11.271-8.25 14h-15.499c-4.92-2.729-8.25-7.975-8.25-14 0-8.837 7.163-16 16-16zM25.060 27.060c2.42-2.42 3.753-5.637 3.753-9.060h-2.813v-2h2.657c-0.219-1.406-0.668-2.755-1.33-4h-3.327v-2h2.009c-0.295-0.368-0.611-0.722-0.949-1.060-1.444-1.444-3.173-2.501-5.060-3.119v2.178h-2v-2.658c-0.656-0.102-1.324-0.155-2-0.155s-1.344 0.053-2 0.155v2.658h-2v-2.178c-1.887 0.617-3.615 1.674-5.060 3.119-0.338 0.338-0.654 0.692-0.949 1.060h2.009v2h-3.327c-0.662 1.245-1.111 2.594-1.33 4h2.657v2h-2.813c0 3.422 1.333 6.64 3.753 9.060 0.335 0.335 0.685 0.648 1.049 0.94h6.011l1.143-16h1.714l1.143 16h6.011c0.364-0.292 0.714-0.606 1.049-0.94z"></path></svg>Special Nitro badge on your profile</a></li>
                </ul>
                <button class="button button-subscribe">Subscribe</button>
            </div>
            <div class="card">
                <h2>Nitro</h2>
                <ul>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/></svg>50MB uploads</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 32 32" ><path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM22 8c1.105 0 2 1.343 2 3s-0.895 3-2 3-2-1.343-2-3 0.895-3 2-3zM10 8c1.105 0 2 1.343 2 3s-0.895 3-2 3-2-1.343-2-3 0.895-3 2-3zM16 28c-5.215 0-9.544-4.371-10-9.947 2.93 1.691 6.377 2.658 10 2.658s7.070-0.963 10-2.654c-0.455 5.576-4.785 9.942-10 9.942z"></path></svg>Custom emoji anywhere</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M10.53 5.968h-.843v4.06h.843c1.117 0 1.622-.667 1.622-2.02 0-1.354-.51-2.04-1.622-2.04z"/><path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm5.396 3.001V11H6.209V8.43H3.687V11H2.5V5.001h1.187v2.44h2.522V5h1.187zM8.5 11V5.001h2.188c1.824 0 2.685 1.09 2.685 2.984C13.373 9.893 12.5 11 10.69 11H8.5z"/></svg>HD video streaming</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z"/><path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z"/></svg>Access to Activities</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M2.45 7.4 7.2 1.067a1 1 0 0 1 1.6 0L13.55 7.4a1 1 0 0 1 0 1.2L8.8 14.933a1 1 0 0 1-1.6 0L2.45 8.6a1 1 0 0 1 0-1.2z"/></svg>2 Server Boosts</a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/></svg>Custom profiles and more!</a></li>
                </ul>
                <button class="button button-subscribe">Subscribe</button>
            </div>
        </div>
    </section>

    <section class="nitro-perks">
        <div class="container">
            <h2>Popular Nitro Perks</h2>
            <ul>
                <li>
                    <h3>From clips to pics, share away with bigger file uploads</h3>
                    <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/633bf534f7cda178e9b4cc8c_Project-Speedy-Uploader-Static.svg" alt="" loading="lazy">
                </li>
                <li>
                    <h3>Stream apps and games in sweet, sweet HD</h3>
                    <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/633bf534b85e9008c06d873d_Project-Speedy-Streaming-Static.svg" alt="" loading="lazy">
                </li>
                <li>
                    <h3>Hype and meme with custom emoji anywhere</h3>
                    <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/633bf5348529b3789de63d3c_Project-Speedy-Emoji-Static.svg" alt="" loading="lazy">
                </li>
                <li>
                    <h3>Unlock perks for your communities with 2 Server Boosts</h3>
                    <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/633bf534f1f0854923a8e9c1_Frame%20881.svg" alt="" loading="lazy">
                </li>
            </ul>
            <button class="button">Show all perks</button>
        </div>
    </section>
   
    <section class="nitro-plans">
        <div class="container">
            <h2>Pick the plan that works best for you</h2>
            <table>
                <tr>
                    <td><b>Features</b></td>
                    <td><b>Nitro Basic</b></td>
                    <td><b>Nitro</b></td>
                </tr>
                <tr>
                    <td>Custom emoji anywhere and make them animated</td>
                    <td><span class="check"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Custom stickers anywhere plus 300+ Nitro exclusives</td>
                    <td><span class="check"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Bigger file sharing</td>
                    <td><b>50MB</b></td>
                    <td><b>500MB</b></td>
                </tr>
                <tr>
                    <td>Access to more Activities</td>
                    <td><span class="x"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>HD streaming</td>
                    <td><span class="x"></span></td>
                    <td><b>Up to 4K and 60fps</b></td>
                </tr>
                <tr>
                    <td>2 Free Boosts + 30% off extra Boosts</td>
                    <td><span class="x"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Animated avatar, banner, profile theme, and custom tag</td>
                    <td><span class="x"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Custom server profiles</td>
                    <td><span class="x"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Nitro badge on your profile</td>
                    <td><span class="check"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Custom video backgrounds</td>
                    <td><span class="check"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Join up to 200 servers</td>
                    <td><span class="x"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td>Longer messages up to 4,000 characters</td>
                    <td><span class="x"></span></td>
                    <td><span class="check"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="button">Subscribe Basic</button></td>
                    <td><button class="button">Subscribe Nitro</button></td>
                </tr>
            </table>
        </div>
    </section>

    <section class="nitro-faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>

            <ul class="faq-nav">
                <li>General</li>
                <li>Payments</li>
                <li>Gifting and Promotions</li>
                <li>Other</li>
            </ul>

            <ul class="accordion">
                <li>
                    <p class="accordion-title">What's Nitro?</p>
                    <p class="accordion-des">Nitro is a subscription service that unlocks features and perks across Discord, giving you more ways to have fun and express yourself.</p>
                </li>
                <li>
                    <p class="accordion-title">How does Nitro work?</p>
                    <p class="accordion-des">When you subscribe to Nitro, you get access to features that were previously locked for you - like using custom emoji anywhere, uploading bigger files, setting a custom video background, and more. When the subscription ends, you’ll lose access to the perks.</p>
                </li>
                <li>
                    <p class="accordion-title">What’s the difference between Nitro and Nitro Basic?</p>
                    <p class="accordion-des">Nitro is our most popular plan that unlocks access to all available Nitro perks, and Nitro Basic includes a selection of the most-loved Nitro perks that help you better express yourself. See the comparison chart above for a full breakdown!</p>
                </li>
                <li>
                    <p class="accordion-title">How much does Nitro cost?</p>
                    <p class="accordion-des">Cost varies depending on your country and plan. You can check Nitro prices under User Settings > Nitro in either the desktop or mobile apps.</p>
                </li>
                <li>
                    <p class="accordion-title">Where can I buy Nitro?</p>
                    <p class="accordion-des">You can purchase Nitro by visiting the Nitro tab in User Settings, or in the Nitro page under Home on desktop. On mobile, visit User Settings by tapping your user icon in the bottom bar, then select Get Nitro.</p>
                </li>
            </ul>

        </div>
    </section>

    <section class="nitro-newsletter">
        <div class="container">
            <h3>Unleash the fun with Nitro</h3>
            <button class="button">Subscribe</button>
        </div>
    </section>

<?php get_footer();
