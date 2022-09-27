@extends('layouts.app')

@section('template_title')
    {{ $region->name ?? 'Show Region' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Region</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('regions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $region->name }}
                        </div>
                        <div class="form-group">
                            <strong>Name Fr:</strong>
                            {{ $region->name_fr }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $region->description }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $region->status }}
                        </div>
                        <div class="form-group">
                            <strong>City Id:</strong>
                            {{ $region->city_id }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $region->state_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
