@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>
                    <!-- <button class="btn btn-primary ml-4"  v-text="buttonText">Follow</button> -->
                    <example-component></example-component>
                </div>
                @can ('update', $user->profile)
                <a href="/post/create">Add New Post</a>
                @endcan
            </div>
            @can ('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> post</div>
                <div class="pr-5"><strong>643</strong> following</div>
                <div class="pr-5"><strong>544</strong> followers</div>
            </div>
            <div class="pt-4">
                <h4>{{ $user->profile->title }}</h4>
            </div>
            <div class="pt-1">
                <p>{{ $user->profile->description }}</p>
            </div>
        </div>
    </div>

    <!-- <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c179.0.1081.1081a/s640x640/154112788_508269570159391_6523670944733002508_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=D8oNedff7MIAX8-cBw5&oh=f246735cb0bf791e451d141d1313e956&oe=60792716" class="w-100">
        </div>    
        <div class="col-4">
            <img src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.46.1210.1210a/s640x640/146681015_429561524914161_2400780500300050012_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=N5pLxyzCXLAAX8awe3d&oh=a62365955777dd9a7542d915f09644b0&oe=60790A87" class="w-100">
        </div>    
        <div class="col-4">
            <img src="https://instagram.fjrs11-1.fna.fbcdn.net/v/t51.2885-15/e35/c167.0.368.368a/136662735_520356768880727_5672436147978823776_n.jpg?tp=1&_nc_ht=instagram.fjrs11-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=nzppe-C2978AX9wlGUW&oh=3bd980a899b2fb69af18772099a4beb9&oe=607705AE" class="w-100">
        </div>    
    </div> -->
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection