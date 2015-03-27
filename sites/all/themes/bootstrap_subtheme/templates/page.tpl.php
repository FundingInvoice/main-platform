<header id="main">
  <div class="container">
    <div class="row">
      <div class="pull-left col-lg-5 col-md-4 col-sm-2 col-xs-12">
        <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"> <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
        <?php endif; ?>
      </div>
      <div class="pull-left social_icon_cls col-lg-7 col-md-8 col-sm-10 col-xs-12">
      <!--  <form class="navbar-form navbar-left search_box" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="">
          </div>
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form> -->
      <?php 
         global $user;
        if (user_is_logged_in() && !empty($user->roles[5])) {
           $invexpser = module_invoke('views', 'block_view', '-exp-invoice_search-page_2');
           print render($invexpser['content']);
        } else {
               $sform = drupal_get_form('search_block_form', TRUE); 
               print render($sform); 
        }
        ?>
        <div class="social_icons"> <a href="https://twitter.com/FundingInvoice" target="_blank" class="tw"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/FundingInvoice" target="_blank" class="fb"><i class="fa fa-facebook"></i></a> <a href="https://www.linkedin.com/company/funding-invoice?trk=biz-companies-cym" target="_blank" class="li"><i class="fa fa-linkedin"></i></a> </div>
        <div id="user_login">
          <?php if(user_is_anonymous()): ?>
          <a class="login_in" href="/user/login"><span class="user_icon"></span>Sign-In</a> 
          <span class="reg_in"><a  href="/user/invoiceregister" class="reg_text">Register <i class="fa fa-angle-down"></i> </a>
          <span class="dropdown_reg">
          <a href="/seller/register">Seller</a>
          <a href="/investor/register">Investor</a>
          </span>
          </span>
          <?php endif; ?>
          <?php if(user_is_logged_in()): ?>
          <a class="login_in" href="/user"><span class="user_icon"></span><?php print $user->name; ?></a> <a class="out_in" href="/user/logout">Logout</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>



<div class="main-container container">

<header role="banner" id="page-header">
  <?php if (!empty($site_slogan)): ?>
  <p class="lead"><?php print $site_slogan; ?></p>
  <?php endif; ?>
  <?php print render($page['header']); ?> </header>
<!-- /#page-header -->
</div>

<?php if (!empty($page['slideshow'])): ?>
  <section> <?php print render($page['slideshow']); ?> </section>
  <!-- /.main_aside-first -->
  <?php endif; ?>
 
<div class="main-container container">
<div class="row">

 <?php if (!empty($page['content_first'])): ?>
  <section class="col-sm-12 col-md-6 col-xs-12"> <?php print render($page['content_first']); ?> </section>
  <!-- /.main_aside-first -->
  <?php endif; ?>
  
    <?php if (!empty($page['content_second'])): ?>
  <section class="col-sm-12 col-md-6 col-xs-12"> <?php print render($page['content_second']); ?> </section>
  <!-- /.main_aside-first -->
  <?php endif; ?>

</div>

<div class="row">

  
  <?php if (!empty($page['sidebar_first'])): ?>
  <aside class="col-sm-3" role="complementary"> <?php print render($page['sidebar_first']); ?> </aside>
  <!-- /.main_aside-first -->
  <?php endif; ?>
  <section<?php print $content_column_class; ?>>
    <?php if (!empty($page['highlighted'])): ?>
    <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    <a id="main-content"></a> <?php print render($title_prefix); ?>
    <?php if (arg(0) == 'blog'): $title = ''; endif; ?>
    <?php if (!empty($title) && !drupal_is_front_page() && !arg(1) == 70): ?>
    <h1 class="page-header"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?> <?php print $messages; ?>
    <?php if (!empty($tabs) && !drupal_is_front_page()): ?>
    <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
    <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
    <ul class="action-links">
      <?php print render($action_links); ?>
    </ul>
    <?php endif; ?>
    <!-- Side bar flip open form --->
    <div class="color-switcher group animated">
  <div class="toggle"> <img src="/sites/all/themes/bootstrap_subtheme/images/quote-shape.png"></div>
  
  
 <!--
  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
          <h3 class="modal-title"><i class="fa fa-calculator"></i>Calculate Maximum Invoice Value</h3>
      
      </div>
 -->
  <div class="color">
      <h3 class="modal-title"><i class="fa fa-calculator"></i>Calculate Approximate Advance & Fees Payable</h3>
    <div id="errorsdivcust"></div>
          <?php $calculator = module_invoke('calculator_popup', 'block_view', 'calculator_popup');   ?>

    <?php print render($calculator['content']); ?> </div>
	
    <div class="text-center"></div>
  </div>
