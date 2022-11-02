@extends('layouts.app')

@section('content')

    <div class="mi-data-table">
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th width="100px">Accion</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


<script type="text/javascript">
    $(function () {
      var table = $('.data-table').DataTable({
          paging: false,
          searching: false,
          processing: true,
          serverSide: true,
          ajax: "{{ route('users.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    });
  </script>

@endsection
