<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimGroupListEnterprise\Resources;

final class Members
{
    public const SCHEMA_TITLE       = 'scim-group-list-enterprise::Resources::members';
    public const SCHEMA_DESCRIPTION = '';
    private string $value;
    private string $$ref;
    private string $display;

    public function value(): string
    {
        return $this->value;
    }

    public function $ref(): string
    {
        return $this->$ref;
    }

    public function display(): string
    {
        return $this->display;
    }
}
