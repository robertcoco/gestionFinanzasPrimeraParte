@extends('layouts.app')

@section('template_title')
    Create Finanza
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="width: 35%; margin:10px auto; box-shadow:0px 0px 3px 3px gray ">
                    <div class="card-header">
                        <span class="card-title">Create Finanza</span>
                    </div>
                    <div class="card-body"  style="margin:10px auto">
                        <form method="POST" action="{{ route('finanzas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('finanza.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
