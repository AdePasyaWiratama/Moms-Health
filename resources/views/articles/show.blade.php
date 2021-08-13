@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2> Show Articles</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Judul :</strong>
                            {{ $article->judul }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi :</strong>
                            {{ $article->deskripsi }}
                        </div>
                    </div>
                </div>
                @endsection
            </div>
        </div>
    </div>
</div>
