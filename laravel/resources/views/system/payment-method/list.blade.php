@extends('system.layout')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Métodos de pagamento</h1>
            </div>

            <div class="col-sm-6 text-right">
                <a class="btn btn-primary" href="{{ url('/sistema/payment-methods/create') }}">
                    Cadastrar
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th col="1">ID</th>
                                    <th>Nome</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payment_methods as $payment_method)
                                <tr>
                                    <td>{{ $payment_method->id }}</td>
                                    <td>{{ $payment_method->name }}</td>
                                    <td class="text-right">
                                        <a href="{{ url('sistema/payment-methods/' . $payment_method->id . '/edit') }}">
                                            <i class="fas fa-pencil-alt mr-3"></i>
                                        </a>

                                        <a href="#" data-id="{{ $payment_method->id }}" class="delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

<script>
const BASE_URL = '{{ url('/') }}/sistema/' ;
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete').forEach(button => {
        button.onclick = () => {
            destroy(button.dataset.id);
            button.parentElement.parentElement.remove();
        }
    })
})

function destroy(id) {
    fetch(`${BASE_URL}payment-methods/${id}`, {
        method: 'DELETE',
        headers: {
            "Content-Type": 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
    })
    .then(response => response.json())
    .then(data => {
        if(!data.error) {
            toastr.success(data.message);
        }
    })
}

</script>
@endsection