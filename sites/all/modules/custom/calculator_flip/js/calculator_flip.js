var $ = jQuery.noConflict();
// compressed plugin
(function(e){e.fn.changeOrDelayedKey=function(t,n,r){function u(){clearTimeout(i);t.apply(this,arguments)}function a(){var e=this,t=arguments;clearTimeout(i);i=setTimeout(function(){u.apply(e,t)},n)}var i,s,o=arguments;if(!e.isFunction(t)){s=o[0];t=o[1];n=o[2];r=o[3]}if(!n||0>n){n=500}if(!r||!this[r]){r="keydown"}if(s){this.change(s,u);this[r](s,a)}else{this.change(u);this[r](a)}return this}})(jQuery);
$(function() {
// demo logic starts
$('#edit-invalue-value').changeOrDelayedKey(function() {

 invoicecal_popup($('#edit-duedays-value').val(),$('#edit-invalue-value').val(),$('#edit-turnover').val());
//alert(2);
  var myval = $(this).val();
    var percent;
    percent  = (myval*85)/100;
    
    $('#payout').html('You could get <span class="cur_amt">&pound' + percent + '</span> in 24 hours');}, 1000);


$('#edit-duedays-value').changeOrDelayedKey(function() {

	 invoicecal_popup($('#edit-duedays-value').val(),$('#edit-invalue-value').val(),$('#edit-turnover').val());

//alert(2);
  var myval1 = $(this).val();
    var percent1;
    percent1  = (myval1*85)/100;
    
    //$('#payoutval').html('Charges  <span class="cur_amt">&pound' + percent1 + '</span>');
}, 1000);


	$( "#edit-turnover" ).change(function() {

		 invoicecal_flip($('#edit-duedays-value').val(),$('#edit-invalue-value').val(),$('#edit-turnover').val());

});

	

});

$(window).load(function() {
    var myval = $('#edit-invalue-value').val();
    var percent;
    percent  = (myval*85)/100;
    
    $('#payout').html('You could get  <span class="cur_amt">&pound' + percent + '</span>  in 24 hours');
    invoicecal_flip($('#edit-duedays-value').val(),$('#edit-invalue-value').val(),$('#edit-turnover').val());
});
function invoicecal_flip(var1,var2,var3)
{
	//alert(var1)	;
	//alert(var2)	;
	//alert(var3)	;
        var i = 31
        var finalval;
        var invoiceval;
        var invper = 0;
        var monthval = 0;
        var day = 0;
        if (var2 < 50000) {
            invper = (var2*(0.5))/100;
            //finalval =  parseInt(var2, 10)+parseInt(invper, 10);
        }
        if (var3 == 250) {
            monthval = (var2*4.5)/100;
        } else if(var3 == 500) {
            monthval = (var2*3.75)/100;
        } else if(var3 == 1000) {
            monthval = (var2*3)/100;
        } else if(var3 == 2000) {
            monthval = (var2*2.5)/100;
        } else if(var3 == 5000) {
            monthval = (var2*2)/100;
        } else if(var3 == 6000) {
            monthval = (var2*1.75)/100;
        }
     
       
       if (var1 >= 31) {
           for(; i <= var1; i++) {
              day = parseFloat(day,10)+parseFloat(((var2*.025)/100),10); 
           }
           //day = 5;
       }
       // finalval = parseInt(var2, 10)+parseInt(invper, 10)+parseInt(monthval, 10)+parseInt(day, 10);
       finalval = parseFloat(invper, 10)+parseFloat(monthval, 10)+parseFloat(day, 10);
        var fees = parseFloat(finalval).toFixed(2);
        $('#charge').html('Total Fees:  <span class="cur_amt1">&pound' + fees + '</span>');
}