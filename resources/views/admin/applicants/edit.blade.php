@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.applicant.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.applicants.update", [$applicant->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="job_id">{{ trans('cruds.applicant.fields.job') }}</label>
                <select class="form-control select2 {{ $errors->has('job') ? 'is-invalid' : '' }}" name="job_id" id="job_id">
                    @foreach($jobs as $id => $job)
                        <option value="{{ $id }}" {{ ($applicant->job ? $applicant->job->id : old('job_id')) == $id ? 'selected' : '' }}>{{ $job }}</option>
                    @endforeach
                </select>
                @if($errors->has('job'))
                    <span class="text-danger">{{ $errors->first('job') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.applicant.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.applicant.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $applicant->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.applicant.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.applicant.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $applicant->email) }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.applicant.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="website">{{ trans('cruds.applicant.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', $applicant->website) }}">
                @if($errors->has('website'))
                    <span class="text-danger">{{ $errors->first('website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.applicant.fields.website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="skills">{{ trans('cruds.applicant.fields.skills') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('skills') ? 'is-invalid' : '' }}" name="skills[]" id="skills" multiple>
                    @foreach($skills as $id => $skills)
                        <option value="{{ $id }}" {{ (in_array($id, old('skills', [])) || $applicant->skills->contains($id)) ? 'selected' : '' }}>{{ $skills }}</option>
                    @endforeach
                </select>
                @if($errors->has('skills'))
                    <span class="text-danger">{{ $errors->first('skills') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.applicant.fields.skills_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cover_letter">{{ trans('cruds.applicant.fields.cover_letter') }}</label>
                <textarea class="form-control {{ $errors->has('cover_letter') ? 'is-invalid' : '' }}" name="cover_letter" id="cover_letter">{{ old('cover_letter', $applicant->cover_letter) }}</textarea>
                @if($errors->has('cover_letter'))
                    <span class="text-danger">{{ $errors->first('cover_letter') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.applicant.fields.cover_letter_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection