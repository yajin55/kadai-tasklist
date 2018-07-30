@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {{Form::select('status', [
                       '開始' => '開始',
                       '終了' => '終了',
                       '作業中' => '作業中']
                    ,null, ['class' => 'form-control'])}}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
            
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
                </div>
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection