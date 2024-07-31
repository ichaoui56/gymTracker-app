@extends('layouts.dashboardLayout')

@section('main')
    @if (Request::url() === 'http://127.0.0.1:8000/staticDash')
        <x-dashboard-pages.static-dashboard :data="$data"/>
    @elseif (Request::url() === 'http://127.0.0.1:8000/userDash')
        <x-dashboard-pages.table-dashboard :users="$users" />
    @elseif (Request::url() === 'http://127.0.0.1:8000/profileDash')
        <x-dashboard-pages.profile-dashboard :user="$user"/>
    @elseif (Request::url() === 'http://127.0.0.1:8000/categoryDash')
        <x-dashboard-pages.category-dashboard :categories="$categories" />
    @elseif (Request::url() === 'http://127.0.0.1:8000/benefitDash')
        <x-dashboard-pages.benefits-dashboard :benefits="$benefits" />
    @elseif (Request::url() === 'http://127.0.0.1:8000/classeDash')
        <x-dashboard-pages.classe-dashboard :message="$message" :coaches="$coaches" :classes="$classes" :categories="$categories"
            :benefits="$benefits" />
    @else
        <x-dashboard-pages.abonnement-dashboard :userWithAbonnement="$userWithAbonnement" :features="$features" :plans="$plans" :abonnements="$abonnements" :userAbonnements="$userAbonnements"/>
    @endif
@endsection
