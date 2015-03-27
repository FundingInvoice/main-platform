<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>> <?php print $user_picture; ?> <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <div class="submitted">
    <?php //print $submitted; ?>
  </div>
  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
       
      //hide($content['comments']);
     // hide($content['links']);
     // print render($content);
    ?>
    <article id="case_study">
      <div class="row">
      <section id="case_study_1">
       
         
            <div class="col-sm-8 col-md-8 col-xs-12">
              <div class="head_title">
                <h2>Case Studies :</h2>
				
				
				
                <span><?php print $title; ?></span></div>
              <p class="ft-18 first case-top-intro">
               <?php print $node->field_case_study_description['und'][0]['value']; ?>
			  </p>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 case-area pull-right"> 
              <!--
        <img class="img-responsive" src="/sites/all/themes/bootstrap_subtheme/images/case_study_img.jpg" alt="">
		-->
              
              <section class="case-image-area center-block">
                <?php //print render($content['field_case_study_logo']); ?>
                <img class="img-responsive" src="<?php print file_create_url($node->field_case_study_logo['und'][0]['uri']); ?>" /> 
               
                </section>
                 
            </div>
         <p class="clearfix"></p>
      
      </section>
       </div>
      <section id="case_study_2">
      
          <div class="row">
            <div class="col-xs-12"> <?php print render($content['body']); ?>
              </p>
            </div>
          </div>
       
      </section>
    </article>
  </div>
</div>
