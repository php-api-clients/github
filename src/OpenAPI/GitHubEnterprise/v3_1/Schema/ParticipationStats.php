<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ParticipationStats
{
    public const SCHEMA_JSON = '{"title":"Participation Stats","required":["all","owner"],"type":"object","properties":{"all":{"type":"array","items":{"type":"integer"}},"owner":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats\All>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats\All::class)
     */
    private array $all = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats\Owner>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats\Owner::class)
     */
    private array $owner = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats\All>
     */
    public function all() : array
    {
        return $this->all;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ParticipationStats\Owner>
     */
    public function owner() : array
    {
        return $this->owner;
    }
}
