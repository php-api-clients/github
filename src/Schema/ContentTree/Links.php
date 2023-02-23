<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ContentTree;

final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $git;
    public ?string $html;
    public ?string $self;
    public function __construct(string $git, string $html, string $self)
    {
        $this->git = $git;
        $this->html = $html;
        $this->self = $self;
    }
}
