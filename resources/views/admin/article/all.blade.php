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
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
        @foreach($articles as $article)
            <div class="col-12 col-md-3 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{$article->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->description}}</p>

                    </div>
                    <div class="d-flex card-footer justify-content-between">
                        <div class="d-flex">
                            <form action="{{route('admin.article.destroy' ,  $article->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="-ver-3">حذف</span>
                                </button>
                            </form>

                            <a href="{{route('admin.article.edit' ,  $article->id)}}"
                               class="btn btn-sm btn-success ms-2">ویرایش</a>
                        </div>
                        <div class="text-secondary mt-2">
                            {{jdate($article->created_at)->format('%B %d، %Y')}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
