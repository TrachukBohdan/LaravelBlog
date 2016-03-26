
@if( Session::has('status') )
    @if( Session::get('status') == 'ok')
    <div class="alert alert-success">
      <strong>ОК!</strong> Збережено
    </div>
    @endif
@endif
