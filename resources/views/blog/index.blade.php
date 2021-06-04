@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">Blog posts</h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_960_720.jpg" width="600" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            Learn how to write php codes
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">Dinuwan Maduranga</span>, 1 Day Ago
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quae quos et eius esse vero cum odio, ipsum id quibusdam? 
            Non deleniti voluptatum ipsum. Eum neque quo esse delectus maiores! Ad.
        </p>
        <a href="" class="uppercase bg-blue-500 text-gray-100 text-l font-bold py-4 px-8 rounded-3xl ">
            Keep Reading
        </a>
    </div>
</div>

@endsection
