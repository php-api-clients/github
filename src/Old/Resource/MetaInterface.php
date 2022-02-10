<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MetaInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Meta';

    public function verifiablePasswordAuthentication(): bool;

    public function githubServicesSha(): string;

    /**
     * @return array
     */
    public function hooks(): array;

    /**
     * @return array
     */
    public function git(): array;

    /**
     * @return array
     */
    public function pages(): array;

    /**
     * @return array
     */
    public function importer(): array;
}
