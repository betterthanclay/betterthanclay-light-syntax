<?php
/**
 * This file is part of the Decode Framework
 * @license http://opensource.org/licenses/MIT
 */
namespace df\apex\directory;

use df;
use df\core;
use df\apex;

interface MyInterface extends \ArrayAccess, \Countable {

}

trait MyTrait {
    public function hello() {

    }
}


class Test extends core\Base implements MyInterface, \ArrayAccess {

    use core\MyTrait;

    public function test(string $in=null, callable $renderer): ?string {
        self::jam();
        return 'hello';
    }

    public function __construct() {

    }

    protected function _flaps(arch\IRequest $request): ?core\Uri {
        if(!class_exists($class)
        || $request instanceof arch\Stuff) {
            throw core\Error::ENotFound(
                'Css processor '.$name.' could not be found'
            );
        }

        return $this->settings->test(function(?int $in) {
            return $in ?? $out;
        });
    }
}
