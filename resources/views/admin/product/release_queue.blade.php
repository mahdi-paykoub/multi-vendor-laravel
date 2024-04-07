@extends('admin.layouts.app')

@section('content')


<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
    @foreach($products as $product)
    @php
    $img = $product->galleries()->first()->image;
    $productInfo = $product->productInfos()->first();
    $price = number_format($productInfo->price);
    @endphp
    <div class="col">
        <div class="card">
            <a href="{{route('admin.product.show' , $product->slug)}}">
                <img src="{{$img}}" class="card-img-top" alt="...">
                <!-- <div class="">
                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span>
                    </div>
                </div> -->
            </a>
            <div class="card-body">
                <a href="{{route('admin.product.show' , $product->id)}}">
                    <h6 class="card-title cursor-pointer">{{$product->title}}</h6>
                </a>
                <div class="clearfix">
                    <!-- <p class="mb-0 float-start"><strong>134</strong> فروش</p> -->
                    <p class="mb-0 float-end fw-bold"><span>{{ $price }} تومان</span>
                    </p>
                </div>

                <div class="d-flex align-items-center mt-3 fs-6">
                    <div class="cursor-pointer">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-secondary"></i>
                    </div>
                    <p class="mb-0 ms-auto">4.2(182)</p>
                </div>

                <div class="text-end d-flex ">
                    <form action="{{route('admin.product.destroy' , $product->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger  mt-4">حذف </button>
                    </form>
                    <!-- <a href="{{route('admin.product.edit' , $product->id)}}" class="btn btn-sm btn-primary ms-2 mt-4">ویرایش </a> -->
                </div>

            </div>

        </div>

    </div>
    @endforeach
</div>
<!--end row-->

@endsection