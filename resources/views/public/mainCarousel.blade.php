<div class="col-md-12">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/slider1.jpg') }}" alt="First slide">
               
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slider2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-text bg-warning text-light">
                <h1 class="fw-bold">Welcome to Library Management System</h1>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia!</h5>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>