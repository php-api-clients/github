<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateWorkflowDispatch\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The git reference for the workflow. The reference can be a branch or tag name."},"inputs":{"maxProperties":10,"type":"object","description":"Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.","additionalProperties":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'CreateWorkflowDispatch\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The git reference for the workflow. The reference can be a branch or tag name.
     */
    public readonly string $ref;
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Inputs $inputs;
    public function __construct(string $ref, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Inputs $inputs)
    {
        $this->ref = $ref;
        $this->inputs = $inputs;
    }
}
