<div class="container pt-4">
    <div class="theMostViewed position-relative">
        <div class="d-flex justify-content-between">
            <h3 class="font-weight-bold text-right col-sm-10 col-7 pb-3"> The most viewed products </h3>

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
                @foreach ($mostViewedProducts as $product)
                    <div class="swiper-slide mousePointer">
                        <div class="position-relative blogCard">
                            <div class="card shadow">
                                <a href="#"><img class="card-img imgExtraSmall"
                                        src="{{ $product->media ? url($product->media->path) : asset('assets/images/default.jpg') }}"></a>
                                {{-- src="{{ url($product->media->path) }}"></a> --}}
                                <div class="card-body">
                                    <span class="badge bg-success text-white rounded-pill badgeTag px-3 py-2">Most
                                        Viewed</span>
                                    <h6 class="fw-bold">{{ $product->title }}</h6>
                                    <p class="text-muted description font-size-14">
                                        {{ $product->description ?? 'Default Description' }}</p>
                                    <p class="opacity-75 mb-0">Price: <span
                                            class="text-success fw-bold">${{ $product->price }}</span></p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-1 pt-1 font-size-14"><i class="fa fa-calendar"></i>
                                            {{ $product->created_at->diffForHumans() }}</p>
                                        <p class="mb-1 pt-1 font-size-14"><i class="fa fa-eye"></i>
                                            {{ $product->views }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
