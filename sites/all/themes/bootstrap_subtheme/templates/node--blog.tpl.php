<?php if (!$page): ?>

<div class="col-xs-12 user_blog_list">
<div class="row">
<div class="col-sm-2 col-xs-12">
	<div class="blog_user_pic">
	<?php 

        if ($user_picture):
            print '<img class="img-responsive" src="/sites/default/files/images/blog-dummy-image.png">'; 
        else:
            print '<img class="img-responsive" src="/sites/default/files/images/blog-dummy-image.png">';
        endif;
?>
</div>
</div>
<div class="col-sm-9 col-xs-12">
<h4>
<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
</h4>
<div class="date_name">
<span class="date_cls">

<?php 
$created=date("F j, Y",$node->created);
print $created;                     
?>
		
</span>

<span class="name_cls">
<?php print l($node->name,'user/'.$node->uid); ?>
</span>
</div>

<div class="blog_body">
<?php print strip_tags(substr($node->body['und'][0]['value'],0,300))."..."; ?>
</div>

<div class="blog_read_more">
<?php print l('Read more...', 'node/'.$node->nid); ?> 	
</div>


</div>
</div>
</div>
<hr />

<?php else: ?>

<?php
  
  
  function test(&$form, &$form_states, $form_id) {  
  if ($form_id == 'invoice_node_form') {
      print "<pre>";
      print_r($form_states);
      print "</pre>";
    }
  } 
  test();
  ?>

<article  id="blog_detail" class="user_blog_list">

<div class="col-xs-12 col-sm-9 blog_specs">

<div class="row">

<div class="col-sm-2 col-xs-12">
<div class="blog_user_pic"> 
<?php 
if ($user_picture):
            print '<img  class="img-responsive" src="/sites/default/files/images/blog-dummy-image.png">'; 
        else:
            print '<img  class="img-responsive" src="/sites/default/files/images/blog-dummy-image.png">';
        endif;
?>
</div>
</div>

<div class="col-sm-9 col-xs-12 blog_head">

<h4><?php print $title; ?></h4>

<div class="date_name">
<span class="date_cls">
<?php 
$created=date("F j, Y",$node->created);
print $created;                     
?>
</span>

<span class="name_cls"><?php print l($node->name,'user/'.$node->uid); ?></span></div>

</div>

<p class="clearfix"></p>

<div class="col-xs-11">
<div class="blog_body">
<?php print render($content['body']); ?>
</div>
</div>

</div>

</div>

<aside class="col-sm-3 col-xs-12 aside_block">
<h3>Most Viewed</h3>
<div class="blog_aside_inner">
<?php

$block = module_invoke('views','block_view','recent_blogs-block');
print render($block['content']);
?>
</div>
</aside>
<?php endif; ?>
