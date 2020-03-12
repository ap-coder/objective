@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.skill.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.skills.update", [$skill->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="skill">{{ trans('cruds.skill.fields.skill') }}</label>
                <input class="form-control {{ $errors->has('skill') ? 'is-invalid' : '' }}" type="text" name="skill" id="skill" value="{{ old('skill', $skill->skill) }}" required>
                @if($errors->has('skill'))
                    <span class="text-danger">{{ $errors->first('skill') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.skill.fields.skill_helper') }}</span>
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