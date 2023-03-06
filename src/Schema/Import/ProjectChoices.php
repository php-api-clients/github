<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Import;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ProjectChoices
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated_vcs","tfvc_project":"generated_tfvc_project","human_name":"generated_human_name"}';
    public function __construct(public ?string $vcs, public ?string $tfvc_project, public ?string $human_name)
    {
    }
}
