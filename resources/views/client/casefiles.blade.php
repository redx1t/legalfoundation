@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" id="addProductFile">

            <div class="col-md-4">
                <a onclick="addFileToUpload()"><i class="fa fa-plus fa-4x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    @include('client.casefiles')
@endsection
