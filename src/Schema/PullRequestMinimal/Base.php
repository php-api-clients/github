<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PullRequestMinimal;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","sha":"generated_sha_null","repo":{"id":13,"url":"generated_url_null","name":"generated_name_null"}}';
    public function __construct(public string $ref, public string $sha, public Schema\PullRequestMinimal\Base\Repo $repo)
    {
    }
}
