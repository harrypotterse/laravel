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
        $url_bace= route('services.index');
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

        <form action="{{ route('services.update', ['id'=>$services->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <input type="hidden" value="{{ $services->Image}}" name="old">
            <div class="row">
                <div class="input-field col s6">
                  <input id="Title" type="text" class="validate" name="Title" value="{{ $services->Title}}">
                  <label class="active" for="Title">العنوان</label>
                  @if ($errors->has('Title'))
                  <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Title') }}</span>
                  @endif
                </div>
              </div>
        
           <div class="row">
                <div class="input-field col s6">
                  <input id="Subtitle" type="text" class="validate" name="Subtitle" value="{{ $services->Subtitle}}">
                  <label class="active" for="Subtitle">العنوان الفرعي</label>
                  @if ($errors->has('Subtitle'))
                  <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Subtitle') }}</span>
                  @endif
                </div>
              </div>
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="Image" value="{{ $services->Image}}">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
                @if ($errors->has('Image'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Image') }}</span>
                @endif
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
        <img class="responsive-img img-thumbnail" width="150"
            src="{{Request::root()}}{{ $path }}{{ $services->Image}}">

        <div id="targetLayer"></div>
    </div>
</div>

@endsection