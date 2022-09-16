<!-- Start info-section -->
<section class="info-section">

<!-- Start of Water Scarcity info -->
    <article class="intro">
        <h2 class="title">
            <?php the_field('title_1'); ?>
        </h2>
        <div class="info-container">
            <div class="right">
                <img class="info-image" src="<?php the_field('info_image_1'); ?>" alt="Low Water level at Grant Lake">
                <figcaption>
                    Photo by <a href="<?php the_field('info_image_1_url'); ?>" target="_blank">
                                <?php the_field('artist_name_1'); ?>
                            </a> 
                                on 
                            <a href="<?php the_field('image_site_1'); ?>" target="_blank">
                                <?php the_field('image_site_name_1'); ?>
                            </a>
                </figcaption>
            </div>
            <div class="content item-right">
                <?php the_field('text_content_1');?>
            </div>
        </div>
    </article>
<!-- End of Water Scarcity info -->

<!-- Start of Causes info -->
    <article class="intro">
        <h2 class="title">
            <?php the_field('title_2'); ?>
        </h2>
        <div class="info-container">
            <div class="left">
                <img class="info-image" src="<?php the_field('info_image_2'); ?>" alt="Causes of water scarcity">
                <figcaption>
                    Photo by <a href="<?php the_field('info_image_2_url'); ?>" target="_blank">
                                <?php the_field('artist_name_2'); ?>
                            </a> 
                                on 
                            <a href="<?php the_field('image_site_2'); ?>" target="_blank">
                                <?php the_field('image_site_name_2'); ?>
                            </a>
                </figcaption>
            </div>
            <div class="content">
                <?php the_field('text_content_2');?>
            </div>
        </div>
    </article>
<!-- End of Causes info -->

<!-- Start of Effects info -->
    <article class="intro">
        <h2 class="title">
            <?php the_field('title_3'); ?>
        </h2>
        <div class="info-container">
            <div class="right">
                <img class="info-image" src="<?php the_field('info_image_3'); ?>" alt="Boy drinking muddy water from small stream">
                <figcaption>
                    Photo by <a href="<?php the_field('info_image_3_url'); ?>" target="_blank">
                                <?php the_field('artist_name_3'); ?>
                            </a> 
                                on 
                            <a href="<?php the_field('image_site_3'); ?>" target="_blank">
                                <?php the_field('image_site_name_3'); ?>
                            </a>
                </figcaption>
            </div>
            <div class="content item-right">
                <?php the_field('text_content_3');?>
            </div>
        </div>
    </article>
<!-- End of Causes info -->

<!-- Start of Possible solutions info -->
    <article class="intro">
        <h2 class="title">
            <?php the_field('title_4'); ?>
        </h2>
        <div class="info-container">
            <div class="left">
                <img class="info-image" src="<?php the_field('info_image_4'); ?>" alt="Light-bulb-shaped lake in the middle of misty forest">
                <figcaption>
                    Photo by <a href="<?php the_field('info_image_4_url'); ?>" target="_blank">
                                <?php the_field('artist_name_4'); ?>
                            </a> 
                                on 
                            <a href="<?php the_field('image_site_4'); ?>" target="_blank">
                                <?php the_field('image_site_name_4'); ?>
                            </a>
                </figcaption>
            </div>
            <div class="content">
                <?php the_field('text_content_4');?>
            </div>
        </div>
    </article>
<!-- End of Possible solutions info -->
</section>
<!-- End of info-section -->

<!-- Start of Gallery for solutions -->
<section class="information">
  <ul class="gallery-info">
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_1'); ?>" alt="Underground water" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_1'); ?></h3>
      <a href="<?php the_field('website_url_1'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_2'); ?>" alt="Recycling Wastewater" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_2'); ?></h3>
      <a href="<?php the_field('website_url_2'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_3'); ?>" alt="Dam with water flowing out of it" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_3'); ?></h3>
      <a href="<?php the_field('website_url_3'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_4'); ?>" alt="Rainwater being collected in basin" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_4'); ?></h3>
      <p>Please consult your local laws before proceeding.</p>
      <a href="<?php the_field('website_url_4'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_5'); ?>" alt="Toxic green sewage" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_5'); ?></h3>
      <a href="<?php the_field('website_url_5'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_6'); ?>" alt="Three people-shaped icons" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_6'); ?></h3>
      <a href="<?php the_field('website_url_6'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_7'); ?>" alt="Well" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_7'); ?></h3>
      <a href="<?php the_field('website_url_7'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_8'); ?>" alt="Person sitting on top of books while reading" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_8'); ?></h3>
      <a href="<?php the_field('website_url_8'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_9'); ?>" alt="No throwing plastic in water sign" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_9'); ?></h3>
      <a href="<?php the_field('website_url_9'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
    <li class="info-cards">
        <span class="icon">
            <img src="<?php the_field('icon_10'); ?>" alt="Hand catching water droplet" >
        </span> 
      <h3 class="site-name"><?php the_field('solution_name_10'); ?></h3>
      <a href="<?php the_field('website_url_10'); ?>" target="_blank">
        <button class="learn-more">
          Learn More
        </button>
    </a>
    </li>
  </ul>
</section>
<!-- End of gallery for solutions -->