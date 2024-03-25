@extends('seller.profile.layout')

@section('profile_content')


<!--content-->
<div class="border-bottom-light-2">
    <div class="w-fit">
        <span class="px-3 text-info">آدرس شما</span>
        <div class="w-100 mt-2 px-4" style="width: 100%;height: 4px;background: #1ab1d4;border-radius: 5px 5px 0 0"></div>
    </div>
</div>
<div class="d-lg-flex justify-content-between align-items-center mt-3 border-bottom-light-2 pb-3">
    <div class="fs14">
        اینجا می‌توانید آدرس‌‌هایتان را ببنید و مدیریت کنید
    </div>
    <div class="mt-4 mt-lg-0">
        <button class="border-0 text-white br7 btn-padding fs14 px-4" style="background-color: #1ab1d4;">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
            <span class="me-1">افزودن آدرس فروشگاه </span>
        </button>
    </div>
</div>

<div>
    <div class="py-4 d-flex justify-content-between">
        <div>
            <div class="mb-3 fs15res lh2">
                تهران، بزرگراه آیت الله سعیدی، دامپزشکی، شاه محمدی، گل مریم
            </div>
            <div class="text-secondary-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z">
                    </path>
                </svg>
                <span class="fs15res me-1">تهران</span>
            </div>
            <div class="mt-2 text-secondary-3">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="fs15res me-1">4444444444</span>
            </div>

            <div class="mt-2 text-secondary-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z">
                    </path>
                </svg>
                <span class="fs15res me-1">مهدی پایکوب</span>
            </div>

        </div>
        <div>
            <div class="text-start">
                <div class="dropdown">
                    <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="20" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                        </path>
                    </svg>
                    <ul class="dropdown-menu mt-2 dropdown-del-adr-menu br10 p-3 shadow border-0" aria-labelledby="dropdownMenuButton1">
                        <form action="http://localhost:8000/delete/address/1" method="post">
                            <input type="hidden" name="_token" value="JDcxu636vlS8Ir0MKlxZ8aN2tDncmFUkY8jGt9Pe" autocomplete="off">
                            <input type="hidden" name="_method" value="delete"> <button type="submit" class="w-100 d-flex align-items-center cursor-pointer bg-transparent border-0">
                                <svg stroke="currentColor" class="text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M15 16h4v2h-4zm0-8h7v2h-7zm0 4h6v2h-6zM3 18c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V8H3v10zm2-8h6v8H5v-8zm5-6H6L5 5H2v2h12V5h-3z">
                                    </path>
                                </svg>
                                <div class="fs14 me-2">حذف آدرس</div>
                            </button>
                        </form>
                    </ul>


                </div>
            </div>
            <img src="http://localhost:8000/assets/frontend/image/text/emptyAddress.webp" class="mt-2" width="130" height="115" alt="">
        </div>
    </div>
    <div class="py-4 d-flex justify-content-between">
        <div>
            <div class="mb-3 fs15res lh2">
                تهران، بزرگراه آیت الله سعیدی، دامپزشکی، شاه محمدی، گل مریم
            </div>
            <div class="text-secondary-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z">
                    </path>
                </svg>
                <span class="fs15res me-1">تهران</span>
            </div>
            <div class="mt-2 text-secondary-3">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="fs15res me-1">4444444444</span>
            </div>

            <div class="mt-2 text-secondary-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z">
                    </path>
                </svg>
                <span class="fs15res me-1">مهدی پایکوب</span>
            </div>

        </div>
        <div>
            <div class="text-start">
                <div class="dropdown">
                    <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="20" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                        </path>
                    </svg>
                    <ul class="dropdown-menu mt-2 dropdown-del-adr-menu br10 p-3 shadow border-0" aria-labelledby="dropdownMenuButton1">
                        <form action="http://localhost:8000/delete/address/1" method="post">
                            <input type="hidden" name="_token" value="JDcxu636vlS8Ir0MKlxZ8aN2tDncmFUkY8jGt9Pe" autocomplete="off">
                            <input type="hidden" name="_method" value="delete"> <button type="submit" class="w-100 d-flex align-items-center cursor-pointer bg-transparent border-0">
                                <svg stroke="currentColor" class="text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M15 16h4v2h-4zm0-8h7v2h-7zm0 4h6v2h-6zM3 18c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V8H3v10zm2-8h6v8H5v-8zm5-6H6L5 5H2v2h12V5h-3z">
                                    </path>
                                </svg>
                                <div class="fs14 me-2">حذف آدرس</div>
                            </button>
                        </form>
                    </ul>


                </div>
            </div>
            <img src="http://localhost:8000/assets/frontend/image/text/emptyAddress.webp" class="mt-2" width="130" height="115" alt="">
        </div>
    </div>
</div>

@endsection