@extends('agent.layouts.master')

@section('title', 'Kategoriler')

@section('menu-title', 'Tüm Kategoriler')

@section('css')

<link href="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('content')

    <div class="row">
        <div class="col-md-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori Oluştur</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.category.insert') }}">
                        @csrf

                        <div class="form-group">
                            <label for="">Kategori Adı</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">@yield('menu-title')</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                                <th>Kategori Adı</th>
                                <th>Yazılar</th>
                                <th>Durum </th>
                                <th>İşlemler</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($categories as $category)
                                <tr>

                                    <td>{{ $category->name}}</td>
                                    <td>{{ $category->articleCount()}}</td>

                                    <td>
                                        {{-- {!! $article->status==0  ? '<span class="badge badge-warning">Pasif</span>' : '<span class="badge badge-success">Aktif</span>' !!} --}}
                                        <input type="checkbox"
                                            class="toggleState"
                                            category-id="{{$category->id}}"
                                            @if($category->status==1) checked @endif
                                            data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success">

                                    </td>
                                    <td>
                                        <!-- Trigger the modal with a button -->
                                        <a  category-id="{{ $category->id }}" href="javascript:void(0)" class="btn btn-sm btn-primary btn-edit" id="" Title="Düzenle" >
                                            <i class="fa fa-edit text-white"></i>Düzenle
                                        </a>
                                        <a  category-id="{{ $category->id }}" category-articles="{{ $category->articleCount() }}"  category-name="{{ $category->name }}"
                                            href="javascript:void(0)" class="btn btn-sm btn-danger btn-remove" id="" Title="Kaldır" >
                                            <i class="fa fa-trash-alt text-white"></i>Kaldır
                                        </a>

                                    </td>



                                </tr>

                            @endforeach

                          </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="editPop" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kategoriyi Düzenle</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('admin.category.update') }}" method="post" >
                    @csrf

                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="">Kategori İsmi</label>
                                <input id="input-category" type="text" class="form-control" name="name" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary" >Güncelle</button>

                    </div>

                </form>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="removePop" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kategoriyi Sil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div id="removeBody" class="modal-body">
                        <div class="alert alert-danger" id="articleWarn"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <form action="{{ route('admin.category.remove') }}" method="post" >
                            @csrf
                            <input type="hidden" name="category" id="inputCategory" />
                            <button id="removeButton" type="submit" class="btn btn-primary" >Kaldır</button>
                        </form>

                    </div>


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
            $('.btn-edit').click(function(){
                let id = $(this)[0].getAttribute('category-id');

                $.ajax({
                    type: 'GET',
                    url: '{{ route("admin.category.receive") }}',
                    data: {id :id},
                    success: function(data){
                        $('#input-category').val(data.name);
                        $('#editPop').modal();
                        console.log(data);
                    }
                })
            })

            $('.btn-remove').click(function(){
                let id = $(this)[0].getAttribute('category-id');
                let numberOfArticles = $(this)[0].getAttribute('category-articles');
                let name = $(this)[0].getAttribute('category-name');
                if(id == 1){
                    $('#articleWarn').html('Genel Kategorisi Kaldırılamaz.');
                    $('#removeBody').show();
                    $('#removeButton').hide();
                    $('#removePop').modal();

                }
                $('#inputCategory').val(id);
                $('#articleWarn').html();
                $('#removeBody').hide();
                if(numberOfArticles > 0){
                    console.log(numberOfArticles)
                    $('#articleWarn').html(name + ' Kategorisinde ' + numberOfArticles + ' yazı bulunmaktadır. Yine de kaldırmak istediğinize emin misiniz?')
                    $('#removeBody').show();

                }else{

                }
                $('#removePop').modal();
            })

            $('.toggleState').change(function() {
                let state = $(this).is(":checked")? 'Aktif' : 'Pasif';
                let id = $(this)[0].getAttribute('category-id');
                $.get("{{ route('admin.category.change.state') }}", {id: id, state: $(this).is(":checked") }, function(data, status){
                    console.log(data, status );
                    if(data.status){
                        toastr.success(state + ' Edildi.', 'Kategorinin Durumu Değiştirildi!')
                    }else{
                        toastr.error(state + ' Edilemedi.', 'Kategorinin Durumu Değiştirilemedi!')

                    }
                })
            })
        })
    </script>

@endsection
