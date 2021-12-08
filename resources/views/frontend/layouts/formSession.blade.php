@if(\Illuminate\Support\Facades\Session::has('message'))
    <div class="alert alert-success" style="background-color: #7FBC4E !important; font-weight:bold; color:#ffffff; text-align: center">
        {{ \Illuminate\Support\Facades\Session::get('message') }}

    </div>
@endif
