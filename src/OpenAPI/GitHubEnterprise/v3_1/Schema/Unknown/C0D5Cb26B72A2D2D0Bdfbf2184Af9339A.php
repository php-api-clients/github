<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C0D5Cb26B72A2D2D0Bdfbf2184Af9339A
{
    public const SCHEMA_JSON = '{"required":["settings"],"type":"object","properties":{"settings":{"type":"string","description":"A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/enterprise-admin#get-settings)."}}}';
    public const SCHEMA_TITLE = 'c_0d5cb26b72a2d2d0bdfbf2184af9339a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.1/rest/reference/enterprise-admin#get-settings).
     */
    private string $settings;
    /**
     * A JSON string with the new settings. Note that you only need to pass the specific settings you want to modify. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.1/rest/reference/enterprise-admin#get-settings).
     */
    public function settings() : string
    {
        return $this->settings;
    }
}
