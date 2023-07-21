<form id="updateForm" class="updateForm" method="POST" enctype="multipart/form-data" action="{{route('reviews.update',$row->id)}}">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <input type="hidden" value="{{$row->id}}" name="id">
        <div class="mb-3 h-25">
            <label class="form-label">صورة صاحب التعليق</label>
            <input type="file" class="dropify" name="image" data-default-file="{{getUserImage($row->image)}}"
                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
            <span class="form-text text-info">مسموح فقط بالصيغ الاتية : png, gif, jpeg, jpg, webp</span>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label class="form-label">الاسم (عربي)</label>
                <input type="text" name="name_ar" class="form-control" value="{{$row->name_ar}}">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">الاسم (انجليزي)</label>
                <input type="text" name="name_en" class="form-control" value="{{$row->name_en}}">
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">التعليق (عربي)</label>
                <textarea name="desc_ar" class="form-control">{{$row->desc_ar}}</textarea>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">التعليق (انجليزي)</label>
                <textarea name="desc_en" class="form-control">{{$row->desc_en}}</textarea>
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">التعليق من خلال (عربي)</label>
                <input type="text" name="written_at_ar" class="form-control" value="{{$row->written_at_ar}}" placeholder="مثال : علي قيسبوك او تويتر او زائر في المحل">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">التعليق من خلال (انجليزي)</label>
                <input type="text" name="written_at_en" class="form-control" value="{{$row->written_at_en}}" placeholder="example: Facebook Comment or Visitor">
            </div>
        </div>


    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="updateButton">تحديث</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
    </div>
</form>

<script>
    $('.dropify').dropify();
</script>
