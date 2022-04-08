<div class="row section_tab active" id="section_tab1">
    {{ Form::hidden('user_id',$user->id) }}
    {{ Form::hidden('details', 'user details') }}
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('first_name', __('First Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('first_name', isset($user)?$user->first_name:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('last_name', __('Last Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('last_name', isset($user)?$user->last_name:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('email', __('messages.company.email').':') }}<span class="text-danger">*</span>
        {{ Form::email('email', isset($user)?$user->email:null, ['class' => 'form-control', 'required']) }}
    </div>
   
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('phone', __('messages.user.phone').':') }}<span class="text-danger">*</span><br>
        {{ Form::tel('phone', isset($user)?$user->phone:null, ['class' => 'form-control','required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
        {{ Form::hidden('region_code',isset($user)?$user->region_code:null,['id'=>'prefix_code']) }}
        <br>
        
    </div>

   
    
   
    
 <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <span id="validationErrorsBox" class="text-danger"></span>
        <div class="row">
            <div class="pl-3">
                {{ Form::label('image', __('Profile Picture').':') }}
                <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                    {{ Form::file('image',['id'=>'logo','class' => 'd-none']) }}
                </label>
            </div>
            <div class="w-auto pl-3 mt-1">
            
                <img id='logoPreview' class="thumbnail-preview"
                     src="{{ $candidate['candidate_url'] }}">
            </div>
        </div>
    </div>
    
   <!-- Submit Field -->
   <div class="form-group col-sm-12">
     <div style="float:left">
        <a href="{{ route('candidates.index') }}" class="btn btn-secondary text-dark">{{__('messages.common.cancel')}}</a>
    </div>
     <div style="float:right">
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary']) }}
    </div>
    </div>

</div>






<!-- Tab 2 Form --->

<div class="row section_tab" id="section_tab2">
   
     <?php foreach($jobCategories as $jobCategory){ ?>
     <div class="col-xl-4 col-md-6 candidate-card">
    <div class="hover-effect-employee position-relative mb-5 border-hover-primary employee-border">
        <div class="employee-listing-details">
            <div class="d-flex employee-listing-description align-items-center justify-content-center flex-column">
                <div class="w-100">
                    <div class="text-left employee-data text-limit">
                        <span class="text-decoration-none text-color-gray">
                            <a href="{{ route('candidates.index') }}/{{ $candidate->id }}/edit?service_id={{$jobCategory->id}}" class="show-btn">
                                {{ Str::limit($jobCategory->name,30) }}
                            </a>
                            </span>
                    </div>
                    
                    <div style="float:left; width:100%;margin:5px 0px 10px 0px;">
                        <img  class="img-thumbnail thumbnail-preview" style="float:left;max-width:20%"
                             src="{{ $jobCategory->thumbnail }}">
                        <span class="text-decoration-none text-color-gray" style="float:right;width:75%">
                           {{ Str::limit($jobCategory->description,100) }}
                        </span>
                        
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
     
     <?php }?>
    

</div>




