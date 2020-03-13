<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToApplicantsTable extends Migration
{
    public function up()
    {
        // Schema::enableForeignKeyConstraints();

        Schema::table('applicants', function (Blueprint $table) {
            $table->unsignedInteger('job_id')->nullable();
            $table->foreign('job_id', 'job_fk_1084685')->references('id')->on('jobs');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->unsignedInteger('applicant_id')->nullable();
            $table->foreign('applicant_id', 'applicant_fk_1139722')->references('id')->on('applicants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::disableForeignKeyConstraints();

        // Schema::table('applicants', function (Blueprint $table) {
        //     $table->dropForeign(['job_id']);
        // });

        // Schema::table('skills', function (Blueprint $table) {
        //     $table->dropForeign(['applicant_id']);
        // });
    }

}
