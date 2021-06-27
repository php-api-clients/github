<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LabelInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Label';

    public function url(): string;

    public function name(): string;

    public function color(): string;
}
