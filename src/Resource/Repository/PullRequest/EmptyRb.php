<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\PullRequest;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRb implements RbInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function label(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function ref(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return null;
    }

    /**
     * @return Repository
     */
    public function repo(): Repository
    {
        return null;
    }
}
