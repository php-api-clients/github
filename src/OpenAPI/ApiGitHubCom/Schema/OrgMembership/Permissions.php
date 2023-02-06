<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'OrgMembership\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $can_create_repository;
    public function __construct(bool $can_create_repository)
    {
        $this->can_create_repository = $can_create_repository;
    }
}
