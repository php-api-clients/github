<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyTree implements TreeInterface, EmptyResourceInterface
{
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

    /**
     * @return array
     */
    public function tree(): array
    {
    }

    /**
     * @return bool
     */
    public function truncated(): bool
    {
        return null;
    }
}
