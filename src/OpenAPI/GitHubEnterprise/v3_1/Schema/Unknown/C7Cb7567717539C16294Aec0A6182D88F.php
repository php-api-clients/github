<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C7Cb7567717539C16294Aec0A6182D88F
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","inactive","in_progress","queued","pending","success"],"type":"string","description":"The state of the status. **Note:** To use the `inactive` state, you must provide the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub."},"target_url":{"type":"string","description":"The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It\'s recommended to use the `log_url` parameter, which replaces `target_url`.","default":""},"log_url":{"type":"string","description":"The full URL of the deployment\'s output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `\\"\\"`  \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type.","default":""},"description":{"type":"string","description":"A short description of the status. The maximum description length is 140 characters.","default":""},"environment":{"enum":["production","staging","qa"],"type":"string","description":"Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`."},"environment_url":{"type":"string","description":"Sets the URL for accessing your environment. Default: `\\"\\"`  \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type.","default":""},"auto_inactive":{"type":"boolean","description":"Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status\'s deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true` \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type."}}}';
    public const SCHEMA_TITLE = 'c_7cb7567717539c16294aec0a6182d88f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of the status. **Note:** To use the `inactive` state, you must provide the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub.
     */
    private string $state;
    /**
     * The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It's recommended to use the `log_url` parameter, which replaces `target_url`.
     */
    private ?string $target_url = null;
    /**
    * The full URL of the deployment's output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `""`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    private ?string $log_url = null;
    /**
     * A short description of the status. The maximum description length is 140 characters.
     */
    private ?string $description = null;
    /**
     * Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`.
     */
    private ?string $environment = null;
    /**
    * Sets the URL for accessing your environment. Default: `""`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    private ?string $environment_url = null;
    /**
    * Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status's deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true` 
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    private ?bool $auto_inactive = null;
    /**
     * The state of the status. **Note:** To use the `inactive` state, you must provide the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It's recommended to use the `log_url` parameter, which replaces `target_url`.
     */
    public function target_url() : ?string
    {
        return $this->target_url;
    }
    /**
    * The full URL of the deployment's output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `""`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    public function log_url() : ?string
    {
        return $this->log_url;
    }
    /**
     * A short description of the status. The maximum description length is 140 characters.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`.
     */
    public function environment() : ?string
    {
        return $this->environment;
    }
    /**
    * Sets the URL for accessing your environment. Default: `""`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    public function environment_url() : ?string
    {
        return $this->environment_url;
    }
    /**
    * Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status's deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true` 
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.1/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    public function auto_inactive() : ?bool
    {
        return $this->auto_inactive;
    }
}
