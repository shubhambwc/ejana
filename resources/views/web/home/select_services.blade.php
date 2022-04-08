@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')
<style>
.card-body {
    padding: 20px 0;
    cursor: grab;

}
.card-columns .card{opacity:0.6;}
.card-columns .card:hover{
opacity:1;
}
.card-columns .card,
.card-columns .card:hover{
height:auto;min-height:165px;
}

</style>
<script>
function selectService(serviceID){
 if ($('#isMultipleServices').is(":checked"))
{
  $('#is_multiple_services').val(1)
}else{
  $('#is_multiple_services').val(0)
}

var form = document.getElementById(serviceID);
form.submit();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<section class="inner-banner">

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">{{$heading}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
    <div class="container">


        @include('flash::message')


       <div style="padding:10px 0px">
       <label class="form-check-label" style="padding:10px 0px">{{$subheading}}</label>
       <input  type="checkbox" id="isMultipleServices">
       </div>




     <div class="card-columns">
             <?php foreach($jobCategories as $jobCategory){
             if($jobCategory->is_featured){
             ?>
             {{ Form::open(array('route' => 'register-user','id' =>$jobCategory->id)) }}
             <input type="hidden"  name="service_id" value="{{$jobCategory->id}}">
             <input type="hidden"  name="is_multiple_services" id="is_multiple_services" value="">
            <div class="col-lg-12 card" onClick="selectService({{$jobCategory->id}})">
                <div class="row card-body">

                    <div class="col-md-3 col-sm-3 col-xs-12 mx-auto">
                            <img src="{{ $jobCategory->thumbnail }}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class=" txt-center">
                            <h5 class="f-18">{{ $jobCategory->name }}</h5>
                            <p class="text-muted mb-0"> {{ Str::limit($jobCategory->description,40) }}</p>
                        </div>
                    </div>

                        </div>
            </div>
            {{ Form::close() }}

        <?php } }?>
        </div>




        </div>
    </section>
 </div>
@endsection
