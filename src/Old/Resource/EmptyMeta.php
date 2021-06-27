<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMeta implements MetaInterface, EmptyResourceInterface
{
    public function verifiablePasswordAuthentication(): bool
    {
        return null;
    }

    public function githubServicesSha(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function hooks(): array
    {
    }

    /**
     * @return array
     */
    public function git(): array
    {
    }

    /**
     * @return array
     */
    public function pages(): array
    {
    }

    /**
     * @return array
     */
    public function importer(): array
    {
    }
}
