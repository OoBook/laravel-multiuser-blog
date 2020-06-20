@extends('agent.layouts.master')

@section('title', 'Ayarlar')

@section('menu-title', 'Genel Ayarlar')

@section('css')
    <link href="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@endsection

@section('content')

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('menu-title')

                    <span class="m-0 font-weight-bold float-right text-primary"> </strong> sayfa bulundu.
                    <!-- <a href="{{ route('admin.content.trash') }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"> Silinen Yazılar </i></a> -->
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Site Başlığı</label>
                                <input type="text" name="title" class="form-control" value="{{ $settings->title }}">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Site Logosu</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Site Favicon</label>
                                <input type="file" class="form-control" name="favicon">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Site Durumu</label>
                                <select name="active" class="form-control">
                                    <option @if($settings->active==1) selected @endif value="1">Açık</option>
                                    <option @if($settings->active==0) selected @endif value="0">Kapalı</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook }}">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="{{ $settings->instagram }}">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Youtube</label>
                                <input type="text" name="youtube" class="form-control" value="{{ $settings->youtube }}">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Github</label>
                                <input type="text" name="github" class="form-control" value="{{ $settings->github }}">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Linkedin</label>
                                <input type="text" name="linkedin" class="form-control" value="{{ $settings->linkedin }}">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Güncelle</button>
                    </div>
                </form>

            </div>
          </div>
@endsection


@section('script')
      <!-- Page level plugins -->
    <script src="{{ asset('back-end/vendor/datatables/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.js') }} "></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('back-end/js/demo/datatables-demo.js') }} "></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        $(function() {

        })
    </script>

@endsection
