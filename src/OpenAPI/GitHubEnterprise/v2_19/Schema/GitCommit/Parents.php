<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\GitCommit;

final class Parents
{
    public const SCHEMA_TITLE       = 'git-commit::parents';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * SHA for the commit
     */
    private ?string $sha      = null;
    private ?string $url      = null;
    private ?string $html_url = null;

    /**
     * SHA for the commit
     */
    public function sha(): ?string
    {
        return $this->sha;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }
}
