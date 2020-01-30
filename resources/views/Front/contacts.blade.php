@extends('Front.main.contacts')
@section('fixed')
@include('Front\Software_sections\contacts\fixed')
@endsection
{{-- ############################################################# --}}
{{--  @section('fixed')
@include('Front.Software_sections.contacts.fixed')
@endsection  --}}
{{-- ############################################################# --}}
@section('content')
@include('Front.Software_sections.contacts.top')
@include('Front.Software_sections.contacts.contacts')
@endsection
