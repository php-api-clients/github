<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Import;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProjectChoices
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated_vcs_null","tfvc_project":"generated_tfvc_project_null","human_name":"generated_human_name_null"}';

    public function __construct(public ?string $vcs, #[MapFrom('tfvc_project')] public ?string $tfvcProject, #[MapFrom('human_name')] public ?string $humanName)
    {
    }
}
