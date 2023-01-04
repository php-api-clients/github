<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class OldPermission
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}}';
    public const SCHEMA_TITLE = 'Changes\\OldPermission';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous permissions of the collaborator if the action was edited.
     */
    private string $from;
    /**
     * The previous permissions of the collaborator if the action was edited.
     */
    public function from() : string
    {
        return $this->from;
    }
}
