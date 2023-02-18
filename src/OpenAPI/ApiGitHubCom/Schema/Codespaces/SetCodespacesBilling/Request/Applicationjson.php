<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespaces\SetCodespacesBilling\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["disabled","selected_members","all_members","all_members_and_outside_collaborators"],"type":"string","description":"Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization."},"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members who should have access to codespaces in the organization. Required when `visibility` is `selected_members`. The provided list of usernames will replace any existing value."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization.
     */
    public ?string $visibility;
    /**
     * The usernames of the organization members who should have access to codespaces in the organization. Required when `visibility` is `selected_members`. The provided list of usernames will replace any existing value.
     */
    public array $selected_usernames;

    public function __construct(string $visibility, array $selected_usernames)
    {
        $this->visibility         = $visibility;
        $this->selected_usernames = $selected_usernames;
    }
}
