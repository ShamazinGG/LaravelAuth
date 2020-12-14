Это админка
<div>
    @if(\Illuminate\Support\Facades\Auth::check())
        <br>
        <a href="/admin">Admin</a>
        <a href="/logout">Logout</a>
    @endif
</div>
