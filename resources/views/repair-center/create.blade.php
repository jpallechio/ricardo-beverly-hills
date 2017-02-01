@extends('layouts.master')

@section('content')
    <div id="repair-center-create" class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="row">
            <div class="col-xs-12">
                <h1>Create Repair Center</h1>
            </div>
        </div>

        <div class="row">
            <form action="{{ route('repair-center.create') }}" method="post">
                {{--Name--}}
                <div class="form-group col-sm-12">
                    <label for="repair-center-name">Name</label>
                    <input type="text" class="form-control"
                           id="repair-center-name" name="name">
                </div>
                {{--Phone--}}
                <div class="form-group col-xs-6">
                    <label for="repair-center-phone">Phone #</label>
                    <input type="tel" class="form-control"
                           id="repair-center-phone" name="phone">
                </div>
                {{--Email--}}
                <div class="form-group col-xs-6">
                    <label for="repair-center-email">Email</label>
                    <input type="email" class="form-control"
                           id="repair-center-email" name="email">
                </div>
                {{--Address--}}
                <div class="form-group col-xs-12">
                    <label for="repair-center-address">Address</label>
                    <input type="text" class="form-control"
                           id="repair-center-address" name="address">
                </div>
                {{--City--}}
                <div class="form-group col-xs-6">
                    <label for="repair-center-city">City</label>
                    <input type="text" class="form-control"
                           id="repair-center-city" name="city">
                </div>
                {{--State--}}
                <div class="form-group col-xs-3">
                    <label for="repair-center-state">State</label>
                    <input type="text" class="form-control"
                           id="repair-center-state" name="state">
                </div>
                {{--Zip--}}
                <div class="form-group col-xs-3">
                    <label for="repair-center-zip">Zip</label>
                    <input type="text" class="form-control"
                           id="repair-center-zip" name="zip">
                </div>
                {{--Submit--}}
                <div class="form-group col-xs-12">
                    <a href="{{ route('repair-center') }}" class="btn btn-primary">
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

        {{--Form successfully added repair center--}}
        @if(Session::has('name'))
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-success">
                        {{ Session::get('name') }}
                    </p>
                </div>
            </div>
        @endif
        {{--Form validation errors--}}
        @if(count($errors) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection