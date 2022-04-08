@extends('layouts.app')
@section('title')
    {{ $pageTitle }}
@endsection
@push('css')
    <link href="{{ asset('assets/css/summernote.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('company.index') }}"
                   class="btn btn-primary form-btn float-right">{{ __('messages.common.back') }}</a>
            </div>
        </div>


        <style>

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

        <script>




       function selectRootTab(tabID){
        $('.section-body-tab').removeClass('active')
        $('#'+tabID).addClass('active')

        $('.section_tab').removeClass('active')
        $('#section_'+tabID).addClass('active')

        }



        function selectTab(tabID){

         var nextTab = parseInt(tabID)+1;
         $(".tabcontent").hide()
         $('.section-body-tab').removeClass('active')
         $('#tabb'+nextTab).addClass('active')
         $("#tab"+nextTab).show();
         $(window).scrollTop(0);
         PreLoadCalendar();
     }

     function validateTab(tabId){
      selectTab(tabId);
      PreLoadCalendar();
    }




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
 console.log(valueToPush1);
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
      console.log(valueToPush1);
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
    console.log(valueToPush1);
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
    console.log(valueToPush1);
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
    getCurrentMonth()
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







        $( function() {


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

  $('.preference_other_name').change(function() {
    if($(this).is(':checked')){
        $('#preference_other').show();
   } else{
        $('#preference_other').hide();
     }
    });

          $('input[type=radio][name=need_extra_care]').change(function() {
    	if (this.value == 1) {
    		$('#need_extra_care_box').show();
    	}else{
    		$('#need_extra_care_box').hide();
    	}

    });

     $('input[type=radio][name=extra_chores]').change(function() {
    	if (this.value == 1) {
    		$('#extra_chores_yes_box').show();
    	}else{
    		$('#extra_chores_yes_box').hide();
    	}

    });



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




         $(document).on('change', '.isServiceActive', function (event) {
  var jobCategoryId = $(event.currentTarget).data('id');
  var userId = $(event.currentTarget).data('user-id');
  //alert(jobCategoryId+':'+userId)
  changeServiceIsActive(jobCategoryId,userId);
});

window.changeServiceIsActive = function (jobCategoryId,userId) {
let companiesUrl = "{{ route('company.index') }}";
  $.ajax({
    url: companiesUrl + '/' + jobCategoryId + '/'+ userId + '/service-is-active',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};





        $('#additional_child').on('click','.remove-child',function(){
            var id = this.id;
            $("#child_" + id).remove();
      });


        $("#AddNewChild").click(function(){


         var addChildC = $('.additional_child_row').length+1;
         $('#total_child').val(addChildC)
         var newChildHtml = '<div class="additional_child_row" id="child_'+addChildC+'" style="display: inline-flex;">';
          newChildHtml +='<div class="form-group col-xl-3 col-md-3 col-sm-12"><label for="child_name">Child Name:</label>';
         newChildHtml +='<input class="form-control" name="child['+addChildC+'][name]" type="text">';
         newChildHtml +='</div>';

         newChildHtml +='<div class="form-group col-xl-3 col-md-3 col-sm-12">';
         newChildHtml +='<label for="child_gender">Gender:</label><br>';
         newChildHtml +='<input checked="checked" name="child['+addChildC+'][gender]" type="radio" value="0"> Male';
         newChildHtml +='&nbsp;&nbsp;&nbsp;';
         newChildHtml +='<input name="child['+addChildC+'][gender]" type="radio" value="1"> Female';
    	 newChildHtml +='</div>';


    	 newChildHtml +='<div class="form-group col-xl-3 col-md-3 col-sm-12">';
         newChildHtml +='<label for="child_dob">Date of Birth:</label>';
         newChildHtml +='<input class="form-control birthDate" required="" id="birthDate" autocomplete="off" name="child['+addChildC+'][dob]" type="text">';
    	 newChildHtml +='</div>';
    	 newChildHtml +='<div class="form-group col-xl-3 col-md-3 col-sm-12">';
         newChildHtml +='<a id="'+addChildC+'" href="javascript:void(0)" class="btn btn-primary remove-child" style="margin-top:30px;">Remove Child</a>';
    	 newChildHtml +='</div></div>';

        $('#additional_child').append(newChildHtml);
        $('.birthDate').datetimepicker(DatetimepickerDefaults({
    format: 'YYYY-MM-DD',
    useCurrent: true,
    sideBySide: true,
    maxDate: new Date()
  }));
        });







                    $('#additionalWishLang').on('click','.remove-wlang',function(){
                     var id = this.id;
                       $("#add_wish_lang" + id).remove();
                    });


                    $("#AddNewWishLanguage").click(function(){


                     var addLang = $('.additional_wlang_row').length+1;
                     var newLangHtml = '<div  class="additional_wlang_row row" id="add_wish_lang'+addLang+'">';
                     newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="lang_name">Langauge</label>';
                     newLangHtml +='<select class="form-control select-box" required=""  name="Other_lang['+addLang+'][name]">';
                     newLangHtml +='<option value="">Select Langauge</option><option value="1">English</option><option value="2">   French</option><option value="3">German</option><option value="4">Gujarati</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Nepali</option><option value="8">Russian</option><option value="9">Dutch</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='</div>';



                     newLangHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newLangHtml +='<a id="'+addLang+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove-wlang" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newLangHtml +='</div>';

                     newLangHtml +='</div>';


                    $('#additionalWishLang').append(newLangHtml);
                    $('#additionalWishLang .select-box').select2();

                   });


                   $("#AddNewExtraCareChild").click(function(){


                     var addChild = $('.additional_need_extra_care_box').length+1;
                     var newLangHtml = '<div  class="additional_need_extra_care_box" id="additional_need_extra_care_box'+addChild+'">';
                     newLangHtml +='<div class="row"><div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="need_extra_care_child">Like what</label>';
                     newLangHtml +='<input class="form-control" name="need_extra_care_child['+addChild+'][like_what]" type="text">';
                     newLangHtml +='</div></div>';

                     newLangHtml +='<div class="row"><div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="need_extra_care_child">The name of the child</label>';
                     newLangHtml +='<input class="form-control" name="need_extra_care_child['+addChild+'][name]" type="text">';
                     newLangHtml +='</div>';


                     newLangHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newLangHtml +='<a id="'+addChild+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove_additional_need_extra_care_box" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newLangHtml +='</div></div>';

                     newLangHtml +='</div>';


                    $('#additional_need_extra_care_box').append(newLangHtml);

                   });

                    $('#additional_need_extra_care_box').on('click','.remove_additional_need_extra_care_box',function(){
                     var id = this.id;
                       $("#additional_need_extra_care_box" + id).remove();
                    });








                   $( "#exp_range" ).slider({
		range: true,
		min: 0,
		max: 25,
		values: [ 1, 5 ],
		slide:function(event, ui){
			$("#minimum_exp").val(ui.values[0]);
			$("#maximum_exp").val(ui.values[1]);
			$("#span_minimum_exp").text(ui.values[0]);
			$("#span_maximum_exp").text(ui.values[1]);

		}
	});

	$( "#age_range" ).slider({
		range: true,
		min: 21,
		max: 60,
		values: [ 22, 35 ],
		slide:function(event, ui){
			$("#minimum_age").val(ui.values[0]);
			$("#maximum_age").val(ui.values[1]);
			$("#span_minimum_age").text(ui.values[0]);
			$("#span_maximum_age").text(ui.values[1]);

		}
	});

	$('#additional_lang').on('click','.remove-lang',function(){

        var id = this.id;
        // Remove <div> with id
        $("#add_lang" + id).remove();
        });


        $("#AddNewLang").click(function(){


         var addLang = $('.additional_lang_row').length+1;
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
         newLangHtml +='<a id="'+addLang+'" href="javascript:void(0)" class="btn btn-primary remove-lang" style="margin-top: 30px;">Remove Langauge</a>';
         newLangHtml +='</div>';

         newLangHtml +='</div>';


        $('#additional_lang').append(newLangHtml);

        });






    $('#experience_level').on('click','.remove-exper',function(){

        var id = this.id;
        // Remove <div> with id
        $("#add_exper" + id).remove();
        });


        $("#AddNewExper").click(function(){


         var addExper = $('.additional_lang_row').length+1;
         $('#total_exper').val(addExper)
         var newExperHtml = '<div class="additional_lang_row" id="add_exper'+addExper+'" style="display: inline-flex;">';
         newExperHtml +='<div class="form-group col-xl-4 col-md-4 col-sm-12"><label for="exper_level">Select experience level</label>';
         newExperHtml +='<select class="form-control  select-box" required=""  name="Experience['+addExper+'][name]">';
         newExperHtml +='<option value="">Select Experience Level</option><option value="7"><1 year of experience</option><option value="1">1 year of experience</option><option value="2">2 year of experience</option><option value="3">3 year of experience</option><option value="4">4 year of experience</option><option value="5">5 year of experience</option>';
         newExperHtml +='</select>';
         newExperHtml +='</div>';

         newExperHtml +='<div class="form-group col-xl-4 col-md-4 col-sm-12"><label for="looking_for">I am looking for homework guidance</label>';
         newExperHtml +='<select  class="form-control  select-box" required="" name="Experience['+addExper+'][level]">';
         newExperHtml +='<option value="">Select homework guidance</option><option value="2">Arabic</option><option value="1">Geography</option><option value="4" selected="selected">Bassisschool Group 3</option><option value="3">Bassisschool Group 4</option> <option value="5">Bassisschool Group 5</option><option value="6">Bassisschool Group 6</option> <option value="7">Bassisschool Group 8</option> <option value="8">German </option> <option value="9">English </option><option value="10">Philosphy </option> <option value="11">French </option> <option value="12">History </option> <option value="13">Music </option> <option value="14">Italian </option> <option value="14">Italian </option> <option value="15">Korean </option> <option value="16">Physics </option> <option value="17">Dutch </option> <option value="17">Dutch </option> <option value="18">portuguese </option> <option value="19">Chemistry </option> <option value="20">Spanish </option> <option value="21">Mathematics </option> <option value="22">Diffrently   </option>' ;
         newExperHtml +='</select>';
         newExperHtml +='</div>';

          newExperHtml +='<div class="form-group col-xl-3 col-md-3 col-sm-12"><label for="lang_name">Langauge Level</label>';
         newExperHtml +='<select  class="form-control  select-box" required="" name="Other_lang['+addExper+'][level]">';
         newExperHtml +='<option value="">Select Langauge Level</option><option value="1">Average</option><option value="2">Beginner</option><option value="3" selected="selected">Expert</option>';
         newExperHtml +='</select>';
         newExperHtml +='</div>';

         newExperHtml +='<div class="form-group col-xl-1 col-md-1 col-sm-12">';
         newExperHtml +='<a id="'+addExper+'" href="javascript:void(0)" class="btn btn-primary remove-exper" style="margin-top: 30px;">Remove Box</a>';
         newExperHtml +='</div>';

         newExperHtml +='</div>';


        $('#experience_level').append(newExperHtml);

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







        });






        </script>

        <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){
         $serviceId = $_REQUEST['service_id'];
        ?>


        <div class="section-body section-body-section">



     <?php if($serviceId == 1){ ?>
                       <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                       <div onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  {{__('web.helpers.child_details')}}</strong>
                       </div>
                        <div  onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.reception_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)" id="tabb4" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(4)"  id="tabb5" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>

                        <div  onclick="selectTab(6)" id="tabb7" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>


         <?php }elseif($serviceId == 2){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                       <div onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  {{__('web.helpers.child_details')}}</strong>
                       </div>
                        <div  onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.reception_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)" id="tabb4" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(4)"  id="tabb5" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(6)" id="tabb7" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>


   <?php }elseif($serviceId == 5){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  Garden {{__('web.helpers.help_information')}}</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>

     <?php }elseif($serviceId == 6){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  Job {{__('web.helpers.help_information')}}</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>
   <?php }elseif($serviceId == 8){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  Computer {{__('web.helpers.help_information')}}</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>
  <?php }elseif($serviceId == 3){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  Homework supervisor information</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>

  <?php }elseif($serviceId == 7){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  Animal sitter information</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>
  <?php }elseif($serviceId == 4){ ?>

                      <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  Household information</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>
  <?php  }else{ ?>

                        <div onclick="selectTab(0)" id="tabb1" class="section-body-tab active">
                            <strong>  {{__('web.helpers.profile_information')}}</strong>
                       </div>

                        <div  onclick="selectTab(1)" id="tabb2" class="section-body-tab">
                            <strong>  {{__('web.helpers.help_information')}}</strong>
                        </div>

                        <div onclick="selectTab(2)" id="tabb3" class="section-body-tab">
                            <strong>  {{__('web.helpers.additional_information')}}</strong>
                        </div>

                        <div onclick="selectTab(3)"  id="tabb4" class="section-body-tab">
                           <strong>  {{__('web.helpers.requestor_add')}}</strong>
                        </div>

                        <div  onclick="selectTab(4)" id="tabb5" class="section-body-tab">
                            <strong>  {{__('web.helpers.profile_picture')}}</strong>
                        </div>
                        <div  onclick="selectTab(5)" id="tabb6" class="section-body-tab">
                            <strong>  {{__('web.helpers.contract')}}</strong>
                        </div>



   <?php  } ?>
   </div>
   <?php  }else{ ?>

        <div class="section-body section-body-section">
        <div class="section-body-tab active" id="tab1" onClick="selectRootTab('tab1')">{{__('web.helpers.profile_information')}}</div>
        <div class="section-body-tab" id="tab2" onClick="selectRootTab('tab2')" >{{__('web.helpers.manage_services')}}</div>
        <div class="section-body-tab" id="tab3" onClick="selectRootTab('tab3')" >{{__('web.helpers.contact_moments')}}</div>
        <div class="section-body-tab" id="tab4" onClick="selectRootTab('tab4')" >{{__('web.helpers.bank_transactions')}}</div>
         <div class="section-body-tab" id="tab5" onClick="selectRootTab('tab5')" >{{__('web.helpers.job_applications')}}</div>
        </div>

        <?php }?>
        <div class="section-body section-body-section with_border">
            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    {{ Form::model($company, ['route' => ['company.update'], 'method' => 'post', 'files' => 'true', 'id' => 'editCompanyForm']) }}
                     {{ Form::hidden('company_id',$company->id) }}
                     {{ Form::hidden('user_id',$user->id) }}
                    <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>



                       {{ Form::hidden('service_id',$_REQUEST['service_id']) }}
                       @include('companies.edit_fields_'.$_REQUEST['service_id'])
                    <?php }else{ ?>
                       @include('companies.edit_fields')
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
    let countryId = '{{$company->user->country_id}}';
    let stateId = '{{$company->user->state_id}}';
    let cityId = '{{$company->user->city_id}}';
    let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js')}}";
</script>

    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{mix('assets/js/companies/create-edit.js')}}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
     <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>

    <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <?php }else{ ?>

    <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
    <?php } ?>

@endpush
