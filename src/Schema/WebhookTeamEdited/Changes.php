<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookTeamEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"privacy":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}},"repository":{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}},"description":"The changes to the team if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the team if the action was `edited`.';
    public ?\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Description $description;
    public ?\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Name $name;
    public ?\ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Privacy $privacy;
    public ?\ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Repository $repository;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Description $description, \ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes\Name $name, \ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Privacy $privacy, \ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes\Repository $repository)
    {
        $this->description = $description;
        $this->name = $name;
        $this->privacy = $privacy;
        $this->repository = $repository;
    }
}
