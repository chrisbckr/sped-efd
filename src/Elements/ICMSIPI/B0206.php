<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0206 do Bloco 0
 */
class B0206 extends Element implements ElementInterface
{
    const REG = '0206';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [];
    
    /**
     * Constructor
     * @param stdClass $std
     */
    public function __construct(stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
