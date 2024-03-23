<!--main menu-->
<div class="container px-0">
    <header class="position-relative z_index100 header-shadow-unique bg-white" id="main-menu-sticky-shadow">
        <nav class="pt-2 justify-content-between position-relative d-none d-lg-flex">
            <!--right menu-->
            <div class="d-flex px-3 align-items-center">
                <div class="main-menu-category-item py-2 border-bottom-hover-red">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="fs13 fw600 icon-dark-color cursor-pointer border-start ps-3">دسته‌بندی کالاها</span>
                </div>
                <!--menu hover-->
                <div class="position-absolute bg-white menu-hovered">
                    <div class="bg-main-left-menu set-he h-100" style="width: 190px;">
                        @foreach (App\Models\ProductCategory::where('parent', 0)->get() as $cat)
                        <div class="inner-menu-hover-able @if($loop->first) pt-3 @endif">
                            {!!html_entity_decode($cat->icon)!!}
                            <a class="fs12 me-2 icon-dark-color cursor-pointer">{{ $cat->title }}</a>
                            <div class="position-absolute display-none pe-3">

                                <!--sub categories-->
                                <div class="row w-100 pt-4 set-height-child">
                                    <a href="/category/{{$cat->slug}}" class="text-info fs13 mb-3">
                                        همه محصولات {{$cat->title}}
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                        </svg>
                                    </a>
                                    @foreach ($cat->child()->get() as $fChild)
                                    <div class="col-3">
                                        <div class="mt-3">
                                            <a href="/category/{{$fChild->slug}}">
                                                <div class="fs13 fw-bold icon-dark-color main-menu-border-right-red pe-2">
                                                    {{ $fChild->title }}
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="mt-3">
                                                @foreach ($fChild->child()->get() as $sChild)
                                                <div class="fs12 my-3">
                                                    <a href="/category/{{$sChild->slug}}" class="text-secondary">
                                                        {{ $sChild->title }}
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>



                <!--top menu-->
                <div class="main-nav-menu d-flex">
                    @php
                    $mian_menus =App\Models\GlobalOptions::where('key' , 'main_menu')->get();

                    @endphp
                    @foreach ($mian_menus as $mian_menu)

                    @if (!$mian_menu->value)
                    @php
                    $cat= App\Models\ProductCategory::where('id' , $mian_menu->ref_id)->first();


                    @endphp
                    <div class="mx-3 py-2 border-bottom-hover-red @if($loop->last) d-none d-xl-block @endif">
                        <a href="/category/{{$cat->slug}}">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 15l6 -6"></path>
                                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
                                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
                                <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
                            </svg>
                            <span class="fs12 @if($loop->last) border-start ps-3 @endif">{{$cat->title}}</span>
                        </a>
                    </div>
                    @else
                    <div class="mx-3 py-2 border-bottom-hover-red @if($loop->last) d-none d-xl-block @endif">
                        <a href="{{json_decode($mian_menu->value)->link}}">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 15l6 -6"></path>
                                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
                                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
                                <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
                            </svg>
                            <span class="fs12  @if($loop->last) border-start ps-3 @endif">{{json_decode($mian_menu->value)->title}}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach


                    <!--last index class (border-bottom-hover-red & ps-3 d-none d-lg-block)-->

                </div>
                <div class="fs12 main-nav-menu border-right">
                    <a href="">
                        <span class="ms-3">سوالی دارید؟</span>
                    </a>
                    <a href="">
                        <span>در دیجی‌کالا بفروشید!</span>
                    </a>
                </div>

            </div>
            <!--left location-->
            <div class="ms-2 mt-2">
                <!-- Button trigger modal -->
                <a href="{{route('address.profile')}}" class="border-0 fs12 icon-dark-color bg-transparent text-dark">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-width="2" d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z"></path>
                    </svg>
                    <span class="me-2">لطفا شهر خود را انتخاب کنید</span>
                </a>
                <!-- Modal -->

            </div>
        </nav>
    </header>

</div>
{{--hover--}}
<div class="position-fixed display-none w-100 blur-page-on-focus" id="blur-page-on-focus"></div>
<div class="position-fixed display-none w-100 top-0  right-0 h-100" style="z-index: 1000" id="for-delete-elm"></div>