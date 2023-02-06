<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceWithFullRepository;

final class GitStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ahead":{"type":"integer","description":"The number of commits the local repository is ahead of the remote.","examples":[0]},"behind":{"type":"integer","description":"The number of commits the local repository is behind the remote.","examples":[0]},"has_unpushed_changes":{"type":"boolean","description":"Whether the local repository has unpushed changes."},"has_uncommitted_changes":{"type":"boolean","description":"Whether the local repository has uncommitted changes."},"ref":{"type":"string","description":"The current branch (or SHA if in detached HEAD state) of the local repository.","examples":["main"]}},"description":"Details about the codespace\'s git repository."}';
    public const SCHEMA_EXAMPLE = '{"ahead":0,"behind":0,"ref":"main"}';
    public const SCHEMA_TITLE = 'CodespaceWithFullRepository\\GitStatus';
    public const SCHEMA_DESCRIPTION = 'Details about the codespace\'s git repository.';
    /**
     * The number of commits the local repository is ahead of the remote.
     */
    public readonly int $ahead;
    /**
     * The number of commits the local repository is behind the remote.
     */
    public readonly int $behind;
    /**
     * Whether the local repository has unpushed changes.
     */
    public readonly bool $has_unpushed_changes;
    /**
     * Whether the local repository has uncommitted changes.
     */
    public readonly bool $has_uncommitted_changes;
    /**
     * The current branch (or SHA if in detached HEAD state) of the local repository.
     */
    public readonly string $ref;
    public function __construct(int $ahead, int $behind, bool $has_unpushed_changes, bool $has_uncommitted_changes, string $ref)
    {
        $this->ahead = $ahead;
        $this->behind = $behind;
        $this->has_unpushed_changes = $has_unpushed_changes;
        $this->has_uncommitted_changes = $has_uncommitted_changes;
        $this->ref = $ref;
    }
}
