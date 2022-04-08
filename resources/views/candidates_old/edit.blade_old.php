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
                <a href="{{ route('candidates.index') }}"
                   class="btn btn-primary form-btn float-right">{{ __('messages.common.back') }}</a>
            </div>
        </div>
        
        <style>
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
        

         #additional_lang{float: left;width: 100%;}
        .additional_lang_row{float: left;width: 100%;
        border-top: 1px solid #e4e6fc;
        padding: 10px 0px;
        }
          
       </style>
       <script>
        function selectTab(tabID){
        $('.section-body-tab').removeClass('active')
        $('#'+tabID).addClass('active')
        
        $('.section_tab').removeClass('active')
        $('#section_'+tabID).addClass('active')
        
        }
        
       
        $(document).ready(function(){
        
        
         $('#additional_child').on('click','.remove-child',function(){
                
        var id = this.id;
        // Remove <div> with id
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
        
        });
           
        </script> 
        
        <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>
        <div class="section-body section-body-section">
        <div class="section-body-tab active" id="tab1" onClick="selectTab('tab1')">User Details</div>
        <div class="section-body-tab" id="tab2" onClick="selectTab('tab2')" >Kin(s) Information</div>
        <div class="section-body-tab " id="tab3"  onClick="selectTab('tab3')">Reception Information</div>
        <div class="section-body-tab" id="tab4"  onClick="selectTab('tab4')">Additional Information</div>
        <div class="section-body-tab" id="tab5"  onClick="selectTab('tab5')">Ad's Information</div>
        </div>
        <?php }else{ ?> 
        
        <div class="section-body section-body-section">
        <div class="section-body-tab active" ids="tab1" onClick="selectTab('tab1')">Profile Information</div>
        <div class="section-body-tab" id="tab2" onClick="selectTab('tab2')" >Manage Services</div>
        </div>
        
        <?php }?> 
        <div class="section-body section-body-section with_border">
            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    {{ Form::model($user, ['route' => ['candidates.update', $candidate->id], 'method' => 'put','files' => 'true', 'id' => 'editCandidatesForm']) }}

                     <?php if(isset($_REQUEST['service_id']) && $_REQUEST['service_id']!=''){ ?>
                      
                       @include('candidates.edit_fields_'.$_REQUEST['service_id'])
                    <?php }else{ ?> 
                       {{ Form::hidden('service_id',null) }}
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
    
    
    <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
    
@endpush
