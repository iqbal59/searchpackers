jQuery(document).ready(function($) {
  $(document).ready(function() {
    $(".ss-loader").fadeOut(1000);
    $('.ss-company-about p').addClass('more');
    var showChar = 200;
    var ellipsestext = "...";
    var moretext = "Show More";
    var lesstext = "Show Less";
    $('.more').each(function() {
      var content = $(this).html();
      if(content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);
        var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
        $(this).html(html);
      }
    });
    $(".alert").fadeTo(5000, 500).slideUp(500, function(){
      $(".alert").slideUp(500);
    });
    $(".morelink").click(function(){
      if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
      } else {
        $(this).addClass("less");
        $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
    });
    $('.ss-verified, .ss-email').tooltip();
    $('.ss-menu-icon').on('click', function() {
      $('.hamburger-menu').toggleClass('animate');
      $('.ss-menu').slideToggle(500);
    });
    $.fn.select2.defaults.set( "theme", "bootstrap" );
    $('.ss-location-select').select2({
      theme: 'bootstrap',
      placeholder: 'Select Your City',
    });
    $('#leadmodalwizard').modal({
      backdrop: 'static',
      show: false,
    });
    $('.lmwithincity').on('click', function() {
      $('input:radio[name=lm_lead_type]:nth(0)').attr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(1)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(2)').removeAttr('checked', true);
    });
    $('.lmoutsidecity').on('click', function() {
      $('input:radio[name=lm_lead_type]:nth(0)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(1)').attr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(2)').removeAttr('checked', true);
    });
    $('.lminternational').on('click', function() {
      $('input:radio[name=lm_lead_type]:nth(0)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(1)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(2)').attr('checked', true);
    });
    $('input:radio[name=lm_lead_type]:nth(0)').on('click', function() {
      $('input:radio[name=lm_lead_type]:nth(0)').attr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(1)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(2)').removeAttr('checked', true);
    });
    $('input:radio[name=lm_lead_type]:nth(1)').on('click', function() {
      $('input:radio[name=lm_lead_type]:nth(0)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(1)').attr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(2)').removeAttr('checked', true);
    });
    $('input:radio[name=lm_lead_type]:nth(2)').on('click', function() {
      $('input:radio[name=lm_lead_type]:nth(0)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(1)').removeAttr('checked', true);
      $('input:radio[name=lm_lead_type]:nth(2)').attr('checked', true);
    });
    $('.ss-lm-datepicker').datepicker({
      inline: true,
      autoPick: true,
      format: 'yyyy-mm-dd',
      startDate: 'today',
      weekStart: 1,
      autoHide: true,
      zIndex: 2048,
      container: $('.ss-lm-wizard-datepicker-container'),
    });
    $('.ss-ls-datepicker').datepicker({
      inline: true,
      autoPick: true,
      format: 'yyyy-mm-dd',
      startDate: 'today',
      weekStart: 1,
      autoHide: true,
      zIndex: 2048,
      container: $('.ss-ls-wizard-datepicker-container'),
    });
    $( 'form' ).each( function() {
      $('form').keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
      var element = '.form-control, .custom-control-input';
      $('.ss-ls-wizard form').validate({
        rules: {
          ls_lead_type: "required",
          ls_lead_needs: "required",
          ls_moving_from: "required",
          ls_moving_to: "required",
          ls_service_quality: "required",
          ls_lead_name: "required",
          ls_lead_phone: {
            required: true,
            minlength: 10,
            maxlength: 11,
            digits: true
          },
          /*ls_lead_email: {
            required: true,
            email: true
          },*/
        },
        messages: {
          ls_lead_type: false,
          ls_lead_needs: false,
          ls_moving_from: "Moving From Is Required",
          ls_moving_to: "Moving To Is Required",
          ls_service_quality: false,
          ls_lead_name : "Name Is Required",
          //ls_lead_email : "Email Is Required",
          ls_lead_phone : {
            required: "Mobile No Is Required",
            minlength: jQuery.validator.format("Please Enter At Least {0} Digits"),
            maxlength: jQuery.validator.format("Please Enter 10 Digit Mobile No"),
          },
        },
        errorElement: "div",
        errorPlacement: function ( error, element ) {
          error.addClass( "invalid-feedback" );
          error.insertAfter( element );
        },
        highlight: function( element ) {
          $(element).removeClass('is-valid').addClass('is-invalid');
        },
        success: function( element, errorClass, validClass ) {
          $(element).removeClass('is-invalid').addClass('is-valid');
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $(element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      });
      $('.ss-lm-wizard form').validate({
        rules: {
          lm_lead_type: "required",
          lm_lead_needs: "required",
          lm_moving_from: "required",
          lm_moving_to: "required",
          lm_service_quality: "required",
          lm_lead_name: "required",
          lm_lead_phone: {
            required: true,
            minlength: 10,
            maxlength: 11,
            digits: true
          }/*,
          lm_lead_email: {
            required: true,
            email: true
          }*/
        },
        messages: {
          lm_lead_type: false,
          lm_lead_needs: false,
          lm_moving_from: "Moving From Is Required",
          lm_moving_to: "Moving To Is Required",
          lm_service_quality: false,
          lm_lead_name : "Name Is Required",
          //lm_lead_email : "Email Is Required",
          lm_lead_phone : {
            required: "Phone No Is Required",
            minlength: jQuery.validator.format("Please Enter 10 Digit Mobile No"),
            maxlength: jQuery.validator.format("Please Enter 10 Digit Mobile No"),
          },
        },
        errorElement: "div",
        errorPlacement: function ( error, element ) {
          error.addClass( "invalid-feedback" );
          error.insertAfter( element );
        },
        highlight: function( element ) {
          $(element).removeClass('is-valid').addClass('is-invalid');
        },
        success: function( element, errorClass, validClass ) {
          $(element).removeClass('is-invalid').addClass('is-valid');
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $(element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      });
      $('.ss-contact-form form').validate({
        rules: {
          cfname: "required",
          cfemail: "required",
          cftopic: "required",
          cfphone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            digits: true
          },
        },
        messages: {
          cfname : "Name Is Required",
          cfemail : "Email Is Required",
          cftopic : "Please Select Topic",
          cfphone : {
            required: "Phone Is Required",
            minlength: jQuery.validator.format("Please Enter At Least {0} Digits"),
            maxlength: jQuery.validator.format("Please Enter No More Than {0} Digits"),
          },
        },
        errorElement: "div",
        errorPlacement: function ( error, element ) {
          error.addClass( "invalid-feedback" );
          error.insertAfter( element );
        },
        highlight: function( element ) {
          $(element).removeClass('is-valid').addClass('is-invalid');
        },
        success: function( element, errorClass, validClass ) {
          $(element).removeClass('is-invalid').addClass('is-valid');
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $(element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      });
    });
    $('.ss-ls-wizard').bootstrapWizard({
      'tabClass': 'nav ss-ls-wizard-navigation-pills',
      'nextSelector': '.btn-next',
      'previousSelector': '.btn-back',
      onNext: function(tab, navigation, index) {
        var $valid = $('.ss-ls-wizard form').valid();
        if (!$valid) {			
          focusInvalid();
          return false;
        }
      },
      onTabClick: function(tab, navigation, index) {
        var $valid = $('.ss-ls-wizard form').valid();
        if (!$valid) {
          return false;
        } else {
          return true;
        }
      },
      onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('.ss-ls-wizard .progress-bar').css({width:$percent+'%'});
        var $wizard = navigation.closest('.ss-ls-wizard');
        if ($current >= $total) {
          $($wizard).find('.btn-next').hide();
          $($wizard).find('.btn-submit').show();
        } else if ($current <= 1 ) {
          $($wizard).find('.btn-back').hide();
          $($wizard).find('.btn-submit').hide();
        } else {
          $($wizard).find('.btn-back').show();
          $($wizard).find('.btn-next').show();
          $($wizard).find('.btn-submit').hide();
        }
      }
    });
    $('.ss-lm-wizard').bootstrapWizard({
      'tabClass': 'nav ss-lm-wizard-navigation-pills',
      'nextSelector': '.btn-next',
      'previousSelector': '.btn-back',
      onNext: function(tab, navigation, index) {
        var $valid = $('.ss-lm-wizard form').valid();
        if (!$valid) {
          focusInvalid();
          return false;
        }
      },
      onTabClick: function(tab, navigation, index) {
        var $valid = $('.ss-lm-wizard form').valid();
        if (!$valid) {
          return false;
        } else {
          return true;
        }
      },
      onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('.ss-lm-wizard .progress-bar').css({width:$percent+'%'});
        var $wizard = navigation.closest('.ss-lm-wizard');
        if ($current >= $total) {
          $($wizard).find('.btn-next').hide();
          $($wizard).find('.btn-submit').show();
        } else if ($current <= 1 ) {
          $($wizard).find('.btn-back').hide();
          $($wizard).find('.btn-submit').hide();
        } else {
          $($wizard).find('.btn-back').show();
          $($wizard).find('.btn-next').show();
          $($wizard).find('.btn-submit').hide();
        }
      }
    });
  });
});