@php
$user_id = request()
    ->session()
    ->get('user_id');
$cart_count = 0;
if (!empty($user_id)) {
    $cart_collection = Cart::session($user_id)->getContent();
    $cart_count = $cart_collection->count();
}
@endphp
<div class="flex pb-8 mt-32">
    <div class="flex-1">
    </div>
    <div class="flex-1 mt-6 text-center">

    </div>
    <div class="flex-1 text-right ">
        <a href="#top" class="px-3 py-2 mt-10 font-semibold text-white rounded-full bg-red" id="goToTop"  ><i
                class="fa fa-arrow-up"></i></a>
    </div>
</div>

<div class="mt-6 text-center " style="    display: flex;
position: fixed;
width: 120px;
height: 120px;
bottom: 0;
left: 50%;
transform: translate(-50%,40%);
margin: 0;
box-shadow: 0 0 12px #747d85;
background-color: #fff;
padding-bottom: 40px;
justify-content: center;
align-items: center;
z-index: 1000;
border-radius: 60px;
transition: all .4s;
-webkit-transition: all .4s;
-o-transition: all .4s;
-moz-transition: all .4s;">
<a href="{{ action('CartController@view') }}" class="text-center cart_items">
    <button class="relative text-2xl font-semibold text-white rounded-full"
        style="height: 70px; width: 70px;">
        <span class="absolute item_count text-cart text-dark left-8 top-5" style="padding-inline: 10px; padding-block:3px; transform:translatey(-5px);
          background-color: rgba(0,0,0,.5); color:#fff; border-radius:3px"
            style="margin-top: 2px;">{{ $cart_count }}</span>
            <i class="fas fa-shopping-cart" style="color: #e1a337; font-size: xx-large;"></i></button>
</a>
</div>
