<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\FileCommit\Content;

final readonly class Links
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $self;
    public ?string $git;
    public ?string $html;
    public function __construct(string $self, string $git, string $html)
    {
        $this->self = $self;
        $this->git = $git;
        $this->html = $html;
    }
}
