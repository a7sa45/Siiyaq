@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h3 class="my-0 mb-3 fw-normal" style="margin-right: 10px; weidth:10px"><b>{{ $siiyaq->context }}</b></h3>
                      <div class="d-flex flex-start w-100">
                        <img class="rounded-circle shadow-1-strong" style="margin: 2px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $siiyaq->user->username }}" alt="avatar" width="40" height="40">
                        <div class="w-100">
                        <div class="media-body" style="margin-right: 10px; weidth:10px">
                            <a style="color: #212529; text-decoration: none;" href="/<?php echo '@'.$siiyaq->user->username ?>">
                            <h6 class="mt-1 mb-0">{{ $siiyaq->user->name }}</h6></a>
                            <span class="text-muted">{{ $siiyaq->user->username }}@</span>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="card mb-3">
                            <div class="card-body" style="width: 100%; border-bottom: 1px soled">
                                <div class="d-flex flex-start w-100">
                                    <img class="rounded-circle shadow-1-strong me-3" style="margin: 7px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $siiyaq->user->username }}" alt="avatar" width="50" height="50">
                                    <div class="w-100">
                                    <div class="media-body" style="margin-right: 10px; weidth:10px">
                                        <a style="color: #212529; text-decoration: none;" href="/<?php echo '@'.$siiyaq->user->username ?>">
                                        <h6 class="mt-1 mb-0">{{ $siiyaq->user->name }}</h6></a>
                                        <span class="text-muted">{{ $siiyaq->user->username }}@</span>
                                    </div>
                                </div>
                                <div class="card" style="border-top: 0; border-left: 0; border-right: 0; border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom: 0;">
                                    <div class="media" style="margin: 20px;"><a style="color: #212529" href="/@MohammedElakili"> 
                                      <div class="media-body" style="margin-right: 10px; weidth:10px">
                                         
                                      </div>
                                      <h3 class="card-title text-white" style="color: #212529">
                                        <div class="dropdown">
                                            <a class="" href="#" style="color: #212529" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                          
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                              @auth
                                                @if(Auth::user()->email == $siiyaq->user->email)
                                                    <li><a class="dropdown-item" href="/posts/{{ $siiyaq->id }}/edit">تعديل</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <form class="dropdown-item" action="/posts/{{ $siiyaq->id }}" method="post" style="margin-top: 10px;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item btn-outline-danger" style="width: 100px; color: red">حذف</button>
                                                    </form>
                                                @endif
                                              @endauth
                                            </ul>
                                        </div>
                                      </h3>
                                      
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $siiyaq->context }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $siiyaq->created_at }}</small></p>
                              </div>
                              @if ($siiyaq->image)
                                <img src="/images/{{ $siiyaq->image }}" class="card-img-top img-fluid h-100" alt="{{ $siiyaq->content }}">
                              @endif
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body" style="width: 100%; border-bottom: 1px soled">
                                <div class="d-flex flex-start w-100">
                                    <img class="rounded-circle shadow-1-strong me-3" style="margin: 7px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $siiyaq->user->username }}" alt="avatar" width="50" height="50">
                                    <div class="w-100">
                                    <div class="media-body" style="margin-right: 10px; weidth:10px">
                                        <a style="color: #212529; text-decoration: none;" href="/<?php echo '@'.$siiyaq->user->username ?>">
                                        <h6 class="mt-1 mb-0">{{ $siiyaq->user->name }}</h6></a>
                                        <span class="text-muted">{{ $siiyaq->user->username }}@</span>
                                    </div>
                                </div>
                                <div class="card" style="border-top: 0; border-left: 0; border-right: 0; border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom: 0;">
                                    <div class="media" style="margin: 20px;"><a style="color: #212529" href="/@MohammedElakili"> 
                                      <div class="media-body" style="margin-right: 10px; weidth:10px">
                                         
                                      </div>
                                      <h3 class="card-title text-white" style="color: #212529">
                                        <div class="dropdown">
                                            <a class="" href="#" style="color: #212529" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                          
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                              @auth
                                                @if(Auth::user()->email == $siiyaq->user->email)
                                                    <li><a class="dropdown-item" href="/posts/{{ $siiyaq->id }}/edit">تعديل</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <form class="dropdown-item" action="/posts/{{ $siiyaq->id }}" method="post" style="margin-top: 10px;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item btn-outline-danger" style="width: 100px; color: red">حذف</button>
                                                    </form>
                                                @endif
                                              @endauth
                                            </ul>
                                        </div>
                                      </h3>
                                      
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $siiyaq->context }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $siiyaq->created_at }}</small></p>
                              </div>
                              @if ($siiyaq->image)
                                <img src="/images/{{ $siiyaq->image }}" class="card-img-top img-fluid h-100" alt="{{ $siiyaq->content }}">
                              @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="row justify-content-center">
        {{--<div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body" style="width: 100%; border-bottom: 1px soled">
                    <div class="d-flex flex-start w-100">
                        <img class="rounded-circle shadow-1-strong me-3" style="margin: 7px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $siiyaq->user->username }}" alt="avatar" width="50" height="50">
                        <div class="w-100">
                        <div class="media-body" style="margin-right: 10px; weidth:10px">
                            <a style="color: #212529; text-decoration: none;" href="/<?php echo '@'.$siiyaq->user->username ?>">
                            <h6 class="mt-1 mb-0">{{ $siiyaq->user->name }}</h6></a>
                            <span class="text-muted">{{ $siiyaq->user->username }}@</span>
                        </div>
                    </div>
                    <div class="card" style="border-top: 0; border-left: 0; border-right: 0; border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom: 0;">
                        <div class="media" style="margin: 20px;"><a style="color: #212529" href="/@MohammedElakili"> 
                          <div class="media-body" style="margin-right: 10px; weidth:10px">
                             
                          </div>
                          <h3 class="card-title text-white" style="color: #212529">
                            <div class="dropdown">
                                <a class="" href="#" style="color: #212529" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </a>
                              
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                  @auth
                                    @if(Auth::user()->email == $siiyaq->user->email)
                                        <li><a class="dropdown-item" href="/posts/{{ $siiyaq->id }}/edit">تعديل</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <form class="dropdown-item" action="/posts/{{ $siiyaq->id }}" method="post" style="margin-top: 10px;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item btn-outline-danger" style="width: 100px; color: red">حذف</button>
                                        </form>
                                    @endif
                                  @endauth
                                </ul>
                            </div>
                          </h3>
                          
                        </div>
                      </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $siiyaq->context }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $siiyaq->created_at }}</small></p>
                  </div>
                  @if ($siiyaq->image)
                    <img src="/images/{{ $siiyaq->image }}" class="card-img-top img-fluid h-100" alt="{{ $siiyaq->content }}">
                  @endif
            </div>
        </div>--}}

        
           {{-- <section>
              @foreach ($post->coments as $comment)
                    <div class="d-flex flex-start w-100 mt-2">
                        <img class="rounded-circle shadow-1-strong me-3" style="margin: 7px" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ $comment->user->username }}" alt="avatar" width="50" height="50">
                        <div class="w-100">
                        <div class="media-body" style="margin-right: 10px; weidth:10px">
                            <a style="color: #212529; text-decoration: none;" href="/<?php echo '@'.$comment->user->username ?>">
                            <h6 class="mt-1 mb-0">{{ $comment->user->name }}</h6></a>
                            <span class="text-muted">{{ $comment->user->username }}@</span>
                        </div>
                        <p class="mt-2">{{ $comment->coment }}</p>
                    </div>
                    <div class="card" style="border-top: 0; border-left: 0; border-right: 0; border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-bottom: 0;">
                        <div class="media" style="margin: 20px;"><a style="color: #212529" href="/@MohammedElakili"> 
                          <div class="media-body" style="margin-right: 10px; weidth:10px">
                             
                          </div>
                          </a><h3 class="card-title text-white" style="color: #212529"><a style="color: #212529" href="/@MohammedElakili">
                            </a><div class="dropdown"><a style="color: #212529" href="/@MohammedElakili">
                                </a><a class="" href="#" style="color: #212529" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </a>
                              
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                    @auth
                                        @if(Auth::user()->id == $comment->user->id)
                                            <form class="dropdown-item" action="/comments/{{ $comment->id }}" method="post" style="">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit" class="btn btn-outline-dark" style="width: 100px; font-siz:100px; color: red">حذف</button>
                                            </form>
                                        @endif
                                    @endauth
                                </ul>
                            </div>
                          </h3>
                          
                        </div>
                      </div>
                    </div>
                @endforeach
              @if(Auth::check())
                <div class="">
                  <div class="card" style="border-color: white">
                    <div class="card-body" style="width: 100%">
                      <div class="d-flex flex-start w-100">
                        <img
                          class="rounded-circle shadow-1-strong me-3" 
                          style="margin: 7px"
                          src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ Auth::user()->username }}"
                          alt="avatar"
                          width="50"
                          height="50"
                        />
                        <div class="w-100">
                          <h5>إضافة تعليق</h5>
                          <form action="/comments" method="post">
                            @csrf
                            <div class="form-outline">
                              <textarea class="form-control" id="textAreaExample" placeholder="إضف تعليق..." name="coment" rows="4"></textarea>
                            </div>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="d-flex justify-content-between mt-3">
                              <button type="submit" class="btn btn-outline-info">
                                ارسال <i class="fas fa-paper-plane"></i>
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
              @else
                  <div class="card" style="text-align: center; padding: 6px">
                    <p style="padding-top: 3px">لكتابة تعليق تحتاج الى<a href="/login">الدخول</a> او <a href="/register">التسجيل</a></p>
                  </div>
              @endif
                
            </section>--}}
        
    </div>
</div>
@endsection
