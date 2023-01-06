<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListBranchesForHeadCommit\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Branch Short","required":["name","commit","protected"],"type":"object","properties":{"name":{"type":"string"},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}},"protected":{"type":"boolean"}},"description":"Branch Short"}}';
    public const SCHEMA_TITLE = 'ListBranchesForHeadCommit\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
