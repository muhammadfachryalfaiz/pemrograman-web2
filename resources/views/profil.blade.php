@php
    $username = 'Fachri';
    $role = 'admin';
@endphp

@if ($role == 'admin')
    <h3>Selamat Datang, {{ $username }}! Anda adalah seorang {{ $role }}</h3>
@else
    <h3>Selamat Datang, {{ $username }}! Anda adalah seorang user</h3>
@endif
