@extends('layouts.app')

@section('template_title')
    Report
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Report') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reports.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Report Type</th>
										<th>Latlng</th>
										<th>Description</th>
										<th>Status</th>
										<th>Manager Id</th>
										<th>Technical Id</th>
										<th>City Id</th>
										<th>State Id</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $report->report_type }}</td>
											<td>{{ $report->latlng }}</td>
											<td>{{ $report->description }}</td>
											<td>{{ $report->status }}</td>
											<td>{{ $report->manager_id }}</td>
											<td>{{ $report->technical_id }}</td>
											<td>{{ $report->city_id }}</td>
											<td>{{ $report->state_id }}</td>
											<td>{{ $report->user_id }}</td>

                                            <td>
                                                <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reports.show',$report->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reports.edit',$report->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $reports->links() !!}
            </div>
        </div>
    </div>
@endsection
