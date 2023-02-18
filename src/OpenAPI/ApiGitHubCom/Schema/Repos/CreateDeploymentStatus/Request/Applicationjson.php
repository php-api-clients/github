<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\CreateDeploymentStatus\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","inactive","in_progress","queued","pending","success"],"type":"string","description":"The state of the status. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub."},"target_url":{"type":"string","description":"The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It\'s recommended to use the `log_url` parameter, which replaces `target_url`.","default":""},"log_url":{"type":"string","description":"The full URL of the deployment\'s output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `\\"\\"`","default":""},"description":{"type":"string","description":"A short description of the status. The maximum description length is 140 characters.","default":""},"environment":{"enum":["production","staging","qa"],"type":"string","description":"Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`."},"environment_url":{"type":"string","description":"Sets the URL for accessing your environment. Default: `\\"\\"`","default":""},"auto_inactive":{"type":"boolean","description":"Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status\'s deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true`"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of the status. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub.
     */
    public ?string $state;
    /**
     * The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It's recommended to use the `log_url` parameter, which replaces `target_url`.
     */
    public string $target_url;
    /**
     * The full URL of the deployment's output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `""`
     */
    public string $log_url;
    /**
     * A short description of the status. The maximum description length is 140 characters.
     */
    public string $description;
    /**
     * Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`.
     */
    public string $environment;
    /**
     * Sets the URL for accessing your environment. Default: `""`
     */
    public string $environment_url;
    /**
     * Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status's deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true`
     */
    public bool $auto_inactive;

    public function __construct(string $state, string $target_url, string $log_url, string $description, string $environment, string $environment_url, bool $auto_inactive)
    {
        $this->state           = $state;
        $this->target_url      = $target_url;
        $this->log_url         = $log_url;
        $this->description     = $description;
        $this->environment     = $environment;
        $this->environment_url = $environment_url;
        $this->auto_inactive   = $auto_inactive;
    }
}
