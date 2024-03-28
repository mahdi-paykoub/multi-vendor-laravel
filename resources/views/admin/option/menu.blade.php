@extends('admin.layouts.app')

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">امکانات</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">منوها</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
            <h5 class="fw-bold text-primary">
                منو اصلی
            </h5>
            <small>تعیین منوی اصلی در هدر </small>
        </div>

        <form action="{{route('admin.global.option.register.main.menu')}}" method="post">
            @csrf
            <div class="mt-4">
                <button class="btn btn-danger add-menu-item" type="button">افزودن لینک برای منو اصلی</button>
            </div>
            <div class="p-link-items">

            </div>
            <div class="mt-4">
                انتخاب از بین دسته بندی:
            </div>
            <div class="mt-2">
                <select name="cat_menu[]" id="" class="select-category-2" multiple>

                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach

                </select>
            </div>
            <div class="text-end mt-3">
                <button class="btn btn-primary px-4">ذخیر</button>
            </div>
        </form>


        <div class="alert border-0 border-start border-5 mt-5 border-primary alert-dismissible fade show py-2">
            <h5 class="fw-bold text-primary">
                منو زیر اسلایدر صفحه اصلی
            </h5>
            <small>تعیین منو </small>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(".select-category-2").select2();
    $('.add-menu-item').click(function() {
        $p_link_items = $('.p-link-items')
       
        $id = $p_link_items.children().length;

        $p_link_items.append(addLinkItems($id))
    })

    let addLinkItems = ($id) => {
        return `
        <div class="row border-bottom pb-4 mt-4">
                    <div class="col-6 mt-3">
                        <label for="">عنوان</label>
                        <input type="text" name="menu[${$id}][title]" class="form-control mt-2">
                    </div>
                    <div class="col-6 mt-3">
                        <label for="">لینک</label>
                        <input type="text" name="menu[${$id}][link]" class="form-control mt-2">
                    </div>
                    <div class="col-6 mt-3">
                        <label for="">آیکون</label>
                        <input type="text" name="menu[${$id}][icon]" class="form-control mt-2">
                    </div>
                </div>
        `
    }
</script>

@endsection