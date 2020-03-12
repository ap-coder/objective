@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.applicant.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applicants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.id') }}
                        </th>
                        <td>
                            {{ $applicant->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.job') }}
                        </th>
                        <td>
                            {{ $applicant->job->job_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.name') }}
                        </th>
                        <td>
                            {{ $applicant->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.email') }}
                        </th>
                        <td>
                            {{ $applicant->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.website') }}
                        </th>
                        <td>
                            {{ $applicant->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.skills') }}
                        </th>
                        <td>
                            @foreach($applicant->skills as $key => $skills)
                                <span class="label label-info">{{ $skills->skill }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicant.fields.cover_letter') }}
                        </th>
                        <td>
                            {{ $applicant->cover_letter }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applicants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection