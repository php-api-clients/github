<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddAppAccessRestrictions\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["apps"],"type":"object","properties":{"apps":{"type":"array","items":{"type":"string"},"description":"The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items."}},"example":{"apps":["my-app"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'AddAppAccessRestrictions\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Apps>
     */
    public readonly array $apps;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Apps> $apps
     */
    public function __construct(array $apps)
    {
        $this->apps = $apps;
    }
}
