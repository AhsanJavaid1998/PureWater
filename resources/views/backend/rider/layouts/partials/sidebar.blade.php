<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">{{ env('APP_NAME') }}</a>

        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#" >{{ Str::limit(env('APP_NAME'), $limit = 1) }}</a>
        </div>
        <ul class="sidebar-menu">
            <ul class="sidebar-menu">


                <li class=" active ">
                    <a class="nav-link " href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="">
                    <a class="nav-link " href="">
                        <i class="far fa-images"></i> <span>Media</span>
                    </a>
                </li>

                {{--            <li class="">--}}
                {{--                <a class="nav-link " href="">--}}
                {{--                    <i class="far fa-copy"></i> <span>Pages</span>--}}
                {{--                </a>--}}
                {{--            </li>--}}
{{--                <li class="dropdown ">--}}
{{--                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> <span>Products</span></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="nav-link " href="">Products</a></li>--}}
{{--                        <li><a class="nav-link " href="">Add Product</a></li>--}}
{{--                        <li><a class="nav-link " href="">Menu Category</a></li>--}}
{{--                        <li><a class="nav-link " href="">Cuisine Category</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                {{--            <li class="">--}}
                {{--                <a class="nav-link " href="">--}}
                {{--                    <i class="fas fa-list-ul"></i> <span>Category</span>--}}
                {{--                </a>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-utensils"></i> <span>Vendor</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="">Vendors Requests</a></li>--}}
                {{--                    <li><a class="nav-link " href="">All Vendors</a></li>--}}
                {{--                    <li><a class="nav-link " href="">Manage Review</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bicycle"></i> <span>Riders</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="">Rider Requests</a></li>--}}
                {{--                    <li><a class="nav-link " href="">All Riders</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}

                {{--            <li class="">--}}
                {{--                <a class="nav-link " href="">--}}
                {{--                    <i class="fas fa-users"></i> <span>Customers</span>--}}
                {{--                </a>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-wallet"></i> <span>Payouts</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="">Payments Request</a></li>--}}
                {{--                    <li><a class="nav-link " href="">Payments History</a></li>--}}
                {{--                    <li><a class="nav-link " href="">Payout Accounts</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                <li class="dropdown ">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cubes"></i> <span>Orders</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link " href="">All Orders</a></li>
                        <li><a class="nav-link " href="">Pending Orders</a></li>
                        <li><a class="nav-link " href="">Accept Orders</a></li>
                        <li><a class="nav-link " href="">Complete Orders</a></li>
                    </ul>
                </li>
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-check-alt"></i> <span>Plans</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/plan/create">Create New</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/plan">Manage Plan</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/plan/payment/request">Payment Request</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map-marked-alt"></i> <span>Locations</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/location/create">Create New</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/location">Manage Locations</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-certificate"></i> <span>Badges</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/badge?type=seller">Seller Badge</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-highlighter"></i> <span>Featured</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/featured/create?type=seller">Featured Seller</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/featured/create?st=1&amp;type=seller&amp;manage=featured_seller">Manage Featured Seller</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                <li class="dropdown ">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-bill-alt"></i> <span>Earning Reports</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link " href="">Earning By Order</a></li>
                        <li><a class="nav-link " href="">Earning By Delivery</a></li>
                    </ul>
                </li>
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-palette"></i> <span>Appearance</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/appearance/theme">Theme</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/appearance/menu">Menu</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                <li class="dropdown ">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Settings</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link " href="">Site Settings</a></li>
                        <li><a class="nav-link " href="">Seo</a></li>
                        <li><a class="nav-link " href="">Filesystem</a></li>
                        <li><a class="nav-link " href="">System Settings</a></li>
                        <li><a class="nav-link " href="">Payment Settings</a></li>
                    </ul>
                </li>
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-language"></i> <span>Language</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/language/create">Create Language</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/language">Language Settings</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}
                {{--            <li class="dropdown ">--}}
                {{--                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-shield"></i> <span>Admins And Roles</span></a>--}}
                {{--                <ul class="dropdown-menu">--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/role">Roles</a></li>--}}
                {{--                    <li><a class="nav-link " href="https://nex.mealsmash.com/admin/users">Admins</a></li>--}}
                {{--                </ul>--}}
                {{--            </li>--}}

                {{--            <li class="">--}}
                {{--                <a class="nav-link " href="https://nex.mealsmash.com/admin/update">--}}
                {{--                    <i class="fas fa-upload"></i> <span>Update</span>--}}
                {{--                </a>--}}
                {{--            </li>--}}
            </ul>
        </ul>
    </aside>
</div>



