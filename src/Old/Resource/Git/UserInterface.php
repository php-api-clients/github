<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface UserInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\User';

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function email(): string;

    /**
     * @return DateTimeInterface
     */
    public function date(): DateTimeInterface;
}
