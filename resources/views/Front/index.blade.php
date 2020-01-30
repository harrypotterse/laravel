@extends('Front\main\Basic')
{{-- ############################################################# --}}
@section('fixed')
@include('Front\Software_sections\index\fixed')
@include('Front\Software_sections\index\sec1')
@endsection
{{-- ############################################################# --}}
@section('content')
@include('Front\Software_sections\index\scroll-nav')
@include('Front\Software_sections\index\sec2')
@include('Front\Software_sections\index\element')
{{--  #الخدمات  --}}
@include('Front\Software_sections\index\sec3')
{{--  #######المشاريع  --}}
@include('Front\Software_sections\index\sec4')
@include('Front\Software_sections\index\video')
@include('Front\Software_sections\index\sec5')
@include('Front\Software_sections\index\sec6')
@endsection

