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
                        <i class="bx bx-bookmark-plus"></i>
                        <span key="t-dashboards">التعليقات والمراجعات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('reviews.index')}}" key="t-categories"> قائمة التعليقات</a></li>
                        <li><a href="{{route('reviews.create')}}" class="create-model" key="t-default"> اضافة تعليق</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-building-house"></i>
                        <span key="t-dashboards">العملاء</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('clients.index')}}" key="t-categories"> قائمة العملاء</a></li>
                        <li><a href="{{route('clients.create')}}" class="create-model" key="t-default"> اضافة عميل</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-box"></i>
                        <span key="t-dashboards">النكهات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('flavors.index')}}" key="t-categories"> قائمة النكهات</a></li>
                        <li><a href="{{route('flavors.create')}}" class="create-model" key="t-default"> اضافة نكهة</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-car"></i>
                        <span key="t-dashboards">طرق الطلب</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('order_ways.index')}}" key="t-categories"> عرض الكل</a></li>
                        <li><a href="{{route('order_ways.create')}}" class="create-model" key="t-default"> اضافة طريقة</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('wholesale.index')}}" class="waves-effect">
                        <i class="bx bxs-offer"></i>
                        <span key="t-logout">البيع بالجملة Wholesale</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('contacts.index')}}" class="waves-effect">
                        <i class="bx bx-message"></i>
                        <span key="t-logout">طلبات التواصل</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('tradition.index')}}" class="waves-effect">
                        <i class="bx bx-image"></i>
                        <span key="t-logout">التقاليد</span>
                    </a>
                </li>



                <li>
                    <a href="{{route('settings.index')}}" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-logout">نصوص الموقع</span>
                    </a>
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
