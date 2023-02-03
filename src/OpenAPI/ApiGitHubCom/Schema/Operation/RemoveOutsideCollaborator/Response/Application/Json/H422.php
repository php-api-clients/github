<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\RemoveOutsideCollaborator\Response\Application\Json;

final class H422
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Operation\\RemoveOutsideCollaborator\\Response\\Application\\Json\\H422';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $message;
    public readonly string $documentation_url;
    public function __construct(string $message, string $documentation_url)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}