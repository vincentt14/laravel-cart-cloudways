@extends('layouts.app')

@section('content')
  <div class="mx-auto w-4/5">
    <h1 class="mb-8 pt-12 text-5xl font-bold text-gray-800">
      Shop
    </h1>

    <hr class="border-1 border-gray-300">
  </div>

  <div class="mx-auto grid w-4/5 gap-8 pt-20 sm:grid-cols-4">
    <div class="mx-auto">
      <img src="https://static.iphoned.nl/orca/products/9011/apple-macbook-pro-2021.png" alt="Apple MacBook Pro 2021"
        style="height:200px !important;">

      <h2 class="pb-8 text-xl font-bold text-gray-600">
        Apple MacBook Pro 2021
      </h2>

      <p class="pb-8 text-xs font-thin text-black">
        Apple M1 Pro, 16 GPU, 16GB, 512 GB SSD
      </p>

      <p class="text-l pb-8 font-bold text-black">
        Price: <span class="text-red-500">$ 1993</span>
      </p>

      <a href="/shop/1" class="text-l w-full rounded-full bg-blue-600 px-6 py-2 font-bold uppercase text-white">
        Read more...
      </a>
    </div>
  </div>
@endsection
