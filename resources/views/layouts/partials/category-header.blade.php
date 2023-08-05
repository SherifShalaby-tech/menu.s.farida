<div class="flex flex-row items-center w-full text-center bg-center bg-no-repeat "
    style="background-size:100% 100%;height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ images_asset(asset('uploads/' . session('breadcrumb_background_image'))) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif');">
    <div class="w-full">


        <div class="container mx-auto mt-16">
            {{--<div class="flex justify-end w-full">
                <a class="px-2 font-semibold text-white md:text-xl xs:text-sm text-white-shadow "
                    href="{{ action('HomeController@index') }}">@lang('lang.home')</a> <span
                    class="px-1 font-semibold text-white md:text-xl xs:text-sm">-</span>
                <a class="px-2 font-semibold text-white md:text-xl xs:text-sm text-white-shadow"
                    href="{{ action('ProductController@getProductListByCategory', $category->id) }}">{{ $category->name }}</a>
            </div>--}}
        </div>
    </div>
</div>

@php
    use App\Models\ProductClass;
    $categories = ProductClass::orderBy('sort', 'asc')->where('status', 1)->where('name', '!=', 'Extras')->get();
@endphp
<div class="mx-auto container-fluid">
    <div class="flex flex-row">
        <div class="w-48 text-4xl font-bold text-left text-white flex-3">
            @include('layouts.partials.language_dropdown')
        </div>
        <div class="flex-1 ">
            <div class="h-10 mx-auto text-center text-white width-fit bg-red rounded-xl ">
                <div class="dropdown">
                    <button class="py-1 text-2xl font-semibold text-white dropbtn">{{ $category->name }}  <i class="fas fa-caret-down"></i> </button>
                    <div class="dropdown-content">
                        <a href="#"> @lang('lang.categories')</a>
                        @foreach ($categories as $category)
                            <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}"> {{ $category->name }}</a>
                        @endforeach
                    </div>
                  </div>
            </div>
        </div>
        <div class="w-48 font-bold text-right text-white flex-3">
            <div class="dropdown">
                <a href="{{ action('HomeController@index') }}"
                class="px-4 py-2 font-bold text-white border-2 border-white rounded-lg dropbtn bg-red md:text-base xs:text-sm"  style="white-space:nowrap;" >
                    @lang('lang.home') <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="{{ action('AboutUsController@index') }}"> @lang('lang.about_us')</a>
                </div>
            </div>
        </div>

    </div>
</div>
