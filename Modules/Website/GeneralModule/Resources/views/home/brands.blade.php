<div class="container pt-4">
    <div class="newBrands position-relative">
        <div class="d-flex justify-content-between">
            <h3 class="font-weight-bold text-right col-sm-10 col-7 pb-3"> Brands </h3>

            <div class="pagination-container swiperButtons col-lg-1 col-sm-2 col-3">
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev">
                </div>
                <div class="swiper-button-next">
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper-container overflow-hidden">
            <div class="swiper-wrapper pb-5">
                @foreach ($brands as $brand)
                    <div class="swiper-slide mousePointer">
                        <div class="overflow-hidden">
                            <div class="brands position-relative">
                                <a href="#">
                                    <img
                                        src="{{ $brand->media ? url($brand->media->path) : asset('assets/images/default.jpg') }}">
                                    <div class="info">
                                        <p class="mb-1">{{ $brand->title }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
