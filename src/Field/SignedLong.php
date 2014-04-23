<?php
namespace Binary\Field;

class SignedLong extends AbstractNumericField
{
    /**
     * @return int
     * @author Josh Di Fabio <jd@amp.co>
     */
    protected function getSize()
    {
        return 4;
    }
    
    /**
     * @return string
     * @author Josh Di Fabio <jd@amp.co>
     */
    protected function getFormatCode()
    {
        return 'l';
    }
}
