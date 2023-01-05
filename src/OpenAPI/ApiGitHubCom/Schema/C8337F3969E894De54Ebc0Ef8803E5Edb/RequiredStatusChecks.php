<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8337F3969E894De54Ebc0Ef8803E5Edb;

final class RequiredStatusChecks
{
    public const SCHEMA_JSON = '{"required":["strict","contexts"],"type":["object","null"],"properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"**Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.\\n","deprecated":true},"checks":{"type":"array","items":{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}},"description":"The list of status checks to require in order to merge into this branch."}},"description":"Require status checks to pass before merging. Set to `null` to disable."}';
    public const SCHEMA_TITLE = 'C8337F3969E894De54Ebc0Ef8803E5Edb\\RequiredStatusChecks';
    public const SCHEMA_DESCRIPTION = 'Require status checks to pass before merging. Set to `null` to disable.';
    /**
     * Require branches to be up to date before merging.
     */
    private bool $strict;
    /**
     * **Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\Contexts::class)
     */
    private array $contexts = array();
    /**
     * The list of status checks to require in order to merge into this branch.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\Checks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\Checks::class)
     */
    private array $checks = array();
    /**
     * Require branches to be up to date before merging.
     */
    public function strict() : bool
    {
        return $this->strict;
    }
    /**
     * **Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
    /**
     * The list of status checks to require in order to merge into this branch.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredStatusChecks\Checks>
     */
    public function checks() : array
    {
        return $this->checks;
    }
}