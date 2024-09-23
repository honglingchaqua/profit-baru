@extends("layouts.app")

@section("style")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <style>
        .news-marquee {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
@endsection

@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <!-- Card Section -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
            <div class="col">
                <div class="card border-start border-0 border-4 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Orders</p>
                                <h4 class="my-1 text-info">4865</h4>
                                <p class="mb-0 font-13">+2.5% from last week</p>
                            </div>
                            <div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-cart'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-start border-0 border-4 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Revenue</p>
                                <h4 class="my-1 text-danger">$84,245</h4>
                                <p class="mb-0 font-13">+5.4% from last week</p>
                            </div>
                            <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-wallet'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-start border-0 border-4 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Bounce Rate</p>
                                <h4 class="my-1 text-success">34.6%</h4>
                                <p class="mb-0 font-13">-4.5% from last week</p>
                            </div>
                            <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-bar-chart-alt-2'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-start border-0 border-4 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Customers</p>
                                <h4 class="my-1 text-warning">8.4K</h4>
                                <p class="mb-0 font-13">+8.4% from last week</p>
                            </div>
                            <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="container mt-4">
            <div class="news-marquee mb-4">
                <h3 class="text-center">
                    <i class="fas fa-car me-2"></i>
                    Waktunya Service Nih !!
                </h3>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No Pol</th>
                                    <th>No Rangka</th>
                                    <th>Model</th>
                                    <th>Warna</th>
                                    <th>Tanggal DEC</th>
                                    <th>Tanggal Next Service</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles->take(5) as $vehicle)
                                    <tr>
                                        <td>
                                            @if ($vehicle->service_alert)
                                                <i class="fas fa-bell text-warning me-2"></i>
                                            @endif
                                            {{ $vehicle->nopol }}
                                        </td>
                                        <td>
                                            <a href="/vehicles/{{ $vehicle->id }}/edit" class="text-primary">
                                                {{ $vehicle->no_rangka }}
                                            </a>
                                        </td>
                                        <td>{{ $vehicle->model }}</td>
                                        <td>{{ $vehicle->warna }}</td>
                                        <td>{{ $vehicle->tgl_dec }}</td>
                                        <td>{{ $vehicle->tanggal_next_service }}</td>
                                        <td>
                                            <a href="https://wa.me/+628117483800?text=Hi%2C%20I%20would%20like%20to%20book%20a%20service%20for%20vehicle%20with%20ID%20{{ $vehicle->id }}" 
                                               class="btn btn-primary btn-sm"
                                               target="_blank">
                                               <i class="fas fa-tools me-1"></i> Booking Service
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Section -->
        <div class="row mt-4">
            <div class="col-lg-4 mb-4">
                <h6 class="text-center mb-3">Service</h6>
                <div class="card">
                    <div class="card-body">
                        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/gallery/20.png" class="d-block w-100" alt="Service 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/21.png" class="d-block w-100" alt="Service 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/22.png" class="d-block w-100" alt="Service 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <h6 class="text-center mb-3">Marketing</h6>
                <div class="card">
                    <div class="card-body">
                        <div id="marketingCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/gallery/20.png" class="d-block w-100" alt="Marketing 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/21.png" class="d-block w-100" alt="Marketing 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/22.png" class="d-block w-100" alt="Marketing 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#marketingCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#marketingCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <h6 class="text-center mb-3">Body Paint & Repair</h6>
                <div class="card">
                    <div class="card-body">
                        <div id="repairCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/gallery/20.png" class="d-block w-100" alt="Repair 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/21.png" class="d-block w-100" alt="Repair 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/gallery/22.png" class="d-block w-100" alt="Repair 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#repairCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#repairCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 2000
        });
    });
</script>
@endsection