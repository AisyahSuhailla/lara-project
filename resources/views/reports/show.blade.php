@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<table class="table">
    <thead>
        <tr><th colspan="2"><h3> Report Details </h3></th>
        </tr>
    </thead>
<tbody>
        <tr>
            <td>Report Title</td>
            <td>: {{$report->title}}</td>
        </tr>
        <tr class="success">
            <td>Report Description  </td>
            <td>: {{$report->description}}</td>
        </tr>
        <tr class="danger">
            <td>Report Priority</td>
            <td>: {{$report->priority}} </td>
        </tr>
        <tr class="info">
            <td>Created at</td>
            <td> : {{$report->created_at}}</td>
        </tr>
        <tr>
            <td>Update at</td>
            <td> : {{$report->updated_at}} </td>
         </tr>
</tbody>
</table>
</div>
@endsection