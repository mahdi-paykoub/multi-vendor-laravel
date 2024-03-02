@extends('admin.layouts.app')

@section('content')
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

        <div class="card">
            <div class="row g-0">
                <div class="col-md-4 border-end">
                    <img src="{{$product->image}}" class="img-fluid" alt="...">
                    <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                        <div class="col"><img src="assets/images/products/12.png" width="70" class="border rounded cursor-pointer" alt=""></div>
                        <div class="col"><img src="assets/images/products/11.png" width="70" class="border rounded cursor-pointer" alt=""></div>
                        <div class="col"><img src="assets/images/products/14.png" width="70" class="border rounded cursor-pointer" alt=""></div>
                        <div class="col"><img src="assets/images/products/15.png" width="70" class="border rounded cursor-pointer" alt=""></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->title}}</h4>
                        <div class="d-flex gap-3 py-3">
                            <div class="cursor-pointer">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-secondary"></i>
                            </div>
                            <div>142 بررسی</div>
                            <div class="text-success"><i class="bx bxs-cart-alt align-middle"></i> 134 سفارش
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="price h4">149,000 تومان</span>
                            <span class="text-muted">/هر عدد</span>
                        </div>
                        <p class="card-text fs-6">
                            {{$product->description}}
                        </p>
                        <dl class="row">
                            <dt class="col-sm-3">#مدل</dt>
                            <dd class="col-sm-9">Odsy-1000</dd>

                            <dt class="col-sm-3">رنگ</dt>
                            <dd class="col-sm-9">قهوه ای</dd>

                            <dt class="col-sm-3">ارسال به</dt>
                            <dd class="col-sm-9">تمام شهر های ایران </dd>
                        </dl>
                        <hr>
                        <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
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
                                </label></div>
                            <div class="col">
                                <label class="form-label">انتخاب رنگ</label>
                                <div class="color-indigators d-flex align-items-center gap-2">
                                    <div class="color-indigator-item bg-primary"></div>
                                    <div class="color-indigator-item bg-danger"></div>
                                    <div class="color-indigator-item bg-success"></div>
                                    <div class="color-indigator-item bg-warning"></div>
                                </div>
                            </div>
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
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                            نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                            تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                            ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                            ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی
                            نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                            تولید سادگی نامفهوم.</p>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                            نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                            تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                            ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                            ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی
                            نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                            تولید سادگی نامفهوم.</p>
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


        <h6 class="text-uppercase mb-0">محصولات مرتبط</h6>
        <hr>
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/images/products/16.png" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">کفش پاشنه بلند آبی</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">240,000
													تومان</span><span>199,000 تومان</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/images/products/17.png" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">کتونی ورزشی</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">179,000
													تومان</span><span>110,000 تومان</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/images/products/19.png" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">ست جواهرات</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">150,000
													تومان</span><span>120,000
													تومان</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

