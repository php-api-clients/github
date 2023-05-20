<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant to the team for this project. Default: the team\'s `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you\'ll need to set `Content-Length` to zero when calling this endpoint. For more information, see \\"[HTTP verbs](https:\\/\\/docs.github.com\\/rest\\/overview\\/resources-in-the-rest-api#http-verbs).\\""}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"admin"}';

    /**
     * permission: The permission to grant to the team for this project. Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling this endpoint. For more information, see "[HTTP verbs](https://docs.github.com/rest/overview/resources-in-the-rest-api#http-verbs)."
     */
    public function __construct(public ?string $permission)
    {
    }
}
