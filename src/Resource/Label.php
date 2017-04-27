<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyLabel")
 */
abstract class Label extends AbstractResource implements LabelInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $color;

    /**
     * @return string
     */
    public function url() : string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function color() : string
    {
        return $this->color;
    }

    /**
     * @param string $name
     * @return Label
     */
    public function withName(string $name): self
    {
        $clone = clone $this;
        $clone->name = $name;
        return $clone;
    }

    /**
     * @param string $colour
     * @return Label
     */
    public function withColor(string $colour): self
    {
        $clone = clone $this;
        $clone->color = $colour;
        return $clone;
    }
}
