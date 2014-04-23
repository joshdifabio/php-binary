<?php
namespace Binary\Field;

use Binary\Stream\StreamInterface;
use Binary\DataSet;

abstract class AbstractNumericField extends AbstractField
{
    /**
     * @param StreamInterface $stream
     * @param DataSet $result
     * @return null
     * @author Josh Di Fabio <jd@amp.co>
     */
    public function read(StreamInterface $stream, DataSet $result)
    {
        $data = $stream->read($this->getSize());
        $unpacked = unpack($this->getFormatCode(), $data);
        $this->validate($unpacked[1]);
        $result->setValue($this->name, $unpacked[1]);
    }

    /**
     * @param StreamInterface $stream
     * @param DataSet $result
     * @return null
     * @author Josh Di Fabio <jd@amp.co>
     */
    public function write(StreamInterface $stream, DataSet $result)
    {
        $bytes = $result->getValue($this->name);
        $stream->write(pack($this->getFormatCode(), intval($bytes)));
    }
    
    /**
     * @return int
     * @author Josh Di Fabio <jd@amp.co>
     */
    abstract protected function getSize();
    
    
    /**
     * @return string
     * @author Josh Di Fabio <jd@amp.co>
     */
    abstract protected function getFormatCode();
}
