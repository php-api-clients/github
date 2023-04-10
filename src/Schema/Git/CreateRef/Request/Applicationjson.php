<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Git\CreateRef\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"type":"string","description":"The name of the fully qualified reference (ie: `refs\\/heads\\/master`). If it doesn\'t start with \'refs\' and have at least two slashes, it will be rejected."},"sha":{"type":"string","description":"The SHA1 value for this reference."},"key":{"type":"string","examples":["\\"refs\\/heads\\/newbranch\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","sha":"generated_sha_null","key":"\\"refs\\/heads\\/newbranch\\""}';
    /**
     * ref: The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     * sha: The SHA1 value for this reference.
     */
    public function __construct(public string $ref, public string $sha, public ?string $key)
    {
    }
}
