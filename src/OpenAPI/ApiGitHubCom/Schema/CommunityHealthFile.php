<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommunityHealthFile
{
    public const SCHEMA_TITLE       = 'Community Health File';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url            = null;
    private ?string $html_url       = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }
}
