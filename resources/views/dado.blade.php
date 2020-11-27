@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Aceito</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $dado->name }}</td>
                        <td>{{ $dado->email }}</td>
                        <td>{{ $dado->phone }}</td>
                        <td>{{ $dado->accepted ? 'Sim' : 'Não' }}</td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-12 mt-5">
            @forelse($dado->feedbacks as $feedback)
            <p>{{ $feedback->comment . ' - ' . $feedback->updated_at }}</p>
            @empty
            <p>Não há feedbacks</p>
            @endforelse
        </div>

        <div class="col-12 mt-5">
            
            <form action="{{ url('feedback/' . $dado->id) }}" method="POST" role="form">
                <legend>Dar feedback</legend>
                @csrf
                <div class="form-group">
                    <label for="">Comentário</label>
                    <textarea class="form-control" name="comment" id="" cols="30" rows="2"></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>

@endsection