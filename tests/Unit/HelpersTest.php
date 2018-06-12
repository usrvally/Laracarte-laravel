<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test  */
    public function page_title_shuld_return_the_base_title_if_title_is_empty()
    {

        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /** @test  */
    public function page_title_shuld_return_the_base_title_if_title_is_provided()
    {

        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
        $this->assertEquals('home | Laracarte - List of artisans', page_title('home'));

    }


}
