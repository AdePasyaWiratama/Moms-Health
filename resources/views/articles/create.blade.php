@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Add New Article</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
                        </div>
                    </div>
                </div>


                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="judul" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px"  name="deskripsi"
                                    placeholder="Detail"></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px"  name="deskripsi"
                                    placeholder="Detail"></textarea>
                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-12 col-md-12 text-justify">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                @endsection
            </div>
        </div>
    </div>
</div>
