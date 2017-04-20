@extends('layouts.master-narrow')

@section('content')
    <div id="claim-edit">
        <div class="row">
            <div class="col-xs-12">
                <h2>Edit Claim</h2>
                <hr>
            </div>
        </div>
        {{--Form successfully edited claim--}}
        @if(Session::has('message'))
            <div class="row">
                <div class="col-xs-12">
                    <p class="alert alert-success">
                        {{ Session::get('message') }}
                    </p>
                </div>
            </div>
        @endif
        {{--Form validation errors--}}
        @if(count($errors) > 0)
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <form action="{{ URL::route('update-claim') }}" method="post">
                {{--Existing Customer Email--}}
                <div id="existing-customer-field">
                    {{--Email--}}
                    <div class="form-group col-xs-12">
                        <label for="existing-customer-email">Email</label>
                        <input type="text" class="form-control" id="existing-customer-email"
                               name="existing_customer_email"
                               value="{{ $customerDetails['customer'][0]->email }}">
                    </div>
                </div>
                {{--New Customer Fields--}}
                <div id="claim-new-customer">
                    {{--First Name--}}
                    <div class="form-group col-sm-6">
                        <label for="customer-first-name">First Name</label>
                        <input type="text" class="form-control" id="customer-first-name"
                               name="firstname"
                               value="{{ $customerDetails['customer'][0]->first_name }}"
                               disabled>
                    </div>
                    {{--Last Name--}}
                    <div class="form-group col-sm-6">
                        <label for="customer-last-name">Last Name</label>
                        <input type="text" class="form-control" id="customer-last-name"
                               name="lastname"
                               value="{{ $customerDetails['customer'][0]->last_name }}"
                               disabled>
                    </div>
                    {{--Phone--}}
                    <div class="form-group col-sm-6">
                        <label for="customer-phone">Phone</label>
                        <input type="text" class="form-control" id="customer-phone" name="phone"
                               value="{{ $customerDetails['customer'][0]->phone }}"
                               disabled>
                    </div>
                    {{--Email--}}
                    <div class="form-group col-sm-6">
                        <label for="customer-email">Email</label>
                        <input type="text" class="form-control" id="customer-email" name="email"
                               value="{{ $customerDetails['customer'][0]->email }}"
                               disabled>
                    </div>
                    {{--Address 1--}}
                    <div class="form-group col-xs-12">
                        <label for="customer-address1">Address 1</label>
                        <input type="text" class="form-control" id="customer-address1"
                               name="address1"
                               value="{{ $customerDetails['customer'][0]->address }}"
                               disabled>
                    </div>
                    {{--Address 2--}}
                    <div class="form-group col-xs-12">
                        <label for="customer-address2">Address 2</label>
                        <input type="text" class="form-control" id="customer-address2"
                               name="address2"
                               value="{{ $customerDetails['customer'][0]->address_2 }}"
                               disabled>
                    </div>
                    {{--City--}}
                    <div class="form-group col-sm-6">
                        <label for="customer-city">City</label>
                        <input type="text" class="form-control" id="customer-city" name="city"
                               value="{{ $customerDetails['customer'][0]->city }}"
                               disabled>
                    </div>
                    {{--State--}}
                    <div class="form-group col-xs-6 col-sm-3">
                        <label for="customer-state">State</label>
                        <input type="text" class="form-control" id="customer-state" name="state"
                               placeholder="WA"
                               value="{{ $customerDetails['customer'][0]->state }}"
                               disabled>
                    </div>
                    {{--Zip--}}
                    <div class="form-group col-xs-6 col-sm-3">
                        <label for="customer-zip">Zip</label>
                        <input type="text" class="form-control" id="customer-zip" name="zip"
                               value="{{ $customerDetails['customer'][0]->zip }}"
                               disabled>
                    </div>
                </div>
                {{--Product--}}
                <div class="form-group col-xs-12">
                    <label for="claim-product">Product</label>
                    <select class="form-control" id="claim-product" name="products">
                        @foreach ($products as $product)
                            @if($product->style != $claimDetails->product_style)
                                <option value="{{ $product->style }}">
                                    {{ $product->style }} -
                                    {{ $product->collection }} -
                                    {{ $product->color }}
                                </option>
                            @else
                                <option value="{{ $product->style }}" selected>
                                    {{ $product->style }} -
                                    {{ $product->collection }} -
                                    {{ $product->color }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                {{--Damage Code--}}
                <div class="form-group col-xs-12">
                    <label for="claim-damage-code">Damage Code</label>
                    <select class="form-control" id="claim-damage-code" name="damage_code">
                        @foreach ($damage_codes as $dc)
                            @if($dc->id != $claimDetails->dc_id)
                                <option value="{{ $dc->id }}">{{ $dc->id . '-' . $dc->part }}</option>
                            @else
                                <option value="{{ $dc->id }}"
                                        selected>{{ $dc->id . '-' . $dc->part }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                {{--Repair Center--}}
                <div class="form-group col-xs-12">
                    <label for="claim-repair-center">Repair Center</label>
                    <select class="form-control" id="claim-repair-center" name="repair_center">
                        @foreach ($repair_centers as $rc)
                            @if($rc->id != $claimDetails->rc_id)
                                <option value="{{ $rc->id }}">{{ $rc->name }}</option>
                            @else
                                <option value="{{ $rc->id }}" selected>{{ $rc->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                {{--Claim Type--}}
                <div class="form-group col-xs-12">
                    <label for="claim-type">Claim Type</label>
                    <div class="" id="claim-type">
                        <label class="radio-inline">
                            @if($claimDetails->replace_order == 0)
                                <input type="radio" name="replace_order" value="0"
                                       checked="checked">
                            @else
                                <input type="radio" name="replace_order" value="0">
                            @endif
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                            Repair Order
                        </label>
                        <label class="radio-inline">
                            @if($claimDetails->replace_order == 1)
                                <input type="radio" name="replace_order" value="1"
                                       checked="checked">
                            @else
                                <input type="radio" name="replace_order" value="1">
                            @endif
                            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                            Replace Order
                        </label>
                    </div>
                </div>
                {{--Parts Required--}}
                <div class="form-group col-xs-12">
                    <label for="parts-required">Parts Required</label>
                    <div class="" id="parts-required">
                        <label class="radio-inline">
                            @if($claimDetails->part_needed == '1')
                                <input type="radio" name="part_needed" value="1" checked="checked">
                            @else
                                <input type="radio" name="part_needed" value="1">
                            @endif
                            Yes
                        </label>
                        <label class="radio-inline">
                            @if($claimDetails->part_needed == '0')
                                <input type="radio" name="part_needed" value="0" checked="checked">
                            @else
                                <input type="radio" name="part_needed" value="0">
                            @endif
                            No
                        </label>
                    </div>
                </div>
                {{--Part Needed--}}
                <div class="form-group col-xs-12">
                    <label for="part-needed">Part Needed</label>
                    <input type="text" class="form-control" id="part-needed" name="parts_needed"
                           value="{{$claimDetails->parts_needed}}">
                </div>
                {{--Ship Parts To--}}
                <div class="form-group col-xs-12">
                    <label for="ship-parts-to">Ship Parts To</label>
                    <div class="" id="ship-parts-to">
                        <label class="radio-inline">
                            @if($claimDetails->ship_to == "Customer")
                                <input type="radio" name="ship_to" value="Customer"
                                       checked="checked">
                            @else
                                <input type="radio" name="ship_to" value="Customer">
                            @endif
                            Customer
                        </label>
                        <label class="radio-inline">
                            @if($claimDetails->ship_to == "Repair Center")
                                <input type="radio" name="ship_to" value="Repair Center"
                                       checked="checked">
                            @else
                                <input type="radio" name="ship_to" value="Repair Center">
                            @endif
                            Repair Center
                        </label>
                    </div>
                </div>
                <input type="hidden" name="claim_id" value="{{ $claimDetails->claim_id}}">
                <input type="hidden" name="customer_id"
                       value="{{ $customerDetails['customer'][0]->id}}">
                <input type="hidden" id="edit-type-switch" name="edit_type_switch" value="1">
                {{--Submit--}}
                <div class="form-group col-xs-12">
                    <hr>
                    <a href="{{ route('claim-index') }}" class="btn btn-primary">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary pull-right">
                        Submit
                    </button>
                </div>
                {{--Token--}}
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection