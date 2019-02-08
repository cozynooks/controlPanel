@extends('layouts.app')

@section('content')
    <div class="New">
        <div class="Edit__header">
            <h2>商品編集</h2>
            <a href="/delete/{{ $product->id }}" class="Button -delete" id="productDelete" data-id="{{ $product->id }}"><i class="fas fa-times"></i> 削除する</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['url' => "/edit/{$product->id}", 'method' => 'post', 'class' => 'Form']) !!}
            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">型番</span>
                    <div class="InputLabel__field">
                        {!! Form::text('code', $product->code, ['placeholder' => '型番']) !!}
                        <span class="InputLabel__fieldCaption">3文字の大文字英字と5桁の数字 例: MH25001</span>
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">商品名</span>
                    <div class="InputLabel__field">
                        {!! Form::text('name', $product->name, ['placeholder' => '商品名']) !!}
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">販売価格</span>
                    <div class="InputLabel__field">
                        {!! Form::text('price', $product->price, ['placeholder' => '5000']) !!} 円
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">在庫数</span>
                    <div class="InputLabel__field">
                        {!! Form::text('stock', $product->stock, ['placeholder' => '1']) !!} 個
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">販売状態</span>
                    <div class="InputLabel__field">
                        <ul class="Radio -vertical">
                            <li><label>{!! Form::radio('status', '1', $product->status==1 ? true : false); !!} 販売中</label></li>
                            <li><label>{!! Form::radio('status', '2', $product->status==0 ? true : false); !!} 販売中止</label></li>
                        </ul>
                    </div>
                </label>
            </div>

            <div class="Form__Group">
                <label class="InputLabel">
                    <span class="InputLabel__text">商品説明</span>
                    <div class="InputLabel__field">
                        {!! Form::textarea('description', $product->description) !!}
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
