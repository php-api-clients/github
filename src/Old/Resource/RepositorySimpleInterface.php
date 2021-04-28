<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RepositorySimpleInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'RepositorySimple';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function url(): string;
}
