@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Total Article</p>
              <h3 class="card-title"><div style="float: right;">{{ \App\Article::count() }}</div>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection