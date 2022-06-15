@extends('layouts.app')

@section('template_title')
    {{ $finanza->name ?? 'Show Finanza' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Finanza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('finanzas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $finanza->year }}
                        </div>
                        <div class="form-group">
                            <strong>Month:</strong>
                            {{ $finanza->month }}
                        </div>
                        <div class="form-group">
                            <strong>Cutdate:</strong>
                            {{ $finanza->cutDate }}
                        </div>
                        <div class="form-group">
                            <strong>Balanceinicial:</strong>
                            {{ $finanza->BalanceInicial }}
                        </div>
                        <div class="form-group">
                            <strong>Totalingresos:</strong>
                            {{ $finanza->totalIngresos }}
                        </div>
                        <div class="form-group">
                            <strong>Totalegresos:</strong>
                            {{ $finanza->totalEgresos }}
                        </div>
                        <div class="form-group">
                            <strong>Balancecorte:</strong>
                            {{ $finanza->BalanceCorte }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
