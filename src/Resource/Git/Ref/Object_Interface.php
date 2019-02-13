<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git\Ref;

use ApiClients\Foundation\Resource\ResourceInterface;

interface Object_Interface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\Ref\\Object_';

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return string
     */
    public function url(): string;
}
