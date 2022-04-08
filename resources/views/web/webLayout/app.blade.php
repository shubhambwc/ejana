<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>EJana - @isset($title){{ $title }}@else Job Portal  @endisset</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    @stack('css')

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}?t=<?php echo time();?>" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style1.css')}}?t=<?php echo time();?>" />

     <link href="{{ asset('assets/css/summernote.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




  <script>
           $( function() {

            $( "#userbirthDate" ).datepicker({
            dateFormat: 'dd-mm-yy',
            maxDate: -5840, // 0 days offset = today
            //maxDate: 'today',
            });

            $( ".userbirthDate" ).datepicker({
            dateFormat: 'dd-mm-yy',
            maxDate: 'today',
            });

            $( ".pickdate" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });




          } );


  </script>




<style type="text/css">
        .sticky {
          position: -webkit-sticky; /* for Safari */
          position: sticky;
          top: 101px;
          align-self: flex-start;
          margin-left: 20px;}

          .side_nav{
            background-color: #1cd3c1;
            color: white;
            margin: 4px;
            font-size:10px;
            display: block;
          }
          .side_nav:hover {
                  background-color: #1d4361;
                 }
         .disable{
                display : none;
            }



         /*  This is for Append new section*/
          #additional_lang{
            float: left;
            width: 100%;
            }
          .additional_lang_row{
          float: left;
          width: 100%;
          padding: 10px 0px;
           }

       .section-body-section{float:left;width:100%;}
        .with_border{margin-bottom:30px;margin-top:-1px;border-left:1px solid #e4e6fc;border-right:1px solid #e4e6fc;border-bottom:1px solid #e4e6fc;border-top:1px solid #e4e6fc;}
        .with_border .card{margin-bottom:0px}
        .section-body-tab{float:left;margin-right:10px;padding:5px 20px;font-size:16px;cursor: pointer;}
        .section-body-tab.active{position: relative;border-left:1px solid #e4e6fc;border-right:1px solid #e4e6fc;border-top:1px solid #e4e6fc;color:#6777ef;background:#fff;}
        .section_tab{display:none;}
        .section_tab.active{display:inline-flex;float: left;width: 100%;}
        .error-input{border-color: #f00;}
        #additional_child{float: left;width: 100%;}
        .additional_child_row{float: left;width: 100%;
        border-top: 1px solid #e4e6fc;
        padding: 10px 0px;
        }
        /*  End Append section*/

</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/captcha/jquery.clientsidecaptcha.js') }}" type="text/javascript"></script>


 <style>

 .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 7px;
    height: auto;
    color:#495057;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 8px;
    right: 5px;
}

.remove_icon,
.add_icon{
margin-top: 5px;
padding: 5px 10px;
}
.select2-container{
width:100%!important;
}
 </style>
</head>


<body>
    <!-- Loader -->


    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        @include('web.webLayout.header')
    </header>



    <div class="main-content">
        @yield('content')
    </div>

    <!--   footer -->
    <footer class="footer">
        @include('webLayout.footer')
    </footer>



    <!-- javascript -->
    <script src="{{asset('assets/js/jquery.min.js' )}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js' )}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js' )}}"></script>
  <!--   <script src="{{asset('assets/js/plugins.js' )}}"></script> -->

    <!-- selectize js -->
    <script src="{{asset('assets/js/selectize.min.js' )}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js' )}}"></script>


<script src="{{ asset('messages.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('web/backend/js/stisla.js') }}"></script>
    <script src="{{ asset('web/backend/js/scripts.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom.js') }}"></script>
    <script>
        (function($) {
            let currentLocale = "{{ Config::get('app.locale') }}";
            Lang.setLocale(currentLocale);
            $.fn.button = function(action) {
                if (action === 'loading' && this.data('loading-text')) {
                    this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
                }
                if (action === 'reset' && this.data('original-text')) {
                    this.html(this.data('original-text')).prop('disabled', false);
                }
            };
        }(jQuery));
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300);
        });
        $('[data-dismiss=modal]').on('click', function(e) {
            var $t = $(this),
                target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];

            $(target).modal("hide");
        });
    </script>

     <!-- These Script for Append HTML -->
                 <script>
