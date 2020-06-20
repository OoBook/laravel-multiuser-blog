@extends('agent.layouts.master')

@section('title', 'Ayarlar')

@section('menu-title', 'Slider Ayarları')

@section('css')
    <link href="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <style>

        form { 
            list-style-type: none; 
            margin: 0; 
            padding: 0; 
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
        }
        /** Start full width */
        .sortable {
            counter-reset: label;
        }

        label {
            width: 100%;
            position: relative;
        }

        label.checked:before {
            counter-increment: label;
            content: counter(label);
            position: absolute; 
            left: -.5em;
            top: -.5em;
            box-shadow: 0px 0px 4px -3px #afafaf, 0px 0px 1px 0px #cacaca;
            width: 1.5em;
            height: 1.5em;
            padding-left: .175em;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f3f3f3;
            border-radius: 100%;
            font-size: .75em;
        }

        label.checked.ui-sortable-placeholder:before{
            display: none;

        }
            /** End full width */

        input,button,label { 
            display: inline-block;  
            background-color: #fff; 
            cursor: pointer; 
            border: 1px solid transparent;
            padding: 8px 16px;
            margin: 6px 0 0 6px;
            box-shadow: 0px 0px 4px -2px #afafaf, 0px 0px 1px 0px #cacaca;
            flex-grow: 1;
            /* text-align: center; */
        }
        
        button.checked,label.checked{
            border: 1px solid #b4b9be;
            box-shadow: 0 0 3px 2px #ececec;
            background-color: #f1f1f1;
            color: #363636;
        }
        button:hover,label:hover{
            border: 1px solid #b4b9be;
            box-shadow: 0 0 3px 2px #ececec;
            background-color: #f1f1f1;
            color: #363636;
        }
        button.checked:hover,label.checked:hover{
            cursor: move;
        }

        button:active, label:active{
            align-self: center;
            display: inline-block;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=8);
            -moz-opacity: 0.8;
            -khtml-opacity: 0.8;
            opacity: 0.8;
        }

        button input,label input { 
            visibility: hidden
        }

        .submit,.trash { 
            height: 16vw;
            background-color: #fff; 
            cursor: pointer; 
            border: 1px solid transparent;
            padding: 8px 16px;
            margin: 6px 0 0 6px;
            box-shadow: 0px 0px 4px -2px #afafaf, 0px 0px 1px 0px #cacaca;
            text-align: center;
        }

        .submit,.trash i {
            color: #e0e0e0;
            font-size: 8vw;
        }
        .controls {
            font-size: calc(1em + .5vw);
            width: 100%;
            width: calc(100% - 46px);
        }

        .submit {
            width: 100%; 
            //flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .submit:hover{
            border: 1px solid #b4b9be;
            box-shadow: 0 0 3px 2px #ececec;
            background-color: #f1f1f1;
            color: #363636;
        }

        .submit:focus{
            border: 1px solid #b4b9be;
            outline: none;
            box-shadow: inset 0px 0px 4px -2px #afafaf, inset 0px 0px 1px 0px #cacaca;
        }
        .submit:active{
            background-color: #e0e0e0;
            color: #191919;
            border-color: #4a4a4a;
            outline: none;
            box-shadow:  0px 3px 4px -2px #4a4a4a;
        }

        .trash {
            width: 100%;
            display: block;
            align-items: center;
            justify-content: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        #add button {
            display: none;
        
        }
        input, button {
            font-family: 'Montserrat', sans-serif;
            font-size: calc(1em + .5vw);
            color: #808080;
        
        }
        input:focus {
            border: 1px solid #b4b9be;
            outline: none;
            box-shadow: inset 0px 0px 4px -2px #afafaf, inset 0px 0px 1px 0px #cacaca;
        }

        button:focus {
            outline: none;

        }
        button:active {
            background-color: #e0e0e0;
            color: #191919;
            border-color: #4a4a4a;

            outline: none;
            box-shadow:  0px 3px 4px -2px #4a4a4a;
        }

        ::-webkit-input-placeholder {
            opacity: 1;
            color: #808080;
        }
        input:focus::-webkit-input-placeholder {
            opacity: 0;
        }
        input:hover::-webkit-input-placeholder {
            color: #363636;
        }
        ::-moz-placeholder { 
            color: #808080;
            -moz-opacity: 1;
        }

        input:focus::-moz-placeholder { 
            -moz-opacity: 0;
        }
        input:hover::-moz-placeholder { 
            color: #363636;
        }
        :-ms-input-placeholder { 
            color: #808080;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }
        input:focus:-ms-input-placeholder { 
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        }
        input:hover:-ms-input-placeholder { 
            color: #363636;
        }
        :-moz-placeholder { 
            color: #808080;
            -moz-opacity: 1;
        }
        input:focus:-moz-placeholder { 
            -moz-opacity: 0;
        }
        input:hover:-moz-placeholder { 
            color: #363636;
        }

        .ui-sortable-placeholder {
            background-color: #f1f1f1 !important;
            border: 1px dashed #afafaf !important;
            visibility: visible !important;
            box-shadow: inset 0 0 .4em #d8d8d8, 0 0 .2em #afafaf, 0 0 1em #d8d8d8 !important;
        
        }

    </style>

@endsection

@section('content')

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('menu-title')

                    <span class="m-0 font-weight-bold float-right text-primary">  </strong> sayfa bulundu.
                    <!-- <a href="{{ route('admin.content.trash') }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"> Silinen Yazılar </i></a> -->
                </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <form id="sortable" class="sortable" method="POST" action="{{ route('admin.settings.banner.update') }}"> 
                    @csrf
                    @foreach ($articles as $article)
                        <label class="ui-state-default @if($article->banner == 1) checked @endif">
                            <img src="{{$article->image}}"  width="40px" alt="">
                            {{$article->title}}

                            <input type="checkbox" name="fields[]" value="{{ $article->id }}" @if($article->banner == 1) checked @endif"> 

                        </label>


                    @endforeach

                    <button type="submit" class="btn btn-primary">Kaydet</button>

                <form>
              </div>
            </div>
          </div>
@endsection


@section('script')
      <!-- article level plugins -->
    <script src="{{ asset('back-end/vendor/datatables/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('back-end/vendor/datatables/dataTables.bootstrap4.min.js') }} "></script>

    <!-- article level custom scripts -->
    <script src="{{ asset('back-end/js/demo/datatables-demo.js') }} "></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(function() {

            let MAXCHECK = 4;

            function initSortable() {
                $( "#sortable" ).sortable();
                $( "#sortable" ).disableSelection();
            };
            initSortable();

            function titleCase(str) {  
                str = str.toLowerCase().split(' ');
                for(var i = 0; i < str.length; i++){
                    str[i] = str[i].split('');
                    str[i][0] = str[i][0].toUpperCase(); 
                    str[i] = str[i].join('');
                }
                return str.join(' ');
            }
                        
            var arrFields = new Array();

            console.log(arrFields);
     
      
      
      
            function output(e){
                // Style
                let count = 0;
                arrFields.forEach(element => {
                    if(element)
                        count++;
                });

                if(e['currentTarget']['lastElementChild']['checked']) {
                    if(count >= MAXCHECK)
                        return;
                    e['target']['parentElement']['classList'].add('checked');
                } else {
                    e['target']['parentElement']['classList'].remove('checked');
                }
                    
                // Output    
                var key = e['currentTarget']['lastElementChild']['defaultValue'];
                if (e['currentTarget']['lastElementChild']['checked']) {
                    arrFields[key] = true;   
                    console.log(arrFields);
             
                } else {
                    arrFields[key] = false;
                    console.log(arrFields);

                } 
            }
      
            function initActions() {
                $('#sortable input:checkbox:checked').each(function(key, item){
                    arrFields[parseInt($(item).val())] = true;
                })
                console.log(arrFields);

                $('.ui-state-default').on('change',function(e){
                    output(e);
                });  
                // $('.ui-state-default input').on('click',function(e){
                //     output(e);
                // }); 
                // $('#add button').hide();
                // $('#add input').on('click',function(e){
                //     $('#add button').show();
                // }); 
            }
            initActions();
      
            
            $('#add').submit(function(e) {
                e.preventDefault(); 
                if (e['currentTarget'][0]['value'].length > 0) {
                    var val = e['currentTarget'][0]['value'];
                
                var label = document.createElement("label");
                label.className += " ui-state-default";

                var input = document.createElement("input");
                input.value = val;
                input.type = "checkbox";
                input.name = "fields[]";
                input.checked = "checked";

                var text = document.createTextNode(val);
                label.appendChild(input);
                label.appendChild(text);
                label.className += " checked";
        
                
                var sortable = document.getElementById("sortable");
                sortable.insertBefore(label, sortable.firstChild);
                
                $('#add-input').val('');
                $('#add-input').attr('paleholder', '+');
                $('#add-button').hide();

                var key = text;
                arrFields[key] = true;                
            
                initActions();  
                    $('#add-input').blur();
                } else {
                    $('#add-input').focus();
                }
            });
      
      
            $("#trash").droppable({
                hoverClass: "active",
                drop: function(event, ui) {
                    $(ui.draggable).remove();
                }
            });
    
            $('#submit').on('click', function() {
                var values = $('#sortable input:checkbox:checked').map(function () {
                    return this.value;
                }).get();
                
                alert(values);
            });

            $('#sort_banner').sortable({
                handle: '.spec',
                update: function () {

                }
            })
        })
    </script>

@endsection
