<?php
declare(strict_types=1);

namespace SimpleMVC\test;

use PHPUnit\Framework\TestCase;
use SimpleMVC\Filter;

class FilterTest extends TestCase
{
    public function testValidEmail()
    {
        $filter = new Filter();
        $this->assertTrue($filter->isEmail('marco@email.com'));
    }

    public function testInvalidEmail()
    {
        $filter = new Filter();
        $this->assertFalse($filter->isEmail('marcoemail.com'));
    }

    public function testValidContent()
    {
        $filter = new Filter();
        $this->assertTrue($filter->isContent('prova'));
    }

    public function testInvalidContent()
    {
        $filter = new Filter();
        $this->assertFalse($filter->isContent("}"));
    }
}
