@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.barber.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.barbers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.barber.fields.id') }}
                        </th>
                        <td>
                            {{ $barber->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.barber.fields.name') }}
                        </th>
                        <td>
                            {{ $barber->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.barber.fields.professional') }}
                        </th>
                        <td>
                            {{ $barber->professional }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.barber.fields.photo') }}
                        </th>
                        <td>
                            @if($barber->photo)
                                <a href="{{ $barber->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $barber->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.barbers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#barber_bookings" role="tab" data-toggle="tab">
                {{ trans('cruds.booking.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="barber_bookings">
            @includeIf('admin.barbers.relationships.barberBookings', ['bookings' => $barber->barberBookings])
        </div>
    </div>
</div>

@endsection