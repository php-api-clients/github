<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"metadata":"generated_metadata_null","contents":"generated_contents_null","issues":"generated_issues_null","singleFile":"generated_single_file_null"}';
    public function __construct(public ?string $metadata, public ?string $contents, public ?string $issues, #[\EventSauce\ObjectHydrator\MapFrom('single_file')] public ?string $singleFile)
    {
    }
}
