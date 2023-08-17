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
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.form-signin input[type="number"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.form-signin input[type="text"] {
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
    <main class="form-signin w-100 m-auto">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">التسجيل</h4>
                </div>
                <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                          <div class="form-floating">
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                            <label for="floatingInput">الاسم</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input style="
                            margin-bottom: -1px; border-bottom-left-radius: 0; border-bottom-right-radius: 0; border-top-left-radius: 0; border-top-right-radius: 0;" type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="username">
                            <label for="floatingInput">اسم المستخدم</label>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                      
                          <div class="form-floating">
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                            <label for="floatingInput">البريد الالكتروني</label>
                          </div>
                          <div class="form-floating">
                            <input style="
                            margin-bottom: -1px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-left-radius: 0;border-top-right-radius: 0;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            <label for="floatingPassword">الرمز</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Password">
                            <label for="floatingPassword">تاكيد الرمز</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                      
                          <div class="checkbox mb-3">
                            <label>
                              <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> الموافقة على سياسة الخصوصية
                            </label>
                          </div>
                          <button class="w-100 btn btn-lg btn-primary" style="background-color: rgb(8, 82, 105)" type="submit">تسجيل</button>
                          <p class="mt-3 mb-3 text-muted">
                            @if (Route::has('password.request'))
                                <a  href="{{ route('login') }}">
                                    لديك حساب من قبل؟ دخول
                                </a>
                            @endif
                          </p>
                        </form>
                </div>
            </div>
    </main>

</div>
@endsection
