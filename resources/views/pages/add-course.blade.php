@extends('layouts.template')

@section('content')
    {{-- <section class="contact_area p_120"> --}}
    <div class="container">
        <br>
        <div class="admission-payment">
            {{ Form::open(['url' => url('submit-course-form')]) }}

            <fieldset class="add-course-fieldset">

                <legend class="add-course-legend">Choose Course:-</legend>

                <div class="add-course-div">
                    <label for="name" class="add-course-label">Student Name:</label>
                    <input type="text" name="name" id="name" class="add-course-input">
                </div>


                <div class="add-course-div">
                    <label for="id" class="add-course-label">Student Id:</label>
                    <input type="number" name="id" id="id" class="add-course-input">
                </div>

                <div class="add-course-div">
                    <label for="course" class="add-course-label">Choose a Course:</label>
                    <select id="course" name="course" class="add-course-select">
                        <option selected disabled>None</option>
                        <option id="CITA" value="CITA">Certificate in Information Technology Application</option>
                        <option id="DITA" value="DITA">Diploma in Information Technology Application</option>
                        <option id="ADITA" value="ADITA">Advanced Diploma in Information Technology Application</option>
                        <option id="CFAS" value="CFAS">Certificate in Financial Accounting Systems</option>
                        <option id="DFAS" value="DFAS">Diploma in Financial Accounting Systems</option>
                        <option id="ADFAS" value="ADFAS">Advanced Diploma in Financial Accounting Systems</option>
                    </select>
                    <br>
                </div>

                <div class="add-course-div">
                    <label for="courseDetails" class="add-course-label">Course Details:</label>
                    <span id="demo" class="add-course-span">Course
                        Details...</span>
                    {{-- <input type="text" name="courseDetails" id="courseDetails" disabled> --}}
                </div>

                <div class="add-course-div">
                    <label for="duration" class="add-course-label">Course Duration:</label>
                    <input type="number" name="duration" id="duration" class="add-course-input">
                </div>



                <div class="add-course-div">
                    <label for="admissionFees" class="add-course-label">Admission Fees:</label>
                    <input type="number" value="" id="c" class="add-course-input">
                </div>


                <div class="add-course-div">
                    <label for="monthlyFee" class="add-course-label">Monthly Fee:</label>
                    <input type="number" value="" id="b" class="add-course-input">
                </div>


                <div class="add-course-div">
                    <label for="iteration" class="add-course-label">Number of Months:</label>
                    <input type="number" value="" id="a" class="add-course-input">
                </div>


                <div class="add-course-div">
                    <label for="totalAmount" class="add-course-label">Total Amount:</label>
                    <input type="number" id="d" value="" class="add-course-input" disabled>
                </div>

                <div class="add-course-div">
                    <input type="submit" value="Submit" class="add-course-submit">
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
        <br>
    </div>

    {{-- </section> --}}
@endsection
