<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class CommunityHealthFile
{
    public const SCHEMA_JSON        = '{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE       = 'Community Health File';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $url;
    public ?string $html_url;

    public function __construct(string $url, string $html_url)
    {
        $this->url      = $url;
        $this->html_url = $html_url;
    }
}
