<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
  $('#edit-submitted-charges-we-get').attr('readonly','readonly');
  $('#edit-submitted-maximum-value-have-to-pay').attr('readonly','readonly');
  $("#edit-submitted-invoice-price").blur(function(){
    var myval = $(this).val();
    var percent;
    if (myval <= 500) {
          percent  = (myval*15)/100;
      } else if(myval <= 1000) {
          percent  = (myval*10)/100;
      } else {
          percent  = (myval*5)/100;
      }
    var total = myval - percent;
    $('#edit-submitted-charges-we-get').val(percent);
    $('#edit-submitted-maximum-value-have-to-pay').val(total);
    $('#edit-submitted-charges-we-get').css("background-color","#ebce2d");
    $('#edit-submitted-maximum-value-have-to-pay').css("background-color","#367ed0");
  });
  
  });
</script>
<?php
  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above.
  print drupal_render_children($form);
  //print "<pre>";
 // print_r($form['submitted']['price']['#children']);
  //print_r($form);
 // print "</pre>";