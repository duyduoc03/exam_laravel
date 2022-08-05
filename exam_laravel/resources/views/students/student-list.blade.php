@extends("layout")
@section("title","Student List")
@section("content-header")
    <h1>Students List
        <a href="{{url("/create")}}" class="btn btn-outline-info float-right">
            Create Student
        </a>
    </h1>
@endsection
@section("main")
    <div class="card">
        <div class="card-header">
            <form method="get" action="{{url("/list")}}">
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->telephone}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $students->appends(app("request")->input())->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
