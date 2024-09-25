@extends("layouts.app")

@section('style')
<!-- Menyertakan FontAwesome untuk ikon mobil -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    /* Animasi untuk ikon mobil bergerak dari kiri ke kanan */
    @keyframes driveCar {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(0); }
    }

    /* Animasi untuk teks fade-in setelah mobil lewat */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Styling untuk ikon mobil */
    .car-icon {
        font-size: 2em;
        animation: driveCar 2s ease-out;
    }

    /* Styling untuk teks yang akan muncul */
    .header-text {
        font-weight: bold;
        opacity: 0; /* Mulai dengan teks tidak terlihat */
    }

    /* Kelas untuk menampilkan teks dengan animasi fade-in */
    .header-text.show {
        animation: fadeIn 1s ease-out forwards;
    }
</style>
@endsection

@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <!-- Bagian header dengan ikon mobil dan teks -->
        <h1 class="text-center mb-4">
                      <span class="header-text" id="headerText">DATA KENDARAAN ANDA</span>
        </h1>

        <!-- Kartu informasi kendaraan -->
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4 border-end d-flex justify-content-center align-items-center">
                    <img src="{{ asset(App\Helpers\VehicleHelper::getImagePath($vehicle->model)) }}" class="img-fluid my-auto" alt="{{ $vehicle->model }}">
                </div>
                
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $vehicle->nopol }}</h3>
                        <div class="mb-3 text-center"> 
                            <span class="price h5">{{ $vehicle->no_rangka }}</span> 
                        </div>
                        <dl class="row">
                            <dt class="col-sm-3">Model</dt>
                            <dd class="col-sm-9">{{ $vehicle->model }}</dd>

                            <dt class="col-sm-3">Warna</dt>
                            <dd class="col-sm-9">{{ $vehicle->warna }}</dd>

                            <dt class="col-sm-3">Tanggal DEC</dt>
                            <dd class="col-sm-9">{{ $vehicle->tgl_dec ? date('d-m-Y', strtotime($vehicle->tgl_dec)) : '-' }}</dd>
                        
                            <dt class="col-sm-3">Masa Pakai</dt>
                            <dd class="col-sm-9">{{ $vehicle->masa_pakai }}</dd>

                            <dt class="col-sm-3">Tanggal Last Service</dt>
                            <dd class="col-sm-9">{{ $vehicle->tanggal_last_service ? date('d-m-Y', strtotime($vehicle->tanggal_last_service)) : '-' }}</dd>

                            <dt class="col-sm-3">Tanggal Next Service</dt>
                            <dd class="col-sm-9">{{ $vehicle->tanggal_next_service ? date('d-m-Y', strtotime($vehicle->tanggal_next_service)) : '-' }}</dd>
                        </dl>
                        
                        <hr>
                        <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                            <div class="col">
                                <label class="form-label"><b>Asuransi</b></label>
                                <div class="input-group input-spinner">
                                    <dd class="col-sm-9">{{ $vehicle->asuransi ?: '-' }}</dd>
                                </div>
                            </div> 
                            <div class="col">
                                <label class="form-label"><b>Waktu Asuransi</b></label>
                                <div class="input-group input-spinner">
                                    <dd class="col-sm-9">{{ $vehicle->aktif_tanggal ? date('d-m-Y', strtotime($vehicle->aktif_tanggal)) : '-' }}</dd>
                                </div>
                            </div> 
                            <div class="col">
                                <label class="form-label"><b>Status Asuransi</b></label>
                                <div class="input-group input-spinner">
                                    @php
                                        use Carbon\Carbon;
                                        $aktifTanggal = $vehicle->aktif_tanggal ? Carbon::parse($vehicle->aktif_tanggal) : null;
                                        $today = Carbon::now();
                                    @endphp
                                    @if($aktifTanggal && $aktifTanggal->isFuture())
                                        <dd class="col-sm-9 text-success">
                                            Masih aktif ({{ $aktifTanggal->diffForHumans(['parts' => 2]) }})
                                        </dd>
                                    @elseif($aktifTanggal && $aktifTanggal->isPast())
                                        <dd class="col-sm-9 text-danger">
                                            Maaf, asuransi Anda telah habis
                                        </dd>
                                    @else
                                        <dd class="col-sm-9 text-warning">
                                            Data asuransi tidak tersedia
                                        </dd>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                                </div>
                                <div class="tab-title"> Product Description </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-bookmark-alt font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Tags</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Reviews</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                        <p>{{ $vehicle->note ?? 'Tidak ada deskripsi tersedia.' }}</p>
                    </div>
                    <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                        <p>{{ $vehicle->tags ?? 'Tidak ada tag tersedia.' }}</p>
                    </div>
                    <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                        <p>{{ $vehicle->reviews ?? 'Belum ada ulasan.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('headerText').classList.add('show');
        }, 500); // Delay of 2 seconds, matching the car animation duration
    });
</script>
@endsection
