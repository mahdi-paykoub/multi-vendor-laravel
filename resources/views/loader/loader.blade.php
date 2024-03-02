<div class="" id="mainLoader">
    <div class="w-100 h-100 position-fixed bg-white top-0 right-0 zIndex100000"></div>
    <div class="w-100 h-100 position-fixed top-0 right-0 zIndex100000 loader-bg"></div>
    <div class="main-loader bg-white br10 pt-4 px-5 position-fixed text-center loader-for-main">
        <img src="{{url('/assets/frontend/image/logo/logo.svg')}}" width="150" alt="">
        <div class="pb-4">
            <div class="loader mx-auto mt-4"></div>
        </div>
    </div>
</div>
<script>
    window.onload = function (){
        document.getElementById('mainLoader').classList.add('display-none')
    }
</script>
