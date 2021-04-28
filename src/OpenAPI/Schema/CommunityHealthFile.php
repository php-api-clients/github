<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class CommunityHealthFile
{
    public const SCHEMA_TITLE = 'Community Health File';
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
