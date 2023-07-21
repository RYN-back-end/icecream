@extends('Admin.Layout.app')
@section('title')
    تفاصيل المنتج
@endsection
@section('pageName')
    تفاصيل المنتج
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="product-detai-imgs">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                                             aria-orientation="vertical">
                                            <a class="nav-link active" id="product-{{$product->id}}-tab"
                                               data-bs-toggle="pill" href="#product-{{$product->id}}" role="tab"
                                               aria-controls="product-1" aria-selected="true">
                                                <img src="{{getFile($product->image)}}" alt=""
                                                     class="img-fluid mx-auto d-block rounded">
                                            </a>
                                            @foreach($product->images as $rowImage)
                                                <a class="nav-link" id="product-{{$rowImage->id}}-tab"
                                                   data-bs-toggle="pill" href="#product-{{$rowImage->id}}" role="tab"
                                                   aria-controls="product-2" aria-selected="false">
                                                    <img src="{{getFile($rowImage->image)}}" alt=""
                                                         class="img-fluid mx-auto d-block rounded">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="product-{{$product->id}}"
                                                 role="tabpanel" aria-labelledby="product-{{$product->id}}-tab">
                                                <div>
                                                    <img src="{{getFile($product->image)}}" alt=""
                                                         class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            @foreach($product->images as $rowImage)
                                                <div class="tab-pane fade" id="product-{{$rowImage->id}}"
                                                     role="tabpanel" aria-labelledby="product-{{$rowImage->id}}-tab">
                                                    <div>
                                                        <img src="{{getFile($rowImage->image)}}" alt=""
                                                             class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="text-center">
                                            {{--                                            <button type="button"--}}
                                            {{--                                                    class="btn btn-primary waves-effect waves-light mt-2 me-1">--}}
                                            {{--                                                <i class="bx bx-cart me-2"></i> Add to cart--}}
                                            {{--                                            </button>--}}
                                            {{--                                            <button type="button"--}}
                                            {{--                                                    class="btn btn-success waves-effect  mt-2 waves-light">--}}
                                            {{--                                                <i class="bx bx-shopping-bag me-2"></i>Buy now--}}
                                            {{--                                            </button>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="mt-4 mt-xl-3">
                                {{--                                <a href="javascript: void(0);" class="text-primary">Headphone</a>--}}
                                <h4 class="mt-1 mb-3">{{$product->title_ar}} | {{$product->title_en}}</h4>

                                @if($product->price_after && $product->price_after != 0)
                                        <?php
                                        $discountPercent = (($product->price_before - $product->price_after) / $product->price_before) * 100;
                                        ?>
                                    <h6 class="text-success text-uppercase">خصم {{round($discountPercent,0)}} % </h6>
                                @endif
                                <h5 class="mb-4">السعر :
                                    {{($product->large_price) ?? 'لا يوجد'}} حجم كبير -
                                    {{($product->medium_price) ?? 'لا يوجد'}} حجم وسط -
                                    {{($product->small_price) ?? 'لا يوجد'}} حجم صغير
                                <p class="text-muted mb-4 mt-2">
                                    {{$product->desc_ar}}
                                    <br>
                                    <br>
                                    {{$product->desc_en}}
                                </p>
                                {{--                                <div class="row mb-3">--}}
                                {{--                                    <div class="col-md-6">--}}
                                {{--                                        <div>--}}
                                {{--                                            <p class="text-muted"><i--}}
                                {{--                                                    class="bx bx-unlink font-size-16 align-middle text-primary me-1"></i>--}}
                                {{--                                                Wireless</p>--}}
                                {{--                                            <p class="text-muted"><i--}}
                                {{--                                                    class="bx bx-shape-triangle font-size-16 align-middle text-primary me-1"></i>--}}
                                {{--                                                Wireless Range : 10m</p>--}}
                                {{--                                            <p class="text-muted"><i--}}
                                {{--                                                    class="bx bx-battery font-size-16 align-middle text-primary me-1"></i>--}}
                                {{--                                                Battery life : 6hrs</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-md-6">--}}
                                {{--                                        <div>--}}
                                {{--                                            <p class="text-muted"><i--}}
                                {{--                                                    class="bx bx-user-voice font-size-16 align-middle text-primary me-1"></i>--}}
                                {{--                                                Bass</p>--}}
                                {{--                                            <p class="text-muted"><i--}}
                                {{--                                                    class="bx bx-cog font-size-16 align-middle text-primary me-1"></i>--}}
                                {{--                                                Warranty : 1 Year</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="product-color">
                                    <h5 class="font-size-15">صور المنتج</h5>
                                    <a href="javascript: void(0);" class="active">
                                        <div class="product-color-item border rounded">
                                            <img src="{{getFile($product->image)}}" onclick="window.open(this.src)"
                                                 alt="" class="avatar-md">
                                        </div>
                                        <p>الصورة الرئيسية</p>
                                    </a>
                                    @foreach($product->images as $rowImage)
                                        <a href="javascript: void(0);" id="productImage{{$rowImage->id}}">
                                            <div class="product-color-item border rounded">
                                                <img src="{{getFile($rowImage->image)}}" onclick="window.open(this.src)"
                                                     alt="" class="avatar-md">
                                            </div>
                                            <button class="btn btn-danger deleteBtn" data-id="{{$rowImage->id}}">حذف
                                            </button>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    {{--                    <div class="mt-5">--}}
                    {{--                        <h5 class="mb-3">Specifications :</h5>--}}

                    {{--                        <div class="table-responsive">--}}
                    {{--                            <table class="table mb-0 table-bordered">--}}
                    {{--                                <tbody>--}}
                    {{--                                <tr>--}}
                    {{--                                    <th scope="row" style="width: 400px;">Category</th>--}}
                    {{--                                    <td>Headphone</td>--}}
                    {{--                                </tr>--}}
                    {{--                                <tr>--}}
                    {{--                                    <th scope="row">Brand</th>--}}
                    {{--                                    <td>JBL</td>--}}
                    {{--                                </tr>--}}
                    {{--                                <tr>--}}
                    {{--                                    <th scope="row">Color</th>--}}
                    {{--                                    <td>Black</td>--}}
                    {{--                                </tr>--}}
                    {{--                                <tr>--}}
                    {{--                                    <th scope="row">Connectivity</th>--}}
                    {{--                                    <td>Bluetooth</td>--}}
                    {{--                                </tr>--}}
                    {{--                                <tr>--}}
                    {{--                                    <th scope="row">Warranty Summary</th>--}}
                    {{--                                    <td>1 Year</td>--}}
                    {{--                                </tr>--}}
                    {{--                                </tbody>--}}
                    {{--                            </table>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- end Specifications -->


                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

@endsection
@section('dashboard-js')
    <script>

        $('.dropify').dropify("Upload Here");

        $(document).on('click', '.deleteBtn', function () {
            var id = $(this).data('id');
            swal.fire({
                title: "حذف صورة",
                text: "هل انت متأكد من حذف صورة المنتج ؟",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc5339",
                confirmButtonText: "نعم, احذف !",
                cancelButtonText: "تراجع",
                okButtonText: "اضافة",
                closeOnConfirm: false
            }).then((result) => {
                if (!result.isConfirmed) {
                    return true;
                }
                var url = '{{ route("products.deleteImage",":id") }}';
                url = url.replace(':id', id)
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    beforeSend: function () {
                        $('#loader-overlay').show()
                    },
                    success: function (data) {

                        window.setTimeout(function () {
                            $('#loader-overlay').hide()
                            if (data.status == 200) {
                                toastr.success((data.message) ?? 'تم حذف البيانات بنجاح')
                                $(`#productImage${data.id}`).fadeOut();
                                $(`#product-${data.id}`).fadeOut();
                                $(`#product-${data.id}-tab`).fadeOut();
                            } else if (data.status == 405) {
                                toastr.warning('يجب ان تكون هناك صورة واحدة علي الاقل للمنتج !');
                            } else
                                toastr.error('عذرا هناك خطأ فني 😞');
                        }, 300);
                    }, error: function (data) {

                        if (data.status === 500) {
                            toastr.error('عذرا هناك خطأ فني 😞');
                        }
                        if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if ($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        toastr.error(value)
                                    });
                                }
                            });
                        }
                    }

                });
            });
        });

</script>

@endsection


