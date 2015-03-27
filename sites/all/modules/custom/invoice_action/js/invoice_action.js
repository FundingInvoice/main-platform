var $ = jQuery.noConflict();
// compressed plugin
(function(e){e.fn.changeOrDelayedKey=function(t,n,r){function u(){clearTimeout(i);t.apply(this,arguments)}function a(){var e=this,t=arguments;clearTimeout(i);i=setTimeout(function(){u.apply(e,t)},n)}var i,s,o=arguments;if(!e.isFunction(t)){s=o[0];t=o[1];n=o[2];r=o[3]}if(!n||0>n){n=500}if(!r||!this[r]){r="keydown"}if(s){this.change(s,u);this[r](s,a)}else{this.change(u);this[r](a)}return this}})(jQuery);
$(function() {
// demo logic starts
$('#edit-f2-value').changeOrDelayedKey(function() {

 invoicecal($('#edit-slider2-value').val(),$('#edit-f2-value').val(),$('#edit-f1').val());
//alert(2);
  var myval = $(this).val();
    var percent;
    percent  = (myval*85)/100;
    
    $('#invalue').html('You could be advanced <span class="cur_amt">&pound' + percent + '</span> upfront');}, 1000);


$('#edit-slider2-value').changeOrDelayedKey(function() {

	 invoicecal($('#edit-slider2-value').val(),$('#edit-f2-value').val(),$('#edit-f1').val());

//alert(2);
  var myval1 = $(this).val();
    var percent1;
    percent1  = (myval1*85)/100;
    
    //$('#payoutval').html('Charges  <span class="cur_amt">&pound' + percent1 + '</span>');
}, 1000);


	$( "#edit-f1" ).change(function() {

		 invoicecal($('#edit-slider2-value').val(),$('#edit-f2-value').val(),$('#edit-f1').val());

});

	

});

$(window).load(function() {
    var myval = $('#edit-f2-value').val();
    var percent;
    percent  = (myval*85)/100;
    
    $('#invalue').html('You could be advanced <span class="cur_amt">&pound' + percent + '</span> upfront');

      invoicecal($('#edit-slider2-value').val(),$('#edit-f2-value').val(),$('#edit-f1').val());
});
function invoicecal(var1,var2,var3)
{
		//alert(1)	;
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
		
        $('#payoutval').html('Total Fees:  <span class="cur_amt">&pound' + fees + '</span>');
}