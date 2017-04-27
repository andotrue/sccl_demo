{{-- @{{extends('layouts.app')}} --}}
@extends('tool.common.layout')

@section('css')
	<link href="/css/jquery.dataTables/jquery.dataTables.min.css" rel="stylesheet">
	<link href="/css/jquery.dataTables/dataTables.bootstrap.css" rel="stylesheet">
	<link href="/css/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<style>
	tbody:hover {
	    cursor: move;
	}
	</style>
@endsection

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i>{{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }}
            <a class="btn btn-success pull-right" href="{{ route('information.create') }}"><i class="glyphicon glyphicon-plus"></i> 作成</a>
        </h1>
		{{ $message or "" }}
		@if (Session::has('message'))
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p>{{ Session::get('message') }}</p>
			</div>
		@endif
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($informations->count())
            	<!-- Paganation -->
            	{{ $informations->render() }}
                <table id="table_id" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th>タイトル</th>
                        	<th>公開状態</th>
                        	<th>開始日</th>
                        	<th>終了日</th>
                        	<th>施設</th>
                        	<!--
                        	<th>記事</th>
                        	<th>CREATED_TOOL_USER_ID</th>
                        	<th>UPDATED_TOOL_USER_ID</th>
                        	 -->
                            <th width="10%" class="text-right"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($informations as $information)
                        <?php
							$article = $information->article;
							$pattern = '/<img.*src\s*=\s*[\"|\'](.*?)[\"|\'].*>/i';
							$thumbImg = "";
							if(preg_match_all($pattern, $article,$img_texts)){
								//echo "<pre>"; var_dump($img_texts); echo "</pre>";
								$thumbImg = "<div class='col-md-3'><img src='".$img_texts[1][0]."' class='img-thumbnail'></div>";
							}
                        ?>
                            <tr>
                                <td>{{ $information->id}}</a></td>
                                <td>
                                	<div class="row">
	                                	<div class='col-md-9'><a href="{{ route('information.edit', $information->id) }}" >{{ $information->title}}</a></div>
                                		{!! $thumbImg !!}
                                	</div>
                                </td>
                    			<td>{{ config('const.openFlg')[$information->open_flg] }}</td>
                    			<td>{{ $information->open_date }}</td>
                    			<td>{{ $information->close_date }}</td>
                    			<td>{{ $stores[$information->store_id] or ""}}</td>

                    			<!--
                    			<td>{{$information->article}}</td>
                    			<td>{{$information->created_tool_user_id}}</td>
                    			<td>{{$information->updated_tool_user_id}}</td>
                    			 -->
                                <td class="text-right">
									<a class="btn btn-xs btn-info" href="/information/detail/{{ $information->id}}/?preview=1&param1=<?php echo time(); ?>" target="_blank"><i class="glyphicon glyphicon-open"></i></a>
                                    <!-- <a class="btn btn-xs btn-primary" href="{{ route('information.show', $information->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>-->
                                    <!-- <a class="btn btn-xs btn-warning" href="{{ route('information.edit', $information->id) }}"><i class="glyphicon glyphicon-edit"></i></a> -->
									<form action="/tool/information/copy/{{ $information->id }}/" method="POST" style="display: inline;" onsubmit="if(confirm('この記事をコピーしますか？')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="COPY">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-list"></i></button>
                                    </form>
                                    <form action="{{ route('information.destroy', $information->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('削除してよろしいですか？')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i><!--  Delete --></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Paganation -->
                {!! $informations->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>
@endsection

@section('scripts')
	<script src="/js/jquery.dataTables/jquery.dataTables.min.js"></script>
	<script src="/js/jquery.dataTables/dataTables.bootstrap.js"></script>
	<script src="/js/jquery-ui/jquery-ui.min.js"></script>

	<script type="text/javascript">
		$("#table_id").dataTable({
			"order": [[ 0, "desc" ]],
			"stateSave": true,
		    "oLanguage": {
		    	"sLengthMenu": "表示行数 _MENU_ 件",
		        "oPaginate": {
		            "sNext": "次のページ",
		            "sPrevious": "前のページ"
		        },
		        "sInfo": "全_TOTAL_件中 _START_件から_END_件を表示",
		        "sSearch": "検索："
		    },
		});
		var table = $("#table_id").DataTable();
		if( !table.search() ){
			table.search('').draw();
		}
		table.state.clear();//ステートのクリア
	</script>

	<script type="text/javascript">
	    jQuery( '.jquery-ui-sortable-table' ).sortable();
	    $('.jquery-ui-sortable-table').disableSelection();
	    jQuery( '#submitSortable' ) . click( function() {
			var itemNames = '';
			var itemIDs = '';
			var inputValue = '';
			var form = document.createElement( "form" );
			document.body.appendChild( form );

			jQuery( '.jquery-ui-sortable-table tr' ) . map( function() {
				var id = '';
				var title = ''

				id = jQuery( this.childNodes[1] ).text().replace(/\s+/g, "");
				title = jQuery( this.childNodes[5].childNodes[1] ).text();
				itemNames += id + ' ' + title + '\n';

				inputValue += id + ',';

			} );
			if( confirm( itemNames + '【この順番でよろしいですか？】' ) ){
				//get送信の場合
				//location . href = '?itemIDs=' + itemIDs;

				//post送信の場合
				var input = document.createElement( "input" );
				input.setAttribute( "type" , "hidden" );
				input.setAttribute( "name" , "ids" );
				input.setAttribute( "value", inputValue );
				form.appendChild( input );

				var input = document.createElement( "input" );
				input.setAttribute( "type" , "hidden" );
				input.setAttribute( "name" , "category_id" );
				input.setAttribute( "value", 1 );
				form.appendChild( input );

				var input = document.createElement( "input" );
				input.setAttribute( "type" , "hidden" );
				input.setAttribute( "name" , "sort" );
				input.setAttribute( "value", 1 );
				form.appendChild( input );

				form.setAttribute( "method" , "post" );
				form.submit();
	        }
	    } );
	</script>
@endsection
