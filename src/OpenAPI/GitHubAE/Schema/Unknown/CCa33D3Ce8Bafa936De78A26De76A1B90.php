<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CCa33D3Ce8Bafa936De78A26De76A1B90
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE = 'c_ca33d3ce8bafa936de78a26de76a1b90';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCa33D3Ce8Bafa936De78A26De76A1B90\Assignees>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCa33D3Ce8Bafa936De78A26De76A1B90\Assignees::class)
     */
    private array $assignees = array();
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCa33D3Ce8Bafa936De78A26De76A1B90\Assignees>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
}
