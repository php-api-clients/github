<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRef implements RefInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function ref(): string
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

    /**
     * @return Git\Ref\Object_
     */
    public function object(): Git\Ref\Object_
    {
        return null;
    }
}
