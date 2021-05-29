<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\ConfigurationStatus\Progress;

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

    /**
     * @return array<Progress>
     */
    public function progress(): array
    {
        return $this->progress;
    }
}
