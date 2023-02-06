<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ParticipationStats
{
    public const SCHEMA_JSON = '{"title":"Participation Stats","required":["all","owner"],"type":"object","properties":{"all":{"type":"array","items":{"type":"integer"}},"owner":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $all;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $owner;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $all
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $owner
     */
    public function __construct(array $all, array $owner)
    {
        $this->all = $all;
        $this->owner = $owner;
    }
}
