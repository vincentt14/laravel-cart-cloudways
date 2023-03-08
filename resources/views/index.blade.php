@extends('layouts.app')

@section('content')
  <div class="m-auto grid h-screen w-full grid-cols-1 bg-cover bg-center"
    style="background-image: url('https://cdn.pixabay.com/photo/2020/12/18/16/56/laptop-5842509__480.jpg')">
    <div class="flex text-gray-100">
      <div class="m-auto block w-4/5 pb-16 text-center sm:m-auto">
        <h1 class="text-shadow-md text-3xl font-normal uppercase sm:text-5xl sm:text-white">
          Shop Tech Items
        </h1>
        <p class="pb-10 pt-6 font-thin">
          Get Items for the cheapest price
        </p>
        <a href="/shop" class="text-l w-full rounded-full bg-blue-600 px-8 py-4 font-bold uppercase text-white">
          Shop Now
        </a>
      </div>
    </div>
  </div>
@endsection
