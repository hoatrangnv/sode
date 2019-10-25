$(document).on('change', '#form-page-type', function(){
  $(".content-gallery").stop();
  $(".content-post").stop();
  if ( $(this).val() == 3 ) {
    $(".content-gallery").slideDown(300);
    $(".content-gallery").removeClass('hidden');
    $(".content-post").slideUp(300);
  }else{
    $(".content-gallery").slideUp(300);
    $(".content-post").slideDown(300);
    $(".content-post").removeClass('hidden');
  }
});

$(document).on('focusout', '#form-title', function(){
  if ( $("#form-slug").val() == "" ){
    $("#form-slug").val(changeToSlug($(this).val()));
  }
});

$(document).on('change', "#form-avatar", function(evt){
  var file = evt.target.files[0];
  
  //Get tmp path
  var tmp = URL.createObjectURL(event.target.files[0]);
  //Get name extension
  var nameExtension = file.type;
  

  //Check image file
  if ( nameExtension.search('image') > -1 ) {
    $(this).next('label').text(file.name);
    $("#file-show").attr('src', tmp);
    $("#file-show").removeClass('hidden');
      

  }else{
    notify("Vui lòng chọn hình", 0);
    $(this).next('label').text("Choose file");
    $("#file-show").addClass('hidden');
    $(this).val('');
  }

});