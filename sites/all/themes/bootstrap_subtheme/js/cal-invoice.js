
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

/*var read = readCookie1('allhtml');
//alert(read);
if(read != ''){
$('#checkStep2').html(read);
delete_cookie('allhtml');
}
else {
$('#checkStep2').remove();	
	}
$('#edit-next').click(function(e) {
var all_html = $('#checkStep').html();
alert(all_html);
//Save HTML into cookies
writeCookie1('allhtml', all_html , 30);

});
*/
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
document.getElementById('advance-to-you').innerHTML=$( "#edit-field-invoice-price-und-0-value" ).val();

$( "#edit-field-invoice-price-und-0-value" ).keyup(function() {
document.getElementById('overview-invoice').innerHTML=$( "#edit-field-invoice-price-und-0-value" ).val();
over_calc1($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-minimum-desired-advance-und-0-value" ).val());
//alert($( "#overview-grand-total").html());
over_total($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#overview-grand-total").html());
over_impliedcost($( "#edit-field-buy-now-calculated-fee-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val());
over_max_total_fee($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-maximum-desired-fee-und-0-value" ).val());
});

$( "#edit-field-maximum-desired-fee-und-0-value" ).keyup(function() {
//alert($( "#edit-field-invoice-price-und-0-value" ).val());
//document.getElementById('overview-adv-value').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//over_calc1($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-maximum-desired-fee-und-0-value" ).val());
over_total($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#overview-grand-total").html());
over_maxinvestor($( "#edit-field-maximum-desired-fee-und-0-value" ).val());
over_max_total_fee($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#edit-field-maximum-desired-fee-und-0-value" ).val());
//over_adv_value($("#edit-field-maximum-desired-fee-und-0-value").val());
});




$( "#edit-field-invoice-price-und-0-value" ).keyup(function() {
//alert($( "#edit-field-invoice-price-und-0-value" ).val());
//document.getElementById('overview-adv-value').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//var adv_value = $( "#edit-field-maximum-desired-fee-und-0-value" ).val();
//$("#invoice-node-form").append("<input  type='hidden'  value='"+adv_value+"' name='result8'>");
over_sellerfee($( "#edit-field-invoice-price-und-0-value" ).val());
over_total($( "#edit-field-invoice-price-und-0-value" ).val(), $( "#overview-grand-total").html());
});

$( "#edit-field-maximum-desired-fee-und-0-value" ).keyup(function() {
document.getElementById('maximum-total-fee-rate').innerHTML=$( "#edit-field-maximum-desired-fee-und-0-value" ).val();
var test1 = $( "#edit-field-maximum-desired-fee-und-0-value" ).val();
$("#invoice-node-form").append("<input  type='hidden'  value='"+test1+"' name='result7'>");
//$("#invoice-node-form").append("<input  type='hidden'  value='"+test1+"' name='result9'>");
});

$( "#edit-field-invoice-length-und-0-value" ).keyup(function() {
over_impliedcost($( "#edit-field-buy-now-calculated-fee-und-0-value" ).val(), $( "#edit-field-invoice-price-und-0-value" ).val());
over_invester_rate($( "#edit-field-desired-buy-it-now-und-0-value" ).val(), $( "#edit-field-invoice-length-und-0-value").val());
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

function over_max_total_fee(value1, value2) {
    var result1 = (value1 * value2)/100;
	document.getElementById("maximum-total-fee-invoice-value").innerHTML = result1;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+result1+"' name='result3'>");
}

function over_total(value1,value2) {
	var amt1 = parseInt(value1);
    var amt2 = parseInt(value2);
    sub = (amt2 - amt1);
	document.getElementById("advance-to-you").innerHTML = sub;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+sub+"' name='result4'>");
}


function over_maxinvestor(value1) {
    var max_investor = value1 - 1;
	document.getElementById("max-investor").innerHTML = max_investor;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+max_investor+"' name='result5'>");
	var adv_value = $( "##edit-field-minimum-desired-advance-und-0-value" ).val();
	$("#invoice-node-form").append("<input  type='hidden'  value='"+adv_value+"' name='result9'>");
}

function over_invester_rate(value1,value2) {
	var res = parseFloat((value1/value2)*30).toFixed(2);
	document.getElementById("investor-rate-per-thirty-days").innerHTML = res;
	$("#invoice-node-form").append("<input  type='hidden'  value='"+res+"' name='result6'>");
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

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-plus-square-o").removeClass("fa-plus-square-o").addClass("fa-minus-square-o");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-minus-square-o").removeClass("fa-minus-square-o").addClass("fa-plus-square-o");
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