@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">

                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($dados as $dado)
                        <li class="list-group-item">
                            <a href="{{ url('dado/' . $dado->id) }}">
                                {{ $dado->id . ' - ' . $dado->name }}
                            </a>
                            <a href="{{ url('accepted/' . $dado->id) }}">
                                Aceitar
                            </a>
                        </li>
                        @empty
                        <li class="list-group-item">
                            Não há dados cadastrado
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection