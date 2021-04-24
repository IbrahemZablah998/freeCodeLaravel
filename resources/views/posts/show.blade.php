@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img 
                            src="{{ $post->user->profile->profileImage() }}" 
                            class="rounded-circle w-100"
                            style="max-width: 45px">
                    </div>
                    <div class="pl-3">
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-3">
                        <a href="#">Follow</a>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>    
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection