<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationLite
{
    public const SCHEMA_TITLE       = 'InstallationLite';
    public const SCHEMA_DESCRIPTION = 'Installation';
    /**
     * The ID of the installation.
     */
    private ?int $id         = null;
    private ?string $node_id = null;

    /**
     * The ID of the installation.
     */
    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }
}
