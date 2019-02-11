<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProduct;


class StoreProductRequestTest extends TestCase
{
    /**
     * カスタムリクエストのバリデーションテスト
     *
     * @param string 項目名
     * @param string 値
     * @param boolean 期待値(true:バリデーションOK、false:バリデーションNG)
     * @dataProvider dataproviderProducts
     */
     public function testStoreValidation($item, $data, $expect)
     {
         //入力項目（$item）とその値($data)
         $dataList = [$item => $data];

         $request = new StoreProduct();
         //フォームリクエストで定義したルールを取得
         $rules = $request->rules();
         //Validatorファサードでバリデーターのインスタンスを取得、その際に入力情報とバリデーションルールを引数で渡す
         $validator = Validator::make($dataList, $rules);
         //入力情報がバリデーショルールを満たしている場合はtrue、満たしていな場合はfalseが返る
         $result = $validator->passes();
         //期待値($expect)と結果($result)を比較
         $this->assertEquals($expect, $result);
     }

     public function dataproviderProducts()
     {
         return [
             '正常'           => ['code', 'MH40001', false],
             '正規表現エラー'   => ['code', '40001', false],
             '必須エラー'      => ['code', '', false],
             '正常'           => ['name', 'Tシャツ2', false],
             '必須エラー'      => ['name', '', false],
             //str_repeat('a', 256)で、256文字の文字列を作成(aが256個できる)
             '最大文字数エラー' => ['name', str_repeat('a', 256), false],
         ];
     }
}
