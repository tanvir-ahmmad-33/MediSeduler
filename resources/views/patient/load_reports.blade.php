@if($reports)
    @foreach($reports as $report)
        <tr>
            <td class="text-center"> {{ $loop->iteration }}       </td>
            <td class="text-center"> {{ $report['report_date'] }} </td>
            <td class="text-center"> {{ $report['type'] }}        </td>
            <td class="text-center"> {{ $report['findings'] }}    </td>
            <td class="text-center"> {{ $report['status'] }}      </td>
            <td class="text-center">
                <a href="" class="btn btn-sm btn-info"> View </a>
                <a href="" class="btn btn-sm btn-success"> Download </a>
            </td>
        </tr>
    @endforeach
@else
<tr>
    <th colspan="6" class="text-center text-muted">No reports found</th>
</tr>
@endif