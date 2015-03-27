var $ = jQuery.noConflict();

// compressed plugin
$(function() {
// demo logic starts
//$("#edit-field-invoice-price-und-0-value").attr("disabled","disabled");
//$("#edit-field-implied-total-paid-to-inve-und-0-value").attr("disabled","disabled");
//$("#edit-field-implied-total-paid-to-1-und-0-value").attr("disabled","disabled");

             var myval = $("#edit-field-invoice-price-und-0-value").val();
             

             var percent;
              percent  = (myval*85)/100;
          //var total = myval - percent;
            
    //$('#edit-field-invoice-price-und-0-value').after('<span>The maximum payout you will get : ' + percent + '</span>');
    
    
    $("#edit-field-maximum-desired-fee-und-0-value").keyup(function(){
        var myval = $("#edit-field-invoice-price-und-0-value").val();
        var maxder = $("#edit-field-maximum-desired-fee-und-0-value").val();
        var calmaxder = (myval*maxder)/100;
        var calmaxderf = parseFloat(calmaxder).toFixed(2);
        //var a = $("#edit-field-desired-buy-it-now-und-0-value").val();
        $('#edit-field-implied-total-paid-to-inve-und-0-value').val(calmaxderf);
		
		//alert(calmaxderf);
	    $("#invoice-node-form").append("<input  type='hidden'  value='"+calmaxderf+"' name='max_total_fee'>");
		
		
        
    });
	/*
	$("#edit-field-maximum-desired-fee-und-0-value").keyup(function(){
	
	 var myval = $("#edit-field-invoice-price-und-0-value").val();
        var maxder = $("#edit-field-maximum-desired-fee-und-0-value").val();
        var calmaxder = (myval*maxder)/100;
        var calmaxderf = parseFloat(calmaxder).toFixed(2);
        
        $('#edit-field-implied-total-paid-to-inve-und-0-value').val(calmaxderf);
		
		alert(calmaxderf);
	$("#invoice-node-form").append("<input  type='hidden'  value='"+calmaxderf+"' name='max_total_fee'>");
	
	});
   */
    $("#edit-field-desired-buy-it-now-und-0-value").blur(function(){
        var myval = $("#edit-field-invoice-price-und-0-value").val();
        var maxder = $("#edit-field-desired-buy-it-now-und-0-value").val();
		fvalf = parseFloat((myval*maxder)/100).toFixed(2);
		//$("#invoice-node-form").append("<input  type='hidden'  value='"+maxder+"' name='max_total_fee'>");
        //var calmaxder = (myval*maxder)/100;
        //var fval = myval - calmaxder;
        //var fvalf = parseFloat(fval).toFixed(2);
        
        $('#edit-field-implied-total-paid-to-1-und-0-value').val(fvalf);
        
    });
   $("#edit-field-invoice-length-und-0-value").blur(function(){
        var buynow = $("#edit-field-desired-buy-it-now-und-0-value").val();
        var daylen = $("#edit-field-invoice-length-und-0-value").val();
        var calval = (buynow/daylen);
        var calval1 = calval*30;
        var fvalf = parseFloat(calval1).toFixed(2);
		
		
		
		
		
        
		$('#edit-field-buy-now-calculated-fee-und-0-value').val(fvalf);
		var result = parseFloat((fvalf/30)*$( "#edit-field-invoice-price-und-0-value" ).val()).toFixed(2);
		document.getElementById("implied-cost-per-day").innerHTML = result;
		$("#invoice-node-form").append("<input  type='hidden'  value='"+result+"' name='result2'>");
		
		      
    });

});
