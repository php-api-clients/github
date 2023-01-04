<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C27483Ffb46246283985A378C8F0Eb254
{
    public const SCHEMA_JSON = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The git reference for the workflow. The reference can be a branch or tag name."},"inputs":{"maxProperties":10,"type":"object","description":"Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.","additionalProperties":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'c_27483ffb46246283985a378c8f0eb254';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The git reference for the workflow. The reference can be a branch or tag name.
     */
    private string $ref;
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C27483Ffb46246283985A378C8F0Eb254\Inputs::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C27483Ffb46246283985A378C8F0Eb254\Inputs $inputs = null;
    /**
     * The git reference for the workflow. The reference can be a branch or tag name.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     */
    public function inputs() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C27483Ffb46246283985A378C8F0Eb254\Inputs
    {
        return $this->inputs;
    }
}
