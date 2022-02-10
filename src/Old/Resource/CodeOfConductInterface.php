<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CodeOfConductInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'CodeOfConduct';

    public function key(): string;

    public function name(): string;

    public function spdxId(): string;

    public function url(): string;
}
