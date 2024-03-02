@foreach($comments as $comment)
    {{--main comment--}}
    <div>
        <div class="border-bottom pb-3">
            <div class="d-flex justify-content-between mt-4 align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{url('assets/frontend/image/text/Default_Profile_Picture1.jpg')}}"
                         class="rounded-circle" width="35" height="35" alt="">
                    <div
                        class="fw600 fs14 icon-dark-color me-2">{{$comment->user()->first()->name}}</div>
                    <div class="me-4">
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor"
                             stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                            <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                        </svg>
                        <span class="text-secondary-2 fs12 fv">
                        <span class="ps-1">{{jdate($comment->created_at)->format('%B %d، %Y')}} </span> |
                        <span class="pe-1">{{jdate($comment->created_at)->format('H:i')}}</span>
                    </span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-secondary fs14 show-article-replay-comments">
                    <span class="cursor-pointer "> نمایش پاسخ ها
                        <span class="fv text-secondary ">( {{count($comment->child)}} )</span>
                    </span>
                    </div>
                    <div class="px-2 text-secondary" >|</div>
                    <a href="#for_reply_comment">
                        <svg stroke="currentColor"
                             class="text-secondary cursor-pointer show-comment-form-replay"
                             data-parentid="{{$comment->id}}"
                             fill="currentColor"
                             stroke-width="0"
                             baseProfile="tiny" viewBox="0 0 24 24" height="20" width="20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.164 19.547c-1.641-2.5-3.669-3.285-6.164-3.484v1.437c0 .534-.208 1.036-.586 1.414-.756.756-2.077.751-2.823.005l-6.293-6.207c-.191-.189-.298-.444-.298-.713s.107-.524.298-.712l6.288-6.203c.754-.755 2.073-.756 2.829.001.377.378.585.88.585 1.414v1.704c4.619.933 8 4.997 8 9.796v1c0 .442-.29.832-.714.958-.095.027-.19.042-.286.042-.331 0-.646-.165-.836-.452zm-7.141-5.536c2.207.056 4.638.394 6.758 2.121-.768-3.216-3.477-5.702-6.893-6.08-.504-.056-.888-.052-.888-.052v-3.497l-5.576 5.496 5.576 5.5v-3.499l1.023.011z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="fs15 mt-4 pt-2 px-1 px-md-4 icon-dark-color lh2">
                {{$comment->comment}}
            </div>
        </div>

        <div class="pe-lg-5 pe-md-4 pe-3 display-none comment-reps">
            @include('layouts.blog_parts.comment' , [ 'comments' => $comment->child ])
        </div>
    </div>
@endforeach
