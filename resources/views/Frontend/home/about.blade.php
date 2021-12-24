@extends('Frontend.master.master')

@section('main-content')
<?php

use App\Models\Footer;

$footer = Footer::find(1);
?>

<div class="about_section_2 layout_padding">
    <div class="container">
        <h1 class="about_text_2"><strong>ABOUT US</strong></h1>
        <p class="client_long_text">This is our website. You can find home solutions here.</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>


@endsection