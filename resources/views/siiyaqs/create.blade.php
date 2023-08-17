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
    <form method="POST" action="/siiyaqs" enctype="multipart/form-data">
        @csrf
        
      
      <h1 class="h3 mb-3 fw-normal">إنشاء سياق</h1>
      <div class="form-floating">
        <input style="margin-bottom: 10px" type="text" id="context" class="form-control " name="context" value="" required="" autocomplete="context" autofocus="" placeholder="context" fdprocessedid="kvebpl">
        <label for="floatingInput">عنوان السياق</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" style="background-color: rgb(8, 82, 105)" type="submit">تعديل</button>
      
    </form>
  </main>
@endsection