<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceWithFullRepository;

final class GitStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ahead":{"type":"integer","description":"The number of commits the local repository is ahead of the remote.","examples":[0]},"behind":{"type":"integer","description":"The number of commits the local repository is behind the remote.","examples":[0]},"has_unpushed_changes":{"type":"boolean","description":"Whether the local repository has unpushed changes."},"has_uncommitted_changes":{"type":"boolean","description":"Whether the local repository has uncommitted changes."},"ref":{"type":"string","description":"The current branch (or SHA if in detached HEAD state) of the local repository.","examples":["main"]}},"description":"Details about the codespace\'s git repository."}';
    public const SCHEMA_TITLE = 'CodespaceWithFullRepository\\GitStatus';
    public const SCHEMA_DESCRIPTION = 'Details about the codespace\'s git repository.';
    /**
     * The number of commits the local repository is ahead of the remote.
     */
    private int $ahead;
    /**
     * The number of commits the local repository is behind the remote.
     */
    private int $behind;
    /**
     * Whether the local repository has unpushed changes.
     */
    private bool $has_unpushed_changes;
    /**
     * Whether the local repository has uncommitted changes.
     */
    private bool $has_uncommitted_changes;
    /**
     * The current branch (or SHA if in detached HEAD state) of the local repository.
     */
    private string $ref;
    /**
     * The number of commits the local repository is ahead of the remote.
     */
    public function ahead() : int
    {
        return $this->ahead;
    }
    /**
     * The number of commits the local repository is behind the remote.
     */
    public function behind() : int
    {
        return $this->behind;
    }
    /**
     * Whether the local repository has unpushed changes.
     */
    public function has_unpushed_changes() : bool
    {
        return $this->has_unpushed_changes;
    }
    /**
     * Whether the local repository has uncommitted changes.
     */
    public function has_uncommitted_changes() : bool
    {
        return $this->has_uncommitted_changes;
    }
    /**
     * The current branch (or SHA if in detached HEAD state) of the local repository.
     */
    public function ref() : string
    {
        return $this->ref;
    }
}
