@extends('Back.LAYOUT.Add')
@section('title', 'اضافة موضوع جديد')
@section('content')
<div class="container-fluid" style="
text-align: center;
font-size: 161%;
background: #011a25;
width: 100%;
padding: 4%;
color: white;
">
  نموذج بيانات لجدول قاعدة بيانات
  <img src="https://image.flaticon.com/icons/svg/1455/1455095.svg" width="100">
  <br>
  <br>
  <div class="container">
    @php
    $url_bace= route('sections_pro.index');
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

    <form action="{{ route('sections_pro.update', ['id'=>$sections_pro->id]) }}" method="POST"
      enctype="multipart/form-data">
      {{ method_field('PATCH') }}
      @csrf
      <input type="hidden" value="{{ $sections_pro->Image}}" name="old">

      <div class="row">
        <label>اللغة</label>
        <select class="browser-default" name="Language" id="Language">
          <option value="" disabled>Choose your option</option>
          <option value="English" {{old('Language',$sections_pro->Language)== "English" ? 'selected':''}}>English
          </option>
          <option value="Arabic" {{old('Language',$sections_pro->Language)== "Arabic" ? 'selected':''}}>Arabic</option>

        </select>
        @if ($errors->has('Language'))
        <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Language') }}</span>
        @endif
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="sections" type="text" class="validate" name="sections" value="{{ $sections_pro->sections}}">
          <label class="active" for="sections">القسسم</label>
          @if ($errors->has('sections'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('sections') }}</span>
          @endif
        </div>
      </div>
      <input type="submit" style="background: #011a25;" class="btn btn-primary btn-large btn-block"
        value="تعديل البيانات" />
      <div class="col-md-9">
      </div>
    </form>

    @if(session()->has('alert-success'))
    <div class="alert alert-success" style="width: 98%;">
      {{ session()->get('alert-success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
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