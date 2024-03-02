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
                    <li class="breadcrumb-item active" aria-current="page"> ویرایش محصول </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ویرایش محصول </h5>
            <hr>
            <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.product.update' ,$product->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3 text-center">
                                    <img src="{{ $product->image}}" alt="" width="30%">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">عنوان محصول</label>
                                    <input type="text" class="form-control" name="title"
                                           value="{{old('title' , $product->title)}}" placeholder="عنوان محصول را وارد کنید">
                                </div>
                                @error('title')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label  class="form-label">توضیحات</label>
                                    <textarea class="form-control" name="description" rows="3">{{old('description' , $product->description)}}</textarea>
                                </div>
                                @error('description')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                {{--upload image--}}
                                <div class="my-2">
                                    <label for="">تصویر شاخص</label>
                                </div>

                                <div class="input-group">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                           aria-label="Image" aria-describedby="button-image" value="{{old('image' , $product->image)}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                    </div>
                                </div>

                                @error('image')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <button type="submit" class="btn btn-primary mt-3">ذخیره محصول</button>
                            </div>
                        </div>
                    </form>
                    {{-- <div class="col-lg-4">
                         <div class="border border-3 p-4 rounded">
                             <div class="row g-3">
                                 <div class="col-md-6">
                                     <label for="inputPrice" class="form-label">قیمت</label>
                                     <input type="email" class="form-control" id="inputPrice" placeholder="00.00">
                                 </div>
                                 <div class="col-md-6">
                                     <label for="inputCompareatprice" class="form-label">مقایسه با
                                         قیمت</label>
                                     <input type="password" class="form-control" id="inputCompareatprice" placeholder="00.00">
                                 </div>
                                 <div class="col-md-6">
                                     <label for="inputCostPerPrice" class="form-label">هزینه هر قیمت</label>
                                     <input type="email" class="form-control" id="inputCostPerPrice" placeholder="00.00">
                                 </div>
                                 <div class="col-md-6">
                                     <label for="inputStarPoints" class="form-label">امتیاز ستاره</label>
                                     <input type="password" class="form-control" id="inputStarPoints" placeholder="00.00">
                                 </div>
                                 <div class="col-12">
                                     <label for="inputProductType" class="form-label">نوع محصول</label>
                                     <select class="form-select" id="inputProductType">
                                         <option></option>
                                         <option value="1">یک</option>
                                         <option value="2">دو</option>
                                         <option value="3">سه</option>
                                     </select>
                                 </div>
                                 <div class="col-12">
                                     <label for="inputVendor" class="form-label">فروشنده</label>
                                     <select class="form-select" id="inputVendor">
                                         <option></option>
                                         <option value="1">یک</option>
                                         <option value="2">دو</option>
                                         <option value="3">سه</option>
                                     </select>
                                 </div>
                                 <div class="col-12">
                                     <label for="inputCollection" class="form-label">کالکشن</label>
                                     <select class="form-select" id="inputCollection">
                                         <option></option>
                                         <option value="1">یک</option>
                                         <option value="2">دو</option>
                                         <option value="3">سه</option>
                                     </select>
                                 </div>
                                 <div class="col-12">
                                     <label for="inputProductTags" class="form-label">برچسب های محصول</label>
                                     <input type="text" class="form-control" id="inputProductTags" placeholder="برچسب محصول را وارد کنید">
                                 </div>
                                 <div class="col-12">
                                     <div class="d-grid">
                                         <button type="button" class="btn btn-primary">ذخیره محصول</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>--}}
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
    </script>

@endsection

