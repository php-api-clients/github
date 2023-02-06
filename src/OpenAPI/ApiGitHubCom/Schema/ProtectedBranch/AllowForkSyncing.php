<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class AllowForkSyncing
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.","additionalProperties":false}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ProtectedBranch\\AllowForkSyncing';
    public const SCHEMA_DESCRIPTION = 'Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.';
    public readonly bool $enabled;
    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
