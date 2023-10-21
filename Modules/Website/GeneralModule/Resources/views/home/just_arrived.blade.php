<div class="container pt-4">
    <div class="arrivedProducts position-relative">
        <div class="d-flex justify-content-between">
            <h3 class="font-weight-bold text-right col-sm-10 col-7 pb-3"> Products that just arrived </h3>

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
                @foreach ($justArrivedProducts as $product)
                    <div class="swiper-slide mousePointer">
                        <div class="position-relative blogCard">
                            <div class="card shadow">
                                <a href="#"><img class="card-img imgExtraSmall"
                                        src="{{ $product->media ? url($product->media->path) : asset('assets/images/default.jpg') }}"></a>
                                <div class="card-body">
                                    <span @class([
                                        'badge',
                                        'text-white',
                                        'rounded-pill',
                                        'badgeTag',
                                        'px-3',
                                        'py-2',
                                        'bg-secondary' => $product->tag == 'Normal',
                                        'bg-success' => $product->tag == 'Most Viewed',
                                        'bg-primary' => $product->tag == 'Best Selling',
                                    ])>{{ $product->tag }}</span>
                                    <span
                                        class="badge bg-light text-black rounded-pill badgeView font-size-14 px-3 py-2"><i
                                            class="fa fa-eye"></i> {{ $product->views }}</span>
                                    <p class="mb-1 pt-1 dates px-2 font-size-14 rounded-3"><i
                                            class="fa fa-calendar"></i>
                                            {{ $product->created_at->diffForHumans() }}</p>
                                    <h6 class="fw-bold pt-3">{{ $product->title }}</h6>
                                    <p class="text-muted description font-size-14 mb-2">{{ $product->description ?? 'Default Description' }}</p>
                                    <p class="opacity-75 mb-2">Price: <span class="text-success fw-bold">${{ $product->price }}</span></p>
                                    <button class="btn btn-outline-primary w-100">See Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
