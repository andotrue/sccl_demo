@extends('tool.common.layout')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> {{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }} #{{$accesslog->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('accesslog.update', $accesslog->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- ページタイトル -->
                <div class="form-group @if($errors->has('pageTitle')) has-error @endif">
                   <label for="pageTitle-field">ページタイトル</label>
                   <input type="text" id="pageTitle-field" name="pageTitle" class="form-control" value="{{ is_null(old("pageTitle")) ? $accesslog->pageTitle : old("pageTitle")}}"/>
                       @if($errors->has("pageTitle"))
                        <span class="help-block">{{ $errors->first("pageTitle") }}</span>
                       @endif
                </div>
                
                <!-- ページパス -->
                <!--
                <div class="form-group @if($errors->has('pagePath')) has-error @endif">
                	<label for="pagePath-field">ページパス</label>
                    <input type="text" id="pagePath-field" pagePath="pagePath" class="form-control" value="{{ is_null(old("pagePath")) ? $accesslog->pagePath : old("pagePath") }}"/>
                       @if($errors->has("pagePath"))
                        <span class="help-block">{{ $errors->first("pagePath") }}</span>
                       @endif
                </div>
                -->
                    
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <a class="btn btn-link pull-right" href="{{ route('accesslog.index') }}"><i class="glyphicon glyphicon-backward"></i>  戻る</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
