<?php

class FunctionTest extends TestCase
{
   
    public function test_index()
    {
        $indexPage =$this->request('GET', 'TestingController');
        $this->assertNotEmpty($indexPage);

    }

}