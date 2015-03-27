<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
    ?>
      <?php global $user; ?> 
     
      <div class="add-inv-link pull-right">
    
 
   <?php  print l("Back to Profile", "user/".$user->uid); ?>
          
          <?php if (!empty($user->roles[6])) { ?>
          <span>|</span><a href="/node/add/invoice"> Add Invoice <i class='fa fa-plus'></i></a>
          <?php } ?>
   
   
    
</div>
    
    <?php $pdata = profile2_by_uid_load($node->uid, 'main');?>  
    <div class="row invoice_data_table">
        <?php if (!empty($content['field_invoice_id']) || !empty($content['field_invoice_length'])): ?>
    <div class="col-xs-12 col-sm-6">
	<?php 
	
         print render($content['field_invoice_id']);
	?>	
    </div>
    <div class="col-xs-12 col-sm-6"> 
     	<?php     print render($content['field_invoice_length']); ?>
		 
		</div>
        <span class="border-bottom"></span>
        <?php endif; ?>
        
        <?php if (!empty($content['field_invoice_price'])): ?>
        <div class="col-xs-12"> 
      	<?php    print render($content['field_invoice_price']);?>
         </div><span class="border-bottom"></span>
         <?php endif; ?>
         
         <?php if (!empty($content['field_minimum_desired_advance'])): ?>
		 <div class="col-xs-12">
     	<?php     print render($content['field_minimum_desired_advance']);?>
         </div><span class="border-bottom"></span>
         <?php endif; ?>
         
         <?php if (!empty($content['field_maximum_desired_fee']) || !empty($content['field_implied_total_paid_to_inve'])): ?>
		<div class="col-xs-12 col-sm-6"> 
   	<?php       print render($content['field_maximum_desired_fee']);?>
         </div>
         <div class="col-xs-12 col-sm-6">
		<?php 	 print render($content['field_implied_total_paid_to_inve']);?>
         </div><span class="border-bottom"></span>
         <?php endif; ?>
         
         <?php if (!empty($content['field_implied_total_paid_to_1']) || !empty($content['field_desired_buy_it_now'])) : ?>
		 <div class="col-xs-12 col-sm-6">
    	<?php      print render($content['field_desired_buy_it_now']);?>
         </div>
         
         <div class="col-xs-12 col-sm-6">
     	<?php     print render($content['field_implied_total_paid_to_1']);?>
         </div><span class="border-bottom"></span>
         <?php endif; ?>
         
         <?php if (!empty($content['field_buy_now_fee'])) : ?>
         <div class="col-xs-12">
     	<?php     print render($content['field_buy_now_fee']);?>
		 </div><span class="border-bottom"></span>
                 <?php endif; ?>
                 
          <?php if (!empty($content['field_buy_now_calculated_fee'])) :?>     
                 <div class="col-xs-12">
     	<?php     print render($content['field_buy_now_calculated_fee']);?>
         </div><span class="border-bottom"></span>
         <?php endif; ?>
         <div class="col-xs-12">
     	<?php     print render($content['field_date_of_payment_of_invoice']);?>
         </div>
         <span class="border-bottom"></span>
 
         <?php if (!empty($pdata->field_company_name['und'][0]['value'])):?>
         <div class="col-xs-12">
         <div>
     	<?php     print "Company Name:<span class='field-items'>".$pdata->field_company_name['und'][0]['value']."</span>" ;?>
        </div>
         </div>
         <span class="border-bottom"></span>
 
         <?php endif;?>
         
         <?php if (!empty($pdata->field_registered_company_address['und'][0]['value'])):?>
         <div class="col-xs-12">
           <div>
     	<?php     print "Registered Address:<span class='field-items'>".$pdata->field_registered_company_address['und'][0]['value']."</span>";?>
         </div>
         </div>
         <span class="border-bottom"></span>
 
         <?php endif;?>
         <?php if (!empty($pdata->field_1_full_financial_account_p['und'][0]['uri'])):?>
         <div class="col-xs-12">
         <div>
           Last year's financial data : <span class="btn-btn-down"> <a href="<?php print file_create_url($pdata->field_1_full_financial_account_p['und'][0]['uri']); ?>" target="_blank">Download</a></span>
     	</div>
         </div>
         <span class="border-bottom"></span>
 
         <?php endif;?>
    <?php if (!empty($content['field_upload_invoice'])) : ?>
              <div class="col-xs-12">
     <?php      print render($content['field_upload_invoice']); ?>
          </div><span class="border-bottom"></span>
          <?php endif; ?>
          
        <?php if (!empty($content['field_description'])): ?> 
          <div class="col-xs-12">
     <?php      print render($content['field_description']); ?>
          </div><span class="border-bottom"></span>
          <?php endif; ?>
      
   </div> 
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
