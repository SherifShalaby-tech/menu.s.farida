<a href="{{ action('ProductController@getProductListByCategory', $category->id) }}"
    class="relative w-full h-0 bg-center bg-no-repeat bg-cover shadow-lg pb-full rounded-xl box-shadow-cat mb:mb-8 xs:mb-16"
    style="background-image: url('{{ images_asset($category->getFirstMediaUrl('product_class')) }}'); margin-bottom: 15px" id="xsMarginB">
    <div class="absolute flex w-full md:-bottom-16 xs:-bottom-10">
        <div class="w-full mx-auto text-center  lg:h-10 md:h-8 xs:h-8 bg-darkblue border-name-cat box-shadow-cat">
            <h3 class="py-1 font-semibold text-white lg:text-xl md:text-sm xs:text-tiny">{{ $category->name }}</h3>
        </div>
    </div>
</a>
