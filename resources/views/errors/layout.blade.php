@extends(backpack_view(backpack_user() && backpack_theme_config('layout') ? 'layouts.'.backpack_theme_config('layout') : 'errors.blank'))

@section('content')
<div class="bg-light min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h1 class="display-3 mb-0 mr-4">{{ $error_number }}</h1>
      <div>
        <h4 class="pt-3">@yield('title')</h4>
        <p class="text-muted">@yield('description')</p>
        <div class="empty-action">
          <a href="./." class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l14 0"></path><path d="M5 12l6 6"></path><path d="M5 12l6 -6"></path></svg>
            {{ trans('backpack::base.error.button') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection