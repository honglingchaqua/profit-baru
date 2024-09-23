@extends("layouts.app")
    
@section('style')
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase text-center fs-4">Data Kendaraan</h6>
        <hr/>
        
        <!-- Tombol Tambah Data -->
        <div class=" w-100 mb-3">
            <a href="{{ route('admin.create-data') }}" class=" w-100 btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>
        
        <!-- Filter -->
        <div class="card mb-3">
            <div class="card-body">
                <form id="filter-form">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <select class="form-select" id="warna" name="warna">
                                <option value="">Semua Warna</option>
                                <option value="PUTIH">Putih</option>
                                <option value="HITAM">Hitam</option>
                                <option value="HITAM METALIK">Hitam Metalik</option>
                                <option value="HITAM - ORANYE">Hitam Oranye</option>
                                <option value="HITAM - PUTIH">Hitam Putih</option>
                                <option value="HITAM - SILVER">Hitam Silver</option>
                                <option value="HITAM SILVER METALIK">Hitam Silver Metalik</option>
                                <option value="HITAM BIRU METALIK">Hitam Biru Metalik</option>
                                <option value="HITAM KUNING">Hitam Kuning</option>
                                <option value="HITAM MERAH">Hitam Merah</option>
                                <option value="SILVER METALIK">Silver Metalik</option>
                                <option value="ABU-ABU METALIK">Abu-Abu Metalik</option>
                                <option value="Merah">Merah</option>
                                <option value="BIRU METALIK">Biru Metalik</option>
                                <option value="BIRU TUA METALIK">Biru Tua Metalik</option>
                                <option value="COKLAT METALIK">Coklat Metalik</option>
                                <option value="KUNING">Kuning</option>
                                <option value="KUNING METALIK">Kuning Metalik</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="model" class="form-label">Model</label>
                            <select class="form-select" id="model" name="model">
                                <option value="">Semua Model</option>
                                <!-- Isi dengan opsi model dari database -->
                            </select>
                        </div>
                        <div class=" d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nopol</th>
                                <th>No Rangka</th>
                                <th>Model</th>
                                <th>Warna</th>
                                <th>Tanggal DEC</th>
                                <th>Tanggal Next Service</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->nopol }}</td>
                                <td>{{ $vehicle->no_rangka }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->warna }}</td>
                                <td>{{ $vehicle->tgl_dec }}</td>
                                <td>{{ $vehicle->tanggal_next_service }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $vehicle->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                    <button class="btn btn-danger btn-sm delete-vehicle" data-id="{{ $vehicle->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            // ... (kode DataTable yang sudah ada) ...
        });

        // Filter functionality
        $('#filter-form').on('submit', function(e) {
            e.preventDefault();
            table.ajax.reload();
        });

        // ... (kode delete yang sudah ada) ...
    });
</script>
<script>
    $(document).ready(function() {
    // Fungsi untuk inisialisasi DataTable
    function initializeDataTable() {
        // Jika DataTable sudah diinisialisasi, hancurkan terlebih dahulu
        if ($.fn.dataTable.isDataTable('#example')) {
            $('#example').DataTable().destroy();
        }

        // Inisialisasi DataTable
        var table = $('#example').DataTable({
            // ... (kode DataTable yang sudah ada) ...
        });

        // Memulihkan posisi scroll
        if (localStorage.getItem('scrollPosition')) {
            window.scrollTo(0, localStorage.getItem('scrollPosition'));
        }

        // Memulihkan status sort
        if (localStorage.getItem('sortOrder')) {
            const sortOrder = JSON.parse(localStorage.getItem('sortOrder'));
            table.order(sortOrder).draw();
        }

        // Menyimpan posisi scroll dan status sort sebelum refresh
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollPosition', window.scrollY);
            localStorage.setItem('sortOrder', JSON.stringify(table.order()));
        });
    }

    // Panggil fungsi untuk inisialisasi
    initializeDataTable();

    // Filter functionality
    $('#filter-form').on('submit', function(e) {
        e.preventDefault();
        table.ajax.reload();
    });

    // (kode delete yang sudah ada)
});

</script>

@endsection