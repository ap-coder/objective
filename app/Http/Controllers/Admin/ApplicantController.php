<?php

namespace App\Http\Controllers\Admin;

use App\Applicant;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyApplicantRequest;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Job;
use View;
use App\Skill;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicantController extends Controller
{

    public function formatted()
    {
        $applicants = Applicant::all();

        return view('admin.applicants.formatted', compact('applicants'));
    }

    public function index()
    {
        abort_if(Gate::denies('applicant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicants = Applicant::all();

        return view('admin.applicants.index', compact('applicants'));
    }

    public function create()
    {
        abort_if(Gate::denies('applicant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobs = Job::all()->pluck('job_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $skills = Skill::all()->pluck('skill', 'id');

        return view('admin.applicants.create', compact('jobs', 'skills'));
    }

    public function store(StoreApplicantRequest $request)
    {
        $applicant = Applicant::create($request->all());
        $applicant->skills()->sync($request->input('skills', []));

        return redirect()->route('admin.applicants.index');
    }

    public function edit(Applicant $applicant)
    {
        abort_if(Gate::denies('applicant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobs = Job::all()->pluck('job_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $skills = Skill::all()->pluck('skill', 'id');

        $applicant->load('job', 'skills');

        return view('admin.applicants.edit', compact('jobs', 'skills', 'applicant'));
    }

    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        $applicant->update($request->all());
        $applicant->skills()->sync($request->input('skills', []));

        return redirect()->route('admin.applicants.index');
    }

    public function show(Applicant $applicant)
    {
        abort_if(Gate::denies('applicant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicant->load('job', 'skills');

        return view('admin.applicants.show', compact('applicant'));
    }



    public function destroy(Applicant $applicant)
    {
        abort_if(Gate::denies('applicant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicant->delete();

        return back();
    }

    public function massDestroy(MassDestroyApplicantRequest $request)
    {
        Applicant::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
