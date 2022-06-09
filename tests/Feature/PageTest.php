<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    //try cek index page
    public function testindexpage()
    {
        $response = $this->get('/tickets');

        $response->assertStatus(200);
    }

    //cek create page
    public function testcreatepage()
    {
        $response = $this->get('/tickets/create');

        $response->assertStatus(200);
    }


    public function testnewticket()
    {
        $response = $this->post('/tickets/create', [
            'summary' => 'Dary',
            'description' => 'dary@gmail.com',
            'status' => '1'

        ]);

         $response->assertRedirect('/tickets');



    }



}
