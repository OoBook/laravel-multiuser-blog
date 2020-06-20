@extends('agent.layouts.master')

@section('title', 'Sayfalar')

@section('menu-title', 'Tüm Sayfalar')

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

                    <span class="m-0 font-weight-bold float-right text-primary"> {{ $pages->count()}} </strong> sayfa bulundu.
                    <!-- <a href="{{ route('admin.content.trash') }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"> Silinen Yazılar </i></a> -->
                </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th style="max-width: 20px !important;">Sıra</th>
                        <th>Fotoğraf</th>
                        <th>Başlık</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                  </thead>
                  <tbody id="sort_page">
                    @foreach ($pages as $page)
                        <tr id="page-{{ $page->id}}">
                            <td ><i class="fa fa-arrows-alt-v fa-2x spec d-flex justify-content-center align-items-center" style="cursor:move;"></i></td>
                            <td>
                                <img src="{{ $page->image }}" alt="" width="150">
                            <td>{{ $page->title }}</td>
                            <td>
                                <input type="checkbox"
                                    class="toggleState"
                                    page-id="{{$page->id}}"
                                    @if($page->status==1) checked @endif
                                    data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success">

                            </td>
                            <td>
                                <a href="{{ route('front.page', [$page->slug]) }}" target="_blank" title="Önizleme" class="btn btn-sm btn-success"><i class="fa fa-eye"> </i></a>
                                <a href="{{ route('admin.page.edit', [$page->id]) }}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-edit"> </i></a>
                                <a href="{{ route('admin.page.remove', [$page->id]) }}"  title="Kaldır" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"> </i></a>


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

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(function() {
          $('.toggleState').change(function() {
            let state = $(this).is(":checked")? 'Aktif' : 'Pasif';
            let id = $(this)[0].getAttribute('page-id');
            $.get("{{ route('admin.page.change.state') }}", {id: id, state: $(this).is(":checked") }, function(data, status){
                console.log(data, status);
                if(data.status){
                    toastr.success(state + ' Edildi.', 'Sayfanın Durumu Değiştirildi!')
                }else{
                    toastr.error(state + ' Edilemedi.', 'Sayfanın Durumu Değiştirilemedi!')

                }
            })
          })

          $('#sort_page').sortable({
            handle: '.spec',
            update: function () {
              let order = $('#sort_page').sortable('serialize');
              $.get("{{ route('admin.page.sort') }}?"+order, function (data, status) {
                toastr.success('Sıralama Değiştirildi!', '');
              })
            }
          })
        })
    </script>

@endsection
