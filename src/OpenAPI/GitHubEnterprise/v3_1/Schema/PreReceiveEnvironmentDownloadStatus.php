<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_TITLE       = 'pre-receive-environment-download-status';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url            = null;
    private ?string $state          = null;
    private ?string $downloaded_at  = null;
    private ?string $message        = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function downloaded_at(): ?string
    {
        return $this->downloaded_at;
    }

    public function message(): ?string
    {
        return $this->message;
    }
}
