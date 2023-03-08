@extends('layouts.app')

@section('content')
  <div class="mx-auto w-4/5">
    <h1 class="mb-8 pt-12 text-5xl font-bold text-gray-800">
      Shop
    </h1>

    <hr class="border-1 border-gray-300">
  </div>

  <div class="mx-auto grid w-4/5 gap-8 pt-20 sm:grid-cols-4">
    @foreach ($products as $product)
      <div class="mx-auto">
        <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}"
          style="height:200px !important;">

        <h2 class="pb-8 text-xl font-bold text-gray-600">
          {{ $product->name }}
        </h2>

        <p class="pb-8 text-xs font-thin text-black">
          {{ $product->details }}
        </p>

        <p class="text-l pb-8 font-bold text-black">
          Price: <span class="text-red-500">$ {{ $product->price }}</span>
        </p>

        <a href="/shop/{{ $product->id }}" class="text-l w-full rounded-full bg-blue-600 px-6 py-2 font-bold uppercase text-white">
          Read more...
        </a>
      </div>
    @endforeach
  </div>
@endsection
