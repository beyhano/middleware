@if(Auth::guard('web')->check())
<p class="text-success"><strong>{{Auth::guard('web')->user()->name}}</strong> Adlı Kullanıcı Giriş Yapti</p>
    @else
    <p class="text-danger"><strong> Kullanıcı</strong> Çıkış Yaptı</p>
    @endif

@if(Auth::guard('yonetici')->check())
    <p class="text-success"><strong>{{Auth::guard('yonetici')->user()->name}}</strong> Adlı Admin Giriş Yapti</p>
@else
    <p class="text-danger"><strong> Admin</strong> Çıkış Yaptı</p>
@endif
