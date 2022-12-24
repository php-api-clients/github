<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C9B74D0274E40516A6E86E12Ac2D2A12F
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}},"description":"Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/checks#auto_trigger_checks-object) description for details."}}}';
    public const SCHEMA_TITLE = 'c_9b74d0274e40516a6e86e12ac2d2a12f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#auto_trigger_checks-object) description for details.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C19Fc24E6Bd06706De12De44E72Db0Ce4>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C19Fc24E6Bd06706De12De44E72Db0Ce4::class)
     */
    private array $auto_trigger_checks = array();
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#auto_trigger_checks-object) description for details.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C19Fc24E6Bd06706De12De44E72Db0Ce4>
     */
    public function auto_trigger_checks() : array
    {
        return $this->auto_trigger_checks;
    }
}
