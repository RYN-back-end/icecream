@extends('Admin.Layout.app')
@section('title')
    مقطع التقاليد
@endsection
@section('pageName')
    مقطع التقاليد
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
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('traditionUpdate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">مقطع التقاليد (يظهر في الصفحة الرئيسية)</h4>
                        <div class="mb-3 h-25">
                            <label class="form-label">الصورة</label>
                            <input type="file" class="dropify" name="image"
                                   data-default-file="{{getFile(($row->image) ?? '')}}"
                                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
                            <span class="form-text text-info">مسموح فقط بـ: png, gif, jpeg, jpg, webp</span>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="title_ar">العنوان (عربي)</label>
                                    <input type="text" id="title_ar" name="title_ar" class="form-control" required value="{{($row->title_ar) ?? ''}}">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="title_en">العنوان (انجليزي)</label>
                                    <input type="text" id="title_en" name="title_en" class="form-control" required value="{{($row->title_en) ?? ''}}">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="sub_title_ar">العنوان الفرعي (عربي)</label>
                                    <input type="text" id="sub_title_ar" name="sub_title_ar" class="form-control" required value="{{($row->sub_title_ar) ?? ''}}">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="sub_title_en">العنوان الفرعي (انجليزي)</label>
                                    <input type="text" id="sub_title_en" name="sub_title_en" class="form-control" required value="{{($row->sub_title_en) ?? ''}}">
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="desc_ar">الوصف (عربي)</label>
                                    <textarea rows="3" id="desc_ar" name="desc_ar" class="form-control" required>{{($row->desc_ar) ?? ''}}</textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="desc_en">الوصف (انجليزي)</label>
                                    <textarea rows="3" id="desc_en" name="desc_en" class="form-control" required>{{($row->desc_en) ?? ''}}</textarea>
                                </div>
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
    </script>
@endsection
