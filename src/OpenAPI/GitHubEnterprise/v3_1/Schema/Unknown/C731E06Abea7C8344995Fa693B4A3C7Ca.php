<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C731E06Abea7C8344995Fa693B4A3C7Ca
{
    public const SCHEMA_JSON = '{"required":["license"],"type":"object","properties":{"license":{"type":"string","description":"The content of your _.ghl_ license file."},"password":{"type":"string","description":"You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don\'t need this parameter."},"settings":{"type":"string","description":"An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/enterprise-admin#get-settings)."}}}';
    public const SCHEMA_TITLE = 'c_731e06abea7c8344995fa693b4a3c7ca';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The content of your _.ghl_ license file.
     */
    private string $license;
    /**
     * You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don't need this parameter.
     */
    private ?string $password = null;
    /**
     * An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.1/rest/reference/enterprise-admin#get-settings).
     */
    private ?string $settings = null;
    /**
     * The content of your _.ghl_ license file.
     */
    public function license() : string
    {
        return $this->license;
    }
    /**
     * You **must** provide a password _only if_ you are uploading your license for the first time. If you previously set a password through the web interface, you don't need this parameter.
     */
    public function password() : ?string
    {
        return $this->password;
    }
    /**
     * An optional JSON string containing the installation settings. For a list of the available settings, see the [Get settings endpoint](https://docs.github.com/enterprise-server@3.1/rest/reference/enterprise-admin#get-settings).
     */
    public function settings() : ?string
    {
        return $this->settings;
    }
}
