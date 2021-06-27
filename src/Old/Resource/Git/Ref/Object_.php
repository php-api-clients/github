<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git\Ref;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Git\Ref\EmptyObject_")
 */
abstract class Object_ extends AbstractResource implements Object_Interface
{
    protected string $type;

    protected string $sha;

    protected string $url;

    public function type(): string
    {
        return $this->type;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }
}
