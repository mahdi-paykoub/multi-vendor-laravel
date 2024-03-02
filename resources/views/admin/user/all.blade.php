@extends('admin.layouts.app')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">مقالات</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">لیست مقالات</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-body">
            <table class="table mb-0 table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام</th>
                    <th scope="col">آدرس ایمیل</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="d-flex align-content-center">
                            <form action="{{route('admin.user.destroy' , $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger  mt-4">حذف</button>
                            </form>
                            <a href="{{route('admin.user.edit' , $user->id)}}"
                               class="btn btn-sm btn-primary ms-2 mt-4">ویرایش </a>
                            <a href="{{route('admin.setUserRole' , $user->id)}}"
                               class="btn btn-sm btn-success ms-2 mt-4">نقش کاربر</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>

@endsection
