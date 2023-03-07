<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class IssueEventProjectCard
{
    public const SCHEMA_JSON = '{"title":"Issue Event Project Card","required":["url","id","project_url","project_id","column_name"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}},"description":"Issue Event Project Card"}';
    public const SCHEMA_TITLE = 'Issue Event Project Card';
    public const SCHEMA_DESCRIPTION = 'Issue Event Project Card';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","id":13,"project_url":"generated_project_url","project_id":13,"column_name":"generated_column_name","previous_column_name":"generated_previous_column_name"}';
    public function __construct(public ?string $url, public ?int $id, public ?string $project_url, public ?int $project_id, public ?string $column_name, public string $previous_column_name)
    {
    }
}
