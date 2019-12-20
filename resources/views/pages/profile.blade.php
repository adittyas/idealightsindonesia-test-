@extends('layouts.app')

@section('content')
<div class='container'>
    <div id="avatar">
        <img src="#" alt="avatar">
        <h5 id='avatarName'></h5>
        <h6 id='avatarCountry' class="txt-uppercase"></h6>
    </div>
    <div id="contact" class='bg-yel txt-white'>
        <div class="groupContact">
            <i class="fas fa-phone fa-fw fa-lg icon"></i>
            <div class='textContact'>
                <h6 class='font-thin'>Mobile</h6>
                <span id='mobile' class='font-bold'></span>
            </div>
        </div>
        <div class="groupContact">
            <i class="far fa-envelope fa-fw fa-lg icon"></i>
            <div class='textContact'>
                <h6 class='font-thin'>Email</h6>
                <span id='email' class='font-bold'></span>
            </div>
        </div>
    </div>
    <div id="profile" class='bg-yel txt-white'>
        <div class="groupContact">
            <i class="fas fa-venus-mars fa-fw fa-lg icon"></i>
            <div class='textContact'>
                <h6 class='font-thin'>Gender</h6>
                <span id='gender' class='font-bold txt-capitalize'></span>
            </div>
        </div>
        <div class="groupContact">
            <i class="far fa-calendar-check fa-fw fa-lg icon"></i>
            <div class='textContact'>
                <h6 class='font-thin'>Date of birth</h6>
                <span id='dob' class='font-bold'></span>
            </div>
        </div>
        <div class="groupContact">
            <i class="fas fa-map-marked-alt fa-fw fa-lg icon"></i>
            <div class='textContact'>
                <h6 class='font-thin'>Address</h6>
                <span id='address' class='font-bold'></span>
            </div>
        </div>
    </div>
    <div class='bg-yel padding-0'>
        <iframe id='map' src="" allowfullscreen></iframe>
    </div>
</div>
@endsection
