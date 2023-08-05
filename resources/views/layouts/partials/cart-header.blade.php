<div class="flex flex-row items-center w-full text-center bg-center bg-no-repeat"
    style="height: 200px; background-image: url('@if(!empty(session('_background_image'))){{ images_asset(asset('uploads/' . session('breadcrumb_background_image'))) }}@else{{ asset('images/default--bg.png') }}@endif')">
     {{--<div class="w-full">
        <div class="flex flex-row">
            <div class="text-4xl font-bold text-left text-white flex-3">
                @include('layouts.partials.language_dropdown')
            </div>
            <div class="flex-1 mt-8 text-center">
                <p class="text-4xl font-bold text-white">@lang('lang.cart')</p>
            </div>
            <div class="items-end w-48 flex-3">

            </div>
        </div>

        <div class="container mx-auto mt-16">
            <div class="flex justify-end w-full">
                <a class="px-2 text-xl font-semibold text-white"
                    href="{{ action('HomeController@index') }}">@lang('lang.home')</a> <span
                    class="px-1 text-xl font-semibold text-white">-</span>
                @if (request()->segment(2) == 'cart')
                    <a class="px-2 text-xl font-semibold text-white"
                        href="{{ action('CartController@view') }}">@lang('lang.cart')</a>
                @endif

            </div>
        </div>

    </div> --}}
</div>




<div class="mx-auto container-fluid">
    <div class="flex flex-row subMenu">

        <div class="w-48 text-4xl font-bold text-left text-white flex-3">
            @include('layouts.partials.language_dropdown')
        </div>
        <div class="flex-1 ">

        </div>

        <div class="w-48 font-bold text-right text-white flex-3">
                <div class="dropdown">
                    <a href="{{ action('HomeController@index') }}"
                    class="px-4 py-2 font-bold text-white border-2 border-white rounded-lg dropbtn bg-red md:text-base xs:text-sm" style="white-space:nowrap;" >
                        @lang('lang.home') <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="{{ action('AboutUsController@index') }}"> @lang('lang.about_us')</a>
                    </div>
                </div>
        </div>


    </div>
</div>
