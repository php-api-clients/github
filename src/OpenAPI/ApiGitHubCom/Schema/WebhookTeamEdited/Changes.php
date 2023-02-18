<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookTeamEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookLabelEdited\Changes\Description;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookLabelEdited\Changes\Name;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookTeamEdited\Changes\Privacy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookTeamEdited\Changes\Repository;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"privacy":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}},"repository":{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}},"description":"The changes to the team if the action was `edited`."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the team if the action was `edited`.';
    public ?Description $description;
    public ?Name $name;
    public ?Privacy $privacy;
    public ?Repository $repository;

    public function __construct(Description $description, Name $name, Privacy $privacy, Repository $repository)
    {
        $this->description = $description;
        $this->name        = $name;
        $this->privacy     = $privacy;
        $this->repository  = $repository;
    }
}