</div>
    <!-- Side bar end --->
    <?php if (!empty($page['content_top'])): ?>
<section id="trusted_by_people">
<h2 class="ft-26"><?php print l('Trusted By People', 'trusted-by-people'); ?></h2>
<div class="pull-right df_view_all"><?php print l('View All', 'trusted-by-people'); ?></div>
<div class="row">  
<p class="clearfix"></p>
<?php
 $block = module_invoke('views','block_view','trusted_by_people-block');
print render($block['content']);

?>
</div>
</section>
<?php print render($page['content_top']); ?> 
  <!-- /#content top -->
  <?php endif; ?>
  
  <?php if (arg(0) == 'blog') { ?>
  
  <div class="row blog_row">
  
  <div class="col-sm-9 col-xs-12">
  <?php } ?>
  
   <?php print render($page['content']); ?> 
  
  
  <?php if (arg(0) == 'blog') { ?>
  
	</div>
   <aside class="col-sm-3 aside_block">
  <h3>Most Viewed</h3>
   <div class="blog_aside_inner">
  <?php if (!empty($page['recent_blog'])): ?>
  <?php print render($page['recent_blog']); ?> 
  <?php endif; ?>
  </div>
  </aside>
  
  
 </div>
  <?php } ?>
  
  </section>
  <?php if (!empty($page['sidebar_second'])): ?>
  <aside class="col-sm-3" role="complementary"> <?php print render($page['sidebar_second']); ?> </aside>
  <!-- /.main_aside-second -->
  <?php endif; ?>

</div>
</div>
  
<?php if (!empty($page['content_bottom'])): ?>
   <?php print render($page['content_bottom']); ?> 
  <!-- /#content bottom -->
  <?php endif; ?>
   <?php if (!empty($page['content_last'])): ?>
<section id="login_form">  
    <div class="container">  
    <div class="row">
    <div class=" col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6 col-xs-12">
     
        <?php print render($page['content_last']); ?>
  
     </div>
        </div>
    </div>    
</section>
      <?php endif; ?>
	  
