@extends('tool.common.layout')

@section('header')
<div class="page-header">
        <h1>{{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }} #{{$information->id}}</h1>
        <form action="{{ route('information.destroy', $information->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('information.edit', $information->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <blockquote><label for="nome">ID</label></blockquote>
                    <p class="form-control-static">{{$information->id}}</p>
                </div>
                <div class="form-group">
                     <blockquote><label for="title">TITLE</label></blockquote>
                     <p class="form-control-static">{{$information->title}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for="open_flg">OPEN_FLG</label></blockquote>
                     <p class="form-control-static">{{$information->open_flg}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for=" open_date ">OPEN_DATE</label></blockquote>
                     <p class="form-control-static">{{$information->open_date}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for=" close_date ">CLOSE_DATE</label></blockquote>
                     <p class="form-control-static">{{$information->close_date}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for="store_id">STORE_ID</label></blockquote>
                     <p class="form-control-static">{{$information->store_id}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for="article">ARTICLE</label></blockquote>
                     <p class="form-control-static">{{$information->article}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for="article">PDFFILE_NAMES</label></blockquote>
                     <p class="form-control-static">{{$information->pdffile_names}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for="created_tool_user_id">CREATED_TOOL_USER_ID</label></blockquote>
                     <p class="form-control-static">{{$information->created_tool_user_id}}</p>
                </div>
                    <div class="form-group">
                     <blockquote><label for="updated_tool_user_id">UPDATED_TOOL_USER_ID</label></blockquote>
                     <p class="form-control-static">{{$information->updated_tool_user_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('information.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection