@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h1 class="text-center">Apply for an ABN </h1>
      <br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">

                  <form id="example-advanced-form" action="#">
                    {{ csrf_field() }}
                      <h3>Account</h3>
                      <fieldset>
                          <legend>Account Information</legend>

                          <label for="userName-2">User name *</label>
                          <input id="userName-2" name="userName" type="text" class="required" required>
                          <label for="password-2">Password *</label>
                          <input id="password-2" name="password" type="text" class="required" required>
                          <label for="confirm-2">Confirm Password *</label>
                          <input id="confirm-2" name="confirm" type="text" class="required" required="">
                          <p>(*) Mandatory</p>
                      </fieldset>



                      <h3>Finish</h3>
                      <fieldset>
                          <legend>Terms and Conditions</legend>

                          <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                      </fieldset>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