<div><?php
if ((arg(0) == 'node' && arg(1) == 'add' && arg(2) == 'invoice') || isset($_REQUEST['next']))
//if (arg(0) == 'node' && arg(1) == 'add' && arg(2) == 'invoice')
{
  
  //print_r($_REQUEST['op']=='Save');
  //echo "<pre>";
  //print_r($_REQUEST);
  //echo "</pre>";
   
   if(!isset($_REQUEST['op']) && $_REQUEST['op']!='Save' ){
?>
<script>
/*
if(document.getElementById('invoiceSecondPage').value==2)
{
document.getElementById('checkStep').innerHTML = "";
} 
*/
/*
if(document.getElementById('edit-field-invoice-price-und-0-value')!=null)
{
	document.getElementById('checkStep_new').innerHTML = "";
}


alert(document.getElementById('edit-field-fill-info-name-contact-num-und-0-value'));
if(document.getElementById('edit-field-fill-info-name-contact-num-und-0-value')!=null)
{
alert("under if condi");
}
else
{
alert("under else cond");
document.getElementById('checkStep_new').innerHTML = "";
}
*/
</script>

<!--
<form id="myform" action="" method="post">
<input type="hidden" value="" name="all_html" />
</form> -->

<div id="checkStep211"></div>
<div id="checkStep_new">
<div class="container calc_invo">
<h3 class="text-center ft-45 text-uppercase text-yellowish">Overview</h3>
<div class="table-responsive seller_invoice_calc">


  <table class="table table-striped" width="100%" border="0" cellspacing="0" cellpadding="0">
 
  
  <thead>
  <tr>
    <th>Invoice Value</th>
    <th>Advance Rate</th>
    <th>Gross Advance Value</th>    	
  </tr>
  </thead>
  <tr class="ft-18">
    <td id="overview-invoice"><?php if(isset($_REQUEST['overview-invoice1'])){echo "£ ".$_REQUEST['overview-invoice1'];}else{?>&nbsp;<?php }?></td>
    <td id="overview-adv-value"><?php if(isset($_REQUEST['result9'])){echo $_REQUEST['result9']." %";}else{?>&nbsp;<?php }?></td>
    <td id="overview-grand-total"><?php if(isset($_REQUEST['overview-grand-total1'])){echo "£ ".$_REQUEST['overview-grand-total1'];}else{?>&nbsp;<?php }?></td>    
  </tr>
  </table>
  
  <!--<form  name="hiddenType" id="hiddenType" action="#" method="post" >
  <input  type="hidden"  value="" name="overview-grand-total1" id="overview-grand-total1"/>  
  </form>-->

  
  <h3 class="text-center ft-26 info">Total Fees to Funding Invoice</h3>
  <table class="table table-striped" width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <thead>
  <tr>
  <th>Seller Fee</th>
    <th>Total Advance to You</th>  
  </tr>  
  </thead>
  <tr class="ft-18">
  <td id="seller-fee"><?php if(isset($_REQUEST['seller-fee1'])){echo "£ ".$_REQUEST['seller-fee1'];}else{?>&nbsp;<?php }?></td>
    <td id="advance-to-you"><?php if(isset($_REQUEST['result4'])){echo "£ ".$_REQUEST['result4'];}else{?>&nbsp;<?php }?></td>	
  </tr>
  </table>
  
  
  <h3 class="info text-center ft-26">Total Fees to Investor</h3>
 
 <table class="table table-striped" width="100%" border="0" cellspacing="0" cellpadding="0">
<thead>
 <tr>  
  <th>Maximum Investor Rate </th>
	<th>Investor Rate per 30 Days</th>
	
  </tr>
  </thead>
<tr class="ft-18">
<td id="max-investor"><?php if(isset($_REQUEST['result5'])){echo $_REQUEST['result5'] ." %";}else{?>&nbsp;<?php }?></td>
	<td id="investor-rate-per-thirty-days"><?php if(isset($_REQUEST['result6'])){echo $_REQUEST['result6']." %";}else{?>&nbsp;<?php }?></td>
	
</tr>
</table>
<h3 class="info text-center ft-26">Total Fees Payable by You</h3>
<table class="table table-striped" width="100%" border="0" cellspacing="0" cellpadding="0">
<thead>
 <tr>
 	<th>Maximum Total Fee Rate</th> 
	<th>Maximum Total Fees</th>
	<th>Implied Cost Per Day</th>
 </tr>
 </thead>
<tr class="ft-18">
	<td id="maximum-total-fee-rate"><?php if(isset($_REQUEST['max_total_fee'])){echo $_REQUEST['max_total_fee']." %";}else{?>&nbsp;<?php }?></td> 
	<td id="maximum-total-fee-invoice-value"><?php if(isset($_REQUEST['max_total_fee1'])){echo $_REQUEST['max_total_fee1'];}else{?>&nbsp;<?php }?></td>
	<td id="implied-cost-per-day"><?php if(isset($_REQUEST['implied_cost'])){echo "£ ".$_REQUEST['implied_cost'];}else{?>&nbsp;<?php }?></td>
</tr>
  </table>
</div>
</div>

</div>


<?php
    }
}
?>
</div>
	  
