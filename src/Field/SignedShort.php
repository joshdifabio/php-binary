<?php
namespace Binary\Field;

class SignedShort extends AbstractNumericField
{
    /**
     * @return int
     * @author Josh Di Fabio <jd@amp.co>
     */
    protected function getSize()
    {
        return 2;
    }
    
    /**
     * @return string
     * @author Josh Di Fabio <jd@amp.co>
     */
    protected function getFormatCode()
    {
        return 's';
    }
}
