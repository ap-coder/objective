<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Applicant;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Http\Resources\Admin\ApplicantResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicantApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('applicant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ApplicantResource(Applicant::with(['job'])->get());

    }

    public function store(StoreApplicantRequest $request)
    {
        $applicant = Applicant::create($request->all());

        return (new ApplicantResource($applicant))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);

    }

    public function show(Applicant $applicant)
    {
        abort_if(Gate::denies('applicant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ApplicantResource($applicant->load(['job']));

    }

    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        $applicant->update($request->all());

        return (new ApplicantResource($applicant))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);

    }

    public function destroy(Applicant $applicant)
    {
        abort_if(Gate::denies('applicant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicant->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
