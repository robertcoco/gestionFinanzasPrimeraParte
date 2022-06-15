<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="background:#eee; border-radius:4px; padding:10px; text-align:center">
            {{ Form::label('year') }}
            {{ Form::number('year', $finanza->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'year','max'=>'2022','min'=>'1955']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group" style="background:#eee; border-radius:4px; padding:10px; text-align:center">
            {{ Form::label('month') }}
            {{ Form::number('month', $finanza->month, ['class' => 'form-control' . ($errors->has('month') ? ' is-invalid' : ''), 'placeholder' => 'month', 'max'=>'12','min'=>'1']) }}
            {!! $errors->first('month', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cutDate') }}
            {{ Form::date('cutDate', $finanza->cutDate, ['class' => 'form-control' . ($errors->has('cutDate') ? ' is-invalid' : ''), 'placeholder' => 'Cutdate']) }}
            {!! $errors->first('cutDate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BalanceInicial') }}
            {{ Form::number('BalanceInicial', $finanza->BalanceInicial, ['class' => 'form-control' . ($errors->has('BalanceInicial') ? ' is-invalid' : ''), 'placeholder' => 'Balanceinicial', 'min'=>'0']) }}
            {!! $errors->first('BalanceInicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BalanceCorte') }}
            {{ Form::number('BalanceCorte', $finanza->BalanceCorte, ['class' => 'form-control' . ($errors->has('BalanceCorte') ? ' is-invalid' : ''), 'placeholder' => 'Balancecorte','min'=>'0']) }}
            {!! $errors->first('BalanceCorte', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>