<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentFile;

final class Links
{
    public const SCHEMA_JSON = '{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ContentFile\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $git;
    public readonly ?string $html;
    public readonly string $self;
    public function __construct(string $git, string $html, string $self)
    {
        $this->git = $git;
        $this->html = $html;
        $this->self = $self;
    }
}
