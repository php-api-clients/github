<?php declare(strict_types=1);

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
    /**
     * @var string
     */
    protected $ref;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var Git\Ref\Object_
     */
    protected $object;

    /**
     * @return string
     */
    public function ref(): string
    {
        return $this->ref;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return Git\Ref\Object_
     */
    public function object(): Git\Ref\Object_
    {
        return $this->object;
    }
}
