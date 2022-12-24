<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CD13Fec331A242E019D09743C5C7638F0
{
    public const SCHEMA_JSON = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The ref to deploy. This can be a branch, tag, or SHA."},"task":{"type":"string","description":"Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).","default":"deploy"},"auto_merge":{"type":"boolean","description":"Attempts to automatically merge the default branch into the requested ref, if it\'s behind the default branch.","default":true},"required_contexts":{"type":"array","items":{"type":"string"},"description":"The [status](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/commits\\/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts."},"payload":{"oneOf":[{"type":"object","additionalProperties":true},{"type":"string","description":"JSON payload with extra information about the deployment.","default":""}]},"environment":{"type":"string","description":"Name for the target deployment environment (e.g., `production`, `staging`, `qa`).","default":"production"},"description":{"type":["string","null"],"description":"Short description of the deployment.","default":""},"transient_environment":{"type":"boolean","description":"Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`  \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type.","default":false},"production_environment":{"type":"boolean","description":"Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.  \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type."}}}';
    public const SCHEMA_TITLE = 'c_d13fec331a242e019d09743c5c7638f0';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The ref to deploy. This can be a branch, tag, or SHA.
     */
    private string $ref;
    /**
     * Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     */
    private ?string $task = null;
    /**
     * Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     */
    private ?bool $auto_merge = null;
    /**
     * The [status](https://docs.github.com/enterprise-server@3.1/rest/commits/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $required_contexts = array();
    private $payload;
    /**
     * Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     */
    private ?string $environment = null;
    /**
     * Short description of the deployment.
     */
    private $description;
    /**
    * Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    private ?bool $transient_environment = null;
    /**
    * Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    private ?bool $production_environment = null;
    /**
     * The ref to deploy. This can be a branch, tag, or SHA.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     */
    public function task() : ?string
    {
        return $this->task;
    }
    /**
     * Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     */
    public function auto_merge() : ?bool
    {
        return $this->auto_merge;
    }
    /**
     * The [status](https://docs.github.com/enterprise-server@3.1/rest/commits/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function required_contexts() : array
    {
        return $this->required_contexts;
    }
    public function payload()
    {
        return $this->payload;
    }
    /**
     * Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     */
    public function environment() : ?string
    {
        return $this->environment;
    }
    /**
     * Short description of the deployment.
     */
    public function description()
    {
        return $this->description;
    }
    /**
    * Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    public function transient_environment() : ?bool
    {
        return $this->transient_environment;
    }
    /**
    * Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    public function production_environment() : ?bool
    {
        return $this->production_environment;
    }
}
