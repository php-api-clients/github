<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyLabel")
 */
abstract class Label extends AbstractResource implements LabelInterface
{
    protected string $url;

    protected string $name;

    protected string $color;

    public function url(): string
    {
        return $this->url;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function color(): string
    {
        return $this->color;
    }

    /**
     * @return Label
     */
    public function withName(string $name): self
    {
        $clone       = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @return Label
     */
    public function withColor(string $colour): self
    {
        $clone        = clone $this;
        $clone->color = $colour;

        return $clone;
    }
}
