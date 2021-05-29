<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RunnerApplication
{
    public const SCHEMA_TITLE       = 'Runner Application';
    public const SCHEMA_DESCRIPTION = 'Runner Application';
    private ?string $os             = null;
    private ?string $architecture   = null;
    private ?string $download_url   = null;
    private ?string $filename       = null;
    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    private ?string $temp_download_token = null;
    private ?string $sha256_checksum     = null;

    public function os(): ?string
    {
        return $this->os;
    }

    public function architecture(): ?string
    {
        return $this->architecture;
    }

    public function download_url(): ?string
    {
        return $this->download_url;
    }

    public function filename(): ?string
    {
        return $this->filename;
    }

    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    public function temp_download_token(): ?string
    {
        return $this->temp_download_token;
    }

    public function sha256_checksum(): ?string
    {
        return $this->sha256_checksum;
    }
}
