<a id="top"></a>
<div class="w-full flex flex-row bg-center bg-no-repeat bg-cover text-center items-center"
    style="height: 542px; background-image: url('@if (!empty(session('home_background_image'))) {{ asset('uploads/' . session('home_background_image')) }}@else{{ asset('images/default-home-bg.png') }} @endif')">
    <div class="w-full">

        <div class="flex flex-row mt-2">
            <img src="{{ asset('uploads/' . session('logo')) }}" alt="logo"
                class="mx-auto md:w-56 md:h-56 xs:w-40 xs:h-40"
                style="border-radius: 10px; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                
        </div>

    </div>
</div>
