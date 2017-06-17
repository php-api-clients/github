<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyTag implements TagInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return Tree
     */
    public function commit(): Tree
    {
        return null;
    }

    /**
     * @return string
     */
    public function zipballUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function tarballUrl(): string
    {
        return null;
    }
}
