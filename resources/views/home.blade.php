@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img 
                src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-19/s150x150/65386004_2544150725622661_399006971514060800_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_ohc=y4O9sJSmMYMAX9ZXimR&oh=9030b6a4f3cab2bf6570d48e78135a23&oe=60782F67"
                class="rounded-circle">
        </div>
    
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>162</strong> post</div>
                <div class="pr-5"><strong>643</strong> following</div>
                <div class="pr-5"><strong>544</strong> followers</div>
            </div>
            <div class="pt-4"><h4>{{ $user->profile->title }}</h4></div>
            <div class="pt-1"><p>{{ $user->profile->description }}</p></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c179.0.1081.1081a/s640x640/154112788_508269570159391_6523670944733002508_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=D8oNedff7MIAX8-cBw5&oh=f246735cb0bf791e451d141d1313e956&oe=60792716" class="w-100">
        </div>    
        <div class="col-4">
            <img src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.46.1210.1210a/s640x640/146681015_429561524914161_2400780500300050012_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=N5pLxyzCXLAAX8awe3d&oh=a62365955777dd9a7542d915f09644b0&oe=60790A87" class="w-100">
        </div>    
        <div class="col-4">
            <img src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-15/e35/c167.0.368.368a/136662735_520356768880727_5672436147978823776_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=nzppe-C2978AX9wlGUW&oh=3bd980a899b2fb69af18772099a4beb9&oe=607705AE" class="w-100">
        </div>    
    </div>
</div>
@endsection