let changeLanguage = "{{ url('change-language') }}";
                 $('.languageSelection').on('click', function () {
  var languageName = $(this).data('prefix-value');
  $.ajax({
    type: 'GET',
    url: changeLanguage,
    data: {
      languageName: languageName
    },
    success: function success() {
      location.reload();
    }
  });
});



                  $('#transport').on('change', function() {
	$('#transport_other').hide();
	$("#transport :selected").each(function() {
            if( this.value =='other'){
  			$('#transport_other').show();
  		}
        });


	});
	 $('.select_box_other').on('change', function() {
  		$(this).siblings('.other_box').hide();
  		if( this.value =='other'){
  		    $(this).siblings('.other_box').show();
  		}

	});


                    $('#additional_lang').on('click','.remove-lang',function(){
                     var id = this.id;
                       $("#add_lang" + id).remove();
                    });


                    $("#AddNew").click(function(){


                     var addLang = $('.additional_lang_row').length+1;
                     $('#total_child').val(addLang)
                     var newLangHtml = '<div class="additional_lang_row" id="add_lang'+addLang+'" style="display: inline-flex;">';
                     newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="lang_name">Other Langauge Name</label>';
                     newLangHtml +='<select class="form-control select-box" required=""  name="Other_lang['+addLang+'][name]">';
                     newLangHtml +='<option value="">Select Langauge</option><option value="1">English</option><option value="2">   French</option><option value="3">German</option><option value="4">Gujarati</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Nepali</option><option value="8">Russian</option><option value="9">Dutch</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='</div>';

                     newLangHtml +='<div class="form-group col-xl-4 col-md-4 col-sm-12"><label for="lang_name">Langauge Level</label>';
                     newLangHtml +='<select  class="form-control select-box" required="" name="Other_lang['+addLang+'][level]">';
                     newLangHtml +='<option value="">Select Langauge Level</option><option value="2">Average</option><option value="1">Beginner</option><option value="4" selected="selected">Bilingual</option><option value="3">Fluent</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='</div>';

                     newLangHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newLangHtml +='<a id="'+addLang+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove-lang" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newLangHtml +='</div>';

                     newLangHtml +='</div>';


                    $('#additional_lang').append(newLangHtml);
                    $('#additional_lang .select-box').select2();


                   });


