<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * トップページが表示されるか
     */
    public function testShowIndexPage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * 新規登録ページが表示されるか
     */
    public function testShowNewPage()
    {
        $response = $this->get('/new');
        $response->assertStatus(200);
    }

    /**
     * 新規登録ページが表示されるか
     */
    public function testDelete()
    {
        $response = $this->post('/delete/2');
        $response->assertStatus(302);
    }
}
