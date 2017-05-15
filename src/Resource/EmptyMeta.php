<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMeta implements MetaInterface, EmptyResourceInterface
{
    /**
     * @return bool
     */
    public function verifiablePasswordAuthentication(): bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function githubServicesSha(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function hooks(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function git(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function pages(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function importer(): array
    {
        return null;
    }
}
