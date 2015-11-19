(function($) {

  "use strict";

  $('#fw-options-box-page-builder-box').insertBefore('#cp_page_options');

  $('#add-row').on('click', function() {
    var row = $('.empty-row.screen-reader-text').clone(true);
    row.removeClass('empty-row screen-reader-text').removeAttr('id');
    row.insertBefore('#cloner_field');
    return false;
  });

  $('.remove_button').on('click', function() {
    $(this).parents('.cp_slide_box').remove();
    return false;
  });

  $('#cp_section_type').on('change', function(){
    var selected = $('#cp_section_type option:selected').attr('value');

    $('#post-body div[id^=cp_page_options_]').not('#cp_page_options_index').hide();
    $('#post-body #cp_page_options_'+selected+'').fadeIn(500);

    if (selected == 'home') {
      $('#cp_home_slider').fadeIn(500);
    } else{
      $('#cp_home_slider').hide();
      $('#cp_home_slider .widefat').val('');
      $('.cp_slide_screenshot img').attr('src', '');
    }
  }).trigger('change');

  $('.upload_field .widefat').on('change', function() {
    var imageContainer = $(this).closest('.cp_slide_box').find('.cp_slide_screenshot img');
    imageContainer.attr('src', $(this).val());
  }).trigger('change');

  var custom_uploader;

  $('.upload_button').click(function(e) {
    e.preventDefault();
    var this_btn = $(this);

    custom_uploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    custom_uploader.on('select', function() {
        var attachment = custom_uploader.state().get('selection').first().toJSON();
        this_btn.prev().val(attachment.url).trigger('change');
    });

    custom_uploader.open();
  });

  $('#import_demo_data').on('click', function() {
    $.post(
      ajaxurl,
      {
        'action': 'cp_import_data',
        'data':   ''
      },
      function(response){
        alert('Done!');
      }
    );
  });

  $('#addtag input[type="submit"]').on('click', function(event) {
    $('#addtag').submit();
    location.reload();
    return false;
  });

})(jQuery);
