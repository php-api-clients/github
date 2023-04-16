<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Permissions
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"metadata":"generated_metadata_null","contents":"generated_contents_null","issues":"generated_issues_null","single_file":"generated_single_file_null"}';

    public function __construct(public ?string $metadata, public ?string $contents, public ?string $issues, #[MapFrom('single_file')] public ?string $singleFile)
    {
    }
}
