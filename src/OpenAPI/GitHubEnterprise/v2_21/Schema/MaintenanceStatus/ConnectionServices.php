<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\MaintenanceStatus;

final class ConnectionServices
{
    public const SCHEMA_TITLE       = 'maintenance-status::connection_services';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $name           = null;
    private ?int $number            = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function number(): ?int
    {
        return $this->number;
    }
}
