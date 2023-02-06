<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Repository
{
    public const SCHEMA_JSON = '{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\Repository';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository\Permissions $permissions;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository\Permissions $permissions)
    {
        $this->permissions = $permissions;
    }
}
