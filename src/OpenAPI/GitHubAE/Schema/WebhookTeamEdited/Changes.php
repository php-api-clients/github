<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookTeamEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"privacy":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}},"repository":{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}},"description":"The changes to the team if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookTeamEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the team if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Description::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Description $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name $name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Privacy::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Privacy $privacy;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Repository $repository;
    public function description() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Description
    {
        return $this->description;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name
    {
        return $this->name;
    }
    public function privacy() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Privacy
    {
        return $this->privacy;
    }
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Repository
    {
        return $this->repository;
    }
}
