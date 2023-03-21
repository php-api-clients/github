<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit\Content;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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
