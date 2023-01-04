<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C1Ff2C407Be5A908A1A17F652B7Cb6D61
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE = 'c_1ff2c407be5a908a1a17f652b7cb6d61';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C1Ff2C407Be5A908A1A17F652B7Cb6D61\Assignees>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C1Ff2C407Be5A908A1A17F652B7Cb6D61\Assignees::class)
     */
    private array $assignees = array();
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C1Ff2C407Be5A908A1A17F652B7Cb6D61\Assignees>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
}
