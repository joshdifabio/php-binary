<?php
namespace Binary\Field;

class UnsignedLong extends AbstractNumericField
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
        switch ($this->byteOrder) {
            case 'big':
                return 'N';
                
            case 'little':
                return 'V';
                
            default:
            case 'machine':
                return 'L';
        }
    }
}
