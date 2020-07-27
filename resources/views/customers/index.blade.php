@extends('layouts.admin')

{{-- @section('title', 'Services') --}}
@push('dataTables')
    <link href=" {{asset('vendor/datatables/dataTables.bootstrap4.min.css')}} " rel="stylesheet" type="text/css">
@endpush


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Dob</th>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
                @forelse ($customers as $customer)
                <tr data-id={{$customer->id}}>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editCustomer" onclick="updateModelCustomer(this)">
    Launch demo modal
  </button>

                    </td>
                    <td>2011/04/25</td>
                  </tr>
                @empty
                  <p>Không có data khách hàng</p>
                @endforelse


            </tbody>
          </table>


 <!-- Modal -->
<div class="modal fade" id="editCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputDOB" class="col-sm-2 col-form-label">Day Of Birt</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputDOB" placeholder="inputDOB">
                    </div>
                  </div>
                  <input type="hidden" name="" id="idCustomer">
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="updateCustomer()">Save changes</button>
                  </div>
                </div>
              </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
@endsection


@push('dataTables-js')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

<script>
    function updateModelCustomer(data) {
        let customer = data.closest('tr').children;
        $('#inputName').val(customer[0].innerText);
        $('#inputEmail').val(customer[1].innerText);
        $('#inputDOB').val(customer[2].innerText);
        $('#idCustomer').val(data.closest('tr').dataset.id);
    }

    function updateCustomer() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let id = $('#idCustomer').val();
        let customer = document.querySelector(`tr[data-id='${id}']`);

        $.ajax({
            type: "POST",
            url: '{{ route("customers.edit") }}',
            dataType: 'json',
            data: {
                id: id,
                name: $('#inputName').val(),
                email: $('#inputEmail').val(),
                dob: $('#inputDOB').val(),
                _token: '{{ csrf_token() }}'
            },
            success:function(data) {
            console.log("updateCustomer -> data", data)
                let customer = document.querySelector(`tr[data-id='${id}']`).children;
                customer[0].innerText = data.name;
                customer[1].innerText = data.email;
                customer[2].innerText = data.dob;

                $("#editCustomer").modal('hide');

                toastr["success"]('Update khách hàng thành công.', "Success");
                // }, 500);
            }
        });
    }
</script>
@endpush