<footer class="footer container">
    <div class="aiis hidden-xs pull-left"> &copy; 2014 Funding Invoice </div>
    <?php print render($page['footer']); ?>
   
       
    <div class="social_icons" class="pull-right"> <a href="https://twitter.com/FundingInvoice" target="_blank" class="tw"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/FundingInvoice" target="_blank" class="fb"><i class="fa fa-facebook"></i></a> <a href="https://www.linkedin.com/company/funding-invoice?trk=biz-companies-cym" target="_blank" class="li"><i class="fa fa-linkedin"></i></a> </div>

 <div class="aiis visible-xs pull-left"> &copy; 2014 Funding Invoice </div>
</footer>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="color">
          <h3 class="modal-title">Calculate Approximate Advance & Fees Payable</h3>
        </div>
      </div>
      <div class="modal-body">
             <?php //$calculator = module_invoke('calculator_popup', 'block_view', 'calculator_popup');   ?>

        <?php //print render($calculator['content']); ?> </div>
    </div>
  </div>
</div>
<!--
<script src="sites/all/themes/bootstrap_subtheme/js/bootstrap.min.js"></script> 
<script src="sites/all/themes/bootstrap_subtheme/js/quote.js"></script>
-->


<script>



//overview page for node/add/invoice for seller role

function writeCookie1(name,value,days) {
	$.cookie(name, value, { expires: days });
}

function readCookie1(name) {
	cookVal = $.cookie(name);
	return cookVal;
}

function delete_cookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

$('#edit-next').click(function(e) {
	
//document.getElementById("hiddenType").submit();
});



$( document ).ready(function() {

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-plus-square-o").removeClass("fa-plus-square-o").addClass("fa-minus-square-o");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-minus-square-o").removeClass("fa-minus-square-o").addClass("fa-plus-square-o");
});


if(document.getElementById('edit-title')!=null)
{
/*
$('.container.calc_invo').css('visibility','hidden');
$('.container.calc_invo').css('height','0px');
*/
$('.container.calc_invo').css('display','none');
}
else
{
document.getElementById('checkStep').innerHTML='<input type="hidden" value="2" name="invoiceSecondPage">';
$('#edit-actions').addClass('hello');
}

document.getElementById('overview-invoice').innerHTML=$( "#edit-field-invoice-price-und-0-value" ).val();



//document.getElementById('overview-adv-value').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();

//var value1=$( "#edit-field-invoice-price-und-0-value" ).val();
//var value2=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//var res = value1 - value2;
//document.getElementById('advance-to-you').innerHTML=$( "#edit-field-invoice-price-und-0-value" ).val();

