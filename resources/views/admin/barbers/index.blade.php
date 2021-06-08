@extends('layouts.admin')
@section('content')
@can('barber_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.barbers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.barber.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.barber.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Barber">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.barber.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.barber.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.barber.fields.professional') }}
                        </th>
                        <th>
                            {{ trans('cruds.barber.fields.photo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barbers as $key => $barber)
                        <tr data-entry-id="{{ $barber->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $barber->id ?? '' }}
                            </td>
                            <td>
                                {{ $barber->name ?? '' }}
                            </td>
                            <td>
                                {{ $barber->professional ?? '' }}
                            </td>
                            <td>
                                @if($barber->photo)
                                    <a href="{{ $barber->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $barber->photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('barber_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.barbers.show', $barber->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('barber_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.barbers.edit', $barber->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('barber_delete')
                                    <form action="{{ route('admin.barbers.destroy', $barber->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('barber_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.barbers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Barber:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection