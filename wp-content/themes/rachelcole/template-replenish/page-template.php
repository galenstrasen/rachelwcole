<?php
/*
Template Name: Replenish Page
*/


get_header('replenish'); ?>



<header>
  <nav class="return-nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
        <a class="sol return-link" href="http://rachelwcole.com"> <h5>Return to rachelwcole.com</h5></a>
        </div>
      </div>
    </div>
  </nav>
  <?php

  get_template_part('/template-replenish/partials/hero');
  get_template_part('/template-replenish/partials/nav'); ?>

</header>


<main class="main">

  <?php
  get_template_part('/template-replenish/partials/section1');
  get_template_part('/template-replenish/partials/section2');
  get_template_part('/template-replenish/partials/section3');
  get_template_part('/template-replenish/partials/section4');
  get_template_part('/template-replenish/partials/section5');
  get_template_part('/template-replenish/partials/section6');
  get_template_part('/template-replenish/partials/section7');
  get_template_part('/template-replenish/partials/section8');
  get_template_part('/template-replenish/partials/section9');
  get_template_part('/template-replenish/partials/section10');
  get_template_part('/template-replenish/partials/section11');
  get_template_part('/template-replenish/partials/section12');
  get_template_part('/template-replenish/partials/section13');
  get_template_part('/template-replenish/partials/section14');
  get_template_part('/template-replenish/partials/section15'); ?>

</main>


  <?php
  get_template_part('/template-replenish/partials/footer');
  get_footer('replenish');