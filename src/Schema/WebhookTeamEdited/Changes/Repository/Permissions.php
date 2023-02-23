<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Repository;

final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Repository\Permissions\From $from;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Repository\Permissions\From $from)
    {
        $this->from = $from;
    }
}
