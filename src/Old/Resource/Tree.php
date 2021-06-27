<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyTree")
 */
abstract class Tree extends AbstractResource implements TreeInterface
{
    protected string $url;

    protected string $sha;

    public function url(): string
    {
        return $this->url;
    }

    public function sha(): string
    {
        return $this->sha;
    }
}
