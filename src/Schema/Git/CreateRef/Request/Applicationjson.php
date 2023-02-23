<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Git\CreateRef\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"type":"string","description":"The name of the fully qualified reference (ie: `refs\\/heads\\/master`). If it doesn\'t start with \'refs\' and have at least two slashes, it will be rejected."},"sha":{"type":"string","description":"The SHA1 value for this reference."},"key":{"type":"string","examples":["\\"refs\\/heads\\/newbranch\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     */
    public ?string $ref;
    /**
     * The SHA1 value for this reference.
     */
    public ?string $sha;
    public string $key;
    public function __construct(string $ref, string $sha, string $key)
    {
        $this->ref = $ref;
        $this->sha = $sha;
        $this->key = $key;
    }
}