$("#addNewReference").click(function(){
                     var referenceId = $('.additional_reference_row').length+1;

                     var newLangHtml = '<div style="background: #e2e2e2;margin: 10px 0px;padding: 15px;" class="additional_reference_row" id="reference_'+referenceId+'">';

newLangHtml +='<div class="row">';

newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<label for="refrence_name">Name</label><span class="text-danger">*</span>';
newLangHtml +='<input class="form-control required" required="" name="refrences['+referenceId+'][refrence_name]"  type="text" id="refrence_name">';
newLangHtml +='</div></div>';
newLangHtml +='<div class="row">';

newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<label for="refrence_email">Email</label><span class="text-danger">*</span>';
newLangHtml +='<input class="form-control required" required="" name="refrences['+referenceId+'][refrence_email]" type="email" id="refrence_email">';
newLangHtml +='</div></div>';
newLangHtml +='<div class="row">';

newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<label for="refrence_phone">Phone:</label><br>';
newLangHtml +='<input class="form-control required" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,&quot;&quot;)"  name="refrences['+referenceId+'][refrence_phone]" type="tel">';
newLangHtml +='</div> </div>';
newLangHtml +='<div class="row">';

newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<label for="refrence_experiences">Describe Your Experiences:</label><span class="text-danger">*</span>';
newLangHtml +='<textarea class="form-control required" required="" rows="5" name="refrences['+referenceId+'][refrence_experiences]" cols="50" id="refrence_experiences"></textarea>';
newLangHtml +='</div></div>';

newLangHtml +='<div class="row">';
newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<label for="refrence_start_date">Start Date</label><span class="text-danger">*</span>';
newLangHtml +='<input class="form-control required pickdate" required="" name="refrences['+referenceId+'][refrence_start_date]" type="text">';
newLangHtml +='</div>';

newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<label for="refrence_end_date">End Date</label>';
newLangHtml +='<input class="form-control pickdate" required="" name="refrences['+referenceId+'][refrence_end_date]" type="text">';
newLangHtml +='</div></div>';
newLangHtml +='<div class="row">';
newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<input name="refrence_current_position" type="checkbox" value="yes">';
newLangHtml +='<label for="refrence_current_position">This is my current position</label>';
newLangHtml +='</div>';
newLangHtml +='<div class="col-xl-6 col-md-6 col-sm-12">';
newLangHtml +='<a id="'+referenceId+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove-reference"><i class="fa fa-minus" aria-hidden="true"></i></a>';
newLangHtml +='</div>';
newLangHtml +='</div>';
newLangHtml +='</div>';

$('#additional_reference').append(newLangHtml);
$( ".pickdate" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });


})
$('#additional_reference').on('click','.remove-reference',function(){
                     var id = this.id;
                    $("#reference_" + id).remove();
                    });



                    $('#additional_what_you_teach_row').on('click','.remove_what_you_teach',function(){
                     var id = this.id;
                       $("#AddWhatYouTeach" + id).remove();
                    });


                    $("#AddWhatYouTeach").click(function(){


                     var AddWhatYouTeach = $('.additional_what_you_teach_row').length+1;
                     $('#total_child').val(AddWhatYouTeach)
                     var newLangHtml = '<div class="additional_what_you_teach_row row" id="AddWhatYouTeach'+AddWhatYouTeach+'">';
                     newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12">';
                     newLangHtml +='<select class="form-control select-box select_box_other" required=""  name="what_you_teach['+AddWhatYouTeach+'][name]">';
                     newLangHtml +='<option value="">Select What class do you teach?</option><option value="arabic" selected="selected" data-select2-id="23">Arabic</option><option value="Primary_school_subjects">Primary School Subjects</option><option value="biology">Biology</option><option value="german">German</option><option value="economy">Economy</option><option value="english">English</option><option value="philosophy">Philosophy</option><option value="french">French</option><option value="history">History</option><option value="freek">Greek</option><option value="italian">Italian</option><option value="Informatics">Informatics</option><option value="Korean">Korean</option><option value="Latin">Latin</option><option value="Physics">Physics</option><option value="Dutch">Dutch</option><option value="Portuguese">Portuguese</option><option value="Chemistry">Chemistry</option><option value="Spanish">Spanish</option><option value="Math">Math</option><option value="other">Other</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='<input class="form-control other_box" placeholder="Enter other" name="what_you_teach['+AddWhatYouTeach+'][other]" type="text">';
                     newLangHtml +='</div>';

                     newLangHtml +='<div class="form-group col-xl-3 col-md-3 col-sm-3">';
                     newLangHtml +='<select  class="form-control select-box select_box_other" required="" name="what_you_teach['+AddWhatYouTeach+'][lesson_level]">';
                     newLangHtml +='<option selected="selected" value="">Select Level</option><option value="Primary_school_groups_3_8">Primary School Groups 3 to 8</option><option value="Secondary_school">Secondary School</option><option value="MBO_HBO_WO">MBO / HBO WO</option><option value="University">University</option><option value="other">Other</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='<input class="form-control other_box" placeholder="Enter other" name="what_you_teach['+AddWhatYouTeach+'][lesson_level_other]" type="text">';
                     newLangHtml +='</div>';

                     newLangHtml +='<div class="form-group col-xl-2 col-md-2 col-sm-2">';
                     newLangHtml +='<select  class="form-control select-box select_box_other" required="" name="what_you_teach['+AddWhatYouTeach+'][level]">';
                     newLangHtml +='<option selected="selected" value="">Select Level</option><option value="beginner">Beginner</option><option value="average">Average</option><option value="expert">Expert</option><option value="other">Other</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='<input class="form-control other_box" placeholder="Enter other" name="what_you_teach['+AddWhatYouTeach+'][level_other]" type="text">';
                     newLangHtml +='</div>';


                     newLangHtml +='<div class="col-xl-1 col-md-1 col-sm-12" style="margin-top:-8px;">';
                     newLangHtml +='<a id="'+AddWhatYouTeach+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove_what_you_teach" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newLangHtml +='</div>';

                     newLangHtml +='</div>';


                    $('#additional_what_you_teach_row').append(newLangHtml);
                    $('#additional_what_you_teach_row .select-box').select2();
                    $('.select_box_other').on('change', function() {
  		$(this).siblings('.other_box').hide();
  		if( this.value =='other'){
  		    $(this).siblings('.other_box').show();
  		}

	});

                   });



    </script>

   <!-- Script for tabs of forms -->

          <script src="{{ asset('assets/js/select2.min.js') }}"></script>
          <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
          <script src="{{ asset('assets/js/candidate/front/create-helper.js') }}"></script>
          <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
          <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
          <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



    <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter.int.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>


    <script>

         let phoneNo = "{{ old('region_code').old('phone') }}";
    </script>

