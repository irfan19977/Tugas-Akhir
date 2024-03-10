@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        @hasanyrole('teacher|admin')
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fa fa-bullhorn text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>PENGUMUMAN</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Pengumuman::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-atlas text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>PENDAFTAR</h4>
                        </div>
                        <div class="card-body">
                            {{ App\Models\Pengumuman::whereBetween('created_at', [now()->subYear(), now()])->count() ?? '0' }}
                        </div>
                    </div>
                </div>
            </div>         
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fa fa-book-open text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>UJIAN</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Exam::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-question text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>SOAL</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Question::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fa fa-tags text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>JUDUL</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Subject::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-newspaper text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Berita</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Berita::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div> 
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fa fa-users text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>USER</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\User::role('student')->count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>  
            
            
          </div>
        @endhasanyrole
        @hasrole('student')
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="fa fa-book-open text-white fa-2x"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>UJIAN SAYA</h4>
                </div>
                <div class="card-body">
                  {{ $exams->count() ?? '0' }}
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="fa fa-bullhorn text-white fa-2x"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>PENGUMUMAN</h4>
                </div>
                <div class="card-body">
                  {{ App\Models\Pengumuman::count() ?? '0' }}
                </div>
              </div>
            </div>
          </div>

        </div>
        @endhasrole
    </section>
</div>
@endsection