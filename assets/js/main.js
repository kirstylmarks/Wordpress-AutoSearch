(function($) {

  $("input#keyword").keyup(function() {
      if ($(this).val().length > 2) {
        $("#datafetch").show();
      } else {
        $("#datafetch").hide();
      }
    });
})(jQuery);
