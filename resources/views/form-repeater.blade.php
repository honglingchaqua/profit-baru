@extends("layouts.app")

	@section("style")
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	@endsection
		@section("wrapper")
            <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Forms</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Repeater</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">    <a class="dropdown-item" href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div>    <a class="dropdown-item" href="javascript:;">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->


                <!-- Repeater Html Start -->
                <div id="repeater">
                    <!-- Repeater Heading -->

                      <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Repeater</h5>
                                <button class="btn btn-primary repeater-add-btn px-4">Add</button>
                            </div>
                        </div>
                      </div>
                    
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
                        <div class="card">
                            <div class="card-body">
                                <!-- Repeater Content -->
                                <div class="item-content">
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="inputName1" placeholder="Name" data-name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmail1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="Email" data-skip-name="true" data-name="email">
                                    </div>
                                </div>
                                <!-- Repeater Remove Btn -->
                                <div class="repeater-remove-btn">
                                    <button class="btn btn-danger remove-btn px-4">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="items" data-group="test">

                        <div class="card">
                            <div class="card-body">
                            <!-- Repeater Content -->
                            <div class="item-content">
                                <div class="mb-3">
                                    <label for="inputName2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputName2" placeholder="Name" data-name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail2" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="inputEmail2" placeholder="Email" data-skip-name="true" data-name="email">
                                </div>
                            </div>
                            <!-- Repeater Remove Btn -->
                            <div class="repeater-remove-btn">
                                <button class="btn btn-danger remove-btn px-4">
                                    Remove
                                </button>
                            </div>
                            </div>
                        </div>

                    </div>


                    <div class="items" data-group="test">
                        <div class="card">
                            <div class="card-body">
                            <!-- Repeater Content -->
                            <div class="item-content">
                                <div class="mb-3">
                                    <label for="inputName3" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputName3" placeholder="Name" data-name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail3" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email" data-skip-name="true" data-name="email">
                                </div>
                            </div>
                            <!-- Repeater Remove Btn -->
                            <div class="repeater-remove-btn">
                                <button class="btn btn-danger remove-btn px-4">
                                    Remove
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Repeater End -->
                

            </div>
        </div>
		@endsection



	@section("script")
    <script src="assets/plugins/form-repeater/repeater.js"></script>
    <script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
	@endsection
