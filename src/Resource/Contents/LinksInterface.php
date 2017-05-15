<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LinksInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Contents\\Links';

    /**
     * @return string
     */
    public function git(): string;

    /**
     * @return string
     */
    public function self(): string;

    /**
     * @return string
     */
    public function html(): string;
}
