<?php

namespace Solid\Html;

    class HtmlTest extends \PHPUnit\Framework\TestCase
    {

        public function testCriarTagImgComSrc()
        {
            $html = new Html();
            $img = $html->img('img/photo.png');

            $this->assertEquals('<img src="img/photo.png"> ', $img);
        }
    }

