@extends('Admin.Layout.app')
@section('title')
    التحكم في الموقع
@endsection
@section('pageName')
    التحكم في الموقع
@endsection
@section('content')
    @if($errors->any())
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">يرجي تصحيح الاخطاء التالية</h4>
                <div class="">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$error}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('settingUpdate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">الاعدادات الاساسية</h4>
                        <div class="mb-3 h-25">
                            <label class="form-label">اللوجو</label>
                            <input type="file" class="dropify" name="logo"
                                   data-default-file="{{getFile(($text->logo) ?? '')}}"
                                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
                            <span class="form-text text-info">مسموح فقط بـ: png, gif, jpeg, jpg, webp</span>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="second_section_ar">نص المقطع الثاني في الصفحة الرئيسية (عربي)</label>
                                    <textarea rows="3" id="second_section_ar" name="second_section_ar" class="form-control" required>{{($text->second_section_ar) ?? ''}}</textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="second_section_en">نص المقطع الثاني في الصفحة الرئيسية (انجليزي)</label>
                                    <textarea rows="3" id="second_section_en" name="second_section_en" class="form-control" required>{{($text->second_section_en) ?? ''}}</textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="category_desc_ar">نص مقطع OUR SPECIALTIES (عربي)</label>
                                    <textarea rows="3" id="category_desc_ar" name="category_desc_ar" class="form-control" required>{{($text->category_desc_ar) ?? ''}}</textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="category_desc_en">نص مقطع OUR SPECIALTIES (انجليزي)</label>
                                    <textarea rows="3" id="category_desc_en" name="category_desc_en" class="form-control" required>{{($text->category_desc_en) ?? ''}}</textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="flavor_desc_ar">نص مقطع Flavor (عربي)</label>
                                    <textarea rows="3" id="flavor_desc_ar" name="flavor_desc_ar" class="form-control" required>{{($text->flavor_desc_ar) ?? ''}}</textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="flavor_desc_en">نص مقطع Flavor (انجليزي)</label>
                                    <textarea rows="3" id="flavor_desc_en" name="flavor_desc_en" class="form-control" required>{{($text->flavor_desc_en) ?? ''}}</textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="wholesale_desc_ar">نص مقطع Wholesale (عربي)</label>
                                    <textarea rows="3" id="wholesale_desc_ar" name="wholesale_desc_ar" class="form-control" required>{{($text->wholesale_desc_ar) ?? ''}}</textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="wholesale_desc_en">نص مقطع Wholesale (انجليزي)</label>
                                    <textarea rows="3" id="wholesale_desc_en" name="wholesale_desc_en" class="form-control" required>{{($text->wholesale_desc_en) ?? ''}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">صفحة OUR STORY</h4>
                        <div class="mb-3 h-25">
                            <label class="form-label">صورة صفحة OUR STORY</label>
                            <input type="file" class="dropify" name="about_image"
                                   data-default-file="{{getFile(($text->about_image) ?? '')}}"
                                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
                            <span class="form-text text-info">مسموح فقط بـ: png, gif, jpeg, jpg, webp</span>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">محتوي صفحة OUR STORY (عربي)</label>
                                <textarea id="about_desc_ar" name="about_desc_ar" required>{!! ($text->about_desc_ar) ?? '' !!}</textarea>
                            </div>

                            <div class="mb-3 col-12">
                                <label class="form-label">محتوي صفحة OUR STORY (انجليزي)</label>
                                <textarea id="about_desc_en" name="about_desc_en" required>{!! ($text->about_desc_en) ?? '' !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">محتوي صفحة ORDER</h4>
                        <div class="mb-3 h-25">
                            <label class="form-label">صورة المنيو</label>
                            <input type="file" class="dropify" name="menu"
                                   data-default-file="{{getFile(($text->menu) ?? '')}}"
                                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
                            <span class="form-text text-info">مسموح فقط بـ: png, gif, jpeg, jpg, webp</span>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">محتوي صفحة ORDER (عربي)</label>
                                <textarea id="order_desc_ar" name="order_desc_ar" required>{!! ($text->order_desc_ar) ?? '' !!}</textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">محتوي صفحة ORDER (انجليزي)</label>
                                <textarea id="order_desc_en" name="order_desc_en" required>{!! ($text->order_desc_en) ?? '' !!}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">تحديث</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

    <!-- end row -->

@endsection
@section('dashboard-js')
    <script>
        $('.dropify').dropify("Upload Here");
        CKEDITOR.replace('about_desc_ar');
        CKEDITOR.replace('about_desc_en');
        CKEDITOR.replace('order_desc_ar');
        CKEDITOR.replace('order_desc_en');
    </script>
@endsection
