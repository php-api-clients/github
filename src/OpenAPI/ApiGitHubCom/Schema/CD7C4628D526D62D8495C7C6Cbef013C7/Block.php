<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD7C4628D526D62D8495C7C6Cbef013C7;

final class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'CD7C4628D526D62D8495C7C6Cbef013C7\\Block';
    public const SCHEMA_DESCRIPTION = '';
    private string $reason;
    private string $created_at;
    private ?string $html_url;
    public function reason() : string
    {
        return $this->reason;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
