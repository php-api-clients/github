<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE       = 'configuration-status';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $status         = null;
    private array $progress         = [];

    public function status(): ?string
    {
        return $this->status;
    }

    public function progress(): array
    {
        return $this->progress;
    }
}
