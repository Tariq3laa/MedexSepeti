<nav class="navbar customHeader navbar-expand-md px-lg-5 pe-2">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="assets/images/logo.png" class="ms-3 ms-lg-0 pt-1" alt="">
    </a>
    <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLet" aria-controls="offcanvasTop"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify textYellow"></i>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
        <div class="navbar-nav searchGroup mx-auto">
            <div class="input-group mb-2 mb-lg-0">
                <input type="text" class="form-control" placeholder="search" aria-label="search"
                    aria-describedby="search">
                <span class="input-group-text" id="search">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
        <ul class="navbar-nav me-auto gap-3">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-heart"></i> Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Products</a>
            </li>
            <li class="nav-item dropdown has-megamenu">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i
                        class="fa fa-briefcase"></i> Categories </a>
                <div class="dropdown-menu megamenu px-lg-5" role="menu">
                    <div class="row g-3">
                        @foreach ($categories->chunk(3) as $chunk)
                            <div class="col-lg-4 col-6">
                                <div class="col-megamenu">
                                    <ul class="list-unstyled pt-3">
                                        @foreach ($chunk as $category)
                                            <li class="pb-1">
                                                <a href="#"
                                                    class="d-flex text-decoration-none gap-2 p-2 text-black">
                                                    <p>
                                                        <img src="{{ $category->media ? url($brand->media->path) : asset('assets/images/default.jpg') }}"
                                                            class="imgCategory" alt="">
                                                        <span class="fw-bold">{{ $category->title }}</span>
                                                    </p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div> <!-- dropdown-mega-menu.// -->
            </li>
        </ul>
    </div>
</nav>

<!-- Menu for mobile -->
<div class="offcanvas offcanvas-start bg-white text-dark" tabindex="-1" id="offcanvasLet"
    aria-labelledby="offcanvasLetLabel">
    <div class="offcanvas-header">
        <a href="index.html" class="navbar-brand">
            <img src="assets/images/logo.png" class="ms-3 ms-lg-0 pt-1" alt="image not found" title="image">
        </a>
        <button type="button" class="mt-2 btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group list-unstyled">
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="far fa-user"></i> Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="far fa-heart"></i> Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
            </li>
            <li class="px-3 pt-2">
                <form>
                    <div class="input-group mb-2 mb-lg-0">
                        <input type="text" class="form-control" placeholder="search" aria-label="search"
                            aria-describedby="search">
                        <span class="input-group-text" id="search">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</div>
