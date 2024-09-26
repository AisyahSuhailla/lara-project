@if(count($reports)>0)
<table>
    <thead>
        <th>Report Title</th>
        <th>Description</th>
        <th>Priority</th>
        <tbody>
            @foreach($reports as $report)
            <tr>
                <td>{{$report->title}}</td>
                <td>{{$report->description}}</td>
                <td>{{$report->priority}}</td>
                <td>Action</td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>
@else
No Data
@endif