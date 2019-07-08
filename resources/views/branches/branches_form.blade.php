@extends('layouts.partials.main-forms')
	@include('layouts.partials.page-header',
			['header' => 'Company',
			 'form_title' => 'Company Registration'
			])
    @section('create-form')
    	<form autocomplete="off">
	      <div class="form-group form-material">
	        <label class="form-control-label">Company Name</label>
	        <span class="required">*</span>
	        <input type="text" class="form-control" name="company_name"/>
	      </div>
	      <div class="row">
	        <div class="form-group form-material col-md-4">
	        <label class="form-control-label">Date Established</label>
	        <span class="required">*</span>
	        <input type="text" class="form-control" name="date_established"/>
	        </div>
	        <div class="form-group form-material col-md-4">
	        <label class="form-control-label">Telephone Number</label>
	        <span class="required">*</span>
	        <input type="text" class="form-control" name="telephone_number"/>
	        </div>
	        <div class="form-group form-material col-md-4">
	        <label class="form-control-label">Company Email</label>
	        <span class="required">*</span>
	        <input type="text" class="form-control" name="company_email"/>
	        </div>
	      </div>
	      <div class="row">
	        <div class="form-group form-material col-md-4">
	          <label class="form-control-label">Country</label>
	          <span class="required">*</span>
	          <input type="text" class="form-control" name="country" />
	        </div>
	        <div class="form-group form-material col-md-4">
	          <label class="form-control-label">District or City</label>
	          <span class="required">*</span>
	          <input type="text" class="form-control" name="district_city"/>
	        </div>
	        <div class="form-group form-material col-md-4">
	        <label class="form-control-label">Physical Address</label>
	        <span class="required">*</span>
	        <input type="text" class="form-control" name="physical_address"/>
	        </div>
	       </div>
	       <div class="row">
	          <div class="form-group form-material col-md-4">
	            <label class="form-control-label">Contact Person</label>
	            <span class="required">*</span>
	            <input type="text" class="form-control" name="contact_person" />
	          </div>
	          <div class="form-group form-material col-md-4">
	          <label class="form-control-label">Contact Person Position</label>
	          <span class="required">*</span>
	          <input type="email" class="form-control" name="contact_person_position"
	          />
	          </div>
	          <div class="form-group form-material col-md-4">
	            <label class="form-control-label">Contact`s Phone Number</label>
	            <span class="required">*</span>
	            <input type="email" class="form-control" name="contact_phone_number"
	            />
	          </div>
	        </div>
	        <div class="row">
	          <div class="form-group form-material">
	            <label class="form-control-label">Company Logo</label>
	            <input type="text" class="form-control" name="company_logo" />
	          </div>
	        </div>
	      <div class="form-group form-material">
	        <button type="button" class="btn btn-primary">Sign Up</button>
	      </div>
	    </form>
	@endsection
