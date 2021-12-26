@extends('Layout.admin')

@section('main_content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Dashboard
      </h3>
    </div>
    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-user mr-2"></i>
                  New registered apartment
                </p>
                <h2> {{ DB::table('apartments')->where('created_at', date("Y-m-d"))->count() }}</h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                  Last week
                </p>
                <h2> {{ DB::table('apartments')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                <label class="badge badge-outline-danger badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                  Last month
                </p>
                <h2> {{ DB::table('apartments')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-check-circle mr-2"></i>
                  Blocked apartment
                </p>
                <h2> {{ DB::table('apartments')->where('status', '0')->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-chart-line mr-2"></i>
                  Total number of apartment
                </p>
                <h2> {{ DB::table('apartments')->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-user mr-2"></i>
                  New registered Seller
                </p>
                <h2> {{ DB::table('sellers')->where('created_at', date("Y-m-d"))->count() }}</h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                  Last week
                </p>
                <h2> {{ DB::table('sellers')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                <label class="badge badge-outline-danger badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                  Last month
                </p>
                <h2> {{ DB::table('sellers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-check-circle mr-2"></i>
                  Blocked Seller
                </p>
                <h2> {{ DB::table('sellers')->where('status', '0')->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-chart-line mr-2"></i>
                  Total number of Seller
                </p>
                <h2> {{ DB::table('sellers')->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-user mr-2"></i>
                  New registered managers
                </p>
                <h2> {{ DB::table('managers')->where('created_at', date("Y-m-d"))->count() }}</h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                  Last week
                </p>
                <h2> {{ DB::table('managers')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                <label class="badge badge-outline-danger badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                  Last month
                </p>
                <h2> {{ DB::table('managers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-check-circle mr-2"></i>
                  Blocked managers
                </p>
                <h2> {{ DB::table('managers')->where('status', '0')->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-chart-line mr-2"></i>
                  Total number of managers
                </p>
                <h2> {{ DB::table('managers')->count() }} </h2>
                <label class="badge badge-outline-success badge-pill"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bar chart</h4>
            <canvas id="barChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-calendar-alt"></i>
              Calendar
            </h4>
            <div id="inline-datepicker-example" class="datepicker"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="../../js/chart.js"></script>
<!-- content-wrapper ends -->
@endsection