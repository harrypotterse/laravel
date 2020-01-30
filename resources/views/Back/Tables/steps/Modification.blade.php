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
        $url_bace= route('steps.index');
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
        <form action="{{ route('steps.update', ['id'=>$steps->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
      
            {{--  <div class="row">
              <label>الايكون</label>
              <select class="browser-default" name="Icon">
                <option value="" disabled selected>Choose your option</option>
                @foreach(\App\steps::take(7)->orderBy('id','desc')->distinct()->get() as $item_steps)
                <option value="{{ $item_steps->Icon}}">{{ $steps->Icon}}</option>
                @endforeach
                <option value="Arabic">Arabic</option>
              </select>
              @if ($errors->has('Icon'))
              <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Icon') }}</span>
              @endif
            </div>  --}}
            <div class="row">
              <div class="input-field col s6">
                <input id="Title" type="text" class="validate" name="Title" value="{{ $steps->Title}}">
                <label class="active" for="Title">العنوان</label>
                @if ($errors->has('Title'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Title') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="Explanation" class="materialize-textarea"
                  name="Explanation">{{ $steps->Explanation}}</textarea>
                <label for="Explanation">الشرح</label>
                @if ($errors->has('Explanation'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Explanation') }}</span>
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