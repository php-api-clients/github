<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\ConfigurationStatus;

final class Progress
{
    public const SCHEMA_TITLE       = 'configuration-status::progress';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $status         = null;
    private ?string $key            = null;

    public function status(): ?string
    {
        return $this->status;
    }

    public function key(): ?string
    {
        return $this->key;
    }
}
