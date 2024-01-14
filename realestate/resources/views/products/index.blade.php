@extends('layouts.app')

@section('title','All Products')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h4 class="mt-0 header-title">Responsive example</h4>
                <p class="text-muted font-14 mb-3">
                    Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                </p>

                <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Hobby</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($products as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->hobbies}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>
                                <a href="products/edit/{{$item->id}}" class="m-2"><i class="fas fa-edit"></i></a>
                                <a href="products/delete/{{$item->id}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection