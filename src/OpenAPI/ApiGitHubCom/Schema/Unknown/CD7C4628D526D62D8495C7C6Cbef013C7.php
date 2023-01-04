<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CD7C4628D526D62D8495C7C6Cbef013C7
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'c_d7c4628d526d62d8495c7c6cbef013c7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD7C4628D526D62D8495C7C6Cbef013C7\Block::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD7C4628D526D62D8495C7C6Cbef013C7\Block $block;
    private string $message;
    private string $documentation_url;
    public function block() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CD7C4628D526D62D8495C7C6Cbef013C7\Block
    {
        return $this->block;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
}
