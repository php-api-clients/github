<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C0D13854C6E5067C000A1215C4918Bbfd
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'c_0d13854c6e5067c000a1215c4918bbfd';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C682653Decac7B5F7Ab0C425Fa08C8495::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C682653Decac7B5F7Ab0C425Fa08C8495 $default_branch;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF544D852737856A291Cc78C7C3F74F2E::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF544D852737856A291Cc78C7C3F74F2E $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF544D852737856A291Cc78C7C3F74F2E::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF544D852737856A291Cc78C7C3F74F2E $homepage;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE497Fff11D2F9D54D19638Eb42Cced95::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE497Fff11D2F9D54D19638Eb42Cced95 $topics;
    public function default_branch() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C682653Decac7B5F7Ab0C425Fa08C8495
    {
        return $this->default_branch;
    }
    public function description() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF544D852737856A291Cc78C7C3F74F2E
    {
        return $this->description;
    }
    public function homepage() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF544D852737856A291Cc78C7C3F74F2E
    {
        return $this->homepage;
    }
    public function topics() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE497Fff11D2F9D54D19638Eb42Cced95
    {
        return $this->topics;
    }
}
