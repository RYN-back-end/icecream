<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('reviews.store')}}">
    @csrf
    <div class="modal-body">
        <div class="mb-3 h-25">
            <label class="form-label">اختيار صورة صاحب التعليق</label>
            <input type="file" class="dropify" name="image" data-default-file="{{getUserImage()}}"
                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
            <span class="form-text text-info">مسموح فقط بالصيغ الاتية : png, gif, jpeg, jpg, webp</span>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label class="form-label">الاسم (عربي)</label>
                <input type="text" name="name_ar" class="form-control">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">الاسم (انجليزي)</label>
                <input type="text" name="name_en" class="form-control">
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">التعليق (عربي)</label>
                <textarea name="desc_ar" class="form-control"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">التعليق (انجليزي)</label>
                <textarea name="desc_en" class="form-control"></textarea>
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">التعليق من خلال (عربي)</label>
                <input type="text" name="written_at_ar" class="form-control" placeholder="مثال : علي قيسبوك او تويتر او زائر في المحل">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">التعليق من خلال (انجليزي)</label>
                <input type="text" name="written_at_en" class="form-control" placeholder="example: Facebook Comment or Visitor">
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
