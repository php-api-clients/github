<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface BranchInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Branch';

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return TreeInterface
     */
    public function commit(): TreeInterface;

    /**
     * @return bool
     */
    public function protected(): bool;

    /**
     * @return string
     */
    public function protectionUrl(): string;
}
