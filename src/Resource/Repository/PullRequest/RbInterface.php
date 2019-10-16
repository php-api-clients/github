<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\PullRequest;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RbInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\PullRequest\\Rb';

    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return string
     */
    public function ref(): string;

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return User
     */
    public function user(): User;

    /**
     * @return Repository
     */
    public function repo(): Repository;
}
