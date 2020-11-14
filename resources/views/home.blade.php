@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Bienvenido {{Auth::user()->name}}</div>
                    <div class="card-body">
                    @if(!$form_completed)
                        <form method="POST" action="{{ route('form.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="add_info">¿Qué te gustaría que agregáramos al informe?</label>
                                <textarea class="form-control" id="add_info" name="add_info" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label" for="correct_info_3">
                                    ¿La información es correcta?
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="correct_info" id="correct_info_1" value=1 checked>
                                <label class="form-check-label" for="correct_info_1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="correct_info" id="correct_info_2" value=2>
                                <label class="form-check-label" for="correct_info_2">
                                    No
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="correct_info" id="correct_info_3" value=3>
                                <label class="form-check-label" for="correct_info_3">
                                    Más o Menos
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label" for="correct_info_3">
                                    ¿Del 1 al 5, es rápido el sitio?
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fast_site" id="value_site1" value=1>
                                <label class="form-check-label" for="value_site1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fast_site" id="value_site12" value=2>
                                <label class="form-check-label" for="value_site2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fast_site" id="value_site13" value=3 >
                                <label class="form-check-label" for="value_site3">3 </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fast_site" id="value_site13" value=4 >
                                <label class="form-check-label" for="value_site4">4 </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fast_site" id="value_site13" value=5 checked >
                                <label class="form-check-label" for="value_site5">5 </label>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    @else
                        <div>
                            <p>Mi última respuesta</p>
                            <ul>
                                <li>{{$last_form->info_description}}</li>
                                <li>{{$last_form->correct_information}}</li>
                                <li>{{$last_form->fast_site}}</li>
                            </ul>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
