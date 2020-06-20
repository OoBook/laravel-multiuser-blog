@extends('agent.layouts.master')

@section('title', 'Yazılar')

@section('menu-title', 'Silinen Yazılar')

@section('css')
    <link href="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('content')

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('menu-title')

                    <span class="m-0 font-weight-bold float-right text-primary"> {{ $articles->count()}} </strong> yazı bulundu.
                    <a href="{{ route('admin.content.trash') }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"> Silinen Yazılar </i></a>
                </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Tık</th>
                        <th>Oluşturma Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>
                                <img src="{{ $article->image }}" alt="" width="150">
                            </td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->getCategory->name }}</td>
                            <td>{{ $article->hit }}</td>
                            <td>{{ $article->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('admin.content.recycle', $article->id) }}" title="Kurtar" class="btn btn-sm btn-success"><i class="fa fa-recycle"> </i></a>
                                <a href="{{ route('admin.content.permanent.remove', $article->id) }}" title="Tamamen Kaldır" class="btn btn-sm btn-danger"><i class="fa fa-times"> </i></a>
                            </td>
                        </tr>

                    @endforeach

                  </tbody>
                </table>
              </div>
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
