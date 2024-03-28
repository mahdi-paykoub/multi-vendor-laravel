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
                توضیحات در فوتر
            </h5>
            <small> توضیحاتی که به عنوان سئو در فوتر در نظر گرفته میشود </small>
        </div>

        <form method="post" action="{{route('admin.global.option.regoster.text')}}">
            @csrf
            <div class="mt-3">
                @php
                $footer_text = App\Models\GlobalOptions::where('key', 'footer_text')->first();

                @endphp
                <textarea class="form-control" id="editor" name="body">
                {{old( 'body',$footer_text->value)}}
                </textarea>
            </div>
            @error('body')
            <div class="text-danger fw-bold mb-3 mt-2">
                {{$message}}
            </div>
            @enderror

            <div class="text-end">
                <button class="mt-4 btn btn-primary px-4">ارسال</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{route('articleCKEditor.upload' , ['_token' =>csrf_token()])}}"
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>


@endsection