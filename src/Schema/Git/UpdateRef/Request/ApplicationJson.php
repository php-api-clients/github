<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Git\UpdateRef\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["sha"],"type":"object","properties":{"sha":{"type":"string","description":"The SHA1 value to set this reference to"},"force":{"type":"boolean","description":"Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you\'re not overwriting work.","default":false}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated","force":false}';

    /**
     * sha: The SHA1 value to set this reference to
     * force: Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     */
    public function __construct(public string $sha, public ?bool $force)
    {
    }
}
