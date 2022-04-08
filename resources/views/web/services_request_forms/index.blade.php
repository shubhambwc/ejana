

@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')

<body>
  <style>
  .sticky{
  top:0px;
  }
  .sticky #navbar{
  width: 100%;
  position: absolute;
  padding: 5%;
  }
  .sticky #navbar a.side_nav {
    width: 100%;
    margin: 0 0 15px 0px;
}
a.side_nav{font-size:14px;opacity:0.4}

a.side_nav.passed{
background-color:#1d4361;
color:#fff;
opacity:1
}
a.side_nav.active{
opacity:1
}
.sidebar_nav{
width:100%;
padding:0 5%;

}
.sidebar_nav_box a{
border-radius: 5px !important;
margin:10px 0px;
}
.sidebar_nav_box{
background-color: #EFEFEF;
width:100%;
padding:10px 15px;
border-radius: 10px !important;
}
#message3{
font-size:20px;
margin-bottom:20px;
text-align:center;
border-bottom: 1px solid #1d4361;
padding-bottom: 10px;
}
ul {padding-left:20px;}
li{margin:5px;}

.signature_pad{
border: 1px solid #ccc;

}
.signature_pad p{margin:0px;}
#colors_sketch{
width: 100%;
height: 200px;

}
.tools a{
color:#000;
}
.tools a.active{
color:#1cd3c1;
}
.tooltip_icon,
.form-group a{
font-size:20px;
margin:5px;
color: #1cd3c1 !important;
font-weight: bold;
cursor: pointer;
}
.select2-container--default .select2-selection--multiple,
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: 1px solid #dee2e6;
    border-radius: 10px;

}
.select2-dropdown{
border: 1px solid #dee2e6;
}
.other_box{margin-top:20px;display:none}
</style>



<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Congratulations, your registration has arrived with us!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Your registration will now be processed, we will contact you within 7 working days!We also sent you a confirmationemail. Click on the link to activate your account.And take a look at which advertisements we have found for you.</p>
        <p>(based on your advertisement, we have found 11 profiles with in 15 Kilometers according to yoursearch criteria.)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>


<section class="service-inner-banner">

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class=" text-white inner-title">
                        <h5 class="text-uppercase title text ">{{$JobCategoryDetail->name}} Service Request Details</h5>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="  inner-title">
                       <img src="{{ $JobCategoryDetail->banner }}" alt="" class="img-fluid mx-auto d-block right">
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="clearfix"></div>
  <section class="section">
<div class="row ">
<div class="col-md-3 hide">

  <div class="sidebar_nav">

<div class="sidebar_nav_box">

 <?php if(isset($serviceId) && $serviceId!=''){ ?>


     <?php if($serviceId == 1){ ?>
                       <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                       <a onclick="openCity(event, 'tab2', 'tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Child(ren) Details</strong>
                       </a>
                        <a  onclick="openCity(event,'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Reception information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')" id="tabb4" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab5','tabb5')"  id="tabb5" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab6','tabb6')" id="tabb6" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>

         <?php }elseif($serviceId == 2){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                       <a onclick="openCity(event, 'tab2', 'tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Child(ren) Details</strong>
                       </a>
                        <a  onclick="openCity(event,'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Reception information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')" id="tabb4" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab5','tabb5')"  id="tabb5" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab6','tabb6')" id="tabb6" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>


   <?php }elseif($serviceId == 5){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Garden Help information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>

     <?php }elseif($serviceId == 6){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Job Help information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>
   <?php }elseif($serviceId == 8){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Computer Help information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>
  <?php }elseif($serviceId == 3){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Homework supervisor information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>
  <?php }elseif($serviceId == 7){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Animal sitter information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>
  <?php }elseif($serviceId == 4){ ?>

                      <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Household information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>
  <?php  }else{ ?>

                        <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong>  Fill Your Details</strong>
                       </a>

                        <a  onclick="openCity(event,'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong>  Help information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong>  Additional information</strong>
                        </a>

                        <a onclick="openCity(event, 'tab4','tabb4')"  id="tabb4" class="nav-link side_nav tablinks">
                           <strong>  Your ad</strong>
                        </a>

                        <a  onclick="openCity(event, 'tab5','tabb5')" id="tabb5" class="nav-link side_nav tablinks">
                            <strong>  Add Your profile picture</strong>
                        </a>



   <?php  } ?>


   </div>

    <a style="margin: 20px 0;width:100%" href="{{ route('choose-another-service') }}" class="btn btn-secondary text-dark">
            <strong>Cancel and Select Another Service</strong>
     </a>
</div>
</div>

<?php } ?>

<div class="col-md-8">
<div class="row">

</div>
              <div class="rounded shadow bg-white p-4">
                           {{ Form::open(['route' => 'Helper.frontStore', 'files' => 'true', 'id' => 'createCandidatesForm']) }}
                           {{ Form::hidden('ownerId',$ownerId) }}
                           {{ Form::hidden('MultipleServices',$MultipleServices) }}
                            @include('web.services_request_forms.form_fields_'.$serviceId)
                           {{ Form::close() }}


                </div>

</div>



 </div>
 </div>
 </section>

<script>

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

  });


$(":input[type='text']").val('');
$("select").val('');
var allcheckBoxes = $("input[type='checkbox']");
allcheckBoxes.prop("checked", false);
$('input:radio[name="type"]').filter('[value="0"]').attr('checked', true);



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
    getCurrentMonth();

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
      // $('.calendar_right').show()
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

       //$('#'+dateId).removeClass('currentselected');

       }else{

       for(var i = 0; i < valueToPushNew.length; i++) {
            if(valueToPushNew[i].date == dateId) {
                valueToPushNew.splice(i, 1);
             break;
            }
        }
        $('#'+dateId).removeClass('selected')
        $('#'+dateId).removeClass('currentselected');
        //$('.calendar_right').hide()
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



       datesPreview += "<p style='margin:0px;'><b>Available as <?php echo $JobCategoryDetail->name;?>:</b></p>";
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

</script>

@endsection
