<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TagInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Tag';

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return Tree
     */
    public function commit(): Tree;

    /**
     * @return string
     */
    public function zipballUrl(): string;

    /**
     * @return string
     */
    public function tarballUrl(): string;
}
