<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Transfer\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["new_owner"],"type":"object","properties":{"new_owner":{"type":"string","description":"The username or organization name the repository will be transferred to."},"new_name":{"type":"string","description":"The new name to be given to the repository."},"team_ids":{"type":"array","items":{"type":"integer"},"description":"ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Transfer\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username or organization name the repository will be transferred to.
     */
    public readonly string $new_owner;
    /**
     * The new name to be given to the repository.
     */
    public readonly ?string $new_name;
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $team_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $team_ids
     */
    public function __construct(string $new_owner, string $new_name, array $team_ids)
    {
        $this->new_owner = $new_owner;
        $this->new_name = $new_name;
        $this->team_ids = $team_ids;
    }
}
