<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Permissions;

final class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Permissions\\From';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the team member's `admin` permission on a repository, if the action was `edited`.
     */
    public readonly bool $admin;
    /**
     * The previous version of the team member's `pull` permission on a repository, if the action was `edited`.
     */
    public readonly bool $pull;
    /**
     * The previous version of the team member's `push` permission on a repository, if the action was `edited`.
     */
    public readonly bool $push;
    public function __construct(bool $admin, bool $pull, bool $push)
    {
        $this->admin = $admin;
        $this->pull = $pull;
        $this->push = $push;
    }
}
