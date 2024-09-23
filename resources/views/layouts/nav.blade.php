<div class="primary-menu">
               <nav class="navbar navbar-expand-lg align-items-center">
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header border-bottom">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                            </div>
                            <div class="">
                                <h4 class="logo-text">Rocker</h4>
                            </div>
                        </div>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav align-items-center flex-grow-1">
                      
                        <a class="nav-link" href="{{ url('admin.dashboard') }}">
                          <div class="parent-icon">
                            <i class='bx bx-home-alt'></i>
                          </div>
                          <div class="menu-title d-flex align-items-center">Dashboard</div>
                        </a>
                        
                        <a class="nav-link" href="{{ url('table-datatable') }}">
                          <div class="parent-icon">
                            <i class="bx bx-grid-alt"></i>
                          </div>
                          <div class="menu-title d-flex align-items-center">Data Kendaraan</div>
                        </a>
                         
                          
                        
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                                </div>
                                <div class="menu-title d-flex align-items-center">Forms</div>
                                <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="dropdown-item" href="{{ url('form-elements') }}"><i class='bx bx-message-square-dots'></i>Form Elements</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-input-group') }}"><i class='bx bx-book-content' ></i>Input Groups</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-radios-and-checkboxes') }}"><i class='bx bx-radio-circle-marked'></i>Radios & Checkboxes</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-layouts') }}"><i class='bx bx-layer'></i>Forms Layouts</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-validations') }}"><i class='bx bx-file-blank' ></i>Form Validation</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-wizard') }}"><i class='bx bx-glasses'></i>Form Wizard</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-text-editor') }}"><i class='bx bx-edit'></i>Text Editor</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-file-upload') }}"><i class='bx bx-upload'></i>File Upload</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-date-time-pickes') }}"><i class='bx bx-calendar-check' ></i>Date Pickers</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-select2') }}"><i class='bx bx-check-double'></i>Select2</a>
                                </li>
                                <li> <a class="dropdown-item" href="{{ url('form-repeater') }}"><i class='bx bx-directions'></i>Form Repeater</a>
                                </li>
                            </ul>
                          </li>
                       
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class='bx bx-briefcase-alt'></i>
                                </div>
                                <div class="menu-title d-flex align-items-center">UI Elements</div>
                                <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                            </a>
                            <ul class="dropdown-menu">
                          <li class="nav-item dropend">
                                <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-cart' ></i>eCommerce</a>
                                <ul class="dropdown-menu submenu">
                                   <li><a class="dropdown-item" href="{{ url('ecommerce-products-details') }}"><i class='bx bx-radio-circle'></i>Product Details</a></li>
                                    <li><a class="dropdown-item" href="{{ url('ecommerce-add-new-products') }}"><i class='bx bx-radio-circle'></i>Add New Products</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item dropend">
                                <a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"><i class='bx bx-ghost'></i>Components</a>
                                <ul class="dropdown-menu scroll-menu">
                                    <li><a class="dropdown-item" href="{{ url('component-modals') }}"><i class='bx bx-radio-circle'></i>Modals</a></li>
                                    <li><a class="dropdown-item" href="{{ url('component-notifications') }}"><i class='bx bx-radio-circle'></i>Notifications</a></li>
                                  </ul>
                              </li>
                             </ul>
                          </li>
                         
                        
                         
                                                   
                      </ul>
                    </div>
                  </div>
              </nav>
        </div>