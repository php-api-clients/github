<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Hovercard;

final class Contexts
{
    public const SCHEMA_TITLE = 'hovercard::contexts';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $octicon;
    public function message() : string
    {
        return $this->message;
    }
    public function octicon() : string
    {
        return $this->octicon;
    }
}
