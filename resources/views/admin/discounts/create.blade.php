@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.discount.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.discounts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.discount.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ old('customer_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.discount.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_date_of_birth_id">{{ trans('cruds.discount.fields.customer_date_of_birth') }}</label>
                <select class="form-control select2 {{ $errors->has('customer_date_of_birth') ? 'is-invalid' : '' }}" name="customer_date_of_birth_id" id="customer_date_of_birth_id">
                    @foreach($customer_date_of_births as $id => $entry)
                        <option value="{{ $id }}" {{ old('customer_date_of_birth_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer_date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.discount.fields.customer_date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="token">{{ trans('cruds.discount.fields.token') }}</label>
                <textarea class="form-control {{ $errors->has('token') ? 'is-invalid' : '' }}" name="token" id="token">{{ old('token') }}</textarea>
                @if($errors->has('token'))
                    <div class="invalid-feedback">
                        {{ $errors->first('token') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.discount.fields.token_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="discount">{{ trans('cruds.discount.fields.discount') }}</label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="number" name="discount" id="discount" value="{{ old('discount', '0') }}" step="1" required>
                @if($errors->has('discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.discount.fields.discount_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection