<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommunityHealthFile
{
    public const SCHEMA_TITLE = 'Community Health File';
    public const SPL_HASH = '0000000020701bac0000000042193899';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $html_url;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
