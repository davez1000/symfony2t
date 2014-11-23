<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> hentry clearfix"<?php print $attributes; ?>>

    <?php if ($display_submitted): ?>



    <?php endif; ?>

    <div class="entry-body clearfix">

        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
        <header><h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2></header>
        <?php endif; ?>
        <?php //print render($title_suffix); ?>

        <div class="content"<?php print $content_attributes; ?>>
          <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            print render($content);
          ?>
        </div>







        <!--                    <!--<h3>Some of Our Featured Projects</h3>-->

    <?php if (theme_get_setting('carousel_display','sucesionaranda')): ?>
        <ul id="projects-carousel" class="loading">

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-1.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img1.jpg" alt="" width="220"  class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> BlackBerry Website Project</a>
                </p>
                <span>Web</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-2.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img2.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> Vestibulum ante ipsum primis</a>
                </p>
                <span>Illustration</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-3.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img3.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> Nulla mollis fermentum nunc</a>
                </p>
                <span>Illustration</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-4.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img4.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> Cras vel orci sapien</a>
                </p>
                <span>Illustration / Web</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-5.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img5.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title">Curabitur nisl libero</a>
                </p>
                <span>Illustration / Web</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-1.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img1.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> BlackBerry Website Project</a>
                </p>
                <span>Web</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-2.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img2.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> Vestibulum ante ipsum primis</a>
                </p>
                <span>Illustration</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        <!-- PROJECT ITEM STARTS -->
        <li>
          <div class="item-content">
            <div class="link-holder">
              <div class="portfolio-item-holder">
                <div class="portfolio-item-hover-content">

                  <a href="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/portfolio-img-3.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                  <img src="<?php print base_path() . drupal_get_path('theme', 'sucesionaranda') ;?>/images/sampleimages/pt-img3.jpg" alt="" width="220" class="portfolio-img" />

                  <div class="hover-options"></div>
                </div>
              </div>
              <div class="description">
                <p>
                  <a href="#" title="title"> Nulla mollis fermentum nunc</a>
                </p>
                <span>Illustration</span>
              </div>
            </div>
          </div>
        </li>
        <!-- PROJECT ITEM ENDS -->

        </ul>
    <?php endif; ?>







        <?php //print render($content['links']); ?>

    </div>


</article>
