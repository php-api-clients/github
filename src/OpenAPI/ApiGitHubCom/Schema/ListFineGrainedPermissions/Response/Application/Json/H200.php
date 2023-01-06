<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListFineGrainedPermissions\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Organization Fine-Grained Permission","required":["name","description"],"type":"object","properties":{"name":{"type":"string"},"description":{"type":"string"}},"description":"Fine-grained permissions available for the organization"}}';
    public const SCHEMA_TITLE = 'ListFineGrainedPermissions\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
