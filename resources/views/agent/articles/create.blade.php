@extends('agent.layouts.master')

@section('title', 'Yazılar')

@section('menu-title', 'Yazı Oluştur')

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

              {{-- <span class="m-0 font-weight-bold float-right text-primary"> <strong>{{ $articles->count()}} </strong> yazı bulundu. </span> </h6> --}}
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
                <form action="{{ route('admin.content.store')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="">Yazı Başlığı</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori Seç</label>
                        <select class="form-control" name="category" id="" name="category" required>
                            <option value="">Birini Seçiniz</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id}}"> {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Yazı Fotoğrafı</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Yazının İçeriği</label>
                        <textarea id="summerNoteEditor" class="form-control" name="content" id=""rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
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
