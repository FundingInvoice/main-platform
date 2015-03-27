var $ = jQuery.noConflict();
$(function(){
// title hide
$("#edit-profile-investor-field-title").hide();

$('#edit-profile-investor-field-type-of-investor-und-institutional').click(function() {
$("#edit-profile-investor-field-title").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-individual').click(function() {
$("#edit-profile-investor-field-title").show();
});

$('#edit-profile-investor-field-type-of-investor-und-wealth').click(function() {
$("#edit-profile-investor-field-title").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-other').click(function() {
$("#edit-profile-investor-field-title").show();
});


// name hide

$("#edit-profile-investor-field-full-name").hide();

$('#edit-profile-investor-field-type-of-investor-und-institutional').click(function() {
$("#edit-profile-investor-field-full-name").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-individual').click(function() {
$("#edit-profile-investor-field-full-name").show();
});

$('#edit-profile-investor-field-type-of-investor-und-wealth').click(function() {
$("#edit-profile-investor-field-full-name").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-other').click(function() {
$("#edit-profile-investor-field-full-name").show();
});

// hide company name  
$("#profile-investor-field-please-specify-add-more-wrapper").hide();
$("#edit-profile-investor-field-company-name").hide();


$('#edit-profile-investor-field-type-of-investor-und-institutional').click(function() {
$("#edit-profile-investor-field-company-name").show();
$("#profile-investor-field-please-specify-add-more-wrapper").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-individual').click(function() {
$("#edit-profile-investor-field-company-name").hide();
$("#profile-investor-field-please-specify-add-more-wrapper").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-wealth').click(function() {
$("#edit-profile-investor-field-company-name").show();
$("#profile-investor-field-please-specify-add-more-wrapper").hide();
});

$('#edit-profile-investor-field-type-of-investor-und-other').click(function() {
$("#edit-profile-investor-field-company-name").show();
$("#profile-investor-field-please-specify-add-more-wrapper").show();
});

$("#edit-profile-main-field-please-upload-one-f-list-a").hide();
$("#edit-profile-main-field-list-a-und > div").click(function() {
$("#edit-profile-main-field-please-upload-one-f-list-a").show();	
 })

$("#edit-profile-main-field-file2").hide();
$("#edit-profile-main-field-list-b-und > div").click(function() {
$("#edit-profile-main-field-file2").show();	
 })

// seller register form
    
    // 4 option start
        $("#edit-profile-main-field-number-of-business-account-und").change(function(){

            $( "select option:selected").each(function(){

                if($(this).attr("value")== 1){
                    $(".group-ac-g1").show();
                    $(".group-ac-g2").hide();
                    $(".group-ac-g3").hide();
                    $(".group-ac-g4").hide();

                }

                if($(this).attr("value")== 2){
                    $(".group-ac-g1").show();
                    $(".group-ac-g2").show();
                    $(".group-ac-g3").hide();
                    $(".group-ac-g4").hide();
                }

                if($(this).attr("value")== 3){
                    $(".group-ac-g1").show();
                    $(".group-ac-g2").show();
                    $(".group-ac-g3").show();
                    $(".group-ac-g4").hide();
                }
                if($(this).attr("value")== 4){
                    $(".group-ac-g1").show();
                    $(".group-ac-g2").show();
                    $(".group-ac-g3").show();
                    $(".group-ac-g4").show();
                }

            });

        }).change();

  // 4 option end

});
