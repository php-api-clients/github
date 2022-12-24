<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CDd66A35386D8C1Ac444Db66D9De5B3E6
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant to the team for this project. Default: the team\'s `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you\'ll need to set `Content-Length` to zero when calling this endpoint. For more information, see \\"[HTTP verbs](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/overview\\/resources-in-the-rest-api#http-verbs).\\""}}}';
    public const SCHEMA_TITLE = 'c_dd66a35386d8c1ac444db66d9de5b3e6';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant to the team for this project. Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling this endpoint. For more information, see "[HTTP verbs](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#http-verbs)."
     */
    private string $permission;
    /**
     * The permission to grant to the team for this project. Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling this endpoint. For more information, see "[HTTP verbs](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#http-verbs)."
     */
    public function permission() : string
    {
        return $this->permission;
    }
}
