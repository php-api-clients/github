<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Apps\DeleteAuthorization\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The OAuth access token used to authenticate to the GitHub API."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     */
    public ?string $access_token;
    public function __construct(string $access_token)
    {
        $this->access_token = $access_token;
    }
}
