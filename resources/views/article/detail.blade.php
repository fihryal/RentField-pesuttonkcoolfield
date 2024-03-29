@extends('layouts.app')
@section('main')

<section class="h-screen flex justify-center items-center">

    <div class="max-w-3xl bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-8 text-2xl font-bold tracking-tight text-gray-900">{{$data->judul}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">{{$data->article}}</p>
        </div>
    </div>
</section>

@endsection