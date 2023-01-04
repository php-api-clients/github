<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Permissions;

final class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}';
    public const SCHEMA_TITLE = 'Permissions\\From';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the team member's `admin` permission on a repository, if the action was `edited`.
     */
    private bool $admin;
    /**
     * The previous version of the team member's `pull` permission on a repository, if the action was `edited`.
     */
    private bool $pull;
    /**
     * The previous version of the team member's `push` permission on a repository, if the action was `edited`.
     */
    private bool $push;
    /**
     * The previous version of the team member's `admin` permission on a repository, if the action was `edited`.
     */
    public function admin() : bool
    {
        return $this->admin;
    }
    /**
     * The previous version of the team member's `pull` permission on a repository, if the action was `edited`.
     */
    public function pull() : bool
    {
        return $this->pull;
    }
    /**
     * The previous version of the team member's `push` permission on a repository, if the action was `edited`.
     */
    public function push() : bool
    {
        return $this->push;
    }
}
