@foreach($articleCategories as $articleCategory)
    <div class="mt-4 pb-4 d-flex border-bottom">
        <div>{{$articleCategory->title}}</div>
        <button class="btn btn-outline-primary btn-sm me-1 ms-3">ویرایش</button>
        <form action="{{route('admin.article-category.destroy' ,  $articleCategory->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm mx-1">
                <span class="-ver-3">حذف</span>
            </button>
        </form>
        <a href="{{route('admin.article-category.create' , ['parent' =>$articleCategory->id ])}}"
           class="btn btn-outline-success btn-sm mx-1">افزودن زیر دسته</a>
        <a class="btn btn-sm mx-1">نمایش زیر دسته</a>
    </div>
    {{--chlid--}}
    <div class="ms-4">
        @include('admin.layouts.articleCategory' , [ 'articleCategories' => $articleCategory->child ])
    </div>
@endforeach

