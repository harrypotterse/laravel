@extends('Back.LAYOUT.Add')
@section('title', 'اضافة موضوع جديد')
@section('content')
<div class="container-fluid"
  style="text-align: center;font-size: 161%;background: #011a25;width: 100%;padding: 4%;color: white;">
  نموذج بيانات لجدول قاعدة بيانات
  <img src="https://image.flaticon.com/icons/svg/1455/1455095.svg" width="100">
  <br>
  <br>
  <div class="container">
    @php
    $url_bace= route('portfolio.index');
    @endphp
    @include('Back.Source.link')
  </div>
</div>
<br>
<div class="container-fluid" style="height: 100%">
  <div class="container">
    <br>
    <br>
    <br>
    <br>
    <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      {{--  #####################################################################################  --}}
      <div class="row">
        <label>اللغة</label>
        <select class="browser-default" name="Language" id="Language">
          <option value="" disabled selected>Choose your option</option>
          <option value="English">English</option>
          <option value="Arabic">Arabic</option>
        </select>
        @if ($errors->has('Language'))
        <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Language') }}</span>
        @endif
      </div>
      <div class="row">
        <label>الاقسام</label>
        <select class="browser-default" name="sections_prog" id="sections_prog">
          
        </select>
        @if ($errors->has('sections_prog'))
        <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('sections_prog') }}</span>
        @endif
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>File</span>
          <input type="file" name="Image" value="{{Request::old('Image')}}">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
        @if ($errors->has('Image'))
        <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Image') }}</span>
        @endif
      </div>
      {{--  #####################################################################################  --}}

      <input type="submit" style="background: #011a25;" class="btn btn-primary btn-large btn-block"
        value="اضافة موضوع جديد" />
    </form>

    @if(session()->has('alert-success'))
    <div class="alert alert-success" style="width: 98%;">
      {{ session()->get('alert-success') }}
    </div>
    @endif
    <div id="targetLayer"></div>
  </div>
</div>
@endsection
@push('js')
<script>

  $(document).ready(function () {
    $('#Language').on('change', function() {
      var Language= this.value; 
      $.ajax({
        url: "{{Request::root()}}/admin/ajax/lang/"+Language,
        method: "POST",
        data: {Language: Language},
        beforeSend: function () {
        },
        success: function (data) {     
       $('#sections_prog').html(data);
        }
    });
    return false;
    });
  });
</script>
@endpush