<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">

        <div>
            <h4 class="logo-text">AK Properties</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.home') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Property MGT</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.property.show') }}">
                        <i class="bx bx-right-arrow-alt"></i> Property List
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.property.add') }}">
                        <i class="bx bx-right-arrow-alt"></i> Property Add
                    </a>
                </li>
                <li>
                    <a href="ecommerce-add-new-products.html">
                        <i class="bx bx-right-arrow-alt"></i> Add New Products
                    </a>
                </li>
                <li>
                    <a href="ecommerce-orders.html">
                        <i class="bx bx-right-arrow-alt"></i> Orders
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>