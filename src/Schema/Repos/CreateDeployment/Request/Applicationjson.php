<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateDeployment\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The ref to deploy. This can be a branch, tag, or SHA."},"task":{"type":"string","description":"Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).","default":"deploy"},"auto_merge":{"type":"boolean","description":"Attempts to automatically merge the default branch into the requested ref, if it\'s behind the default branch.","default":true},"required_contexts":{"type":"array","items":{"type":"string"},"description":"The [status](https:\\/\\/docs.github.com\\/rest\\/commits\\/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts."},"payload":{"oneOf":[{"type":"object","additionalProperties":true},{"type":"string","description":"JSON payload with extra information about the deployment.","default":""}]},"environment":{"type":"string","description":"Name for the target deployment environment (e.g., `production`, `staging`, `qa`).","default":"production"},"description":{"type":["string","null"],"description":"Short description of the deployment.","default":""},"transient_environment":{"type":"boolean","description":"Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`","default":false},"production_environment":{"type":"boolean","description":"Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The ref to deploy. This can be a branch, tag, or SHA.
     */
    public ?string $ref;
    /**
     * Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     */
    public string $task;
    /**
     * Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     */
    public bool $auto_merge;
    /**
     * The [status](https://docs.github.com/rest/commits/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     */
    public array $required_contexts;
    public mixed $payload;
    /**
     * Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     */
    public string $environment;
    /**
     * Short description of the deployment.
     */
    public ?string $description;
    /**
     * Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`
     */
    public bool $transient_environment;
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.
     */
    public bool $production_environment;
    public function __construct(string $ref, string $task, bool $auto_merge, array $required_contexts, mixed $payload, string $environment, string $description, bool $transient_environment, bool $production_environment)
    {
        $this->ref = $ref;
        $this->task = $task;
        $this->auto_merge = $auto_merge;
        $this->required_contexts = $required_contexts;
        $this->payload = $payload;
        $this->environment = $environment;
        $this->description = $description;
        $this->transient_environment = $transient_environment;
        $this->production_environment = $production_environment;
    }
}
