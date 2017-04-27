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
            <a class="btn btn-success pull-right" href="{{ route('store.create') }}"><i class="glyphicon glyphicon-plus"></i> 作成</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($stores->count())
                <table id="table_id" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th>施設名</th>
                        	<!-- <th>コメント</th> -->
                            <th class="text-right" width="3%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($stores as $store)
                        <?php
							$imagedetail = $store->imagedetail;
							$thumbImg = "";
							if(isset($store->imagedetail)){
								$imagedetail = json_decode($imagedetail, true);
								$thumbImg = $imagedetail[0]['filename'];
								$thumbImg = "/img/store/" . $store->id . "/" . $thumbImg;
								$thumbImg = "<div class='col-md-3 col-xs-3'><img src='".$thumbImg."' class='img-thumbnail'></div>";
							}
							?>

                            <tr>
                                <td>{{$store->id}}</td>
                                <td>
                                	<div class="row">
	                                	<div class='col-md-9 col-xs-9'><a href="{{ route('store.edit', $store->id) }}">{{$store->storename}}</a></div>
	                                	{!! $thumbImg !!}
	                                </div>
                                </td>
                    			<!-- <td>{{$store->comment or ""}}</td> -->
                                <td class="text-right">
                                    <!--<a class="btn btn-xs btn-primary" href="{{ route('store.show', $store->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>-->
                                    <!-- <a class="btn btn-xs btn-warning" href="{{ route('store.edit', $store->id) }}"><i class="glyphicon glyphicon-edit"></i></a> -->
                                    <form action="{{ route('store.destroy', $store->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('削除します。よろしいですか？')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i><!-- Delete  --></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $stores->render() !!}
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
			"order": [[ 0, "asc" ]],
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
