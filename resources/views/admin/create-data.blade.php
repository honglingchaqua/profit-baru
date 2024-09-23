@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <!-- Adjust column to full width on all screen sizes -->
                <div class="col-12">
                    <h6 class="mb-4 text-uppercase text-center fs-4">Tambah Kendaraan</h6>
                    
                    <!-- Make card full width and responsive -->
                    <div class="card w-100 border border-dark">
                        <div class="card-body">
                            <div class="p-2 border rounded ">
                                <form class="row g-4 needs-validation" novalidate>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label fw-bold">Nopol</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom01" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label fw-bold">No Rangka</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom02"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label fw-bold">Model</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom01"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label fw-bold">Warna</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom02"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label fw-bold">Tanggal DEC</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom01"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label fw-bold">Masa Pakai</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom02"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label fw-bold">Tanggal Last Service</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom01"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label fw-bold">Tanggal Next Service</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom02"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustomUsername" class="form-label fw-bold">Note Service</label>
                                        <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">Note</span>
                                            <input type="text" class="form-control border border-dark" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">Please Input text Here</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label fw-bold">Asuransi</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom01"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label fw-bold">Aktif Tanggal</label>
                                        <input type="text" class="form-control border border-dark" id="validationCustom02"  required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <button class="btn btn-primary w-100" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'

			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')

			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}

					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>
	@endsection