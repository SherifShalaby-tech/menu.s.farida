<div class="w-full footer bg-footer h-60 ">
    <div class="mx-auto ">
        <div class="flex flex-row">
            <div class="w-full text-center">
                <div class="flex-col mt-6">
                    <img src="{{ images_asset(asset('uploads/' . session('logo'))) }}" alt="logo" class="w-24 h-24 mt-8 center-img box-shadow-btn" >
                    <div class="mt-8 font-semibold text-dark">{{ App\Models\System::getProperty('site_title') }}</div>

               <div >
                    <div class="pt-2 pr-4 text-lg text-dark">@lang('lang.about_us')</div>
                    <div class="pt-2 pr-4 sm:text-base xs:text-xs text-dark">
<div class="w-full footer bg-footer h-60 ">
    <div class="mx-auto ">
        <div class="flex flex-row">
            <div class="w-full text-center">
                <div class="flex-col mt-6">
                    <img src="{{ images_asset(asset('uploads/' . session('logo'))) }}" alt="logo" class="w-24 h-24 mt-8 center-img box-shadow-btn" >
                    <div class="mt-8 font-semibold text-dark">{{ App\Models\System::getProperty('site_title') }}</div>

               <div >
                    <div class="pt-2 pr-4 text-lg text-dark">@lang('lang.about_us')</div>
                    <div class="pt-2 pr-4 sm:text-base xs:text-xs text-dark">
                        <a href="{{ action('AboutUsController@index') }}" class="text-primary" style="color:rgb(97, 97, 219) !important;">
                            {{ App\Models\System::getProperty('about_us_footer') }}
                        </a>
                        <br><br>
                        <p class="text-center text-dark">
                            <a href="{{ action('AboutUsController@index') }}"
                                class="px-4 py-2 font-bold text-white border-2 border-white rounded-lg bg-red md:text-base xs:text-sm">@lang('lang.show_more')
                        <p class="text-center text-dark">
                            <a href="{{ action('AboutUsController@index') }}"
                                class="px-4 py-2 font-bold text-white border-2 border-white rounded-lg bg-red md:text-base xs:text-sm">@lang('lang.show_more')
                            </a>
                        </p>
                        <br><br>
                    </div>
                </div>


            <div>

                  <p class="stext-107 cl7 size-201">
                      <span>  <i class="fas fa-phone-alt" style="color: #fdc326;"></i>  {{ App\Models\System::getProperty('phone_number_1') }}
                              <i class="fa fa-whatsapp" style="color: #fdc326;"></i>   {{ App\Models\System::getProperty('whatsapp') }}
                      </span>
                  </p>

                  <p class="stext-107 cl7 size-201">
                      <span> <i class="fas fa-envelope" style="color: #fdc326;"></i>    {{ App\Models\System::getProperty('system_email') }} </span>
                  </p>

                  <p class="stext-107 cl7 size-201">
                       <span>
                            <a class="cl7"  href="https://maps.google.com/maps?q={{ App\Models\System::getProperty('address') }}" target="_blank">


                               <i class="fas fa-map-marked-alt" style="color: #fdc326;"></i>
                            {{ App\Models\System::getProperty('address') }}</a>
                     </span>
                  </p>
            </div>


                    <div class="pt-2 pr-4 mt-8">
                        <a target="_blank" href="{{ App\Models\System::getProperty('instagram') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-instagram social-font-color"></i>
                    </a>

                    <a target="_blank" href="{{ App\Models\System::getProperty('twitter') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-twitter social-font-color"></i>
                    </a>

                    <a target="_blank" href="{{ App\Models\System::getProperty('youtube') }}"
                        class="">
                        <i class="w-6 h-6 mr-2 fab fa-youtube social-font-color"></i>
                    </a>

                    <a target="_blank" href="https://t.me/{{ App\Models\System::getProperty('telegram') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-telegram-plane social-font-color"></i>
                    </a>

                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ App\Models\System::getProperty('whatsapp') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-whatsapp social-font-color"></i>
                    </a>

                    <a target="_blank" href="{{ App\Models\System::getProperty('facebook') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-facebook-f social-font-color"></i>


            <div>

                  <p class="stext-107 cl7 size-201">
                      <span>  <i class="fas fa-phone-alt" style="color: #fdc326;"></i>  {{ App\Models\System::getProperty('phone_number_1') }}
                              <i class="fa fa-whatsapp" style="color: #fdc326;"></i>   {{ App\Models\System::getProperty('whatsapp') }}
                      </span>
                  </p>

                  <p class="stext-107 cl7 size-201">
                      <span> <i class="fas fa-envelope" style="color: #fdc326;"></i>    {{ App\Models\System::getProperty('system_email') }} </span>
                  </p>

                  <p class="stext-107 cl7 size-201">
                       <span>
                            <a class="cl7"  href="https://maps.google.com/maps?q={{ App\Models\System::getProperty('address') }}" target="_blank">


                               <i class="fas fa-map-marked-alt" style="color: #fdc326;"></i>
                            {{ App\Models\System::getProperty('address') }}</a>
                     </span>
                  </p>
            </div>


                    <div class="pt-2 pr-4 mt-8">
                        <a target="_blank" href="{{ App\Models\System::getProperty('instagram') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-instagram social-font-color"></i>
                    </a>

                    <a target="_blank" href="{{ App\Models\System::getProperty('twitter') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-twitter social-font-color"></i>
                    </a>

                    <a target="_blank" href="{{ App\Models\System::getProperty('youtube') }}"
                        class="">
                        <i class="w-6 h-6 mr-2 fab fa-youtube social-font-color"></i>
                    </a>

                    <a target="_blank" href="https://t.me/{{ App\Models\System::getProperty('telegram') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-telegram-plane social-font-color"></i>
                    </a>

                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ App\Models\System::getProperty('whatsapp') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-whatsapp social-font-color"></i>
                    </a>

                    <a target="_blank" href="{{ App\Models\System::getProperty('facebook') }}"
                        class="">

                        <i class="w-6 h-6 mr-2 fab fa-facebook-f social-font-color"></i>
                    </a>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="flex " style="float: left;    padding-bottom: 80px;">
        <div class="flex-1 mt-10" style="font-size: small;">
            <p class="text-center text-dark ">@lang('lang.footer_copyright')</p>
            <p class="text-center text-dark ">Tel :  00905386531059 - 0097433231457</p>
    <div class="container flex " style="float: left;    padding-bottom: 80px;">
        <div class="flex-1 mt-10" style="font-size: small;">
            <p class="text-center text-dark ">@lang('lang.footer_copyright')</p>
            <p class="text-center text-dark ">Tel :  00905386531059 - 0097433231457</p>

        </div>
    </div>
</div>
{{-- background-attachment: fixed; --}}
{{-- background-attachment: fixed; --}}
