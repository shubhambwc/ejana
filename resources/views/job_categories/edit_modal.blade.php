<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.job_category.edit_job_category') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(['id' => 'editForm','files'=>true]) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                {{ Form::hidden('jobCategoryId',null,['id'=>'jobCategoryId']) }}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('name',__('messages.job_category.name').':') }}<span class="text-danger">*</span>
                        {{ Form::text('name', null, ['class' => 'form-control','required','id' => 'editName' ]) }}
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('description',__('messages.job_category.description').':') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control','id' => 'editDescription', 'rows' => '5']) }}
                    </div>
                    
                    <div class="form-group col-sm-12">
                        {{ Form::label('benifits',__('messages.job_category.benifits').':') }}
                        {{ Form::textarea('benifits', null, ['class' => 'form-control','id' => 'editBenifits', 'rows' => '5']) }}
                    </div>
                    
                    
                    <div class="form-group col-sm-12">
                    <div class="row">
                    <div class="px-3">
                        <span id="serviceThumbnailValidationErrorsBox2" class="text-danger d-none"></span>
                        <div class="form-group">
                            {{ Form::label('service_pictures', __('Thumbnail').':') }}
                            <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                                {{ Form::file('image',['id'=>'serviceThumbnail2','class' => 'd-none']) }}
                            </label>
                        </div>
                    </div>
                    <div class="pl-3 w-auto mt-1">
                        <img id='serviceThumbnailPreview2' class="img-thumbnail thumbnail-preview"
                             src="{{ asset('assets/img/infyom-logo.png') }}">
                    </div>
                    </div>
                </div>
                
                <div class="form-group col-sm-12">
                    <div class="row">
                    <div class="px-3">
                        <span id="serviceThumbnailValidationErrorsBox2" class="text-danger d-none"></span>
                        <div class="form-group">
                            {{ Form::label('service_pictures', __('Banner').':') }}
                            <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                                {{ Form::file('banner',['id'=>'serviceBanner2','class' => 'd-none']) }}
                            </label>
                        </div>
                    </div>
                    <div class="pl-3 w-auto mt-1">
                        <img id='serviceBannerPreview2' class="img-thumbnail thumbnail-preview"
                             src="{{ asset('assets/img/infyom-logo.png') }}">
                    </div>
                    </div>
                </div>
                
                
                    <div class="form-group col-sm-4 mb-0 pt-1">
                        <label>{{ __('messages.job_category.is_featured').':' }}</label>
                        <label class="custom-switch pl-0 col-12">
                            <input type="checkbox" name="is_featured" class="custom-switch-input"
                                   value="1" id="editIsFeatured">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" id="btnEditCancel" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}
                    </button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
