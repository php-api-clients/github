<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git\Ref;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyObject_ implements Object_Interface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function type(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }
}
