<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Transfer;

final class Request
{
    public const SCHEMA_JSON = '{"required":["new_owner"],"type":"object","properties":{"new_owner":{"type":"string","description":"The username or organization name the repository will be transferred to."},"new_name":{"type":"string","description":"The new name to be given to the repository."},"team_ids":{"type":"array","items":{"type":"integer"},"description":"ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."}}}';
    public const SCHEMA_TITLE = 'Transfer\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username or organization name the repository will be transferred to.
     */
    private string $new_owner;
    /**
     * The new name to be given to the repository.
     */
    private ?string $new_name = null;
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamIds::class)
     */
    private array $team_ids = array();
    /**
     * The username or organization name the repository will be transferred to.
     */
    public function new_owner() : string
    {
        return $this->new_owner;
    }
    /**
     * The new name to be given to the repository.
     */
    public function new_name() : ?string
    {
        return $this->new_name;
    }
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamIds>
     */
    public function team_ids() : array
    {
        return $this->team_ids;
    }
}
