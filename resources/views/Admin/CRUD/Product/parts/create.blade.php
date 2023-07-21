<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('products.store')}}">
    @csrf
    <div class="modal-body">
        <div class="row mb-3 h-25">
            <div class="col-6">
                <label class="form-label">الصورة الرئيسية للمنتج</label>
                <input type="file" class="dropify" name="image" data-default-file="{{getFile()}}"
                       accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
            </div>
            <div class="col-6">
                <label class="form-label">صور المنتج</label>
                <input type="file" class="dropify" name="images[]" multiple data-default-file="{{getFile()}}"
                       accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
            </div>
            <span class="form-text text-info text-center">مسموح فقط بالصيغ الاتية : png, gif, jpeg, jpg, webp</span>
        </div>
        <div class="row">
            <div class="templating-select col-lg-12 mb-3">
                <label class="form-label">القسم</label>
                <select class="form-control" name="category_id">
                    <option disabled selected>--- اختار قسم المنتج ---</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title_ar}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 col-lg-6">
                <label class="form-label">اسم المنتج (عربي)</label>
                <input type="text" name="title_ar" class="form-control" placeholder="">
            </div>
            <div class="mb-3 col-lg-6">
                <label class="form-label">اسم المنتج (انجليزي)</label>
                <input type="text" name="title_en" class="form-control" placeholder="">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">وصف المنتج (عربي)</label>
            <textarea  name="desc_ar" class="form-control" placeholder=""></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">وصف المنتج (انجليزي)</label>
            <textarea  name="desc_en" class="form-control" placeholder=""></textarea>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label class="form-label">سعر الكبير (يترك فارغ في حالة عدم وجود الحجم)</label>
                <input type="number" min="0" name="large_price" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">سعر الوسط (يترك فارغ في حالة عدم وجود الحجم)</label>
                <input type="number" min="0" name="medium_price" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">سعر الصغير (يترك فارغ في حالة عدم وجود الحجم)</label>
                <input type="number" min="0" name="small_price" class="form-control">
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
    </div>
</form>

<script>
    $('.dropify').dropify("Upload Here");
</script>
