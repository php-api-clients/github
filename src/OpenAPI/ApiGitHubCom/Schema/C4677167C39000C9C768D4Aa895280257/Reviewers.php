<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C4677167C39000C9C768D4Aa895280257;

final class Reviewers
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"type":{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]},"id":{"type":"integer","description":"The id of the user or team who can review the deployment","examples":[4532992]}}}';
    public const SCHEMA_TITLE = 'C4677167C39000C9C768D4Aa895280257\\Reviewers';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The type of reviewer.
     */
    private string $type;
    /**
     * The id of the user or team who can review the deployment
     */
    private int $id;
    /**
     * The type of reviewer.
     */
    public function type() : string
    {
        return $this->type;
    }
    /**
     * The id of the user or team who can review the deployment
     */
    public function id() : int
    {
        return $this->id;
    }
}
