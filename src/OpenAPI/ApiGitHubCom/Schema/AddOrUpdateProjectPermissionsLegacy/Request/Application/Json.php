<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateProjectPermissionsLegacy\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant to the team for this project. Default: the team\'s `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you\'ll need to set `Content-Length` to zero when calling this endpoint. For more information, see \\"[HTTP verbs](https:\\/\\/docs.github.com\\/rest\\/overview\\/resources-in-the-rest-api#http-verbs).\\""}}}';
    public const SCHEMA_TITLE = 'AddOrUpdateProjectPermissionsLegacy\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant to the team for this project. Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling this endpoint. For more information, see "[HTTP verbs](https://docs.github.com/rest/overview/resources-in-the-rest-api#http-verbs)."
     */
    public readonly string $permission;
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }
}