@extends('layouts.app')

@section('content')

    <a data-bs-toggle="modal" data-bs-target="#createCase">list case</a>

    <div class="modal fade" id="createCase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="form-group" method="POST" action="{{ route('client.cases.store') }}">

                <div class="modal-content">
                    <div class="modal-body">

                        <h5 class="modal-title" id="exampleModalLabel">Lets get started...</h5>


                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                        <label>Court</label>
                        <input type="text" class="form-control" name="court">
                        <label>Date </label>
                        <input type="date" class="form-control" name="date">
                        @csrf

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
