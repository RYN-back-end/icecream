<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">قائمة الصفحات</li>


                <li>
                    <a href="{{route('adminHome')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-home">الرئيسية</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">المشرفين</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admins.index')}}" key="t-admins"> قائمة المشرفين</a></li>
                        <li><a href="{{route('admins.create')}}" class="create-model" key="t-default"> اضافة مشرف</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-image"></i>
                        <span key="t-dashboards">البانر المتحرك</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('sliders.index')}}" key="t-admins"> التحكم </a></li>
                        <li><a href="{{route('sliders.create')}}" class="create-model" key="t-default"> اضافة جديد</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-menu"></i>
                        <span key="t-dashboards">الاقسام والتخصصات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('categories.index')}}" key="t-categories"> قائمة الاقسام</a></li>
                        <li><a href="{{route('categories.create')}}" class="create-model" key="t-default"> اضافة قسم</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shopping-bag"></i>
                        <span key="t-dashboards">المنتجات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('products.index')}}" key="t-categories"> قائمة المنتجات</a></li>
                        <li><a href="{{route('products.create')}}" class="create-model" key="t-default"> اضافة منتج</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-comment"></i>
                        <span key="t-dashboards">التعليقات والمراجعات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('reviews.index')}}" key="t-categories"> قائمة التعليقات</a></li>
                        <li><a href="{{route('reviews.create')}}" class="create-model" key="t-default"> اضافة تعليق</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('admin.logout')}}" class="waves-effect">
                        <i class="bx bx-power-off"></i>
                        <span key="t-logout">تسجيل الخروج</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
