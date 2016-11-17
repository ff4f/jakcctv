@extends('layouts.app')

@section('content')
    <table class="table table-responsive">
        <thead>
        <th>Nama CCTV</th>
        <th>Google Maps Loc</th>
        </thead>

        <tbody>
        @foreach($cctvdata as $data)
            <tr>
                <td><a href="{!! $data->url !!}">{!! $data->id_site !!}</a></td>
                <td><a href="http://maps.google.com/maps?&z=10&q={!! $data->location->latitude !!}+{!! $data->location->longitude !!}&ll={!! $data->location->latitude !!}+{!! $data->location->longitude !!}">{!! $data->location->latitude !!}, {!! $data->location->longitude !!}</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
@stop
