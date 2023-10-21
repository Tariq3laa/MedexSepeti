<div id="slideImage" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        @for ($i = 0; $i < count($promotedProducts); $i++)
            <button type="button" data-bs-target="#slideImage"
                data-bs-slide-to="{{ $i }}"@class(['active' => $i == 0])></button>
        @endfor
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        @foreach ($promotedProducts as $product)
            <div @class(['carousel-item', 'active' => $loop->first])>
                <img src="{{ $product->media ? url($product->media->path) : asset('assets/images/default.jpg') }}"
                    alt="" class="d-block">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center pt-md-5 mt-4">
                                <h1 class="display-4 pt-5 mt-lg-1 text-uppercase fw-bold"><span
                                        class="textYellow">{{ $product->title }}</span></h1>
                                <p class="font-size-18 text-white font-medium pt-2">({{ $product->description }})</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Indicators/buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#slideImage" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slideImage" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
