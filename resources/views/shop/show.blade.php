@extends('layouts.app')

@section('content')
  {{-- <x-breadcrumb :product="$product" /> --}}

  <div class="mx-auto grid w-4/5 gap-2 pt-12 sm:grid-cols-2 sm:pt-20">
    <div class="mx-auto">
      <img src="https://static.iphoned.nl/orca/products/9011/apple-macbook-pro-2021.png" alt="Apple MacBook Pro 2021">
    </div>

    <div>
      <h1 class="pb-8 text-4xl font-bold text-gray-600">
        Apple MacBook Pro 2021
      </h1>

      <p class="text-l pb-8 font-bold text-black">
        Price: <span class="text-red-500">$ 1993</span>
      </p>

      <p class="text-l pb-8 font-bold text-black">
        Shipping: <span class="text-red-500">$ 25</span>
      </p>

      <p class="text-s pb-8 font-thin text-black">
        Apple M1 Pro, 16 GPU, 16GB, 512 GB SSD
      </p>

      <p class="text-thin text-l pb-12 leading-6 text-gray-800">
        Apple MacBook Pro is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. The Apple
        MacBook Pro packs 512GB of SSD storage. Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with
        2 USB ports (2 x USB 3.0), Mic In ports.
      </p>

      <a class="text-l w-full rounded-full bg-blue-600 px-10 py-6 font-bold uppercase text-white" role="button"
        aria-pressed="true">
        Add To Cart
      </a>
    </div>
  @endsection
