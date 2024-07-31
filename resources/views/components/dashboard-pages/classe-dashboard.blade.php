@props(['coaches','categories','classBenefits' ,'classes','benefits','message'])

@section('title')   
    Classes
@endsection

<div class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68">

    <!-- Navbar -->

    <x-Navbars.dashboard-navbar msg="Your static string here" />

    <!-- end Navbar -->

    <!-- Create Class popup -->

    <x-pop-ups.create-class :message="$message" :coaches="$coaches" :categories="$categories" :benefits="$benefits"/>

    <!-- End Create Class popup -->
    
    <x-cards.class-dash-cards :message="$message" :classes="$classes" :coaches="$coaches" :categories="$categories" :benefits="$benefits"/>

</div>
