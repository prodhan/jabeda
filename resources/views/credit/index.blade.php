@extends('layouts.master')

@section('title', 'Expense/Debit Items')

@section('content')

    <div class="col-lg-12 col-lg-offset-1">
        <h2><i class="fa fa-book"></i> Credit/Debit Items
            <a href="{{ route('purposes.create') }}" class="btn btn-success pull-right">Add Item</a></h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="class">

                <thead>
                <tr>
                    <th>Type</th>
                    <th>Purpose</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $item)
                    <tr>

                        <td>
                            @if($item->type=='Cr')
                                Credit
                            @else
                                Debit
                            @endif
                        </td>
                        <td>{{ $item->name }}</td>


                        <td>
                            <a href="{{ route('purposes.edit', $item->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['purposes.destroy', $item->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn-sm btn-danger pull-left']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>




    </div>

@endsection
@section('custom-js')
    <script>
        $(document).ready(function() {
            $('#class').DataTable();
        } );



    </script>


@endsection