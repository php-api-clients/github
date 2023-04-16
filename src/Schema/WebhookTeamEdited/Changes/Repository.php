<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes;

use ApiClients\Client\GitHub\Schema;

final readonly class Repository
{
    public const SCHEMA_JSON         = '{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permissions":{"from":{"admin":false,"pull":false,"push":false}}}';

    public function __construct(public Schema\WebhookTeamEdited\Changes\Repository\Permissions $permissions)
    {
    }
}
