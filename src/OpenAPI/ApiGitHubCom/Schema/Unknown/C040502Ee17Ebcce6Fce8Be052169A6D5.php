<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C040502Ee17Ebcce6Fce8Be052169A6D5
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["disabled","selected_members","all_members","all_members_and_outside_collaborators"],"type":"string","description":"Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization."},"selected_usernames":{"type":"array","items":{"type":"string"},"description":"The usernames of the organization members who should be granted access to codespaces in the organization. Required when `visibility` is `selected_members`."}}}';
    public const SCHEMA_TITLE = 'c_040502ee17ebcce6fce8be052169a6d5';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization.
     */
    private string $visibility;
    /**
     * The usernames of the organization members who should be granted access to codespaces in the organization. Required when `visibility` is `selected_members`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $selected_usernames = array();
    /**
     * Which users can access codespaces in the organization. `disabled` means that no users can access codespaces in the organization.
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
    /**
     * The usernames of the organization members who should be granted access to codespaces in the organization. Required when `visibility` is `selected_members`.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function selected_usernames() : array
    {
        return $this->selected_usernames;
    }
}
