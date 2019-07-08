@extends('layouts.partials.main-forms')
@include('layouts.partials.page-header',
			['header' => 'Customers',
			 'form_title' => 'Customer Registration'
			])
    @section('create-form')
        <form autocomplete="off">
	        <div class="row">
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicFirstName">
		            	Name of Applicant
		        	</label>
		            <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
		            autocomplete="off" />
	            </div>
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicLastName">
		            	Branch
		        	</label>
		            <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
		             autocomplete="off" />
	            </div>
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicLastName">
		            	Applicant Number
		            </label>
		            <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
		            autocomplete="off" />
	            </div>
	        </div>
          	<div class="row">
	            <div class="form-group form-material col-md-4">
	              <label class="form-control-label">Gender</label>
	              <div>
	                <div class="radio-custom radio-default radio-inline">
	                  <input type="radio" id="inputBasicMale" name="inputGender" />
	                  <label for="inputBasicMale">Male</label>
	                </div>
	                <div class="radio-custom radio-default radio-inline">
	                  <input type="radio" id="inputBasicFemale" name="inputGender" checked />
	                  <label for="inputBasicFemale">Female</label>
	                </div>
	              </div>
	            </div>
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicFirstName">
		           		Maritual Status
		            </label>
		            <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
		            autocomplete="off" />
	            </div>
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicLastName">
		            	Nationality
		            </label>
		            <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
		             autocomplete="off" />
	          	</div>
            </div>
            <div class="row">
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicLastName">
		            	Date of Birth
		           	</label>
		            <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
		            autocomplete="off" />
	            </div>
	          	<div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicEmail">
		            	Phone Number
		            </label>
		            <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail"
		              autocomplete="off" />
	          	</div>
	          	<div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicEmail">
		            	Email Address
		            </label>
		            <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail"
		              autocomplete="off" />
	          	</div>
            </div>
            <div class="row">
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicPassword">
		            	Country
		        	</label>
		            <input type="text" class="form-control" id="inputBasicPassword" name="inputPassword"
		             autocomplete="off" />
	            </div>
		        <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicEmail">
		            	District or City
		            </label>
		            <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail"
		             autocomplete="off" />
		        </div>
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicEmail">
		            	Physical Address
		            </label>
	            <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail"
	              autocomplete="off" />
	        	</div>
          	</div>
          	<div class="row">
	            <div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicPassword">
		            	Next of Kin Name
		            </label>
		            <input type="text" class="form-control" id="inputBasicPassword" name="inputPassword"
		             autocomplete="off" />
	            </div>
	          	<div class="form-group form-material col-md-4">
		            <label class="form-control-label" for="inputBasicEmail">
		            	Next of Kin`s Phone Number
		        	</label>
		            <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail"
		              autocomplete="off" />
	          	</div>
          	</div>
          	<div class="form-group form-material">
            	<button type="button" class="btn btn-primary">Save</button>
          	</div>
        </form>
	@endsection
