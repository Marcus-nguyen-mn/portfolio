<?php
/**
 * template name: Home Page
 */
get_header();
?>
<main class="drake-main">
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <?php
                get_template_part('sections/home/hi');
                get_template_part('sections/home/about');
                get_template_part('sections/home/education-experience');
                get_template_part('sections/home/specializations');
            ?>
    
            <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                <div class="custom-container">
                    <div class="portfolio-content content-width">
                        <div class="section-header">
                            <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                <i class="las la-grip-vertical"></i> portfolio
                            </h4>
                            <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                        </div>
    
                        <div class="row portfolio-items">
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-full">
                                    <div class="portfolio-item-inner">
                                        <a href="#" data-lightbox="example-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio1.jpg" alt="Portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="#">Figma</a>
                                            </li>
                                            <li>
                                                <a href="#">Framer</a>
                                            </li>
                                            <li>
                                                <a href="#">WordPress</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Bureau - Architecture Studio Website</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="./assets/images/portfolio2.jpg" data-lightbox="example-1">
                                            <img src="./assets/images/portfolio2.jpg" alt="Portfolio">
                                        </a>

                                        <img src="./assets/images/portfolio2.jpg" alt="Portfolio">
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">WordPress</a>
                                            </li>
                                            <li>
                                                <a href="">Larevel/PHP</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Moonex WordPress Theme</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="./assets/images/portfolio3.jpg" data-lightbox="example-1">
                                            <img src="./assets/images/portfolio3.jpg" alt="Portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">Figma</a>
                                            </li>
                                            <li>
                                                <a href="">Webflow</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Taskly Dashboard</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="./assets/images/portfolio4.jpg" data-lightbox="example-1">
                                            <img src="./assets/images/portfolio4.jpg" alt="portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">Figma</a>
                                            </li>
                                            <li>
                                                <a href="">React</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Hinterland - Real Estate Site Redesign</a></h2>
                                </div>
                            </div>
    
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="./assets/images/portfolio5.jpg" data-lightbox="example-1">
                                            <img src="./assets/images/portfolio5.jpg" alt="portfolio">
                                        </a>
    
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="">Framer</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2><a href="">Lewis Portfolio Framer Template</a></h2>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </section>
    
    
            <section class="testimonial-area page-section scroll-to-page" id="testimonial">
                <div class="custom-container">
                    <div class="testimonial-content content-width">
                        <div class="section-header">
                            <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                <i class="lar la-comment"></i> testimonial
                            </h4>
                            <h1 class="scroll-animation" data-animation="fade_from_bottom">Trusted by <span>Hundered Clients</span></h1>
                        </div>
    
                        <div class="testimonial-slider-wrap scroll-animation" data-animation="fade_from_bottom">
                            <div class="owl-carousel testimonial-slider owl-theme">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-inner">
                                        <div class="author d-flex align-items-center">
                                            <img src="./assets/images/testimonial-1.jpg" alt="portfolio">
                                            <div class="right">
                                                <h3>Paublo Dybala</h3>
                                                <p class="designation">CEO of <span>IBM Global</span></p>
                                            </div>
                                        </div>
                                        <p>“Drake - A Developer with the creativity, professional and 
                                            master of code. Much more than what i'm expect. 
                                            High quality product & flexiable price. Recommended!.”</p>
    
                                        <a href="" class="project-btn">Project</a>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item-inner">
                                        <div class="author d-flex align-items-center">
                                            <img src="./assets/images/testimonial-2.jpg" alt="portfolio">
                                            <div class="right">
                                                <h3>Christina Morillo</h3>
                                                <p class="designation">Product Management of <span>Invision App Inc</span></p>
                                            </div>
                                        </div>
                                        <p>“Drake was a real pleasure to work with and we look 
                                            forward to working with him again. He's definitely the kind of 
                                            designer that you can trust with any project from A-Z.”</p>
    
                                        <a href="" class="project-btn">Project</a>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item-inner">
                                        <div class="author d-flex align-items-center">
                                            <img src="./assets/images/testimonial-3.jpg" alt="portfolio">
                                            <div class="right">
                                                <h3>Phil Foden</h3>
                                                <p class="designation">Director of <span>Envato LLC</span></p>
                                            </div>
                                        </div>
                                        <p>“Extremely profressional and fast service!. Drake is a master
                                            of code and he also very creative. We done 3 projects with
                                            him and certain will continue.”</p>
    
                                        <a href="" class="project-btn">Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-footer-nav">
                                <div class="testimonial-nav d-flex align-items-center">
                                    <button class="prev"><i class="las la-angle-left"></i></button>
                                    <div id="testimonial-slide-count"></div>
                                    <button class="next"><i class="las la-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
    
                        <div class="clients-logos">
                            <h4 class="scroll-animation" data-animation="fade_from_bottom">work with 60+ brands worldwide</h4>
                            <div class="row align-items-center">
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <img src="./assets/images/client-1.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <img src="./assets/images/client-2.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <img src="./assets/images/client-3.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <img src="./assets/images/client-4.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <img src="./assets/images/client-5.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <img src="./assets/images/client-6.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <img src="./assets/images/client-7.png" alt="client">
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <img src="./assets/images/client-8.png" alt="client">
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </section>
    
    
            <section class="pricing-area page-section scroll-to-page" id="pricing">
                <div class="custom-container">
                    <div class="pricing-content content-width">
                        <div class="section-header">
                            <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                <i class="las la-dollar-sign"></i> pricing
                            </h4>
                            <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Pricing</span></h1>
                        </div>
    
                        <div class="pricing-table-items">
                            <div class="row">
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                    <div class="pricing-table">
                                        <div class="pricing-table-header">
                                            <div class="top d-flex justify-content-between align-items-start">
                                                <h4>basic</h4>
                                                <p class="text-right">Have design ready to build?<br>
                                                    or small budget</p>
                                            </div>
                                            <h1>$59 <span>/ hour</span></h1>
                                        </div>
                                        <ul class="feature-lists">
                                            <li>Need your wireframe</li>
                                            <li>Design with Figma, Framer</li>
                                            <li>Implement with Webflow, React, WordPress, Laravel/PHP</li>
                                            <li>Remote/Online</li>
                                            <li>Work in business days, no weekend.</li>
                                            <li>Support 6 months</li>
                                        </ul>
                                        <a href="" class="theme-btn">pick this package</a>
                                    </div>
                                </div>
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                    <div class="pricing-table">
                                        <div class="pricing-table-header">
                                            <div class="top d-flex justify-content-between align-items-start">
                                                <h4>premium</h4>
                                                <p class="text-right">Not have any design?<br>
                                                    Leave its for me</p>
                                            </div>
                                            <h1>$129 <span>/ hour</span></h1>
                                        </div>
                                        <ul class="feature-lists">
                                            <li>Don't need wireframe or anything</li>
                                            <li>Design with Figma, Framer from scratch</li>
                                            <li>Implement with Webflow, React, WordPress, Laravel/PHP</li>
                                            <li>Remote/Online</li>
                                            <li>Work with both weekend</li>
                                            <li>Support 12 months</li>
                                            <li>Your project alway be priority</li>
                                            <li>Customer care gifts</li>
                                        </ul>
                                        <a href="" class="theme-btn">pick this package</a>
                                    </div>
                                </div>
                            </div>
                            <p class="info scroll-animation" data-animation="fade_from_bottom">
                                Don't find any package match with your plan!<br>
                                Want to setup a new tailor-made package for only you?. <a href="">Contact Us</a>
                            </p>
                        </div>
    
                    </div>
                </div>
            </section>


            <section class="contact-area page-section scroll-content" id="contact">
                <div class="custom-container">
                    <div class="contact-content content-width">
                        <div class="section-header">
                            <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                <i class="las la-dollar-sign"></i> contact
                            </h4>
                            <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work <span>Together!</span></h1>
                        </div>
                        <h3 class="scroll-animation" data-animation="fade_from_bottom">hello@drake.design</h3>
                        <p id="required-msg">* Marked fields are required to fill.</p>

                        <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="mailer.php">
                            <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="full-name">full Name <sup>*</sup></label>
                                        <input type="text" name="full-name" id="full-name" placeholder="Your Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" name="email" id="email" placeholder="Your email adress">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="phone-number">phone <span>(optional)</span></label>
                                        <input type="text" name="phone-number" id="phone-number" placeholder="Your number phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="subject">subject <sup>*</sup></label>
                                        <select name="subject" id="subject">
                                            <option value="">Select a subject</option>
                                            <option value="subject1">Subject 1</option>
                                            <option value="subject2">Subject 2</option>
                                            <option value="subject3">Subject 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label for="budget">your budget <span>(optional)</span></label>
                                        <input type="number" name="budget" id="budget" placeholder="A range budget for your project">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label for="message">message</label>
                                        <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group upload-attachment">
                                        <div>
                                            <label for="upload-attachment">
                                                <i class="las la-cloud-upload-alt"></i> add an attachment
                                                <input type="file" name="file" id="upload-attachment">
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group submit-btn-wrap">
                                        <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer();?>