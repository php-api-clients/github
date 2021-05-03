<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommunityHealthFile
{
    public const SCHEMA_TITLE = 'Community Health File';
    public const SPL_HASH = '000000000cd53a240000000040effa88';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url = null;
    private ?string $html_url = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
