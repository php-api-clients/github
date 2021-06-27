<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface UserInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\User';

    public function name(): string;

    public function email(): string;

    public function date(): DateTimeInterface;
}
