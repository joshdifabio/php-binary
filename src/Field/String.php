<?php
namespace Binary\Field;

use Binary\Stream\StreamInterface;
use Binary\DataSet;

class String extends AbstractField
{
    /**
     * @param StreamInterface $stream
     * @param DataSet $result
     * @return null
     * @author Josh Di Fabio <jd@amp.co>
     */
    public function read(StreamInterface $stream, DataSet $result)
    {
        $bytes = $stream->read($this->size->get($result));
        $this->validate(strval($bytes));
        $result->setValue($this->name, strval($bytes));
    }

    /**
     * @param StreamInterface $stream
     * @param DataSet $result
     * @return null
     * @author Josh Di Fabio <jd@amp.co>
     */
    public function write(StreamInterface $stream, DataSet $result)
    {
        $bytes = substr($result->getValue($this->name), 0, $this->size->get($result));
        $stream->write($bytes);
    }
}
