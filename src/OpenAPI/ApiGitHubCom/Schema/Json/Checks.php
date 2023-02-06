<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Checks
{
    public const SCHEMA_JSON = '{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Json\\Checks';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the required check
     */
    public readonly string $context;
    /**
     * The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status.
     */
    public readonly ?int $app_id;
    public function __construct(string $context, int $app_id)
    {
        $this->context = $context;
        $this->app_id = $app_id;
    }
}
