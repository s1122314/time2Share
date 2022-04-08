@extends("default")

@section("title")
    {{"All users"}}
@endsection
@section("content")

<section class="productCard_btnSection">
    <button class="productCard_button" onclick="window.location.href='/'"> Home </button>
    <button class="productCard_button" onclick="window.location.href='/product/create'"> Upload product </button>
    <button class="productCard_button" onclick="window.location.href='/product/destroy'"> verwijder product </button>
    <button class="productCard_button" onclick="window.location.href='/dashboard'"> Ga naar je profiel </button>
    <button class="productCard_button" onclick="window.location.href='/user'"> Bekijk profielen </button>
    <button class="productCard_button" onclick="window.location.href='/product/review'"> Bekijk Reviews </button>
</section>

<ul class="u-grid-12 u-grid-gap-2">
    @foreach($user as $user)
        @include("users.components.userCard--index")
    @endforeach
</ul>
@endsection
