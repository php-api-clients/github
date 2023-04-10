<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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
