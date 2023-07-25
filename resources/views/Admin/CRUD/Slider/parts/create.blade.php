<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('sliders.store')}}">
    @csrf
    <div class="modal-body">
        <div class="mb-3 h-25">
            <label class="form-label">الصورة (يفضل ان تكون بخلفية شفافة  بحجم 530px * 430px)</label>
            <input type="file" class="dropify" name="image" data-default-file="{{getFile()}}"
                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
            <span class="form-text text-info">مسموح فقط بالصيغ الاتية : png, gif, jpeg, jpg, webp</span>
        </div>
        <div class="mb-3">
            <label class="form-label">العنوان (عربي)</label>
            <input type="text" name="title_ar" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label class="form-label">العنوان (انجليزي)</label>
            <input type="text" name="title_en" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label class="form-label">العنوان الفرعي او الوصف (عربي)</label>
            <input type="text" name="sub_title_ar" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label class="form-label">العنوان الفرعي او الوصف (انجليزي)</label>
            <input type="text" name="sub_title_en" class="form-control" placeholder="">
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
