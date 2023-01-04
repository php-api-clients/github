<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'OrgMembership\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    private bool $can_create_repository;
    public function can_create_repository() : bool
    {
        return $this->can_create_repository;
    }
}
