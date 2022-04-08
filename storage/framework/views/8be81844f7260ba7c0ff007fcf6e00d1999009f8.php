<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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




<section class="service-inner-banner">

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class=" text-white inner-title">
                        <h5 class="text-uppercase title text "><?php echo e($JobCategoryDetail->name); ?> <?php echo e(__('web.helpers.service_details')); ?></h5>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="  inner-title">
                       <img src="<?php echo e($JobCategoryDetail->banner); ?>" alt="" class="img-fluid mx-auto d-block right">
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

       <?php if($serviceId == 2){ ?>

                        <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong><?php echo e(__('web.helpers.fill_your_details')); ?>  </strong>
                       </a>
                        <a  onclick="openCity(event, 'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong><?php echo e(__('web.helpers.add_your_profile_picture')); ?>  </strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong><?php echo e(__('web.helpers.your_experience')); ?>  </strong>
                        </a>

                        <a onclick="openCity(event, 'tab6','tabb6')"  id="tabb6" class="nav-link side_nav tablinks">
                           <strong><?php echo e(__('web.helpers.ad_info')); ?>  </strong>
                        </a>


   <?php  }else{ ?>

                        <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
                            <strong><?php echo e(__('web.helpers.fill_your_details')); ?></strong>
                       </a>
                        <a  onclick="openCity(event, 'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                            <strong><?php echo e(__('web.helpers.add_your_profile_picture')); ?> </strong>
                        </a>

                        <a onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                            <strong><?php echo e(__('web.helpers.your_experience')); ?> </strong>
                        </a>

                        <a onclick="openCity(event, 'tab4' ,'tabb4')" id="tabb4" class="nav-link side_nav tablinks">
                           <strong><?php echo e(__('web.helpers.extra_information')); ?></strong>
                        </a>

                        <a onclick="openCity(event, 'tab5','tabb5')"  id="tabb5" class="nav-link side_nav tablinks">
                           <strong><?php echo e(__('web.helpers.tell_us_who_you_are')); ?>  </strong>
                        </a>

                        <a onclick="openCity(event, 'tab6','tabb6')"  id="tabb6" class="nav-link side_nav tablinks">
                           <strong><?php echo e(__('web.helpers.ad_info')); ?></strong>
                        </a>
                         <a  onclick="openCity(event, 'tab7','tabb7')" id="tabb7" class="nav-link side_nav tablinks">
                           <strong><?php echo e(__('web.helpers.references')); ?> </strong>
                        </a>



   <?php  } ?>


   </div>

    <a style="margin: 20px 0;width:100%" href="<?php echo e(route('choose-another-service')); ?>" class="btn btn-secondary text-dark">
            <strong><?php echo e(__('web.helpers.cancel_and_select_another_service')); ?></strong>
     </a>
</div>
</div>

<?php } ?>

<div class="col-md-8">
<div class="row">

</div>
              <div class="rounded shadow bg-white p-4">
                           <?php echo e(Form::open(['route' => 'Helper.frontStore', 'files' => 'true', 'id' => 'createCandidatesForm'])); ?>

                           <?php echo e(Form::hidden('ownerId',$ownerId)); ?>

                           <?php echo e(Form::hidden('MultipleServices',$MultipleServices)); ?>

                            <?php echo $__env->make('web.services_forms.form_fields_'.$serviceId, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php echo e(Form::close()); ?>



                </div>

</div>



 </div>
 </div>
 </section>

<script>
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

  });




</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.webLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/services_forms/index.blade.php ENDPATH**/ ?>