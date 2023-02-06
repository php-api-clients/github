<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Lock\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"lock_reason":{"enum":["off-topic","too heated","resolved","spam"],"type":"string","description":"The reason for locking the issue or pull request conversation. Lock will fail if you don\'t use one of these reasons:  \\n * `off-topic`  \\n * `too heated`  \\n * `resolved`  \\n * `spam`"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Lock\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:  
     * `off-topic`  
     * `too heated`  
     * `resolved`  
     * `spam`
     */
    public readonly string $lock_reason;
    public function __construct(string $lock_reason)
    {
        $this->lock_reason = $lock_reason;
    }
}
