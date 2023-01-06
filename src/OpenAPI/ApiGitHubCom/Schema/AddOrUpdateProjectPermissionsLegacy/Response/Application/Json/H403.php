<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateProjectPermissionsLegacy\Response\Application\Json;

final class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'AddOrUpdateProjectPermissionsLegacy\\Response\\Application\\Json\\H403';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $documentation_url;
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
}
