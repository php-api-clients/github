<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CD0Fc5Fd63F9Dee734914937D27Ef924D
{
    public const SCHEMA_JSON = '{"required":["maintenance"],"type":"object","properties":{"maintenance":{"type":"string","description":"A JSON string with the attributes `enabled` and `when`.\\n\\nThe possible values for `enabled` are `true` and `false`. When it\'s `false`, the attribute `when` is ignored and the maintenance mode is turned off. `when` defines the time period when the maintenance was enabled.\\n\\nThe possible values for `when` are `now` or any date parseable by [mojombo\\/chronic](https:\\/\\/github.com\\/mojombo\\/chronic)."}}}';
    public const SCHEMA_TITLE = 'c_d0fc5fd63f9dee734914937d27ef924d';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * A JSON string with the attributes `enabled` and `when`.
    
    The possible values for `enabled` are `true` and `false`. When it's `false`, the attribute `when` is ignored and the maintenance mode is turned off. `when` defines the time period when the maintenance was enabled.
    
    The possible values for `when` are `now` or any date parseable by [mojombo/chronic](https://github.com/mojombo/chronic).
    */
    private string $maintenance;
    /**
    * A JSON string with the attributes `enabled` and `when`.
    
    The possible values for `enabled` are `true` and `false`. When it's `false`, the attribute `when` is ignored and the maintenance mode is turned off. `when` defines the time period when the maintenance was enabled.
    
    The possible values for `when` are `now` or any date parseable by [mojombo/chronic](https://github.com/mojombo/chronic).
    */
    public function maintenance() : string
    {
        return $this->maintenance;
    }
}
