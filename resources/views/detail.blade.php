		@extends("layouts.app")

		@section("wrapper")
            <div class="page-wrapper">
            <div class="page-content">

             
<h1 class="text-center mb-4">DATA KENDARAAN ANDA</h1>
                 <div class="card">
                    <div class="row g-0">
                      <div class="col-md-4 border-end">
                        <img src="{{ asset(App\Helpers\VehicleHelper::getImagePath($vehicle->model)) }}" class="img-fluid" alt="{{ $vehicle->model }}">
                    
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
                                        <div class="tab-title"> Note </div>
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
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                            </div>
                            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                            </div>
                        </div>
                    </div>

                  </div>


                    
            </div>
        </div>
		@endsection

