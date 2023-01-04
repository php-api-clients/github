<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class RequiredStatusChecks
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Changes\\RequiredStatusChecks';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\From>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\From::class)
     */
    private array $from = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\From>
     */
    public function from() : array
    {
        return $this->from;
    }
}
