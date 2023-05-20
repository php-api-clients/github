<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\FileCommit\Content;

final readonly class Links
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"self":"generated","git":"generated","html":"generated"}';

    public function __construct(public ?string $self, public ?string $git, public ?string $html)
    {
    }
}
