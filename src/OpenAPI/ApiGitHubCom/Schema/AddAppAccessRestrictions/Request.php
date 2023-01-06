<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddAppAccessRestrictions;

final class Request
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["apps"],"type":"object","properties":{"apps":{"type":"array","items":{"type":"string"},"description":"The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items."}},"example":{"apps":["my-app"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'AddAppAccessRestrictions\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Apps::class)
     */
    private array $apps = array();
    /**
     * The GitHub Apps that have push access to this branch. Use the slugified version of the app name. **Note**: The list of users, apps, and teams in total is limited to 100 items.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Apps>
     */
    public function apps() : array
    {
        return $this->apps;
    }
}
