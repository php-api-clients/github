<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\Base';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Ref $ref;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Sha $sha;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Ref $ref, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Sha $sha)
    {
        $this->ref = $ref;
        $this->sha = $sha;
    }
}
