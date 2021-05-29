<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyCodeOfConduct")
 */
abstract class CodeOfConduct extends AbstractResource implements CodeOfConductInterface
{
    protected string $key;

    protected string $name;

    protected string $spdx_id;

    protected string $url;

    public function key(): string
    {
        return $this->key;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function spdxId(): string
    {
        return $this->spdx_id;
    }

    public function url(): string
    {
        return $this->url;
    }
}
