jQuery(document).ready(function($){

  function custom_title_style () {
    var value = $("#saturnthemes_financebank_title_style").val();
    switch(value) {
      case "bg_color":
        $(".cmb2-id-saturnthemes-heading-image").hide();
        $(".cmb2-id-saturnthemes-disable-parallax").hide();
        break;
      case "image":
        $(".cmb2-id-saturnthemes-heading-bg-color").hide();
        break;
      default:
        $(".cmb2-id-saturnthemes-heading-image").hide();
        $(".cmb2-id-saturnthemes-disable-parallax").hide();
        $(".cmb2-id-saturnthemes-heading-bg-color").hide();
        $(".cmb2-id-saturnthemes-heading-color").hide();
    }
  }

  custom_title_style();

  if(!$("#saturnthemes_financebank_enable_title").prop("checked")) {
    $(".cmb2-id-saturnthemes-title-style").hide();
    $(".cmb2-id-saturnthemes-heading-image").hide();
    $(".cmb2-id-saturnthemes-disable-parallax").hide();
    $(".cmb2-id-saturnthemes-heading-bg-color").hide();
    $(".cmb2-id-saturnthemes-heading-color").hide();
    $(".cmb2-id-saturnthemes-alt-title").hide();
  }

  //"Enable title" options
  $("#saturnthemes_financebank_enable_title").change(function(){
    if($("#saturnthemes_financebank_enable_title").prop("checked")) {
      $(".cmb2-id-saturnthemes-title-style").slideDown();
      $(".cmb2-id-saturnthemes-heading-image").slideDown();
      $(".cmb2-id-saturnthemes-disable-parallax").slideDown();
      $(".cmb2-id-saturnthemes-alt-title").slideDown();
      $(".cmb2-id-saturnthemes-heading-bg-color").slideDown();
      $(".cmb2-id-saturnthemes-heading-color").slideDown();
      custom_title_style();
    } else {
      $(".cmb2-id-saturnthemes-title-style").slideUp();
      $(".cmb2-id-saturnthemes-heading-image").slideUp();
      $(".cmb2-id-saturnthemes-disable-parallax").slideUp();
      $(".cmb2-id-saturnthemes-alt-title").slideUp();
      $(".cmb2-id-saturnthemes-heading-bg-color").slideUp();
      $(".cmb2-id-saturnthemes-heading-color").slideUp();
    }
  });

  // Choose heading title style
  $("#saturnthemes_financebank_title_style").change(function(){
    var value = $(this).val();
    switch(value) {
      case "bg_color":
        $(".cmb2-id-saturnthemes-heading-image").slideUp();
        $(".cmb2-id-saturnthemes-disable-parallax").slideUp();
        $(".cmb2-id-saturnthemes-heading-bg-color").slideDown();
        $(".cmb2-id-saturnthemes-heading-color").slideDown();
        break;
      case "image":
        $(".cmb2-id-saturnthemes-heading-image").slideDown();
        $(".cmb2-id-saturnthemes-disable-parallax").slideDown();
        $(".cmb2-id-saturnthemes-heading-bg-color").slideUp();
        $(".cmb2-id-saturnthemes-heading-color").slideDown();
        break;
      default:
        $(".cmb2-id-saturnthemes-heading-image").slideUp();
        $(".cmb2-id-saturnthemes-disable-parallax").slideUp();
        $(".cmb2-id-saturnthemes-heading-bg-color").slideUp();
        $(".cmb2-id-saturnthemes-heading-color").slideUp();
    }
  });
});