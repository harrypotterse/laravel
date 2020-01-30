@extends('Back.LAYOUT.MAINE')
@section('title',"الرئسية" )
@section('content')
@push('css')
<link rel="stylesheet" href="{{ URL('Back/css/laravel_home.css')}}" />
<link rel="stylesheet" href="{{ URL('Back/css/style.css')}}" />
<link rel="stylesheet" href="{{ URL('Back/css/laravel.css')}}" />
<style>
    * {
        font-family: 'Cairo', sans-serif;
    }
</style>
@endpush
{{--  ##########################################################################  --}}


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers">12</span>
                <span class="count-name">Flowz</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter danger">
                <i class="fa fa-ticket"></i>
                <span class="count-numbers">599</span>
                <span class="count-name">Instances</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter success">
                <i class="fa fa-database"></i>
                <span class="count-numbers">6875</span>
                <span class="count-name">Data</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter info">
                <i class="fa fa-users"></i>
                <span class="count-numbers">35</span>
                <span class="count-name">Users</span>
            </div>
        </div>
    </div>
</div>
{{--  ##########################################################################  --}}
<section class="cd-timeline js-cd-timeline">
    <div class="container max-width-lg cd-timeline__container">
        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--picture">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Picture">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>Title of section 1</h2>
                <img src="http://lorempixel.com/800/400/food/1/" class="img-responsive">
                <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                    dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste
                    voluptatibus minus veritatis qui ut.</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Jan 14</span>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>

                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--movie">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Movie">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>Title of section 2</h2>
                <img src="http://lorempixel.com/800/400/food/1/" class="img-responsive">

                <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                    dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Jan 18</span>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--picture">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Picture">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>Title of section 3</h2>
                <img src="http://lorempixel.com/800/400/food/1/" alt="Location">

                <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi,
                    obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus
                    odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt
                    corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat
                    consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem
                    voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Jan 24</span>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--location">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Location">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>Title of section 4</h2>
                <img src="http://lorempixel.com/800/400/food/1/" alt="Location">

                <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                    dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste
                    voluptatibus minus veritatis qui ut.</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Feb 14</span>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--location">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Location">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>Title of section 5</h2>
                <img src="http://lorempixel.com/800/400/food/1/" alt="Location">

                <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                    dolorum provident rerum.</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Feb 18</span>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--movie">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Movie">
            </div> <!-- cd-timeline__img -->
            <div class="cd-timeline__content text-component">
                <h2>Final Section</h2>
                <p class="color-contrast-medium">This is the content of the last section</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Feb 26</span>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->
    </div>
</section>
{{--  #######################################################  --}}
<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fa fa-briefcase"></i>
                <p id="number1" class="number">12</p>
                <span></span>
                <p>Projects done</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fa fa-smile-o"></i>
                <p id="number2" class="number">55</p>
                <span></span>
                <p>Happy clients</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fa fa-coffee"></i>
                <p id="number3" class="number">359</p>
                <span></span>
                <p>Cups of coffee</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fa fa-camera"></i>
                <p id="number4" class="number">246</p>
                <span></span>
                <p>Photos taken</p>
            </div>
        </div>
    </div>
</div>
{{--  #######################################################  --}}
<h1 style="
text-align: center;
font-family: 'Cairo', sans-serif !important;
font-size: 31px;
background: #00bcd4;
padding: 2%;
color: white;
">افضل الصفحات
<img class="img-responsive" src="https://image.flaticon.com/icons/svg/1197/1197511.svg" width="150" style=" margin: 0 auto;     margin-top: 2%;">
</h1>

<div class="col-md-12">
    <div class="widget blank no-padding">
        <div class="panel panel-default work-progress-table">
            <!-- Default panel contents -->
            @php
            $visits_max= DB::table('visits')->orderBy('Visits', 'desc')->get()->first();
            (int) $db=$visits_max->Visits;
            @endphp
            <!-- Table -->
            <table id="mytable" class="table">
                <tbody>
                    @foreach( DB::table('visits')->orderBy('Visits', 'desc')->get() as $item_visits)
                    <tr>
                        <td>{{ $item_visits->page}}</td>
                        <td><a href="{{ $item_visits->Link}}" class="btn btn-info" role="button">رابط الصفحة</a>                        </td>
                        <td><span class="label label-primary">{{ $item_visits->ip}}</td>
                        <td>
                            @php
                            @endphp
                   
                            <div class="progress">
                                <div style="width:{{ round($item_visits->Visits / $db * 100) }}%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{ round($item_visits->Visits / $db * 100) }}"
                                    role="progressbar" class="red progress-bar">
                                    <span>{{ round($item_visits->Visits / $db * 100) }}%</span>
                                </div>
                            </div>
                        </td>
                        <td><span class="{{ $item_visits->label}}">Pending</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('js')
<script src="{{ URL('Back/main.js') }}"></script>
@endpush