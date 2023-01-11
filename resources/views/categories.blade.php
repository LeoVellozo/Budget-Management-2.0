@extends('layouts.layout')

@section('title', 'Categories')

@section('content')

    
<div class="tableCategory">

    <div class="releases ">
        <div class=" newRelease d-flex d-inline justify-content-between align-items-center">
            <h4>Ultimos Lançamentos</h4>
            @include('layouts.modalCategory')
        </div>
    </div>

    <div class=recent-orders>
        <table id="releases">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</div>

@endsection