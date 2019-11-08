@if(session('message_success'))
  <div class="alert alert-success alert-dismissible">
    {{ session('message_success') }}
  </div>
@endif

@if(session('message_error'))
  <div class="alert alert-warning alert-dismissible">
    {{ session('message_error') }}
  </div>
@endif

