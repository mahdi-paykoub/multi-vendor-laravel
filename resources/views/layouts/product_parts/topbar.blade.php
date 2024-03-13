<!--top bar-->
@php
$topBar =\App\Models\GlobalOptions::where('key', '=' , 'top_bar_img')->first();

$topBar_value =$topBar != null ? json_decode($topBar->value): null ;
@endphp
@if ($topBar_value != null)
<header class="position-relative z_index100">
    <div class="w-100 top-bar-parent d-none d-lg-block pb-1 bg-white">
        <a href="">
            <img src="{{$topBar_value->img}}"
                class="object-cover" width="100%" alt="">
        </a>
    </div>
</header>  
@endif
