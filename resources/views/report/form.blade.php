<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('report_type') }}
            {{ Form::text('report_type', $report->report_type, ['class' => 'form-control' . ($errors->has('report_type') ? ' is-invalid' : ''), 'placeholder' => 'Report Type']) }}
            {!! $errors->first('report_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('latlng') }}
            {{ Form::text('latlng', $report->latlng, ['class' => 'form-control' . ($errors->has('latlng') ? ' is-invalid' : ''), 'placeholder' => 'Latlng']) }}
            {!! $errors->first('latlng', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $report->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $report->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('manager_id') }}
            {{ Form::text('manager_id', $report->manager_id, ['class' => 'form-control' . ($errors->has('manager_id') ? ' is-invalid' : ''), 'placeholder' => 'Manager Id']) }}
            {!! $errors->first('manager_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('technical_id') }}
            {{ Form::text('technical_id', $report->technical_id, ['class' => 'form-control' . ($errors->has('technical_id') ? ' is-invalid' : ''), 'placeholder' => 'Technical Id']) }}
            {!! $errors->first('technical_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city_id') }}
            {{ Form::text('city_id', $report->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'City Id']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $report->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $report->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>