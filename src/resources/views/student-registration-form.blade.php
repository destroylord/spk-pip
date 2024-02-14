@extends('templates.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <ul id="steps-native" class="nav nav-pills justify-content-center"></ul>
        
        <form id="my-wizard" class="my-2 py-2" autocomplete="off">
          @include('registration-student.personal-biodata')
          @include('registration-student.father-biodata')
          @include('registration-student.mother-biodata')
        </form>
    </div>
  </div>
</div>

     
@endsection

@include('registration-student.scripts')