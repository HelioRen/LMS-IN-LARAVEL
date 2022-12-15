@extends('layout.index')
@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Livros disponíveis para alunos</h3>
        </div>
        <div class="module-body">
<!--             <p>
                <strong>Combined</strong>
                -
                <small>table class="table table-striped table-bordered table-condensed"</small>
            </p> -->
            <div class="controls">
                <select class="" id="category_fill">
                    @foreach($categories_list as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título do livro</th>
                        <th>Autor</th>
                        <th>Descricao</th>
                        <th>Categoria</th>
                        <th>Disponível</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="all-books">
                    <tr class="text-center">
                        <td colspan="99"> <i class="icon-spinner icon-spin"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <input type="hidden" name="" id="categories_list" value="{{ json_encode($categories_list) }}">
</div>
@stop

@section('custom_bottom_script')
<script type="text/javascript">
    var categories_list = $('#categories_list').val();
</script>
<script type="text/javascript" src="{{asset('static/custom/js/script.addbook.js') }}"></script>
<script type="text/template" id="allbooks_show">
    @include('underscore.allbooks_show')
</script>
@stop