<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     object="Git\Ref\Object_"
 * )
 * @EmptyResource("Git\EmptyRef")
 */
abstract class Ref extends AbstractResource implements RefInterface
{
    protected string $ref;

    protected string $url;

    protected Git\Ref\Object_ $object;

    public function ref(): string
    {
        return $this->ref;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function object(): Git\Ref\Object_
    {
        return $this->object;
    }
}
