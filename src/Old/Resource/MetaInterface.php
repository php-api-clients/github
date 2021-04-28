<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MetaInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Meta';

    /**
     * @return bool
     */
    public function verifiablePasswordAuthentication(): bool;

    /**
     * @return string
     */
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
