<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetRestrictionsForOrg\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"anyOf":[{"title":"Interaction Limits","required":["limit","origin","expires_at"],"type":"object","properties":{"limit":{"enum":["existing_users","contributors_only","collaborators_only"],"type":"string","description":"The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.","examples":["collaborators_only"]},"origin":{"type":"string","examples":["repository"]},"expires_at":{"type":"string","format":"date-time","examples":["2018-08-17T04:18:39Z"]}},"description":"Interaction limit settings."},{"type":"object","properties":{},"additionalProperties":false}]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Operation\\GetRestrictionsForOrg\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public function __construct()
    {
    }
}
