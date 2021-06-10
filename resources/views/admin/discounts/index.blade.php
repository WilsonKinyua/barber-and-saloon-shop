@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.discount.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Discount">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.discount.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.discount.fields.customer') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.discount.fields.customer_date_of_birth') }}
                        </th> --}}
                        <th>
                            {{ trans('cruds.discount.fields.token') }}
                        </th>
                        <th>
                            {{ trans('cruds.discount.fields.discount') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($discounts as $key => $discount)
                        <tr data-entry-id="{{ $discount->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $discount->id ?? '' }}
                            </td>
                            <td>
                                {{ $discount->customer->name ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $discount->customer_date_of_birth->date_of_birth ?? '' }}
                            </td> --}}
                            <td>
                                {{ $discount->token ?? '' }}
                            </td>
                            <td>
                                {{ $discount->discount ?? '' }}
                            </td>
                            <td>
                                @can('discount_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.discounts.show', $discount->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan


                                @can('discount_delete')
                                    <form action="{{ route('admin.discounts.destroy', $discount->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('discount_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.discounts.massDestroy') }}",
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
    order: [[ 5, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Discount:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
