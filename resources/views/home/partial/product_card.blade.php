@php
$variation_products='';
if($product->variations->where('name','!=','Default')->count()>0){
    $variation_products=$product->variations->where('name','!=','Default');
}else{
    $variation_products=$product->variations->where('name','Default');
}
@endphp
<div class="w-full mb-4 productCard" >
    @foreach($product->variations as $size)
        <input type="hidden" value="{{$size->size_id}}" name="size"/>
        <input type="hidden" value="{{$size->id}}" name="variation"/>
        @break
    @endforeach
    <div class="relative w-full bg-center bg-no-repeat bg-cover shadow-lg pb-full rounded-xl box-shadow-cat product_card"
        style="background-image: url('{{ images_asset($product->getFirstMediaUrl('product')) }}')">

       {{-- <div class="flex w-full text-center">
            <div class="absolute bottom-0 w-full mx-auto">
                <button data-product_id="{{ $product->id }}" type="button"
                    class="mb-16 transition-all duration-500 bg-white rounded-full opacity-0 text-red hover:bg-red hover:text-white md:w-12 md:h-12 xs:w-8 xs:h-8 cart_button">
                    <i class="fa md:text-xl xs:text-sm fa-cart-plus cart_icon"></i>
                </button>
            </div>
        </div> --}}
    </div>
    <div class="flex">
        <div class="w-full py-4 mx-auto mt-2 text-xs text-center text-white rounded-xl bg-darkblue border-name-cat box-shadow-cat">
            <a href="{{ action('ProductController@show', $product->id) }}">
            <p class="py-0 font-semibold text-white md:text-sm xs:text-tiny">{{ Str::limit($product->name, 25) }}</p>
            </a>
            <p class="px-3 my-3 text-white fon5t-semibold mx-py-0 md:text-sm xs:text-tiny sm:flex sm:justify-between" style="align-content: center; align-items: center;">

                @foreach($product->variations as $s)
                    <span>
                        {{ session('currency')['code'] }}
                        <span class="sell-price">
                            {{ @num_format($s->default_sell_price - $product->discount_value) }}
                        </span>

                    </span>
                    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{$product->id}}" class="inline-flex items-center text-center text-white bg-gray-900 rounded-lg size-btn hover:bg-gray-600 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                        @if($s->size_id!==null)
                        <span class="size-menu">
                            {{$s->size->name}}</span>

                            &nbsp;
                                <span>@lang('lang.size')</span>
                            &nbsp;

                            <span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                            </span>
                            @endif
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownDotsHorizontal{{$product->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                            @foreach($product->variations as $size)
                                <li>
                                    <a data-size_id="{{$size->size_id}}" data-variation_id="{{$size->id}}"  data-size_name="{{$size->size->name}}" data-price="{{ @num_format($size->default_sell_price - $product->discount_value) }}"  class="block px-4 py-2 changeSize hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$size->size->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @break
                @endforeach
            </p>
            <button data-product_id="{{ $product->id }}" type="button"
                    class="bg-white rounded-full md:w-12 md:h-12 xs:w-8 xs:h-8 cart_button">
                    <i class="fa md:text-xl xs:text-sm fa-cart-plus cart_icon" style="pointer-events:none;color: #2561c1;" ></i>
                </button>
        </div>
    </div>
</div>
