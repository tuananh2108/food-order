@if(Session::has('error'))
    <p class="">{{Session::get('error')}}</p>
@endif