$( "#edit-field-invoice-price-und-0-value" ).keyup(function() {
document.getElementById('overview-invoice').innerHTML=$( "#edit-field-invoice-price-und-0-value" ).val();
over_calc1($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-minimum-desired-advance-und-0-value" ).val());
//alert($( "#overview-grand-total").html());
//over_total($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#overview-grand-total").html());
over_total($( "#seller-fee" ).html(), $( "#overview-grand-total").html());
over_impliedcost($( "#edit-field-buy-now-calculated-fee-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val());
//max_total_fee_rate($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-maximum-desired-fee-und-0-value" ).val());
});

$( "#edit-field-maximum-desired-fee-und-0-value" ).keyup(function() {
//alert($( "#edit-field-invoice-price-und-0-value" ).val());
//document.getElementById('overview-adv-value').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//over_calc1($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-maximum-desired-fee-und-0-value" ).val());
//over_total($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#overview-grand-total").html());
over_total($( "#seller-fee" ).html(), $( "#overview-grand-total").html());
over_maxinvestor($( "#edit-field-desired-buy-it-now-und-0-value" ).val());

//over_adv_value($("#edit-field-maximum-desired-fee-und-0-value").val());
});


$( "#edit-field-desired-buy-it-now-und-0-value" ).keyup(function() {
over_maxinvestor($("#edit-field-desired-buy-it-now-und-0-value").val());
max_total_fee_rate($("#edit-field-desired-buy-it-now-und-0-value").val());
//implied_per_cost($( "#edit-field-desired-buy-it-now-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-invoice-length-und-0-value").val()));
});




$( "#edit-field-invoice-price-und-0-value" ).keyup(function() {
//alert($( "#edit-field-invoice-price-und-0-value" ).val());
//document.getElementById('overview-adv-value').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//var adv_value = $( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//$("#invoice-node-form").append("<input  type='hidden'  value='"+adv_value+"' name='result8'>");
over_sellerfee($( "#edit-field-invoice-price-und-0-value" ).val());
//over_total($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#overview-grand-total").html());
over_total($( "#seller-fee" ).html(), $( "#overview-grand-total" ).html());
});

$( "#edit-field-maximum-desired-fee-und-0-value" ).keyup(function() {
//document.getElementById('maximum-total-fee-rate').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
var test1 = $( "#edit-field-maximum-desired-fee-und-0-value" ).val();
$("#invoice-node-form").append("<input  type='hidden'  value='"+test1+"' name='result7'>");
//max_total_fee_rate($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-maximum-desired-fee-und-0-value" ).val());
//$("#invoice-node-form").append("<input  type='hidden'  value='"+test1+"' name='result9'>");
});

$( "#edit-field-invoice-length-und-0-value" ).keyup(function() {
over_impliedcost($( "#edit-field-buy-now-calculated-fee-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val());
over_invester_rate($( "#edit-field-desired-buy-it-now-und-0-value" ).val(), $( "#edit-field-invoice-length-und-0-value").val());
//implied_per_cost($( "#edit-field-maximum-desired-fee-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val(),$( "#edit-field-invoice-length-und-0-value").val());
//implied_per_cost($( "#edit-field-desired-buy-it-now-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-invoice-length-und-0-value").val()));
over_maxinvestor($("#edit-field-desired-buy-it-now-und-0-value").val());
});


$( "#edit-field-minimum-desired-advance-und-0-value" ).keyup(function() {
over_gross_adv($("#edit-field-minimum-desired-advance-und-0-value").val());
over_calc1($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-minimum-desired-advance-und-0-value" ).val());
});

function over_gross_adv(value1) {
    var adv_value = $( "#edit-field-minimum-desired-advance-und-0-value" ).val();
	//document.getElementById("overview-adv-value").innerHTML = adv_value;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+adv_value+"' name='result9'>");
}


function over_calc1(value1, value2) {
    var value1, value2;
    var total = (value1 * value2)/100;
	//document.getElementById("overview-grand-total").innerHTML = total;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+total+"' name='overview-grand-total1'>");
	var temp=$( "#edit-field-invoice-price-und-0-value" ).val();
    $("#invoice-node-form").append("<input  type='hidden'  value='"+temp+"' name='overview-invoice1'>");

}

function over_sellerfee(value1) {
    var sellerfee = value1/100;
	document.getElementById("seller-fee").innerHTML = sellerfee;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+sellerfee+"' name='seller-fee1'>");
	
}



function over_impliedcost(value1, value2) {
    var result = parseFloat((value1/30)*value2).toFixed(2);
	document.getElementById("implied-cost-per-day").innerHTML = result;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+result+"' name='result2'>");
}
/*
function over_max_total_fee(value1, value2) {
    var result1 = (value1 * value2)/100;
	//document.getElementById("maximum-total-fee-invoice-value").innerHTML = result1;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+result1+"' name='result3'>");
}
*/
function over_total(value1,value2) {
	var amt1 = parseInt(value1);
    var amt2 = parseInt(value2);
    sub = (amt2 - amt1);
	//document.getElementById("advance-to-you").innerHTML = sub;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+sub+"' name='result4'>");
}


function over_maxinvestor(value1) {
    var max_investor = value1 - 1;
	var max_total_fees_rate = value1;
	var invoice_price = $( "#edit-field-invoice-price-und-0-value" ).val();
	var max_total_fees = invoice_price * max_total_fees_rate/100;
	
	var invoice_length = $( "#edit-field-invoice-length-und-0-value").val();
	var fres = parseFloat(max_total_fees / invoice_length).toFixed(2);
	$("#invoice-node-form").append("<input  type='hidden'  value='"+fres+"' name='implied_cost'>");
	
	$("#invoice-node-form").append("<input  type='hidden'  value='"+max_total_fees+"' name='max_total_fee1'>");
	//var invoice_length = $( "#edit-field-invoice-length-und-0-value").val());
	//var implied_cost_per_day = max_total_fees/invoice_length;
	//$("#invoice-node-form").append("<input  type='hidden'  value='"+implied_cost_per_day+"' name='implied_cost'>");
	
	$("#invoice-node-form").append("<input  type='hidden'  value='"+max_total_fees_rate+"' name='max_total_fee'>");
	//document.getElementById("max-investor").innerHTML = max_investor;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+max_investor+"' name='result5'>");
	var adv_value = $( "#edit-field-minimum-desired-advance-und-0-value" ).val();
	$("#invoice-node-form").append("<input  type='hidden'  value='"+adv_value+"' name='result9'>");
}

function over_invester_rate(value1,value2) {
    var subtracted_max = value1-1;
	var res = parseFloat((subtracted_max
	/value2)*30).toFixed(2);
	document.getElementById("investor-rate-per-thirty-days").innerHTML = res;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+res+"' name='result6'>");
	var sellerfee = $("#edit-field-invoice-price-und-0-value").val()/100;
	var gross_advance_value = ($("#edit-field-invoice-price-und-0-value").val() * $("#edit-field-minimum-desired-advance-und-0-value").val())/100;
    var total_advance_to_you= (parseFloat(gross_advance_value)- parseFloat(sellerfee));
	
	//alert(sellerfee);
	//alert(gross_advance_value);
	//alert(total_advance_to_you);
	
	$("#invoice-node-form").append("<input  type='hidden'  value='"+total_advance_to_you+"' name='result4'>");
}


function max_total_fee_rate(value5) {
    var max_total = value5;
	//$("#invoice-node-form").append("<input  type='hidden'  value='"+max_total+"' name='max_total_fee'>");
}



function implied_per_cost(value1, value2, value3) {
   //var max_investor_rate = value1;
   alert(5);
    //var max_total_fees_rate_a = value1;
	//var invoice_price_b = value2;
	var max_total_fees = value2 * value1/100;
	var fin = max_total_fees/value3;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+fin+"' name='implied_cost'>");
   //var max_total_fees1 = value1 * value2/100;
	//$("#invoice-node-form").append("<input  type='hidden'  value='"+max_total_fees1+"' name='implied_cost'>");
	
}


//end of overview

function writeCookie(name,value,days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}

    $(function($){
	        var elm = $("#edit-field-invoice-price-value-min");
        var elm1 = $("#edit-field-invoice-price-value-max");
        elm.val('Min val');
        elm.focus(function(event){
            event.preventDefault();
            if(elm.val() == 'Min val'){
                elm.val('');
            }
        });
        
         elm1.val('Max val');
        elm1.focus(function(event){
            event.preventDefault();
            if(elm1.val() == 'Max val'){
                elm1.val('');
            }
        });
       
        elm.focusout(function(event){
            event.preventDefault();
            if(elm.val() == ""){
                elm.val('Min val');
            }
        });
        
        elm1.focusout(function(event){
            event.preventDefault();
            if(elm1.val() == ""){
                elm1.val('Max val');
            }
			
			
        });
   
var storedindex = readCookie('scrolltoggleflag');
if(storedindex) {
//alert('Saved tab is '+storedindex);
$('.navbar-nav > li').removeClass('active');
$('.navbar-nav > li:nth-child('+storedindex+')').addClass('active');
}
   
   
    });



$('.navbar-nav > li').click(function() {
var index = $( '.navbar-nav > li' ).index( this );
writeCookie('scrolltoggleflag',(index+1),'');		

 	});
});

/*$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('.aside_container').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('.aside_container').css({ 'position': 'fixed', 'top':0, 'left':0 });
		} else {
			$('.aside_container').css({ 'position': 'relative' }); 
		}   
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});*/
</script>
