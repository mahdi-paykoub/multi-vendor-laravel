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
                <li class="breadcrumb-item active" aria-current="page">لیست سفارشات</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="position-relative">
                <input type="text" class="form-control ps-5 radius-30" placeholder="جستجوی سفارش"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
            </div>
            <div class="ms-auto"><a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>افزودن سفارش جدید</a></div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#کدسفارش</th>

                        <th>وضعیت</th>
                        <th>جمع کل</th>
                        <th>تاریخ</th>
                        <th>مشاهده جزئیات</th>
                        <th>عمل ها</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div>
                                    <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0 font-14">#000354</h6>
                                </div>
                            </div>
                        </td>

                        <td>
                            @switch($order->status)
                            @case('paid')
                            <div class="badge rounded-pill text-primary bg-light-primary p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i> پرداخت شده
                            </div>
                            @break
                            @case('unpaid')
                            <div class="badge rounded-pill text-secondary bg-light-secondary p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i> پرداخت نشده
                            </div>
                            @break
                            @case('preparation')
                            <div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i> در حال آماده سازی
                            </div>
                            @break
                            @case('posted')
                            <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i>ارسال شده
                            </div>
                            @break
                            @case('received')
                            <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i>تحویل داده شد
                            </div>
                            @break
                            @case('cancel')
                            <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i>لغو شده
                            </div>
                            @break

                            @default
                            <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
                                <i class="bx bxs-circle me-1"></i> وضعیت نامشخص
                            </div>
                            @endswitch

                        </td>
                        <td>{{ number_format($order->price) }} تومان</td>
                        <td>
                            <span class="ps-1 fv">{{jdate($order->created_at)->format('%d')}} </span>
                            <span class="ps-1 fv">{{jdate($order->created_at)->format('%B')}} </span>
                            <span class="fv">{{jdate($order->created_at)->format('%Y')}} </span>
                        </td>
                        <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">مشاهده
                                جزئیات</button></td>
                        <td>
                            <div class="d-flex order-actions">
                                <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
                                <a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection