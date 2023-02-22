<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Orgs\UpdateMembershipForAuthenticatedUser\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["active"],"type":"string","description":"The state that the membership should be in. Only `\\"active\\"` will be accepted."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     */
    public ?string $state;
    public function __construct(string $state)
    {
        $this->state = $state;
    }
}
