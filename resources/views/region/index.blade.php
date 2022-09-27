@extends('layouts.app')

@section('template_title')
    Region
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Region') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('regions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Name Fr</th>
										<th>Description</th>
										<th>Status</th>
										<th>City Id</th>
										<th>State Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regions as $region)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $region->name }}</td>
											<td>{{ $region->name_fr }}</td>
											<td>{{ $region->description }}</td>
											<td>{{ $region->status }}</td>
											<td>{{ $region->city_id }}</td>
											<td>{{ $region->state_id }}</td>

                                            <td>
                                                <form action="{{ route('regions.destroy',$region->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('regions.show',$region->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('regions.edit',$region->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $regions->links() !!}
            </div>
        </div>
    </div>
@endsection
