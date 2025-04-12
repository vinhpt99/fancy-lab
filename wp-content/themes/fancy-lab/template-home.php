<?php
/*
Template Name: Home Page
*/

get_header(); ?>
<div class="content-area">
  <main>
    <section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="slide1.jpg" alt="">
          </li>
          <li>
            <img src="slide2.jpg" alt="">
          </li>
          <li>
            <img src="slide3.jpg" alt="">
          </li>
          <li>
            <img src="slide4.jpg" alt="">
          </li>
        </ul>
      </div>
    </section>
    <section class="popular-product">
      <div class="container">
        <div class="row">Popular Product</div>
      </div>
    </section>
    <section class="new-arrivals">
      <div class="container">
        <div class="row">
          New Arrivals
        </div>
      </div>
    </section>
    <section class="deal-of-the-week">
      <div class="container">
        <div class="row">
          Deal of the Week
        </div>
      </div>
    </section>
    <section class="lab-blog">
      <div class="container">
        <div class="row">
          <?php
          if (have_posts()):
            while (have_posts()): the_post();
          ?>
              <article>
                <h2><?php the_title(); ?></h2>
                <div>
                  <?php the_content(); ?>
                </div>
              </article>
          <?php
            endwhile;
          else:
            echo '<p>No posts found</p>';
          endif;
          ?>
        </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>