<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('levels', function(Blueprint $table) {
			$table->foreign('stage_id')->references('id')->on('stages')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('level_id')->references('id')->on('levels')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('level_id')->references('id')->on('levels')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('revenueItems', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('revenueItems', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->foreign('nationality_id')->references('id')->on('nationalities')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->foreign('place_id')->references('id')->on('places')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courseStudents', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courseStudents', function(Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courseStudents', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('absents', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('absents', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('examAbsents', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('examAbsents', function(Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('examAbsents', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('controls', function(Blueprint $table) {
			$table->foreign('level_id')->references('id')->on('levels')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('controls', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('committees', function(Blueprint $table) {
			$table->foreign('control_id')->references('id')->on('controls')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('committe_students', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('committe_students', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('committe_students', function(Blueprint $table) {
			$table->foreign('committe_id')->references('id')->on('committees')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('financials', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('financials', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('financials', function(Blueprint $table) {
			$table->foreign('bank_id')->references('id')->on('banks')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('discounts', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('discounts', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('level_student', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('level_student', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('level_student', function(Blueprint $table) {
			$table->foreign('level_id')->references('id')->on('levels')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bus_regions', function(Blueprint $table) {
			$table->foreign('bus_id')->references('id')->on('buses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bus_regions', function(Blueprint $table) {
			$table->foreign('region_id')->references('id')->on('Regions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('check_out', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('check_out', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('debts', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('debts', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('approval_degrees', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('approval_degrees', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('academic_year_id')->references('id')->on('academicYears')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->foreign('parent_id')->references('id')->on('parentts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

	}

	public function down()
	{
		Schema::table('levels', function(Blueprint $table) {
			$table->dropForeign('levels_stage_id_foreign');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_level_id_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_level_id_foreign');
		});
		Schema::table('revenueItems', function(Blueprint $table) {
			$table->dropForeign('revenueItems_category_id_foreign');
		});
		Schema::table('revenueItems', function(Blueprint $table) {
			$table->dropForeign('revenueItems_academic_year_id_foreign');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->dropForeign('students_nationality_id_foreign');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->dropForeign('students_place_id_foreign');
		});
		Schema::table('courseStudents', function(Blueprint $table) {
			$table->dropForeign('courseStudents_student_id_foreign');
		});
		Schema::table('courseStudents', function(Blueprint $table) {
			$table->dropForeign('courseStudents_course_id_foreign');
		});
		Schema::table('courseStudents', function(Blueprint $table) {
			$table->dropForeign('courseStudents_academic_year_id_foreign');
		});
		Schema::table('absents', function(Blueprint $table) {
			$table->dropForeign('absents_student_id_foreign');
		});
		Schema::table('absents', function(Blueprint $table) {
			$table->dropForeign('absents_academic_year_id_foreign');
		});
		Schema::table('examAbsents', function(Blueprint $table) {
			$table->dropForeign('examAbsents_student_id_foreign');
		});
		Schema::table('examAbsents', function(Blueprint $table) {
			$table->dropForeign('examAbsents_course_id_foreign');
		});
		Schema::table('examAbsents', function(Blueprint $table) {
			$table->dropForeign('examAbsents_academic_year_id_foreign');
		});
		Schema::table('controls', function(Blueprint $table) {
			$table->dropForeign('controls_level_id_foreign');
		});
		Schema::table('controls', function(Blueprint $table) {
			$table->dropForeign('controls_academic_year_id_foreign');
		});
		Schema::table('committees', function(Blueprint $table) {
			$table->dropForeign('committees_control_id_foreign');
		});
		Schema::table('committe_students', function(Blueprint $table) {
			$table->dropForeign('committe_students_student_id_foreign');
		});
		Schema::table('committe_students', function(Blueprint $table) {
			$table->dropForeign('committe_students_academic_year_id_foreign');
		});
		Schema::table('committe_students', function(Blueprint $table) {
			$table->dropForeign('committe_students_committe_id_foreign');
		});
		Schema::table('financials', function(Blueprint $table) {
			$table->dropForeign('financials_student_id_foreign');
		});
		Schema::table('financials', function(Blueprint $table) {
			$table->dropForeign('financials_academic_year_id_foreign');
		});
		Schema::table('financials', function(Blueprint $table) {
			$table->dropForeign('financials_bank_id_foreign');
		});
		Schema::table('discounts', function(Blueprint $table) {
			$table->dropForeign('discounts_student_id_foreign');
		});
		Schema::table('discounts', function(Blueprint $table) {
			$table->dropForeign('discounts_academic_year_id_foreign');
		});
		Schema::table('level_student', function(Blueprint $table) {
			$table->dropForeign('level_student_academic_year_id_foreign');
		});
		Schema::table('level_student', function(Blueprint $table) {
			$table->dropForeign('level_student_level_id_foreign');
		});
		Schema::table('level_student', function(Blueprint $table) {
			$table->dropForeign('level_student_student_id_foreign');
		});
		Schema::table('bus_regions', function(Blueprint $table) {
			$table->dropForeign('bus_regions_bus_id_foreign');
		});
		Schema::table('bus_regions', function(Blueprint $table) {
			$table->dropForeign('bus_regions_region_id_foreign');
		});
		Schema::table('check_out', function(Blueprint $table) {
			$table->dropForeign('check_out_student_id_foreign');
		});
		Schema::table('check_out', function(Blueprint $table) {
			$table->dropForeign('check_out_academic_year_id_foreign');
		});
		Schema::table('debts', function(Blueprint $table) {
			$table->dropForeign('debts_student_id_foreign');
		});
		Schema::table('debts', function(Blueprint $table) {
			$table->dropForeign('debts_academic_year_id_foreign');
		});
		Schema::table('approval_degrees', function(Blueprint $table) {
			$table->dropForeign('approval_degrees_student_id_foreign');
		});
		Schema::table('approval_degrees', function(Blueprint $table) {
			$table->dropForeign('approval_degrees_academic_year_id_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_student_id_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_academic_year_id_foreign');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->dropForeign('students_parent_id_foreign');
		});
	}
}