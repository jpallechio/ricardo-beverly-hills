@extends('layouts.master')

@section('content')
    <div id="claim">
        <div class="row">
            <div class="col-xs-12">
                {{--<h4>{{ $title }}</h4>--}}

                <form>

                    <legend>Claim</legend>

                    <div class="form-group col-xs-6">
                        <label for="inputClaimNumber">Claim #</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Claim #">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="inputClaimNumber">Claim Opened Date</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="mm/dd/yy">
                    </div>


                    <legend>Customer</legend>

                    <div class="form-group col-xs-5">
                        <label for="inputClaimNumber">First</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="First">
                    </div>

                    <div class="form-group col-xs-2">
                        <label for="inputClaimNumber">M.I.</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="M.I.">
                    </div>

                    <div class="form-group col-xs-5">
                        <label for="inputClaimNumber">Last</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Last">
                    </div>

                    <div class="form-group col-xs-12">
                        <label for="inputClaimNumber">Address 1</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Address 1">
                    </div>

                    <div class="form-group col-xs-12">
                        <label for="inputClaimNumber">Address 2</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Address 2">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">City</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="City">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">State</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="State">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Zip</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Zip">
                    </div>

                    <div class="form-group col-xs-2">
                        <label for="inputClaimNumber">Business Phone</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Business Phone">
                    </div>

                    <div class="form-group col-xs-2">
                        <label for="inputClaimNumber">Extension</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Extension">
                    </div>

                    <div class="form-group col-xs-2">
                        <label for="inputClaimNumber">Home Phone</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Home Phone">
                    </div>

                    <div class="form-group col-xs-2">
                        <label for="inputClaimNumber">Fax</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Fax">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Email</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Email">
                    </div>


                    <div class="form-group col-xs-8">
                        <label for="inputClaimNumber">Other Information</label>
                        <textarea class="col-xs-12"></textarea>
                    </div>


                    <legend>Product</legend>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Style #</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Pieces</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">By</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Warranty</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Color</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Color">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Class</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Class">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Class Description</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Class Description">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Product PO#</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-8">
                        <label for="inputClaimNumber">Vendor</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Launching</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="mm/dd/yy">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Discontinued</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="Class Description">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Approximate Wholesale Price</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Purchase Date</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">At</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Reason Id</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Reason Description</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-8">
                        <label for="inputClaimNumber">Comments</label>
                        <textarea class="col-xs-12"></textarea>
                    </div>

                    <legend>Action Taken to this Claim</legend>

                        <div class="form-check col-xs-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="action-options"
                                       value="send-replacement">
                                Send Replacement Parts
                            </label>
                        </div>

                        <div class="col-xs-1"><b>OR</b></div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="action-options" value="refer-repair">
                                Referred to Repair Center
                            </label>
                        </div>

                    <br>

                    <div class="form-group col-xs-8">
                        <label for="inputClaimNumber">Repair Center</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Referred Date</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-8">
                        <label for="inputClaimNumber">Address</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputClaimNumber">Phone #</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">City</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">State</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Zip</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Fax #</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <legend>Recommendation From Repair Center</legend>

                    <div class="form-check col-xs-1">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="recommended-options"
                                   value="repair">
                            Repair
                        </label>
                    </div>

                    <div class="col-xs-1"><b>OR</b></div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="recommended-options" value="replace">
                            Replace
                        </label>
                    </div>

                    <br>

                    <div class="form-group col-xs-12">
                        <label for="inputClaimNumber">Claim Follow Up</label>
                        <textarea class="col-xs-12"></textarea>
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Repair Bill #</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>

                    <div class="form-group col-xs-3">
                        <label for="inputClaimNumber">Cost of Repair</label>
                        <input type="text" class="form-control" id="inputClaimNumber" placeholder="">
                    </div>


                    <button type="submit" class="btn btn-primary col-xs-12">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection