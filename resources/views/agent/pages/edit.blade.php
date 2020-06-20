@extends('agent.layouts.master')

@section('title', 'Sayfalar')

@section('menu-title', $page->title.' Sayfasını Düzenle')

@section('css')
    <link href="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- Summer Note --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('menu-title')

              {{-- <span class="m-0 font-weight-bold float-right text-primary"> <strong>{{ $pages->count()}} </strong> Sayfa bulundu. </span> </h6> --}}
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.page.update', $page->id )}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Sayfa Başlığı</label>
                        <input type="text" name="title" class="form-control" value="{{$page->title}} "required>
                    </div>
                    <div class="form-group">
                        <label for="">Sayfa Fotoğrafı</label> <br/>
                        <img src="{{ asset($page->image) }}" width="300" class="img-thumbnail rounded ">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Sayfa İçeriği</label>
                        <textarea id="summerNoteEditor" class="form-control" name="content" id=""rows="4" >
                            {!! $page->content !!}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Güncelle</button>
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

    {{-- Summer Note --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summerNoteEditor').summernote({
                'height': 300
            });
        });
    </script>
@endsection
