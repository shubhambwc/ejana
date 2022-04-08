@extends('layouts.app')
@section('title')
    {{ $pageTitle }}
@endsection
@push('css')
    <link href="{{ asset('assets/css/summernote.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>
            {{__('web.helpers.edit')}} {{$user->first_name }} <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){?> {{__('web.helpers.profile_information')}} <?php }else{ ?> {{__('web.helpers.service_details')}} <?php } ?></h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('candidates.index') }}"
                   class="btn btn-primary form-btn float-right">{{ __('messages.common.back') }}</a>
            </div>
        </div>



        <style>
        #datepicker span{
          color: #6777ef !important;
          
        }

        .error_input{border-color: #ff0000!important;}
.error_input_text{padding:5px;color:#ff0000;font-size:12px;margin:0px}
.custom-file-preview img{
width: 100px;
    border-radius: 10px;
    margin: 10px;
}

.input-group-addon{
border-left: 1px solid #dee2e6;
border-top: 1px solid #dee2e6;
border-bottom: 1px solid #dee2e6;
vertical-align: baseline;
padding: 9px 5px 0px 5px;
border-radius:10px 0px 0px 10px;
}


    .calendar{width:auto;height:auto;border:1px solid #000;float:left;}
    .calendar_left{width:295px;height:auto;float:left;}
    .calendar_top{float:left;width:100%;padding:5px;}
    .calendar_top_1{cursor: pointer;float:left;width:10%;text-align:left;}
    .calendar_top_2{float:left;width:80%;text-align:center;}
    .calendar_top_3{cursor: pointer;float:right;width:10%;text-align:right;}
    .calendar_right{
    width: 295px;
    float:right;

    }
    .calendar_right_inner{
    width:100%;
    height: 200px;
    overflow: scroll;
    margin: 10px 0px;
    }
    .calendar_body{
    float:left;width:100%;padding:5px;
    }
    .calendar_date{cursor: pointer;float:left;width:30px;height:30px;text-align:center;border:1px solid #e2e2e2;margin:5px;}
    .calendar_date_dis{float:left;width:30px;height:30px;text-align:center;border:0px solid #e2e2e2;margin:5px;}

    .calendar_date.active:hover{background:#1cd3c1;}
    .disableed{opacity:0.5}
    .selected{background:#1cd3c1;}
    .selected.currentselected{background:#465571;color:#fff;}
    .selected.active.currentselected:hover{background:#465571;color:#fff;}
    .calendar_date_label{float:left;width:30px;text-align:center;border:0px solid #e2e2e2;margin:0px 5px;}

    .titmeSloteRow{float:left;width:100%;}
    .titmeSloteRow.evenRow{background:#e2e2e2;}
    .titmeSlote{float:left;width:100px;}
    .titmeSloteRight{float:right;width:50px;}

        .section-body-section{float:left;width:100%;}
        .with_border{margin-bottom:30px;margin-top:-1px;border-left:1px solid #e4e6fc;border-right:1px solid #e4e6fc;border-bottom:1px solid #e4e6fc;border-top:1px solid #e4e6fc;}
        .with_border .card{margin-bottom:0px}
        .row{width:100%}
        .section-body-tab{float:left;margin-right:10px;padding:5px 20px;font-size:16px;cursor: pointer;}
        .section-body-tab.active{position: relative;border-left:1px solid #e4e6fc;border-right:1px solid #e4e6fc;border-top:1px solid #e4e6fc;color:#6777ef;background:#fff;}

        .tabcontent{display:inline-flex;float: left;width: 100%;padding:15px;}
        .tabcontent.disable,.section_tab{display:none;}
        .tabcontent.active{display:block;}

        .section_tab.active{display:inline-flex}
        .error-input{border-color: #f00;}
        #additional_child{float: left;width: 100%;}
        .additional_child_row{float: left;width: 100%;
        border-top: 1px solid #e4e6fc;
		padding: 10px 0px;
		}


         #additional_lang{float: left;width: 100%;}
        .additional_lang_row{float: left;width: 100%;
        border-top: 1px solid #e4e6fc;
        padding: 10px 0px;
        }

        .select2-container{
            width:100%!important;
        }
        .other_box{margin-top:20px;display:none}
        .other_box_visible{margin-top:20px;display:block}
        #message3{
        text-align: center;
font-size: 20px;
font-weight: bold;
color: #000;
margin: 0px 0px 20px 0px;
        }

        .file_icon{
width: 100px;
height: 150px;
background: url('/assets/img/doc_file_icon.png.jpg');
background-size: cover;
display: inline-block;
}
.pdf_icon{
background-position: -15px 0px !important;
}
.doc_icon{
background-position: -135px 0px !important;
}
.excel_icon{
background-position: -255px 0px !important;
}

.modal-backdrop.show {
    opacity: 0!important;
    z-index:0!important
}
textarea{min-height:150px;}
       </style>
<div class="modal" id="previewImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" data-dismiss="modal">
    <div class="modal-content">

      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 100%;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="previewDocModal" >
  <div class="modal-dialog modal-dialog-centered" role="document" data-dismiss="modal">
    <div class="modal-content">

      <div class="modal-body">


      <object id="docpreview" data="" type="application/pdf" width="100%" height="850">
    <p>
        It appears your Web browser is not configured to display PDF files. No worries, just <a href="your_file.pdf">click here to download the PDF file.</a>
    </p>
</object>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



       <script>
           $( function() {

           $('input[type=radio]').change(function() {
    	        if (this.value == 1) {
    	            $(this).siblings('.radio_yes_box').show();
    		    }else{
    		        $(this).siblings('.radio_yes_box').hide();
    	        }
           });

           $('input[type=checkbox]').change(function() {
                if($(this).is(':checked')){
                    $(this).siblings('.checkbox_yes_box').show();
                } else{
                    $(this).siblings('.checkbox_yes_box').hide();
                }

            });

             $('input[type=checkbox][id=extra_offer_value]').change(function() {
                if($(this).is(':checked')){
                    $('#extra_offer_box_other').show();
                } else{
                    $('#extra_offer_box_other').hide();
                }

                });





           $('.select_box').on('change', function() {
  		        $(this).siblings('.other_box').hide();
  		        $(this).siblings('.other_box_visible').hide();
  		        if( this.value =='other'){
  		            $(this).siblings('.other_box').show();
  		            $(this).siblings('.other_box_visible').show();
  		        }

	        });

	        $('.select_box_other').on('change', function() {
  		        $(this).siblings('.other_box').hide();
  		        $(this).siblings('.other_box_visible').hide();
  		        if( this.value =='other'){
  		            $(this).siblings('.other_box').show();
  		            $(this).siblings('.other_box_visible').show();
  		        }

	        });


	         $('.select_box_other_multiple').on('change', function() {
	            $(this).siblings('.other_box').hide();
  		        $(this).siblings('.other_box_visible').hide();
  		        $(this).find("option:selected").each(function() {
  		                if(this.value =='other'){
  			                $(this).parent().siblings('.other_box').show();
  		                    $(this).parent().siblings('.other_box_visible').show();
  		                }
                 });


	        });

	        $('#preferred_reception_location').on('change', function() {
  		        if( this.value =='Eigenhuis'){
  			        $('#have_pets_box').show();
  		        }else{
  			        $('#have_pets_box').hide();
  			        $('#have_pets_text_box').hide();
  		        }
	        });


	        $('#have_pets').on('change', function() {
  		        if( this.value =='yes'){
  			        $('#have_pets_text_box').show();
  		        }else{
  			        $('#have_pets_text_box').hide();
          		}
	        });









           $('.OpenFileInModal').click(function(){
           var fileName = $(this).data('url-to-open');
           //var fileName = 'OpenFileInModal';
           var type = $(this).data('type');
           if(type!='image'){
           //$('#docpreview').attr('data', fileName);
           //$('#previewDocModal').modal('show');
           var strWindowFeatures = "location=yes,height=570,width=520,scrollbars=yes,status=yes";

           window.open(fileName, strWindowFeatures)
           }else{
              $('#imagepreview').attr('src', fileName); // here asign the image to the modal when the user click the enlarge link
              $('#previewImageModal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function

           }

           })

    $('#image1').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image1_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image1_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image1_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image1').show();
  });


   $('#image2').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image2_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image2_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image2_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image2').show();
  });


   $('#image22').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image22_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image22_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image22_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image22').show();
  });


   $('#image3').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image3_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image3_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image3_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image3').show();
  });

   $('#image4').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image4_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image4_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image4_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image4').show();
  });

   $('#image44').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image44_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image44_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image44_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image44').show();
  });

   $('#image5').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image5_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image5_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image5_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image5').show();
  });



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

            $( ".datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });
              $('input').filter('.editdatepicker').datepicker({
             //$( ".editdatepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });
            
             $('#timepicker').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
             $('#edittimepicker').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });

          } );



        function selectRootTab(tabID){
        $('.section-body-tab').removeClass('active')
        $('#'+tabID).addClass('active')

        $('.section_tab').removeClass('active')
        $('#section_'+tabID).addClass('active')

        }


        $(document).ready(function(){
        getCurrentMonth();




        $("#AddNewChild").click(function(){


                     var addChild = $('.new_child').length+1;
                     var newChildHtml = '<div class="additional_child_row new_child" id="add_child'+addChild+'">';

                     newChildHtml +='<div class="row">';
                     newChildHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="child_name">Name</label>';
                     newChildHtml +='<input class="form-control required" name="child[0][name]" type="text" id="child['+addChild+'][name]">';
                     newChildHtml +='</div>';
                     newChildHtml +='</div>';

                     newChildHtml +='<div class="row">';
                     newChildHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="child_name">Gender</label><br>';
                     newChildHtml +='<input checked="checked" name="child['+addChild+'][gender]" type="radio" value="male" id="child[0][gender]"> Male &nbsp;&nbsp;&nbsp;';
                     newChildHtml +='<input name="child['+addChild+'][gender]" type="radio" value="female" id="child[0][gender]"> Female';
                     newChildHtml +='</div>';
                     newChildHtml +='</div>';

                     newChildHtml +='<div class="row">';
                     newChildHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="child_name">Birth Date</label>';
                     newChildHtml +='<input class="form-control required userbirthDate" autocomplete="off" name="child['+addChild+'][dob]" type="text">';
                     newChildHtml +='</div>';

                     newChildHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newChildHtml +='<a id="'+addChild+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove-child" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newChildHtml +='</div>';

                     newChildHtml +='</div>';




                     newChildHtml +='</div>';


                    $('#additional_child').append(newChildHtml);
                     $( ".userbirthDate" ).datepicker({
                        dateFormat: 'dd-mm-yy',
                        maxDate: 'today',
                     });

                   });

                   $('#additional_child').on('click','.remove-child',function(){
                     var id = this.id;
                       $("#add_child" + id).remove();
                    });



        $('#additional_lang').on('click','.remove-lang',function(){

        var id = this.id;
        $("#add_lang" + id).remove();
        });


        $("#AddNew").click(function(){


         var addLang = $('.additional_lang_row').length;
         $('#total_child').val(addLang)
         var newLangHtml = '<div class="additional_lang_row" id="add_lang'+addLang+'" style="display: inline-flex;">';
         newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="lang_name">Other Langauge Name</label>';
         newLangHtml +='<select class="form-control  select-box" required=""  name="Other_lang[Other_lang][name]">';
         newLangHtml +='<option value="">Select Langauge</option><option value="1">English</option><option value="2">	French</option><option value="3">German</option><option value="4">Gujarati</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Nepali</option><option value="8">Russian</option><option value="9">Dutch</option>';
         newLangHtml +='</select>';
         newLangHtml +='</div>';

         newLangHtml +='<div class="form-group col-xl-4 col-md-4 col-sm-12"><label for="lang_name">Langauge Level</label>';
         newLangHtml +='<select  class="form-control  select-box" required="" name="Other_lang['+addLang+'][level]">';
         newLangHtml +='<option value="">Select Langauge Level</option><option value="2">Average</option><option value="1">Beginner</option><option value="4" selected="selected">Bilingual</option><option value="3">Fluent</option>';
         newLangHtml +='</select>';
         newLangHtml +='</div>';

         newLangHtml +='<div class="form-group col-xl-2 col-md-2 col-sm-12">';
         newLangHtml +='<a id="'+addLang+'" href="javascript:void(0)" class="btn btn-primary remove-lang" style="margin-top: 30px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
         newLangHtml +='</div>';

         newLangHtml +='</div>';


        $('#additional_lang').append(newLangHtml);
        $('#additional_lang .select-box').select2();

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
  		                $(this).siblings('.other_box_visible').hide();
  		                $(this).siblings('.other_box').hide();
  		                    if( this.value =='other'){
  		                        $(this).siblings('.other_box').show();
  		                        $(this).siblings('.other_box_visible').show();
  		                    }

	                    });

                   });

        $("#addNewReference").click(function(){
                     var referenceId = $('.additional_reference_row').length;

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



        });





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
         var nextTab = parseInt(tabID)+1;
         $("#"+tabID).show()
     }


    function selectTab(tabID){
    PreLoadCalendar();
    var nextTab = parseInt(tabID)+1;
         $(".tabcontent").hide()
         $('.section-body-tab').removeClass('active')
         $('#tabb'+nextTab).addClass('active')
         $("#tab"+nextTab).show();
         $(window).scrollTop(0);
     }



    function validateTab(tabId){
      selectTab(tabId);
      PreLoadCalendar();
    }
    function openCity(evt, nextTab, tabbID){

         $(".tabcontent").hide()
         $('.section-body-tab').removeClass('active')
         $('#'+tabbID).addClass('active')
         $("#"+nextTab).show();

         $(window).scrollTop(0);


    }




