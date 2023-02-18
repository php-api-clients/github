<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookTeamEdited\Changes;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookTeamEdited\Changes\Repository\Permissions;

final readonly class Repository
{
    public const SCHEMA_JSON        = '{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Permissions $permissions;

    public function __construct(Permissions $permissions)
    {
        $this->permissions = $permissions;
    }
}
