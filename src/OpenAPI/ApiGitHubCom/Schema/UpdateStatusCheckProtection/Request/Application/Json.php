<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateStatusCheckProtection\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"**Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.\\n","deprecated":true},"checks":{"type":"array","items":{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}},"description":"The list of status checks to require in order to merge into this branch."}}}';
    public const SCHEMA_TITLE = 'UpdateStatusCheckProtection\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Require branches to be up to date before merging.
     */
    public readonly bool $strict;
    /**
     * **Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts>
     */
    public readonly array $contexts;
    /**
     * The list of status checks to require in order to merge into this branch.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Checks>
     */
    public readonly array $checks;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Contexts> $contexts
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Checks> $checks
     */
    public function __construct(bool $strict, array $contexts, array $checks)
    {
        $this->strict = $strict;
        $this->contexts = $contexts;
        $this->checks = $checks;
    }
}
