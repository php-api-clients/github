<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ProtectedBranch;

final readonly class AllowForkSyncing
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.","additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false}';

    public function __construct(public ?bool $enabled)
    {
    }
}
