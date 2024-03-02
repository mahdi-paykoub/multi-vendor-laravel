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
                    <li class="breadcrumb-item active" aria-current="page">ویرایش مقاله</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ویرایش مقاله</h5>
            <hr/>
            <form action="{{route('admin.article.update' , $article->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">عنوان مقاله</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           name="title"
                                           value="{{old('title' , $article->title) }}"
                                           placeholder="عنوان مقاله را وارد کنید">

                                </div>
                                @error('title')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">نامک مقاله</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                           name="slug"
                                           value="{{old('slug' , $article->slug) }}"
                                           placeholder="عنوان مقاله را وارد کنید">

                                </div>
                                @error('slug')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">توضیحات کوتاه</label>
                                    <textarea class="form-control @error('title') is-invalid @enderror"
                                              name="description"
                                              rows="3">{{old('description' , $article->description) }}</textarea>
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
                                <div class="mb-3">
                                    <img src="{{ $article->image}}" alt="" width="30%">
                                </div>
                                <div class="input-group">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                           aria-label="Image" aria-describedby="button-image"
                                           value="{{old('image' , $article->image)}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">
                                            انتخاب
                                        </button>
                                    </div>
                                </div>
                                @error('image')
                                <div class="text-danger fw-bold mt-2 mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mt-3">
                                    <label class="form-label">توضیحات اصلی</label>
                                    <textarea class="form-control" id="editor" name="body">
                                        {!! old('body' , $article->body) !!}
                                    </textarea>
                                </div>

                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary px-5">ویرایش</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </form>
        </div>
    </div>
@endsection

