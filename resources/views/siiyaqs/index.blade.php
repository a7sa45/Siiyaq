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
    <main>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                    <h3 class="my-0 mb-3 fw-normal">خلفيات هلاليه</h3>
                    <a style="color: #212529" href="/@MohammedElakili"><img style="border-radius: 50%" src="https://ca.slack-edge.com/T0266FRGM-U015ZPLDZKQ-gf3696467c28-512" class="mr-3" height="30"></a>
                    <a style="color: #212529" href="/@MohammedElakili">
                        منبر الهلال
                    </a>
                    </div>
                    <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
