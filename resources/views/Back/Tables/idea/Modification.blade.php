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
        $url_bace= route('idea.index');
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

        <form action="{{ route('idea.update', ['id'=>$idea->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf


      
      
      
            <div class="row">
              <div class="input-field col s6">
                <input id="Title" type="text" class="validate" name="Title" value="{{ $idea->Title}}">
                <label class="active" for="Title">العنوان</label>
                @if ($errors->has('Title'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Title') }}</span>
                @endif
              </div>
            </div>
      
         <div class="row">
              <div class="input-field col s6">
                <input id="Sub" type="text" class="validate" name="Sub" value="{{ $idea->Sub}}">
                <label class="active" for="Sub">العنوان الفرعي</label>
                @if ($errors->has('Sub'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Sub') }}</span>
                @endif
              </div>
            </div>
      
            <div class="row">
              <div class="input-field col s12">
                <textarea id="Subject" class="materialize-textarea" name="Subject">{{ $idea->Subject}}</textarea>
                <label for="Subject">الموضوع</label>
                @if ($errors->has('Subject'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Subject') }}</span>
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