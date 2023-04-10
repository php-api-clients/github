<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Import;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ProjectChoices
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated_vcs_null","tfvc_project":"generated_tfvc_project_null","human_name":"generated_human_name_null"}';
    public function __construct(public ?string $vcs, #[\EventSauce\ObjectHydrator\MapFrom('tfvc_project')] public ?string $tfvcProject, #[\EventSauce\ObjectHydrator\MapFrom('human_name')] public ?string $humanName)
    {
    }
}
