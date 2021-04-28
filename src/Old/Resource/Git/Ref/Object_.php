<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git\Ref;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Git\Ref\EmptyObject_")
 */
abstract class Object_ extends AbstractResource implements Object_Interface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }
}
