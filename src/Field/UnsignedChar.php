<?php
namespace Binary\Field;

use Binary\Stream\StreamInterface;
use Binary\DataSet;

class UnsignedChar extends AbstractField
{
    /**
     * @param StreamInterface $stream
     * @param DataSet $result
     * @return null
     * @author Josh Di Fabio <jd@amp.co>
     */
    public function read(StreamInterface $stream, DataSet $result)
    {
        $data = $stream->read($this->size->get($result));
        $unpacked = unpack('C', $data);
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
        $stream->write('C', $bytes);
    }
}
