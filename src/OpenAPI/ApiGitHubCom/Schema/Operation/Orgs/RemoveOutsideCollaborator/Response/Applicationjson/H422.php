<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson;

final readonly class H422
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $message;
    public ?string $documentation_url;
    public function __construct(string $message, string $documentation_url)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}
