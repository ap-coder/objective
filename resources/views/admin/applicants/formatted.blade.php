@extends('layouts.admin')

@section('content')

        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Applicant">
                <thead>
                    <tr>
                        <th>Job</th>
                        <th>Applicant Name</th>
                        <th>Email Address</th>
                        <th>Website</th>
                        <th>Skills</th>
                        <th>Cover Letter Paragraph</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 0;$titlecount = 0; @endphp
                    @foreach($applicants as $key => $applicant)
                        <tr data-entry-id="{{ $applicant->id }}">
                            @if($applicant->job_id == '1')
                                @if($titlecount < 2)
                                @else
                                    <td> {{ $applicant->job->job_title ?? '' }} </td>
                                @endif
                            @endif
                         @php $titlecount++;  @endphp
                            <td> {{ $applicant->name ?? '' }} </td>
                            <td> {{ $applicant->email ?? '' }} </td>
                            <td> {{ $applicant->website ?? '' }} </td>
                            <td>
                                @foreach($applicant->skills as $key => $item)
                                    <span class="badge badge-info">{{ $item->skill }}</span>
                                @endforeach
                            </td>
                            <td> {{ $applicant->cover_letter ?? '' }} </td>
                        </tr>
                    @endforeach
                    @php $i++;  @endphp
                </tbody>
            </table>
        </div>
{{-- $cnt = count($items);
for ($i = 0; $i < $cnt; ++$i) {
    print_r($items[$i]);
}

$i = 0;
foreach ($categories as $forum_category) {
if($i < 2) {
     // display result
 }
 $i++;
} --}}


@endsection
