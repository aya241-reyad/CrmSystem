 <!-- Layout container -->
 <div class="layout-page">
     <!-- Navbar -->

     <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
         id="layout-navbar">
         <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
             <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                 <i class="bx bx-menu bx-sm"></i>
             </a>
         </div>

         <div class="navbar-nav-right d-flex align-items-center w-100" id="navbar-collapse">
             <div class="nav-item d-flex align-items-center">
                 Hello {{ Auth::user()->name }}
             </div>


             <ul class="navbar-nav flex-row align-items-center ms-auto"
                

                     <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                         <i class="bx bx-power-off me-2"></i>
                        Logout
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                         @csrf
                     </form>
                 </li>

                 
                                        
                         
             </ul>
         </div>
     </nav>

     <!-- / Navbar -->
