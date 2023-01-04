<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C5Fa969Ed5E0Bffd430Dd02371A4871B0
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["apps"],"type":"object","properties":{"apps":{"type":"array","items":{"type":"string"},"description":"apps parameter"}},"example":{"apps":["my-app"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'c_5fa969ed5e0bffd430dd02371a4871b0';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * apps parameter
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C5Fa969Ed5E0Bffd430Dd02371A4871B0\Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C5Fa969Ed5E0Bffd430Dd02371A4871B0\Apps::class)
     */
    private array $apps = array();
    /**
     * apps parameter
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C5Fa969Ed5E0Bffd430Dd02371A4871B0\Apps>
     */
    public function apps() : array
    {
        return $this->apps;
    }
}
