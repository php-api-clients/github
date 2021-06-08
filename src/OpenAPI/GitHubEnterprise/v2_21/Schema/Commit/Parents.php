<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Commit;

final class Parents
{
    public const SCHEMA_TITLE       = 'commit::parents';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $url;
    private string $html_url;

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }
}
