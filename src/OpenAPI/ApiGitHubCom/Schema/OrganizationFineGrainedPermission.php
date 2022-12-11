<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationFineGrainedPermission
{
    public const SCHEMA_TITLE = 'Organization Fine-Grained Permission';
    public const SCHEMA_DESCRIPTION = 'Fine-grained permissions available for the organization';
    private string $name;
    private string $description;
    public function name() : string
    {
        return $this->name;
    }
    public function description() : string
    {
        return $this->description;
    }
}
