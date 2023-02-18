<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actions\CreateWorkflowDispatch\Request;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actions\CreateWorkflowDispatch\Request\Applicationjson\Inputs;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The git reference for the workflow. The reference can be a branch or tag name."},"inputs":{"maxProperties":10,"type":"object","description":"Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.","additionalProperties":{"type":"string"}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The git reference for the workflow. The reference can be a branch or tag name.
     */
    public ?string $ref;
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     */
    public Inputs $inputs;

    public function __construct(string $ref, Inputs $inputs)
    {
        $this->ref    = $ref;
        $this->inputs = $inputs;
    }
}
