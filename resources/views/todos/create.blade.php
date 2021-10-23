@extends('layouts.main')

@section('content')
                        <form action="{{ route('todos.store') }}" method="POST">
                            <div class="card">
                                <div class="card-header">Add Todo</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="todo-text" class="col-3 col-form-label align-top">Todo:</label>
                                        <textarea name="todo-text" id="todo-text" class="col-8" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button name="btn-add" id="btn-add" class="btn btn-primary">Add Todo</button>
                                        <a href="/" class="btn btn-secondary">Cancel</a>
                                    </div>
                                    @csrf
                                    
                                </div>
                            </div>
                        </form>
@endsection