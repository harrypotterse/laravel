@extends('Front\main\portfolio')
@push('css')
<style>
    .grid-det_category a {
        float: left;
        margin-right: 12px;
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: 2px;
        text-align: left;
        background: white;
        padding: 4px;
        border-radius: 4px;
        /* padding: 0.2%; */
        font-weight: 600;
    }
</style>
@endpush
@section('portf')
@include('Front\Software_sections\portfolio\filter')
@include('Front\Software_sections\portfolio\portfolio')
@endsection