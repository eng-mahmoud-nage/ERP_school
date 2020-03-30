@inject('stages', 'App\StudentAffairs\Stage')

@extends('index')

@section('css')

@endsection
@section('title')

@if(!empty($record) && $record['name_'.app()->getLocale()] == null)
{{__('lang.new_level')}}
@else
{{__('lang.edit_level')}}

@endif
@endsection
@section('content')

<div class="row">
  <div class="col-sm-12">
    {{-- <div class="content-header">Add New User</div> --}}
  </div>
</div>
<!-- Input Validation start -->
<section class="input-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
      
        <div class="card-content">
          <div class="card-body">

            @if(!empty($record) && $record->name_ar == null)
                   {{-- @dd('create') --}}
                   <div class=" content-header col-lg-12 @if(app()->getLocale() == 'ar') text-right @endif">{{__('lang.new_level')}}</div><br>
                    <form class="form-horizontal"  method="POST" action="{{route('level.store')}}">

                @else
                   {{-- @dd('update') --}}
                   <div class=" content-header col-lg-12 @if(app()->getLocale() == 'ar') text-right @endif">{{__('lang.edit_level')}}</div><br>
                    <form class="form-horizontal"  method="POST" action="{{route('level.update', $record->id)}}">

                @endif


            @csrf
              <div class="row">

                @if($supersetting->lang == "English" || $supersetting->lang == "Both" )
              
                <div class="col-lg-6 col-md-12">
                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                  <h5>{{__('lang.name_en')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls">
                      <input value="{{$record->name_en}}" type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror " required data-validation-required-message="This field is required">
                      @if(session('danger'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{session('danger')}}</strong>
                      </span>
                      @endif
                      @error('name_en')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>
                @endif

                <div class="col-lg-6 col-md-12">
                  @if($supersetting->lang == "Arabic" || $supersetting->lang == "Both" )
                    <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                      <h5>{{__('lang.name_ar')}}<span class="required" style="color:red">*</span></h5>
                      <div class="controls mb-1">
                      <input value="{{$record->name_ar}}" type="text" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror " required data-validation-required-message="This field is required">
                      @if(session('danger'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{session('danger')}}</strong>
                      </span>
                      @endif
                      @error('name_ar')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    </div>
                    @endif
                </div>
              </div>
              <div class="row">

                <div class="col-lg-6 col-md-12">     
                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.std_cost')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls mb-1">
                    <input value="{{$record->cost}}" type="number" name="cost" class="form-control @error('cost') is-invalid @enderror" required data-validation-required-message="This field is required">
                    @error('cost')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  </div>
                  

                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.st_instalment')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->st_instalment}}" type="number" name="st_instalment" class="form-control  @error('st_instalment') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('st_instalment')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.nd_instalment')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->nd_instalment}}" type="number" name="nd_instalment" class="form-control  @error('nd_instalment') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('nd_instalment')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.rd_instalment')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->rd_instalment}}" type="number" name="rd_instalment" class="form-control  @error('rd_instalment') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('rd_instalment')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.th_instalment')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->th_instalment}}" type="number" name="th_instalment" class="form-control @error('th_instalment') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('th_instalment')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                </div>
                {{-- end left side --}}
                <div class="col-lg-6 col-md-12">
                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.stage')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls">
                      <select name="stage_id" data-placeholder="@if($stages->where('id', $record->stage_id)->first()) {{$stages->where('id', $record->stage_id)->pluck('name_'.app()->getLocale())[0]}} @else {{__('lang.select_stage')}} @endif">
                        @foreach ($stages->all() as $stage)
                          <option value="{{$stage->id}}">{{$stage['name_'.app()->getLocale()]}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.st_inst_date')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->st_inst_date}}" type="date" name="st_inst_date" class="form-control  @error('st_inst_date') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('st_inst_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  
                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.nd_inst_date')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->nd_inst_date}}" type="date" name="nd_inst_date" class="form-control @error('nd_inst_date') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('nd_inst_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  
                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.rd_inst_date')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->rd_inst_date}}" type="date" name="rd_inst_date" class="form-control @error('rd_inst_date') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('rd_inst_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  
                  <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                    <h5>{{__('lang.th_inst_date')}}<span class="required" style="color:red"></span></h5>
                    <div class="controls">
                      <input value="{{$record->th_inst_date}}" type="date" name="th_inst_date" class="form-control @error('th_inst_date') is-invalid @enderror" data-validation-required-message="This field is required">
                      @error('th_inst_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>
                
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group @if(app()->getLocale() == 'ar') text-right @endif">
                      @if(!empty($record) && $record['name_'.app()->getLocale()] == null)
                      <button type="submit" class="btn btn-success">{{__('lang.submit')}} <i class="fa fa-thumbs-o-up position-right"></i></button>
                  @else
                  @method("PUT")
                  <button type="submit" class="btn btn-success">{{__('lang.edit')}} <i class="fa fa-thumbs-o-up position-right"></i></button>
                  @endif
                      <button type="reset" class="btn btn-danger">{{__('lang.reset')}} <i class="fa fa-refresh position-right"></i></button>
                    </div>
                  </div>

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

</script>
<!-- Input Validation end -->

@endsection