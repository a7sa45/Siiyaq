@extends('layouts.app')

@section('content')
<style>
    html,
body {
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 377px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <p class="d-inline-flex gap-1">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          افتح سياق
        </button>
      </p>
      <div class="collapse" id="collapseExample">
          <div>
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">افتح سياق</h4>
              </div>
              <div class="card-body">
              <form method="POST" action="/siiyaqs" enctype="multipart/form-data">
                  @csrf
                <div class="form-floating">
                  <input style="margin-bottom: 10px" type="text" id="context" class="form-control " name="context" value="" required="" autocomplete="context" autofocus="" placeholder="context" fdprocessedid="kvebpl">
                  <label for="floatingInput">عنوان السياق</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" style="background-color: rgb(8, 82, 105)" type="submit">فتح سياق</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
  @forelse ($siiyaqs as $siiyaq)
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
                  <a href="/siiyaqs/{{ $siiyaq->id }}" type="button" class="w-100 btn btn-lg btn-primary">مشاهدة السياق</a>
                  </div>
              </div>
          </div>
      </div>
   </main>
  @empty
      
  @endforelse
</div>
@endsection
