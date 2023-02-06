<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CreateDeployment\Response\Application\Json;

final class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Operation\\CreateDeployment\\Response\\Application\\Json\\H202';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $message;
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
