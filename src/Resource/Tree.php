<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyTree")
 */
abstract class Tree extends AbstractResource implements TreeInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return $this->sha;
    }
}
