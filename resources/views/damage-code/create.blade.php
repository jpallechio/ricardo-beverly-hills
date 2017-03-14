@extends('layouts.master')

@section('content')
    <div id="damage-code-create">
        <div class="row">
            <div class="col-xs-12">
                <h1>Create Damage Code</h1>
            </div>
        </div>

        <div class="row">
            <form action="{{ route('damage-code.create') }}" method="post">
                {{--Name--}}
                <div class="form-group col-sm-4">
                    <label for="damage-code-name">Damage Code ID</label>
                    <input type="text" class="form-control"
                           id="damage-code-id" name="id"
                           value="{{ old('id') }}">
                </div>
                {{--Contact Name--}}
                <div class="form-group col-sm-8">
                    <label for="damage-code-part">Part/Description</label>
                    <input type="text" class="form-control"
                           id="damage-code-part" name="part"
                           value="{{ old('part') }}">
                </div>

                {{--Submit--}}
                <div class="form-group col-xs-12">
                    <a href="{{ route('damage-code') }}" class="btn btn-primary">
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

        {{--Form successfully added damage code--}}
        @if(Session::has('message'))
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-success">
                        {{ Session::get('message') }}
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