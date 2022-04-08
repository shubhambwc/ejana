@php
$settings = settings();
@endphp
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title> Ejana-Job Portal</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style1.css')}}" />

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
            
            $( ".birthDate" ).datepicker({  maxDate: new Date });
            $( "#service_date_time" ).datetimepicker({
                        format: 'YYYY-MM-DD HH:mm:ss',
                        useCurrent: true,
                        sideBySide: true,
                        minDate: new Date()
             });

          $('#availableAt').datetimepicker({
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    sideBySide: true,
                    minDate: new Date()
             }); 


           $('#when_need').datetimepicker({
                        format: 'YYYY-MM-DD',
                        useCurrent: true,
                        sideBySide: true,
                       minDate: new Date()
                 });

          } );


          // $('.select-box').select2({
          //   'width': '100%'
          // });
          
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
                            float: left;width: 100%;}
                        .additional_lang_row{float: left;width: 100%;
                        border-top: 1px solid #e4e6fc;
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

<script type="text/javascript">


      function selectTab(tabID){
        $('.section-body-tab').removeClass('active')
        $('#'+tabID).addClass('active')
        
        $('.section_tab').removeClass('active')
        $('#section_'+tabID).addClass('active')
        
        }
            

    var previous = ""
    function openCity(evt, cityName, id=false){

        if (previous != ""){
        document.getElementById(previous).style.backgroundColor = "#1cd3c1";
    }
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");

        for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
               
              }
              document.getElementById(cityName).style.display = "block";
            
              evt.currentTarget.className+= "active";
              evt.currentTarget.style.backgroundColor = "#1d4361"
              if (id != false){
                document.getElementById(id).style.backgroundColor = "#1d4361"
                previous= id
              }
              
            
        }
         
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/captcha/jquery.clientsidecaptcha.js') }}" type="text/javascript"></script>
    
</head>


<body>
    <!-- Loader -->


    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        @include('web.webLayout.header')
    </header>

    <!--end header-->
    <!-- Navbar End -->

    <!-- Start Home -->


    <div class="main-content">
        @yield('content')
    </div>








    <!--   footer -->
    <footer class="footer">
        @include('webLayout.homefooter')
    </footer>



    <!-- javascript -->
    <script src="{{asset('assets/js/jquery.min.js' )}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js' )}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js' )}}"></script>
  <!--   <script src="{{asset('assets/js/plugins.js' )}}"></script> -->

    <!-- selectize js -->
    <script src="{{asset('assets/js/selectize.min.js' )}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js' )}}"></script>

    <script src="{{asset('assets/js/owl.carousel.min.js' )}}"></script>
    <script src="{{asset('assets/js/counter.int.js' )}}"></script>

    <script src="{{asset('assets/js/app.js' )}}"></script>
    <script src="{{asset('assets/js/app1.js' )}}"></script>
    <script src="{{asset('assets/js/home.js' )}}"></script>




     <!-- These Script for Append HTML -->
                 <script>

                    $('#additional_lang').on('click','.remove-lang',function(){            
                     var id = this.id;
                    $("#add_lang" + id).remove();
                    });
                
                    
                    $("#AddNew").click(function(){

                    
                     var addLang = $('.additional_lang_row').length+1;
                     $('#total_child').val(addLang)
                     var newLangHtml = '<div class="additional_lang_row" id="add_lang'+addLang+'" style="display: inline-flex;">';
                     newLangHtml +='<div class="form-group col-xl-5 col-md-5 col-sm-12"><label for="lang_name">Other Langauge Name</label>';
                     newLangHtml +='<select class="form-control select-box" required=""  name="Other_lang[Other_lang][name]">';
                     newLangHtml +='<option value="">Select Langauge</option><option value="1">English</option><option value="2">   French</option><option value="3">German</option><option value="4">Gujarati</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Nepali</option><option value="8">Russian</option><option value="9">Dutch</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='</div>';     
                    
                     newLangHtml +='<div class="form-group col-xl-4 col-md-4 col-sm-12"><label for="lang_name">Langauge Level</label>';
                     newLangHtml +='<select  class="form-control select-box" required="" name="Other_lang['+addLang+'][level]">';
                     newLangHtml +='<option value="">Select Langauge Level</option><option value="2">Average</option><option value="1">Beginner</option><option value="4" selected="selected">Bilingual</option><option value="3">Fluent</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='</div>'; 
                    
                     newLangHtml +='<div class="form-group col-xl-2 col-md-2 col-sm-12">';
                     newLangHtml +='<a id="'+addLang+'" href="javascript:void(0)" class="btn btn-primary remove-lang" style="margin-top: 10px;">Remove Langauge</a>';
                     newLangHtml +='</div>'; 
                    
                     newLangHtml +='</div>';

                
                    $('#additional_lang').append(newLangHtml);

                });

                    
                   
              // add language ended 
                       
    </script>

   <!-- Script for tabs of forms -->
  
          <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
          <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
          <script src="{{ asset('assets/js/candidate/front/create-helper.js') }}"></script>
          <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
          <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
          <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>

        <!--    <script src="{{ asset('assets/js/select2.min.js') }}"></script> -->


    <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
    <script>
        
         let phoneNo = "{{ old('region_code').old('phone') }}";
    </script>


    <script>
        



   
     $('#validateTab1').on('click', function () {
         var errorCount = 0;
         $('#tab1').find('input,select').each(function(){
         if ($(this).val() ==='' || $(this).val() === null){
            this.style.border = "1px solid red"
            errorCount = errorCount+1
         }
        });
    
     if(errorCount == 0){   
      openCity(event, "tab2", "tabb2");
    }
  });
  
  
  $('#validateTab2').on('click', function () {
         var errorCount = 0;
         $('#tab2').find('input,select').each(function(){
         if ($(this).val() ==='' || $(this).val() === null){
            this.style.border = "1px solid red"
            errorCount = errorCount+1
         }
        });
   
     if(errorCount == 0){   
      openCity(event, "tab3", "tabb3");
    }
  });

  
 $('#validateTab3').on('click', function () {
         var errorCount = 0;
         $('#tab3').find('input,select').each(function(){
         if ($(this).val() ==='' || $(this).val() === null){
            this.style.border = "1px solid red"
            errorCount = errorCount+1
         }
        });
     if(errorCount == 0){   
      openCity(event, "tab4", "tabb4");
    }
  });


 $('#validateTab4').on('click', function () {
         var errorCount = 0;
         $('#tab4').find('input,select').each(function(){
         if ($(this).val() ==='' || $(this).val() === null){
            this.style.border = "1px solid red"
            errorCount = errorCount+1
            console.log('if')
            console.log(this)
         }else{
            console.log('else')
            console.log(this)
         }
        });
        console.log(errorCount)
     if(errorCount == 0){   
      openCity(event, "tab5", "tabb5");
      
    }


  });


   $('#validateTab5').on('click', function () {
         var errorCount = 0;
         $('#tab5').find('input,select').each(function(){
         if ($(this).val() ==='' || $(this).val() === null){
            this.style.border = "1px solid red"
            errorCount = errorCount+1
         }
        });
     if(errorCount == 0){   
      openCity(event, "tab6", "tabb6");
    }
  });


  $('#validateTab6').on('click', function () {
         var errorCount = 0;
         $('#tab6').find('input,select').each(function(){
         if ($(this).val() ==='' || $(this).val() === null){
            this.style.border = "1px solid red"
            errorCount = errorCount+1
         }
        });
     if(errorCount == 0){   
      openCity(event, "tab7", "tabb7");
    }
  });
















    </script>
</body>

</html>