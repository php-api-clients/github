<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C5B4850D6De6D4B8Eb0952Db82A8Ce704
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","pending","success"],"type":"string","description":"The state of the status."},"target_url":{"type":["string","null"],"description":"The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  \\nFor example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  \\n`http:\\/\\/ci.example.com\\/user\\/repo\\/build\\/sha`"},"description":{"type":["string","null"],"description":"A short description of the status."},"context":{"type":"string","description":"A string label to differentiate this status from the status of other systems. This field is case-insensitive.","default":"default"}}}';
    public const SCHEMA_TITLE = 'c_5b4850d6de6d4b8eb0952db82a8ce704';
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
    private $target_url;
    /**
     * A short description of the status.
     */
    private $description;
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
    public function target_url()
    {
        return $this->target_url;
    }
    /**
     * A short description of the status.
     */
    public function description()
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
