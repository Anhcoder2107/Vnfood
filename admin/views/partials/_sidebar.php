<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo APPURL ?>admin">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Product</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="product">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product/create">Create Products</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Blog</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog/create">Create Blog</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Category</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="category">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category/create">Create Category</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#order" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Order</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
            <div class="collapse" id="order">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="orders">Orders</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>