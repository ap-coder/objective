<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToApplicantsTable extends Migration
{
    public function up()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->unsignedInteger('job_id')->nullable();
            $table->foreign('job_id', 'job_fk_1084685')->references('id')->on('jobs');
        });
    }
}
