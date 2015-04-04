<?php
require __DIR__.'/../vendor/autoload.php';
use OJP\IpLocationCN\IP;

class IPTest extends PHPUnit_Framework_TestCase {
    public function testIpLocation() {
        $this->assertEquals(['中国', '浙江', '温州', ''], IP::find('183.131.105.1'));
        $this->assertEquals(['中国', '上海', '上海', ''], IP::find('101.87.3.100'));
        $this->assertEquals(['中国', '四川', '成都', ''], IP::find('171.221.3.212'));
        $this->assertEquals(['中国', '新疆', '乌鲁木齐', ''], IP::find('221.7.8.37'));

        $this->assertEquals(['中国', '北京', '北京', ''], IP::find('jd.com'));
    }
}