function updateServiceForm(){
  $('#editCandidatesForm').submit();

}


function ValidateAndSave(tabId){
        var errorCount = 0;


     if(errorCount == 0){
         $(".tabcontent").hide()
         $("#tabb"+tabId).addClass('passed')
         $("#tab_confirm").show();
         $(window).scrollTop(0);
    }

}


    $('#date_time_available').val('')
    $('#time_available').val('')
    function prevMonth(){
    var cMonth = parseInt($('#selected_month_number').val());
    if(cMonth == 0){
    var newYear =  parseInt($('#selected_year_number').val())-1;
    var newMonth =  11;
    }else{
    var newYear = $('#selected_year_number').val();
    var newMonth =  cMonth-1;
    }
    $('#selected_month_number').val(newMonth)
    $('#selected_year_number').val(newYear)
    getMonthYearName();
    toggleTimeAvailableCalendar()
    }


    function nextMonth(){
    var cMonth = parseInt($('#selected_month_number').val());
    if(cMonth == 11){
    var newYear =  parseInt($('#selected_year_number').val())+1;
    var newMonth =  0;
    }else{
    var newYear = $('#selected_year_number').val();
    var newMonth =  cMonth+1;
    }

    $('#selected_month_number').val(newMonth)
    $('#selected_year_number').val(newYear)
    getMonthYearName();
    toggleTimeAvailableCalendar()
    }

    function getMonthYearName(){
    $('#calendar_dates').html('')

     var getMonth = parseInt($('#selected_month_number').val())
     var getFullYear = parseInt($('#selected_year_number').val())
     var datdicId = getMonth+1;
     var firstDay = new Date(getFullYear, getMonth, 1).getDay();
     if(firstDay ==0){
     firstDay =1;
     }

     const d = new Date();
     if(new Date(getFullYear, getMonth, 1) <= new Date(d.getFullYear(), d.getMonth(), 1)){
     $('.calendar_top_1').addClass('disableed')
     }else{
      $('.calendar_top_1').removeClass('disableed')
     }
     var totalDates = getDaysInMonth(new Date(getFullYear, getMonth, 1).getMonth()+1,new Date(getFullYear, getMonth, 1).getFullYear());
     //alert(firstDay+'::'+totalDates)
     $('#fist_date').val(firstDay);
     $('#totol_days').val(totalDates);
      const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      $('#selected_month').html(months[getMonth]+' '+getFullYear);
       var ddate = 1;
      for(var i= 1; i<totalDates+firstDay;i++){

      if(i>=firstDay){
      if(new Date(getFullYear, getMonth, ddate) < new Date(d.getFullYear(), d.getMonth(), d.getDate())){
      var dateHtml = '<div class="calendar_date disableed" id="'+ddate+'-'+datdicId+'-'+getFullYear+'">'+ddate+'</div>';

      }else{
      var dateHtml = '<div onClick="selectDate(this.id)" class="calendar_date active" id="'+ddate+'-'+datdicId+'-'+getFullYear+'">'+ddate+'</div>';

      }
      ddate = ddate+1;
      }else{
      var dateHtml = '<div class="calendar_date_dis"></div>';
      }

      $('#calendar_dates').append(dateHtml)

      }
    }


    function getCurrentMonth(){
    const d = new Date();

    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $('#selected_month_number').val(d.getMonth())
    $('#selected_year_number').val(d.getFullYear())
    getMonthYearName();

    }

    function getDaysInMonth (month,year) {
      $('#dates_preview').remove()
       $('.time_slotes').prop( "checked", false );
      return new Date(year, month, 0).getDate();

    }


   function selectDate(dateId){
       $('#'+dateId).addClass('selected')
       $('.calendar_date.currentselected').removeClass('currentselected')
       $('#'+dateId).addClass('currentselected');
       $('.time_slotes').prop( "checked", false );


       var valueToPush1 = $('#date_time_available').val();

       if(valueToPush1!=''){
         var valueToPushNew = JSON.parse(valueToPush1);
       }else{
        var valueToPushNew = [];
       }

       for(var k = 0; k < valueToPushNew.length; k++) {
       if(valueToPushNew[k].date !=dateId){
       if(valueToPushNew[k].time_slot.length<1){
           $('#'+valueToPushNew[k].date).removeClass('selected')
           $('#'+valueToPushNew[k].date).removeClass('currentselected')
          valueToPushNew.splice(k, 1);

       }

       }
       }


       var obj = valueToPushNew.find(o => o.date === dateId);
       if(obj){
          var timeSlots = obj.time_slot;

          for(var i = 0; i < timeSlots.length; i++) {
          var timeSlotsId = timeSlots[i];
          var timeSlotsIdNew = timeSlotsId.replaceAll('00', '');
          var timeSlotsIdNew2 = timeSlotsIdNew.replaceAll(':', '');
          $('#'+timeSlotsIdNew2).prop( "checked", true );

          }
       }
       var valueToPush = { };
       valueToPush['date'] = dateId;
       valueToPush['time_slot'] = [];



       if(obj){

       if( obj.time_slot.length>0){
       }else{

       for(var i = 0; i < valueToPushNew.length; i++) {
            if(valueToPushNew[i].date == dateId) {
                valueToPushNew.splice(i, 1);
             break;
            }
        }
        $('#'+dateId).removeClass('selected')
        $('#'+dateId).removeClass('currentselected');
        }
       }else{
         if(dateId){
          valueToPushNew.push(valueToPush)
          }
       }
      // console.log(valueToPushNew);
       $('#date_time_available').val(JSON.stringify(valueToPushNew))
       showdatesPreview(dateId)
       //resetTimeSlots()


   }




   function showdatesPreview(dateId){

    var datesPreview = "<div id='dates_preview' style='width:100%;padding:10px;'>";

     var valueToPush1 = $('#date_time_available').val();
       if(valueToPush1!=''){
         var valueToPushNew = JSON.parse(valueToPush1);
       }else{
        var valueToPushNew = [];
       }

       for(var k = 0; k < valueToPushNew.length; k++) {
       if(valueToPushNew[k].date ==dateId){
       if(valueToPushNew[k].time_slot.length > 0){



       datesPreview += "<p style='margin:0px;'><b>Available as <?php echo @$JobCategoryDetail->name;?>:</b></p>";
       for(var t = 0; t < valueToPushNew[k].time_slot.length; t++) {
        var timeSlotsId = valueToPushNew[k].time_slot[t];
          var timeSlotsIdNew = timeSlotsId.replaceAll('00', '');
          var timeSlotsIdNew2 = timeSlotsIdNew.replaceAll(':', '');
          $('#'+timeSlotsIdNew2).prop( "checked", true );

       datesPreview += "<p style='margin:5px 0px;'>Between: "+timeSlotsId+"</p>";
       }

       }
       }

       }



    datesPreview += "<div>";
   $('#dates_preview').remove()
   $('.calendar').append(datesPreview)


   }

   function toggleTimeAvailableCalendar(){
    $('.calendar_date.currentselected').removeClass('currentselected')
    var time_available ='';
    $(".calendar_date.selected").each(function() {
     time_available = time_available+this.id+',';
       $('#time_available').val(time_available);
    });


   var valueToPush1 = $('#date_time_available').val();
       if(valueToPush1!=''){
         var valueToPushNew = JSON.parse(valueToPush1);
       }else{
        var valueToPushNew = [];
       }

       for(var k = 0; k < valueToPushNew.length; k++) {

       if(valueToPushNew[k].time_slot.length<1){
           $('#'+valueToPushNew[k].date).removeClass('selected')
           $('#'+valueToPushNew[k].date).removeClass('currentselected')
       }else{
           $('#'+valueToPushNew[k].date).addClass('selected');

       }


       }

   }



   function toggleTimeSlotes(){

   var checkBoxes = $("input[type='checkbox'].time_slotes");
   if(checkBoxes.prop("checked")==true)
     checkBoxes.prop("checked", false);
   else
     checkBoxes.prop("checked", true)
   SelectTimeSlotes()

   }



   function SelectTimeSlotes(){

    var valueToPush1 = $('#date_time_available').val();
    if(valueToPush1){
    }else{
    valueToPush1 ='';
    }
    var valueToPushNew = JSON.parse(valueToPush1);

    var currentselected = $(".selected.currentselected").attr('id');

    var currentselectedTimeArray =[ ];

     $("input[type='checkbox'].time_slotes").each(function() {
     if($(this).is(':checked')){
     var currentselectedTime = $(this).attr('date');
        currentselectedTimeArray.push(currentselectedTime)
     }

    });

     for(var i = 0; i < valueToPushNew.length; i++) {
            if(valueToPushNew[i].date == currentselected) {
                valueToPushNew[i].time_slot =currentselectedTimeArray
             break;
            }
        }
     $('#date_time_available').val(JSON.stringify(valueToPushNew))
     showdatesPreview(currentselected)

   }


   function resetTimeSlots(){
    var currentSelectedDate = $(".selected.currentselected").attr('id');
    var dateTimeAvailable = $('#date_time_available').val();
    var dateTimeAvailableArray = JSON.parse(dateTimeAvailable);

    for(var i = 0; i < dateTimeAvailableArray.length; i++) {
            if(dateTimeAvailableArray[i].date == currentSelectedDate) {
                var timeSlotArray = dateTimeAvailableArray[i].time_slot;
             break;
            }
    }
    console.log(currentSelectedDate)
    console.log(timeSlotArray)
   }

   function PreLoadCalendar(){
    //alert('PreLoadCalendar')
    var date_time_available = $('#date_time_available').val();
    if(date_time_available){
   var obj = JSON.parse($('#date_time_available').val())
   if(obj){
        for(var i = 0; i < obj.length; i++) {
           $('#'+obj[i].date).addClass('selected')
           selectDate(obj[i].date)
        }
   }
   }

   }


        </script>

        <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>

        <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']==2){ ?>
         <div class="section-body section-body-section">
        <div class="section-body-tab active" id="tabb1" onClick="selectTab('0')">{{__('web.helpers.details')}}</div>
        <div class="section-body-tab" id="tabb2" onClick="selectTab('1')" >{{__('web.helpers.profile_picture')}}</div>
        <div class="section-body-tab " id="tabb3"  onClick="selectTab('2')">{{__('web.helpers.experience')}}</div>
        <div class="section-body-tab" id="tabb4"  onClick="selectTab('3')">{{__('web.helpers.ad_info')}}</div>
        <div class="section-body-tab" id="tabb5"  onClick="selectTab('4')">{{__('web.helpers.contract')}}</div>
        </div>


        <?php }else{ ?>
        <div class="section-body section-body-section">
        <div class="section-body-tab active" id="tabb1" onClick="selectTab('0')">{{__('web.helpers.details')}}</div>
        <div class="section-body-tab" id="tabb2" onClick="selectTab('1')" >{{__('web.helpers.profile_picture')}}</div>
        <div class="section-body-tab " id="tabb3"  onClick="selectTab('2')">{{__('web.helpers.experience')}}</div>
        <div class="section-body-tab" id="tabb4"  onClick="selectTab('3')">{{__('web.helpers.extra_information')}}</div>
        <div class="section-body-tab" id="tabb5"  onClick="selectTab('4')">{{__('web.helpers.who_you_are')}}</div>
        <div class="section-body-tab" id="tabb6"  onClick="selectTab('5')">{{__('web.helpers.ad_info')}}</div>
        <div class="section-body-tab" id="tabb7"  onClick="selectTab('6')">{{__('web.helpers.references')}}</div>
        <div class="section-body-tab" id="tabb8"  onClick="selectTab('7')">{{__('web.helpers.contract')}}</div>
        </div>
        <?php }?>

        <?php }else{ ?>

        <div class="section-body section-body-section">
        <div class="section-body-tab active" id="tab1" onClick="selectRootTab('tab1')">{{__('web.helpers.profile_information')}}</div>
        <div class="section-body-tab" id="tab2" onClick="selectRootTab('tab2')" >{{__('web.helpers.manage_services')}}</div>
        <div class="section-body-tab" id="tab3" onClick="selectRootTab('tab3')" >{{__('web.helpers.contact_moments')}}</div>
        <div class="section-body-tab" id="tab4" onClick="selectRootTab('tab4')" >{{__('web.helpers.bank_transactions')}}</div>
        <div class="section-body-tab" id="tab5" onClick="selectRootTab('tab5')" >{{__('web.helpers.booking')}}</div>
        </div>

        <?php }?>
        <!-- add modal  -->
 <div id="addremind" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="JobCategoryHeader">{{ __('New Contact Moment') }}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            
          
            {{ Form::open(['route' => 'candidates.newreminder', 'files' => 'true', 'id' => 'addremind']) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="validationErrorsBoxs"></div>
                <div class="row">
                    <input type="hidden" name="helper_id" value="<?php echo  $candidate->id;?>">
                  
                    <div class="form-group col-sm-12">
                        {{ Form::label('description',__('web.helpers.explanation').':') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control','id' => 'description', 'name' => 'reminder', 'rows' => '5']) }}
                    </div>
                     <div class="form-group col-sm-12">
                    {{ Form::label('type', __('web.es.type').':') }}
                    
                      {{ Form::select('type',
                      ['email' =>'E-mail' , 'reminder' =>'Reminder' ,'interview'=>'Interview','telephone'=>'Telephone Conversation','whatsapp'=>'Whatsapp']
                      ,null, ['id'=>'helpers_exprience','class' => 'form-control select-box required']) }}
                </div>

                    <div class="form-group col-sm-6">
                    {{ Form::label('date', __('web.helpers.date').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    {{ Form::text('date', null, ['class' => 'form-control datepicker','id' => 'datepicker', "data-provide" => "datepicker" ,'name' => 'date','autocomplete' => 'off']) }}
                </div>
                <div class="form-group col-sm-6">
                    {{ Form::label('time', __('web.helpers.time').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    {{ Form::text('time', null, ['class' => 'form-control','id' => 'timepicker', 'name' => 'time','autocomplete' => 'off']) }}
                </div>


                <div class="form-group col-sm-12">
                {{ Form::label('image1', __("web.helpers.upload_file")) }}
                <div class="custom-file">
                    <input type="file" name="upload_file" class="custom-file-input" id="">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i>{{__('web.helpers.upload_file')}}</label>
                </div>
                    </div>
                    

                    
                
                 
                    
                    
                    
                </div>
                <div class="text-right">
                    <button type="submit" id="" class="btn btn-primary"
                            >{{ __('messages.common.save') }}</button>
                   
                    <button type="button" id="btnCancel" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
            </div>
           {{ Form::close() }}
        </div>
    </div>
</div>

<!-- edit modal -->
@include('candidates.reminder.editmodal')
<!--  -->
        <div class="section-body section-body-section with_border">
            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['route' => 'candidates.update', 'files' => 'true', 'id' => 'editCandidatesForm']) }}


                     {{ Form::hidden('candidate_id',$candidate->id) }}
                     {{ Form::hidden('user_id',$user->id) }}
                     <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>
                        {{ Form::hidden('service_id',$serviceId) }}
                       @include('candidates.edit_fields_'.$_REQUEST['service_id'])
                    <?php }else{ ?>
                       {{ Form::hidden('service_id','')}}
                       @include('candidates.edit_fields')
                    <?php } ?>


                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        let companyStateUrl = "{{ route('states-list') }}";
        let companyCityUrl = "{{ route('cities-list') }}";
        let isEdit = true;
        let phoneNo = "{{ old('region_code').old('phone') }}";
        let countryId = '{{$candidate->user->country_id}}';
        let stateId = '{{$candidate->user->state_id}}';
        let cityId = '{{$candidate->user->city_id}}';
        let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js')}}";
    </script>
    <script>
       let transactionUrl = "{{ route('candidates.index') }}";
       // let invoiceUrl = "{{ url('admin/invoices') }}/";
    </script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{mix('assets/js/candidate/create-edit.js')}}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <?php }else{ ?>

    <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
    <?php } ?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
      <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ asset('js/currency.js') }}"></script>
    <script src="{{mix('assets/js/transactions/transactions.js')}}"></script>

@endpush
