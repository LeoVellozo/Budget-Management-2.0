@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <section class="middle">
        <div class="header">
            <h1>Overview</h1>
        </div>

        @include('layouts.cards')

        <canvas id="chart"></canvas>      
    </section>
    @include('layouts.recentReleases')

    <!------------------------ END OF MIDDLE------------------------>
@endsection