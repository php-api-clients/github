<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE = 'Repository\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Permissions\From::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Permissions\From $from;
    public function from() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Permissions\From
    {
        return $this->from;
    }
}