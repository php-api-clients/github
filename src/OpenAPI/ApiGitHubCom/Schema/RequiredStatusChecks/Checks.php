<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks;

final class Checks
{
    public const SCHEMA_JSON = '{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}}';
    public const SCHEMA_TITLE = 'RequiredStatusChecks\\Checks';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the required check
     */
    private string $context;
    /**
     * The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status.
     */
    private ?int $app_id = null;
    /**
     * The name of the required check
     */
    public function context() : string
    {
        return $this->context;
    }
    /**
     * The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status.
     */
    public function app_id() : ?int
    {
        return $this->app_id;
    }
}
