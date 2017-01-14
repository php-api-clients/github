<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyLabel implements LabelInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function color() : string
    {
        return null;
    }
}
