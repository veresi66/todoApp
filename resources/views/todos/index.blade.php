@extends('layouts.main')

@section('content')
@auth
                <a href="/todos/create" class="btn btn-info btn-add">Add Todo</a>
                <table id="todo-table" class="table table-bordered table-striped">
                    <caption class="d-none">Todo table</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th class="col1" scope="col">ID</th>
                            <th class="col-8" scope="col">Todo</th>
                            <th class="col-3" scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($data) > 0)
                        @foreach($data as $row)
                        <tr class="todo{{$row->completed}}">
                            <td>{{$row->id}}</td>
                            <td>{{$row->todo}}</td>
                            <td>
                                @if ($row->completed)
                                &nbsp;
                                @else 
                                <div class="btn-group" role="group">
                                    <a href="/todos/{{$row->id}}/edit/1" class="btn btn-success" title="Finaly done!">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                    <a href="/todos/{{$row->id}}/edit/0" class="btn btn-secondary" title="Not ready yet, but tomorrow for sure!">
                                        <i class="fa fa-share" aria-hidden="true"></i>
                                    </a>
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="3">There's nothing to do!</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
@else
                <div class="col">The task list is only visible after login</div>
@endauth
@endsection