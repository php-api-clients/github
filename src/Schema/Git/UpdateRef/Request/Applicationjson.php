<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Git\UpdateRef\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["sha"],"type":"object","properties":{"sha":{"type":"string","description":"The SHA1 value to set this reference to"},"force":{"type":"boolean","description":"Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you\'re not overwriting work.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","force":false}';
    /**
     * sha: The SHA1 value to set this reference to
     * force: Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     */
    public function __construct(public string $sha, public ?bool $force)
    {
    }
}