<script src="https://cdn.rawgit.com/mobomo/sketch.js/master/lib/sketch.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#colors_sketch').sketch();
            $(".tools a").click(function () {
                $(".tools a").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>


    <script>



      function selectTab(tabID){
        $('.section-body-tab').removeClass('active')
        $('#'+tabID).addClass('active')
        $('.section_tab').removeClass('active')
        $('#section_'+tabID).addClass('active')

        }


    var previous = ""
    function openCity(evt, tabID, tabbID){

    if ($("#"+tabbID+".passed")[0]){
      openCityRBH(tabID,tabbID)
    }
    }


    function openCityRBH(tabID,tabbID){

         $(".tabcontent").hide()
         $("#"+tabID).show()
     }


    function openCityBH(tabID){
     var nextTab = parseInt(tabID)+1;
         $(".tabcontent").hide()
         $("#tabb"+tabID).addClass('passed')
         $("#tabb"+nextTab).addClass('active')
         $("#tab"+nextTab).show();
         $(window).scrollTop(0);
     }



    function validateTab(tabId){
     var errorCount = 0;

/*
         $('#tab'+tabId).find('.required').each(function(){
         $(this).siblings('.error_input_text').remove()
         if ($(this).val() ==='' || $(this).val() === null){
            $(this).parent().append('<p class="error_input_text">This input is required...</p>');
            errorCount = errorCount+1
         }
        });
*/

     if(errorCount == 0){
       openCityBH(tabId);
     }

    }




function ValidateAndSave(tabId){
        var errorCount = 0;

        /*
         $('#tab'+tabId).find('.required').each(function(){
         $(this).siblings('.error_input_text').remove()
         if ($(this).val() ==='' || $(this).val() === null){
            $(this).parent().append('<p class="error_input_text">This input is required...</p>');
            errorCount = errorCount+1
         }
        });
        */


     if(errorCount == 0){
         $(".tabcontent").hide()
         $("#tabb"+tabId).addClass('passed')
         $("#tab_confirm").show();
         $(window).scrollTop(0);
    }

}


function SubmitServiceForm(){
var c = document.getElementById("colors_sketch");
var context = c.getContext("2d");
var dataURL = c.toDataURL()
  $('#user_signature').val(dataURL)
  $('#createCandidatesForm').submit();

}


    </script>



      <div class="modal" tabindex="-1" role="dialog" id="myModalCongratulations2" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Congratulations, your registration has arrived with us!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Your registration will now be processed, we will contact you within 7 working days! We also sent you a confirmation email. Click on the link to activate your account. And take a look at which advertisements we have found for you. </p>
        <p>(based on your advertisement, we have found 11 profiles with in 15 Kilometers according to yoursearch criteria.)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>



<?php if(isset($showSignUPConfirmation2) && $showSignUPConfirmation2 ==1 ){  ?>
<script>
$('#myModalCongratulations2').modal('show');
</script>
<?php } ?>


</body>

</html>

