<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{route('dashboard')}}" class="brand-link">
    <img src="{{asset('storage/images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('storage/images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{route('dashboard')}}" class="d-block">Admin</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="{{route('dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Blog
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('post.index')}}" class="nav-link">
                            <i class="fas fa-pen-square nav-icon"></i>
                            <p>Post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link">
                            <i class="fas fa-indent nav-icon"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tag.index')}}" class="nav-link">
                            <i class="fas fa-arrows-alt nav-icon"></i>
                            <p>Tag</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>User List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope nav-icon"></i>
                    <p>
                        Message

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('contact.index')}}" class="nav-link">
                            <i class="fas fa-envelope nav-icon"></i>
                            <p>Contact</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('police.index')}}" class="nav-link">
                            <i class="fas fa-envelope nav-icon"></i>
                            <p>Police</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('doctor.index')}}" class="nav-link">
                            <i class="fas fa-envelope nav-icon"></i>
                            <p>Doctor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tag.index')}}" class="nav-link">
                            <i class="fas fa-arrows-alt nav-icon"></i>
                            <p>Tag</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope nav-icon"></i>
                    <p>
                        Blood Bank

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('findBlood.index')}}" class="nav-link">
                            <i class="fas fa-envelope nav-icon"></i>
                            <p>Find Blood</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('findDoner.index')}}" class="nav-link">
                            <i class="fas fa-envelope nav-icon"></i>
                            <p>Blood Doner</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tag.index')}}" class="nav-link">
                            <i class="fas fa-arrows-alt nav-icon"></i>
                            <p>Tag</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>My Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <div>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="nav-link bg-danger"><i class="fas fa-sign-out-alt"></i>Log Out</button>
                    </form>

                </div>
            </li>


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
