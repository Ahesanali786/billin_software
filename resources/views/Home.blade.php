@extends('layout')
@section('title', 'Auto Relax')

@section( 'content')




<div class="container">
<div class="mapouter my-4"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=kakoshi%20char%20rasta,auto%20relax&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 430px; height: 390px;"></iframe><style>.mapouter{display:table;}.gmap_canvas{overflow:hidden;position:relative;height:390px;width:430px;background:#fff;}</style><a href="https://www.taxuni.com/qbi-calculator/">QBI Calculator</a><style>.gmap_canvas iframe{position:relative !important;z-index:2 !important;}.gmap_canvas a{color:#fff !important;position:absolute !important;top:0 !important;left:0 !important;z-index:0 !important;}</style></div></div>
</div>

<style>
     .container {
        margin: 20px auto; /* Center container */
        padding: 20px;
        max-width: 95%; /* Set a maximum width */
        border: 1px solid #ddd; /* Optional border for container */
        border-radius: 10px; /* Rounded corners */
        background-color: #fff; /* White background */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
</style>
@endsection
