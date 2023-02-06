<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectsV2ItemContentType
{
    public const SCHEMA_JSON = '{"title":"Projects v2 Item Content Type","enum":["Issue","PullRequest","DraftIssue"],"type":"string","description":"The type of content tracked in a project item"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Projects v2 Item Content Type';
    public const SCHEMA_DESCRIPTION = 'The type of content tracked in a project item';
    public function __construct()
    {
    }
}
