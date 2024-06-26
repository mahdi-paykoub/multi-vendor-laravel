@extends('admin.layouts.app')

@section('content')
@php
$productInfos = $product->productInfos()->get();
$seller = App\Models\Seller::where('id',$productInfos[0]->seller_id)->first();
$seller_info= $seller->sellerInfo()->first();
@endphp
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">فروشگاه</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">جزئیات محصول</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">تنظیمات</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"> <span class="visually-hidden">فهرست کشویی</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end" style=""> <a class="dropdown-item" href="javascript:;">عمل</a>
                <a class="dropdown-item" href="javascript:;">عمل دیگر</a>
                <a class="dropdown-item" href="javascript:;">هر چیز دیگر اینجا</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">لینک
                    جدا کننده</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

</pre>
<div class="card">

    <div class="row g-0">
        <div class="col-md-4 border-end">
            <div class="m-4 d-flex justify-content-between">
                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#sellerNotifModal">تغییر وضعیت محصول</button>
            </div>

            <img src="{{$product->galleries()->first()->image}}" class="img-fluid" alt="...">
            <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">

                @foreach ($product->galleries()->get() as $key => $img)
                @if ($key == 0)
                @continue
                @endif
                <div class="col"><img src="{{$img->image}}" width="70" class="border rounded cursor-pointer" alt=""></div>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title mb-4">{{$product->title}}</h4>

                <dl class="row">
                    <dt class="col-sm-3">#نام فروشگاه</dt>
                    <dd class="col-sm-9">{{$seller_info->shop_name}}</dd>

                    <dt class="col-sm-3">نام فروشنده</dt>
                    <dd class="col-sm-9">{{$seller_info->name}}</dd>

                    <dt class="col-sm-3">شماره تماس فروشگاه</dt>
                    <dd class="col-sm-9">{{$seller_info->shop_number}}</dd>
                </dl>
                <hr>
                <!-- <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                    <div class="col">
                        <label class="form-label">تعداد</label>
                        <div class="input-group input-spinner">
                            <button class="btn btn-white" type="button" id="button-plus"> + </button>
                            <input type="text" class="form-control" value="1">
                            <button class="btn btn-white" type="button" id="button-minus"> − </button>
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label">انتخاب سایز
                            <div class="">
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="select_size" checked="">
                                    <div class="form-check-label">کوچک</div>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="select_size" checked="">
                                    <div class="form-check-label">متوسط</div>
                                </label>

                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="select_size" checked="">
                                    <div class="form-check-label">بزرگ</div>
                                </label>
                            </div>
                        </label>
                    </div>
                    <div class="col">
                        <label class="form-label">انتخاب رنگ</label>
                        <div class="color-indigators d-flex align-items-center gap-2">
                            <div class="color-indigator-item bg-primary"></div>
                            <div class="color-indigator-item bg-danger"></div>
                            <div class="color-indigator-item bg-success"></div>
                            <div class="color-indigator-item bg-warning"></div>
                        </div>
                    </div>
                </div> -->
                <div class="row">

                    @if ($productInfos[0]->attr()->first()->name == 'color')
                    <h5>
                        تنوع براساس رنگ است
                    </h5>
                    @foreach ($productInfos as $productInfo)
                    <div class="color-indigators d-flex align-items-center gap-2 mt-4">
                        <div>رنگ:</div>
                        <div class="color-indigator-item" style="background-color: {{$productInfo->attr_value()->first()->value}};"></div>
                        <div class="px-3">{{number_format($productInfo->price)}} تومان</div>
                        <div class="px-3">تعداد: {{$productInfo->quantity}}</div>
                    </div>
                    @endforeach

                    @elseif ($productInfos[0]->attr()->first()->name == 'size')
                    <h5>
                        تنوع براساس سایز است
                    </h5>
                    @foreach ($productInfos as $productInfo)
                    @php
                    $dimensions = json_decode($productInfo->dimensions)
                    @endphp
                    <div class="color-indigators d-flex align-items-center gap-2 mt-4">
                        <div class="px-3">سایز: {{$productInfo->attr_value()->first()->value}}</div>
                        <div class="px-3">{{number_format($productInfo->price)}} تومان</div>
                        <div class="px-3">تعداد: {{$productInfo->quantity}}</div>
                        <div class="px-3">ابعاد: {{$dimensions->width}}x{{$dimensions->length}}
                            x{{$dimensions->height}} سانتی متر</div>

                    </div>
                    @endforeach
                    @elseif ($productInfos[0]->attr()->first()->name == 'none')
                    <div class="color-indigators d-flex align-items-center gap-2 mt-4">
                        <div class="px-3">{{number_format($productInfo->price)}} تومان</div>
                        <div class="px-3">تعداد: {{$productInfo->quantity}}</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>



    <hr>
    <div class="card-body">
        <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-comment-detail font-18 me-1"></i>
                        </div>
                        <div class="tab-title"> توضیحات محصول </div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-bookmark-alt font-18 me-1"></i>
                        </div>
                        <div class="tab-title">ویژگی ها</div>
                    </div>
                </a>
            </li>

        </ul>
        <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                {{$product->description}}
            </div>
            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                <div class="d-flex mt-3">
                    <div>
                        ابعاد کلی :
                    </div>
                    @php
                    $p_dimensions = json_decode($product->dimensions)
                    @endphp
                    <div class="fs14 me-2 fw600 icon-dark-color px-2">{{$p_dimensions->width}}x{{$p_dimensions->length}}
                        x{{$p_dimensions->height}} سانتی متر</div>
                </div>
                <div class="d-flex mt-3">
                    <div>
                        وزن :
                    </div>
                    <div class="fs14 me-2 fw600 icon-dark-color px-2">{{$p_dimensions->weight}}</div>
                </div>
                @foreach ( $product->productAttributes()->get() as $attr)
                <div class="d-flex mt-3">
                    <div>
                        {{ $attr->name }} :
                    </div>
                    <div class="fs14 me-2 fw600 icon-dark-color px-2">{{$attr->pivot->value->value}}</div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

</div>
<!-- approved - seller Notif Modal -->
<div class="modal fade" id="sellerNotifModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centerd">
        <form action="{{route('admin.change.product.status' , $product->slug)}}" method="post">
            @csrf
            <input type="hidden" name="seller_id" value="{{$seller->id}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> ارسال پیام تایید</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                   
                    <div class="d-flex justify-content-between">
                        <div>وضعیت فعلی محصول</div>
                        @if ($product->status == 'published')
                        <button class="btn btn-success btn-sm">منتشر شده</button>
                        @elseif ($product->status == 'unpublished')
                        <button class="btn btn-danger btn-sm">عدم انتشار </button>
                        @elseif ($product->status == 'needToEdit')
                        <button class="btn btn-warning btn-sm text-white">نیاز به ویرایش </button>

                        @endif
                       
                    </div>
                    <div class="mt-3">
                        <label for="">تعیین وضعیت</label>
                        <select class="form-control mt-1" name="status" id="">
                            <option value="published">تایید محصول</option>
                            <option value="unpublished">عدم تایید محصول</option>
                            <option value="needToEdit">نیاز به ویرایش محصول</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="">عنوان پیام</label>
                        <input type="text" name="title" class="form-control mt-1">
                    </div>
                    <div class="mt-3">
                        <label for="">لینک پیام</label>
                        <input type="text" name="link" class="form-control mt-1">
                    </div>
                    <div class="mt-3">
                        <label for="">متن پیام</label>
                        <textarea name="description" class="form-control mt-1" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection