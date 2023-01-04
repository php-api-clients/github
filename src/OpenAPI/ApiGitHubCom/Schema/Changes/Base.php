<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'Changes\\Base';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Ref::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Ref $ref;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Sha::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Sha $sha;
    public function ref() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Ref
    {
        return $this->ref;
    }
    public function sha() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Sha
    {
        return $this->sha;
    }
}
