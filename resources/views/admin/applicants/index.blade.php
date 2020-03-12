@extends('layouts.admin')
@section('content')
@can('applicant_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.applicants.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.applicant.title_singular') }}
            </a>

    {{-- <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">Formatted Page</a> --}}

            <a target="_blank" class="btn btn-warning" href="{{ route("admin.applicants.formatted") }}">
                Formatted Page
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.applicant.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Applicant">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.job') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.website') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.skills') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicant.fields.cover_letter') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicants as $key => $applicant)
                        <tr data-entry-id="{{ $applicant->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $applicant->id ?? '' }}
                            </td>
                            <td>
                                {{ $applicant->job->job_title ?? '' }}
                            </td>
                            <td>
                                {{ $applicant->name ?? '' }}
                            </td>
                            <td>
                                {{ $applicant->email ?? '' }}
                            </td>
                            <td>
                                {{ $applicant->website ?? '' }}
                            </td>
                            <td>
                                @foreach($applicant->skills as $key => $item)
                                    <span class="badge badge-info">{{ $item->skill }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $applicant->cover_letter ?? '' }}
                            </td>
                            <td>
                                @can('applicant_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.applicants.show', $applicant->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('applicant_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.applicants.edit', $applicant->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('applicant_delete')
                                    <form action="{{ route('admin.applicants.destroy', $applicant->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('applicant_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.applicants.massDestroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Applicant:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
        .columns.adjust();
    });
})

</script>
@endsection
