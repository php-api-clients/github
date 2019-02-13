<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RefInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\Ref';

    /**
     * @return string
     */
    public function ref(): string;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return Git\Ref\Object_
     */
    public function author(): Git\Ref\Object_;
}
