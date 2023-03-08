@extends('layouts.app')

@section('content')
  {{-- <x-breadcrumb :product="$product" /> --}}

  <div class="mx-auto grid w-4/5 gap-2 pt-12 sm:grid-cols-2 sm:pt-20">
    <div class="mx-auto">
      <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
    </div>

    <div>
      <h1 class="pb-8 text-4xl font-bold text-gray-600">
        {{ $product->name }}
      </h1>

      <p class="text-l pb-8 font-bold text-black">
        Price: <span class="text-red-500">$ {{ $product->price }}</span>
      </p>

      <p class="text-l pb-8 font-bold text-black">
        Shipping: <span class="text-red-500">$ {{ $product->shipping_cost }}</span>
      </p>

      <p class="text-s pb-8 font-thin text-black">
        {{ $product->details }}
      </p>

      <p class="text-thin text-l pb-12 leading-6 text-gray-800">
        {{ $product->description }}
      </p>

      <a href="{{ route('add.to.cart', $product->id) }}" class="text-l w-full rounded-full bg-blue-600 px-10 py-6 font-bold uppercase text-white" role="button"
        aria-pressed="true">
        Add To Cart
      </a>
    </div>
  @endsection
