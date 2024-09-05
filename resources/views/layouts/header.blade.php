    <!--start header wrapper-->
    @vite('resources/js/app.js')
    <div class="header-wrapper">
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-3">
                    <div class="topbar-logo-header d-none d-lg-flex">
                        <div class="">
                            <img src="assets/images/Black Retro Minimalist Vegan Cafe Logo.png" width="250" alt="logo icon">
                        </div>
                        </div>
                    <div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
                          <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center gap-1">
                            <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                                <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                                </a>
                            </li>
                                   <li class="nav-item dark-mode d-none d-sm-flex">
                                <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-app">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="app-container ">
                                      <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                         <div class="col">
                                          <a href="javascript:;">
                                            <div class="app-box text-center">
                                                <a href="https://www.agungtoyota.co.id/" target="_blank">
                                                    <div class="app-icon">
                                                        <img src="/assets/images/Untitled.jpg" width="30" alt="">
                                                    </div>
                                                </a>                                                
                                              <div class="app-name">
                                                  <p class="mb-0 mt-1">Agung Toyota Web</p>
                                                
                                              </div>
                                              </div>
                                            </a>
                                         </div>
                                         <div class="col">
                                          <a href="javascript:;">
                                            <div class="app-box text-center">
                                                <a href="https://wa.me/628117483800" target="_blank">
                                                    <div class="app-icon">
                                                        <img src="assets/images/whatsapp.svg" width="38" alt="">
                                                    </div>
                                                </a>     
                                              <div class="app-name">
                                                  <p class="mb-0 mt-1">WhatsApp</p>
                                              </div>
                                              </div>
                                          </a>
                                         </div>
                                         <div class="col">
                                            <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <a href="https://www.instagram.com/agungtoyotapaal10?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                                                      <div class="app-icon">
                                                          <img src="assets/images/instagram.svg" width="37" alt="">
                                                      </div>
                                                  </a>     
                                                <div class="app-name">
                                                    <p class="mb-0 mt-1">Instagram</p>
                                                </div>
                                                </div>
                                              </a>
                                           </div>            
  
                
                                      </div><!--end row-->
                
                                    </div>
                                </div>
                            </li>



                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-notifications-list">
                                </div>
                            </li>

                            

                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown px-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/Charlotte, The President's Daughter - Chapter 12.jpg" class="user-img" alt="user avatar">
                            <div class="user-info">
                                <p class="user-name mb-0">Jennie</p>
                                <p class="designattion mb-0">Admin</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="user-profile"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
                            </li>
                            
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="auth-cover-signin"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <!-- Page wrapper end -->
