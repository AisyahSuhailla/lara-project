@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-striped" border=2>
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th rowspan=2>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}" class="btn btn-primary">Details</td>
            <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</td>
            <td><form action="/reports/{{$report->id}}" method="POST">
                @csrf
                 @method('DELETE')<input type="submit" value="Delete" class="btn btn-secondary" onclick="return confirm('Are you sure to delete?')"></form></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection