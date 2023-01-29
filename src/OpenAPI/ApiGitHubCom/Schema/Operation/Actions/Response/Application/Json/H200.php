<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","variables"],"type":"object","properties":{"total_count":{"type":"integer"},"variables":{"type":"array","items":{"title":"Actions Variable","required":["name","value","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable.","examples":["USERNAME"]},"value":{"type":"string","description":"The value of the variable.","examples":["octocat"]},"created_at":{"type":"string","description":"The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"updated_at":{"type":"string","description":"The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]}}}}}}';
    public const SCHEMA_TITLE = 'Operation\\Actions\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable>
     */
    public readonly array $variables;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsVariable> $variables
     */
    public function __construct(int $total_count, array $variables)
    {
        $this->total_count = $total_count;
        $this->variables = $variables;
    }
}
