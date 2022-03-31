@extends('layouts.admin')

@section('content')
    <section class="mb-5">
        <h6 class="page-title font-weight-600">{{ __('Audit logs') }}</h6>
    </section>
    <section class="details">
        <div class="table-responsive shadow-sm mb-4 bg-white p-4">
            <table id="auditLogsTable" class="table table-striped w-100 mb-0 info-table p-5">
                <thead>
                <tr>
                    <th>{{ __('User') }}</th>
                    <th>{{ __('Role') }}</th>
                    <th>{{ __('Event') }}</th>
                    <th>{{ __('Entity') }}</th>
                    <th>{{ __('URL') }}</th>
                    <th>{{ __('Date') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th>{{ __('User') }}</th>
                    <th>{{ __('Role') }}</th>
                    <th>{{ __('Event') }}</th>
                    <th>{{ __('Entity') }}</th>
                    <th>{{ __('URL') }}</th>
                    <th>{{ __('Date') }}</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#auditLogsTable').DataTable( {
                "ajax": '{{ route('admin.auditLogs.search') }}',
                "processing": true,
                "serverSide": true,
                "columns": [
                    {data: 'user', name: 'user'},
                    {data: 'role', name: 'role'},
                    {data: 'event', name: 'event'},
                    {data: 'type', name: 'type'},
                    {data: 'url', name: 'url'},
                    {data: 'created_at', name: 'created_at', searchable: false},
                    {data: 'action', name: 'action', searchable: false}
                ]
  } );
} );
</script>
@endsection
