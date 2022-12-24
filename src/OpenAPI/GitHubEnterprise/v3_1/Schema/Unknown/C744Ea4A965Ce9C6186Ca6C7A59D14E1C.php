<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C744Ea4A965Ce9C6186Ca6C7A59D14E1C
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","pending","success"],"type":"string","description":"The state of the status."},"target_url":{"type":"string","description":"The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  \\nFor example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  \\n`http:\\/\\/ci.example.com\\/user\\/repo\\/build\\/sha`"},"description":{"type":"string","description":"A short description of the status."},"context":{"type":"string","description":"A string label to differentiate this status from the status of other systems. This field is case-insensitive.","default":"default"}}}';
    public const SCHEMA_TITLE = 'c_744ea4a965ce9c6186ca6c7a59d14e1c';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of the status.
     */
    private string $state;
    /**
    * The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  
    `http://ci.example.com/user/repo/build/sha`
    */
    private ?string $target_url = null;
    /**
     * A short description of the status.
     */
    private ?string $description = null;
    /**
     * A string label to differentiate this status from the status of other systems. This field is case-insensitive.
     */
    private ?string $context = null;
    /**
     * The state of the status.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
    * The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  
    `http://ci.example.com/user/repo/build/sha`
    */
    public function target_url() : ?string
    {
        return $this->target_url;
    }
    /**
     * A short description of the status.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * A string label to differentiate this status from the status of other systems. This field is case-insensitive.
     */
    public function context() : ?string
    {
        return $this->context;
    }
}
