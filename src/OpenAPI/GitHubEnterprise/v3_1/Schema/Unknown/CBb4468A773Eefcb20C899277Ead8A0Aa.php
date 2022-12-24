<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CBb4468A773Eefcb20C899277Ead8A0Aa
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"lock_reason":{"enum":["off-topic","too heated","resolved","spam"],"type":"string","description":"The reason for locking the issue or pull request conversation. Lock will fail if you don\'t use one of these reasons:  \\n\\\\* `off-topic`  \\n\\\\* `too heated`  \\n\\\\* `resolved`  \\n\\\\* `spam`"}}}';
    public const SCHEMA_TITLE = 'c_bb4468a773eefcb20c899277ead8a0aa';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:  
    \* `off-topic`  
    \* `too heated`  
    \* `resolved`  
    \* `spam`
    */
    private string $lock_reason;
    /**
    * The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:  
    \* `off-topic`  
    \* `too heated`  
    \* `resolved`  
    \* `spam`
    */
    public function lock_reason() : string
    {
        return $this->lock_reason;
    }
}
