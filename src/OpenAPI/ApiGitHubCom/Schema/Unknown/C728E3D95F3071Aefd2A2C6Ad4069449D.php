<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C728E3D95F3071Aefd2A2C6Ad4069449D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing."}';
    public const SCHEMA_TITLE = 'c_728e3d95f3071aefd2a2c6ad4069449d';
    public const SCHEMA_DESCRIPTION = 'Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
