<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookTeamEdited\Changes\Repository\Permissions;

final readonly class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the team member's `admin` permission on a repository, if the action was `edited`.
     */
    public ?bool $admin;
    /**
     * The previous version of the team member's `pull` permission on a repository, if the action was `edited`.
     */
    public ?bool $pull;
    /**
     * The previous version of the team member's `push` permission on a repository, if the action was `edited`.
     */
    public ?bool $push;
    public function __construct(bool $admin, bool $pull, bool $push)
    {
        $this->admin = $admin;
        $this->pull = $pull;
        $this->push = $push;
    }
}
