/**
* Theme: Attex - Responsive Bootstrap 5 Admin Dashboard
* Author: Coderthemes
* Component: Dragula component
*/

import 'dropzone/dist/min/dropzone.min.js';
import 'daterangepicker/daterangepicker.js';
//default date range picker

!function ($) {
  "use strict";

    $('#dash-daterange').daterangepicker({
        singleDatePicker: true,
        maxDate: new Date(),
        autoUpdateInput:false,
    }, function(start, end, label) {
        var selectedDate = start.format('YYYY-MM-DD');
        var newUrl = updateUrlWithDate(selectedDate);
        window.location.href = newUrl;
    });
    function updateUrlWithDate(date) {
        var currentUrl = window.location.href;
        var newUrl;

        if (currentUrl.includes('?')) {
            // Eğer URL'de zaten sorgu parametreleri varsa
            newUrl = currentUrl.includes('date=') ?
                currentUrl.replace(/(date=)[^\&]+/, '$1' + date) :
                currentUrl + '&date=' + date;
        } else {
            // Eğer URL'de henüz sorgu parametreleri yoksa
            newUrl = currentUrl + '?date=' + date;
        }

        return newUrl;
    }
  var FileUpload = function () {
    this.$body = $("body")
  };
    var today = new Date().toISOString().split('T')[0];
    $('#hiddenDate').val(today);

  /* Initializing */
  FileUpload.prototype.init = function () {
    // Disable auto discovery

    Dropzone.autoDiscover = false;



    $('[data-plugin="dropzone"]').each(function () {
      var actionUrl = $(this).attr('action')
      var previewContainer = $(this).data('previewsContainer');

      var opts = { url: actionUrl };
      if (previewContainer) {
        opts['previewsContainer'] = previewContainer;
      }

      var uploadPreviewTemplate = $(this).data("uploadPreviewTemplate");
      if (uploadPreviewTemplate) {
        opts['previewTemplate'] = $(uploadPreviewTemplate).html();
      }

      var dropzoneEl = $(this).dropzone(opts);

    });
  },

    //init fileupload
    $.FileUpload = new FileUpload, $.FileUpload.Constructor = FileUpload
}(window.jQuery),

  //initializing FileUpload
  function ($) {
    "use strict";
    $.FileUpload.init()
  }(window.jQuery);
