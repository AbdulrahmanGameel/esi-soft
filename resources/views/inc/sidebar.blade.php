<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <ul class="nav flex-column">

        <li class="nav-item">

            <a class="nav-link {{ (Request::is('/')) ? 'active' : '' }}" href="/">

                <span class="iconify sidebar-ico" data-icon="mdi-light:home" data-inline="false"></span>

                <span class="sidebar-text">

                    الرئيسية

                </span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link  {{ (Request::is('our_products')) ? 'active' : '' }}" href="our_products">

                <span class="iconify  sidebar-ico" data-icon="ps:cart-supermarket" data-inline="false"></span>

                <span class="sidebar-text">

                    منتجاتنا

                </span>

            </a>
        </li>
        <li class="nav-item">

            <a class="nav-link  {{ (Request::is('restaurant')) ? 'active' : '' }}" href="restaurant">

                <span class="iconify sidebar-sub-ico" data-icon="emojione-monotone:fork-and-knife-with-plate"
                    data-inline="false"></span>

                <span class="sidebar-sub-text">

                    مطاعم

                </span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link{{ (Request::is('supermarket')) ? 'active' : '' }}" href="supermarket">

                <span class="iconify sidebar-sub-ico" data-icon="dashicons:products" data-inline="false"></span>

                <span class="sidebar-sub-text">

                    سوبر ماركت

                </span>

            </a>

        </li>


        <li class="nav-item">

            <a class="nav-link {{ (Request::is('clients')) ? 'active' : '' }}" href="clients">

                <span class="iconify sidebar-ico" data-icon="fa-solid:users" data-inline="false"></span>

                <span class="sidebar-text">

                    عملائنا

                </span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">

                <span class="iconify sidebar-ico" data-icon="mdi-light:phone" data-inline="false"></span>

                <span class="sidebar-text">

                    تواصل معنا

                </span>

            </a>

        </li>

        <li class="nav-item">
    
            <a class="dropdown-btn nav-link">
                <span class="iconify  sidebar-ico" data-icon="ps:cart-supermarket" data-inline="false"></span>
                <span class="sidebar-text">

                    Dropdown
                </span>
            </a>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </li>
    </ul>

</div>