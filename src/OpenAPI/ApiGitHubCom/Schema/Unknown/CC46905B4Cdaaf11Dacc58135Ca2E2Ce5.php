<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC46905B4Cdaaf11Dacc58135Ca2E2Ce5
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title."}}}},"description":"The changes to the issue."}';
    public const SCHEMA_TITLE = 'c_c46905b4cdaaf11dacc58135ca2e2ce5';
    public const SCHEMA_DESCRIPTION = 'The changes to the issue.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C577Ce6E9D2Ecd35F80C6C3F88528Cd9E::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C577Ce6E9D2Ecd35F80C6C3F88528Cd9E $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA53A589Ea14681F6D27D0B504256A9D8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA53A589Ea14681F6D27D0B504256A9D8 $title;
    public function body() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C577Ce6E9D2Ecd35F80C6C3F88528Cd9E
    {
        return $this->body;
    }
    public function title() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA53A589Ea14681F6D27D0B504256A9D8
    {
        return $this->title;
    }
}
