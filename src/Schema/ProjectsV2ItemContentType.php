<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ProjectsV2ItemContentType
{
    public const SCHEMA_JSON = '{"title":"Projects v2 Item Content Type","enum":["Issue","PullRequest","DraftIssue"],"type":"string","description":"The type of content tracked in a project item"}';
    public const SCHEMA_TITLE = 'Projects v2 Item Content Type';
    public const SCHEMA_DESCRIPTION = 'The type of content tracked in a project item';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
