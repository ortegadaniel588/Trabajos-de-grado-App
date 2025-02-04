@extends('layouts.app')

@section('template_title')
    Create Sustentacion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">

                @includeif('partials.errors')

                <div class="card card-default" id="boxtable">
                    <div class="card-header">
                        <span class="card-title">Create Sustentacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sustentacions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('sustentacion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
