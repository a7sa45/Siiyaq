@extends('layouts.app')

@section('content')
<style>
    html,


body {
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}
</style>

<main class="form-signin w-100 m-auto">
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
</main>
@endsection