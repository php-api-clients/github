<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership;

final readonly class Permissions
{
    public const SCHEMA_JSON        = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $can_create_repository;

    public function __construct(bool $can_create_repository)
    {
        $this->can_create_repository = $can_create_repository;
    }
}
