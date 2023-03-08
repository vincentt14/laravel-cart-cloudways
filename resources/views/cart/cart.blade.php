@extends('layouts.app')

@section('content')
  <div class="mx-auto w-4/5">
    <h1 class="mb-8 pt-12 text-5xl font-bold text-gray-800">
      Shopping Cart
    </h1>

    <hr class="border-1 border-gray-300">
  </div>

  <div class="mx-auto flex w-4/5 flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                  Name
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                  Details
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                  Price
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                  Quantity
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                  Total
                </th>

                <th scope="col"
                  class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500">
                  Delete
                </th>
              </tr>
            </thead>

            @if (session('cartItems'))
              @foreach (session('cartItems') as $key => $value)
                <tbody class="divide-y divide-gray-200 bg-white">
                  <tr>
                    <td class="whitespace-nowrap px-6 py-4">
                      <div class="flex items-center">
                        <div class="h-10 w-10 flex-shrink-0">
                          <img class="h-10 w-10 rounded-full" src="{{ asset($value['image_path']) }}"
                            alt="{{ $value['name'] }}">
                        </div>

                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            {{ $value['name'] }}
                          </div>

                          <div class="text-sm font-medium text-gray-400">
                            {{ $value['brand'] }}
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="whitespace-nowrap px-6 py-4">
                      <div class="text-sm text-gray-900">
                        {{ $value['details'] }}
                      </div>
                    </td>

                    <td class="whitespace-nowrap px-6 py-4">
                      <span
                        class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                        $ {{ $value['price'] }}
                      </span>
                    </td>

                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                      <select name="quantity" id="quantity" value="{{ $value['quantity'] }}">
                        @for ($i = 1; $i <= 10; $i++)
                          <option value="{{ $i }}">
                            {{ $i }}
                          </option>
                        @endfor
                      </select>
                    </td>

                    <td class="whitespace-nowrap px-6 py-4">
                      <div class="text-sm text-gray-900"> $ {{ $value['quantity'] * $value['price'] }} </div>
                    </td>

                    <td class="whitespace-nowrap px-6 text-right text-sm font-medium">
                      <a href="{{ route('delete.from.cart', $key) }}" role="button"
                        class="text-red-600 hover:text-red-900">Delete</a>
                    </td>
                  </tr>
                </tbody>
              @endforeach
            @else
              <td align="left" colspan="3">
                <p class="text-l py-6 px-4 font-bold text-black">Shopping Cart is Empty</p>
              </td>
            @endif
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
