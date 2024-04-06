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
                <form action="{{route('admin.approved.products' , $product->slug)}}" method="post">
                    @method('put')
                    @csrf
                    <button class="btn btn-success">تایید محصول</button>
                </form>
                <button class="btn btn-danger" type="submit">عدم تایید محصول</button>

            </div>

            <img src="{{$product->galleries()->first()->image}}" class="img-fluid" alt="...">
            <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">

                @foreach ($product->galleries()->get() as $img)
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
                        </ا>
                        @foreach ($productInfos as $productInfo)
                        <div class="color-indigators d-flex align-items-center gap-2 mt-4">
                            <div class="color-indigator-item px-3">{{$productInfo->attr_value()->first()->value}}</div>
                            <div class="px-3">{{number_format($productInfo->price)}} تومان</div>
                            <div class="px-3">تعداد: {{$productInfo->quantity}}</div>
                        </div>
                        @endforeach
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
                        <div class="tab-title">برچسب ها</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-star font-18 me-1"></i>
                        </div>
                        <div class="tab-title">نظرات</div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                {{$product->description}}
            </div>
            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                    نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن
                    ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی
                    نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن
                    ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                    نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم.</p>
            </div>
            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                    نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن
                    ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                    نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                    ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
                </p>
            </div>
        </div>
    </div>

</div>


@endsection