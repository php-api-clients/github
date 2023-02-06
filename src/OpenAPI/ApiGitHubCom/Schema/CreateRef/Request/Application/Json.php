<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateRef\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"type":"string","description":"The name of the fully qualified reference (ie: `refs\\/heads\\/master`). If it doesn\'t start with \'refs\' and have at least two slashes, it will be rejected."},"sha":{"type":"string","description":"The SHA1 value for this reference."},"key":{"type":"string","examples":["\\"refs\\/heads\\/newbranch\\""]}}}';
    public const SCHEMA_EXAMPLE = '{"key":"\\"refs\\/heads\\/newbranch\\""}';
    public const SCHEMA_TITLE = 'CreateRef\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     */
    public readonly string $ref;
    /**
     * The SHA1 value for this reference.
     */
    public readonly string $sha;
    public readonly ?string $key;
    public function __construct(string $ref, string $sha, string $key)
    {
        $this->ref = $ref;
        $this->sha = $sha;
        $this->key = $key;
    }
}
