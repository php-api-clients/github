<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateRef\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"type":"string","description":"The name of the fully qualified reference (ie: `refs\\/heads\\/master`). If it doesn\'t start with \'refs\' and have at least two slashes, it will be rejected."},"sha":{"type":"string","description":"The SHA1 value for this reference."},"key":{"type":"string","examples":["\\"refs\\/heads\\/newbranch\\""]}}}';
    public const SCHEMA_TITLE = 'CreateRef\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     */
    private string $ref;
    /**
     * The SHA1 value for this reference.
     */
    private string $sha;
    private ?string $key = null;
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * The SHA1 value for this reference.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    public function key() : ?string
    {
        return $this->key;
    }
}
