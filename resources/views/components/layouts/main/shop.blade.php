<!--=====================================
            SHOP PART START
=======================================-->

<section class="inner-section shop-part">
    <div class="container">
        @if ($nav)
            <div class="row content-reverse">
                <x-navigation.main.shop-sidebar :brands-data="$brandsData" :subcategories-data="$subcategoriesData" />
                <div class="col-lg-9">
                    <x-navigation.main.filter />
                    {{ $slot }}
                </div>
            </div>
        @else
            <x-navigation.main.filter :search="true"/>
            {{ $slot }}
        @endif
    </div>
</section>
<!--=====================================
            SHOP PART END
=======================================-->
