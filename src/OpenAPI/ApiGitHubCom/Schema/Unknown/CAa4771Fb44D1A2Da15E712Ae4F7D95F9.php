<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CAa4771Fb44D1A2Da15E712Ae4F7D95F9
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs that can access the runner group."}}}';
    public const SCHEMA_TITLE = 'c_aa4771fb44d1a2da15e712ae4f7d95f9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of repository IDs that can access the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4765428C44Cf511223D18E3Fdc80A0D6>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4765428C44Cf511223D18E3Fdc80A0D6::class)
     */
    private array $selected_repository_ids = array();
    /**
     * List of repository IDs that can access the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4765428C44Cf511223D18E3Fdc80A0D6>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}