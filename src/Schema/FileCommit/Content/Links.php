<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\FileCommit\Content;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":"generated_self_null","git":"generated_git_null","html":"generated_html_null"}';
    public function __construct(public ?string $self, public ?string $git, public ?string $html)
    {
    }
}
