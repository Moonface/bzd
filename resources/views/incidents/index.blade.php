@extends('master')
@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">Zdarzenia</div>
        </div>
        <ol class="breadcrumb page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                &nbsp;
                <a href="index.html">Strona główna</a>
                &nbsp;&nbsp;
                <i class="fa fa-angle-right"></i>
                &nbsp;&nbsp;
            </li>
            <li>
                <a href="#">B.Z.D.</a>
                &nbsp;&nbsp;
                <i class="fa fa-angle-right"></i>
                &nbsp;&nbsp;
            </li>
            <li class="active">Zdarzenia</li>
        </ol>
        <div class="btn btn-blue reportrange hide">
            <i class="fa fa-calendar"></i>
            &nbsp;
            <span></span>
            &nbsp;report&nbsp;
            <i class="fa fa-angle-down"></i>
            <input type="hidden" name="datestart"/>
            <input type="hidden" name="endstart"/>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">Lista zdarzeń drogowych</div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>ID zdarzenia</th>
                                                    <th>Województwo</th>
                                                    <th>Gmina</th>
                                                    <th>Obszar</th>
                                                    <th>Powiat</th>
                                                    <th>Miejscowość</th>
                                                    <th>Ulica</th>
                                                    <th>Symbol drogi</th>
                                                    <th>Data zdarzenia</th>
                                                    <th>Kolizja</th>
                                                    <th>Lekko lekko</th>
                                                    <th>Lekko ciężko</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($incidents as $incident)
                                                    <tr>
                                                        <td>{{ $incident->zdarzenie_id }}</td>
                                                        <td>{{ $incident->wojewodztwo_nazwa }}</td>
                                                        <td>{{ $incident->gmina_nazwa }}</td>
                                                        <td>{{ $incident->gmina_obszar }}</td>
                                                        <td>{{ $incident->powiat_nazwa }}</td>
                                                        <td>{{ $incident->miejscowosc_nazwa }}</td>
                                                        <td>{{ $incident->ulica_nazwa }}</td>
                                                        <td>{{ $incident->droga_symbol }}</td>
                                                        <td>{{ $incident->data_zdarzenia }}</td>
                                                        <td>{{ $incident->kolizja }}</td>
                                                        <td>{{ $incident->ranny_lekko }}</td>
                                                        <td>{{ $incident->ranny_ciezko }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @stop