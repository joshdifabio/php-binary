<?php
namespace Binary\Field;

class UnsignedShort extends AbstractNumericField
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
        switch ($this->byteOrder) {
            case 'big':
                return 'n';
                
            case 'little':
                return 'v';
                
            default:
            case 'machine':
                return 'S';
        }
    }
}
