<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface StatusInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Commit\\Status';

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface;

    /**
     * @return string
     */
    public function state() : string;

    /**
     * @return string
     */
    public function targetUrl() : string;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function url() : string;

    /**
     * @return string
     */
    public function context() : string;

    /**
     * @return User
     */
    public function creator() : User;
}
