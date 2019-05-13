@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/select2.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="post-prev-title">
                <h3>Concerns</h3>
            </div>
            <hr class="mt-3">
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h5 class="text-oswald mb-0">Update Concern</h5>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label class="select2Label">Add Notes</label>
                            <form id="comment-form" method="post" action="{{ route('admin.concern.update' , $concern->id) }}" >
                                {{ csrf_field() }}  {{method_field('PUT')}}
                                <textarea type="text" class="form-control" name="comment"></textarea>
                                <div class="row" style="padding: 0 10px 0 10px;">
                                  <div class="form-group">
                                      <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                                  </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
    $('.mdb-select').material_select();
    $('.multiple-select').select2();

    $('.multiple-select').select2().val({!! json_encode(old('admins')) !!}).trigger('change');
  
    $('.datepicker').pickadate({
        max: new Date(),
        formatSubmit: 'yyyy-mm-dd',
        hiddenPrefix: 'formatted_',
        selectYears: 50
    });

</script>
@endsection
