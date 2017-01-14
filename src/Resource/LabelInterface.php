<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LabelInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Label';

    /**
     * @return string
     */
    public function url() : string;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function color() : string;
}
