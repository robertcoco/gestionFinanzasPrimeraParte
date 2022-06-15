@extends('layouts.app')

@section('template_title')
    Finanza
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Finanza') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('finanzas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Year</th>
										<th>Month</th>
										<th>Cutdate</th>
										<th>Balanceinicial</th>
										<th>Totalingresos</th>
										<th>Totalegresos</th>
										<th>Balancecorte</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($finanzas as $finanza)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $finanza->year }}</td>
											<td>{{ $finanza->month }}</td>
											<td>{{ $finanza->cutDate }}</td>
											<td>{{ $finanza->BalanceInicial }}</td>
											<td>{{ $finanza->totalIngresos }}</td>
											<td>{{ $finanza->totalEgresos }}</td>
											<td>{{ $finanza->BalanceCorte }}</td>

                                            <td>
                                                <form action="{{ route('finanzas.destroy',$finanza->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('finanzas.show',$finanza->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('finanzas.edit',$finanza->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $finanzas->links() !!}
            </div>
        </div>
    </div>
@endsection
