@extends('layouts.master')
@section('content')
    <br>
    <div class="row">
    <h3>{{$name}} - Assets</h3>

        <div class="medium-12 columns">
            <table class="medium-12 columns">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Condition</th>
                        <th>Location</th>
                        <th>Date Added</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($assets as $asset)
                        <tr>
                            <td>{{ $asset["id"] }}</td>
                            <td>{{ $asset["name"] }}</td>
                            <td>{{ $asset["status"] }}</td>
                            <td>{{ $asset["a_condition"] }}</td>
                            <td>{{ $asset["location"] }}</td>
                            <td>{{ $asset["created_at"] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop