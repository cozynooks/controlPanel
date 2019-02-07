@extends('layouts.app')

@section('content')
    <div class="New">
        <h2>新規登録</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['url' => '/new', 'method' => 'post', 'class' => 'Form']) !!}
            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">型番</span>
                    <div class="InputLabel__field">
                        {!! Form::text('code', '', ['placeholder' => '型番']) !!}
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">商品名</span>
                    <div class="InputLabel__field">
                        {!! Form::text('name', '', ['placeholder' => '商品名']) !!}
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">販売価格</span>
                    <div class="InputLabel__field">
                        {!! Form::text('price', '', ['placeholder' => '5000']) !!} 円
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">在庫数</span>
                    <div class="InputLabel__field">
                        {!! Form::text('stock', '', ['placeholder' => '1']) !!} 個
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">販売状態</span>
                    <div class="InputLabel__field">
                        <ul class="Radio -vertical">
                            <li><label>{!! Form::radio('status', '1', true); !!} 売れる</label></li>
                            <li><label>{!! Form::radio('status', '2'); !!} 売れない</label></li>
                        </ul>
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">商品説明</span>
                    <div class="InputLabel__field">
                        {!! Form::textarea('description') !!}
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <div class="Button_group">
                    <input type="submit" name="submit" value="登録" class="Button">
                </div>
            </div>

        {!! Form::close() !!}
    </div>
@endsection
