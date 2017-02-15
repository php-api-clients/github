<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyBranch implements BranchInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return Repository\Tree
     */
    public function commit() : Repository\Tree
    {
        return null;
    }

    /**
     * @return bool
     */
    public function protected() : bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function protectionUrl() : string
    {
        return null;
    }
}
