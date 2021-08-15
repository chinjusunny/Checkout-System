<?php

class WelcomeTest extends TestCase
{
   
    //Test case class for Welcome Controller
    public function test_index()
    {
        $output = $this->request('GET', 'welcome/index');
        $this->assertNotEmpty($output);

    }

    

}