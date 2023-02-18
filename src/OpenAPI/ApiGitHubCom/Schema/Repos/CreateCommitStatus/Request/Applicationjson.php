<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\CreateCommitStatus\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","pending","success"],"type":"string","description":"The state of the status."},"target_url":{"type":["string","null"],"description":"The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.  \\nFor example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:  \\n`http:\\/\\/ci.example.com\\/user\\/repo\\/build\\/sha`"},"description":{"type":["string","null"],"description":"A short description of the status."},"context":{"type":"string","description":"A string label to differentiate this status from the status of other systems. This field is case-insensitive.","default":"default"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of the status.
     */
    public ?string $state;
    /**
     * The target URL to associate with this status. This URL will be linked from the GitHub UI to allow users to easily see the source of the status.
    For example, if your continuous integration system is posting build status, you would want to provide the deep link for the build output for this specific SHA:
    `http://ci.example.com/user/repo/build/sha`
     */
    public ?string $target_url;
    /**
     * A short description of the status.
     */
    public ?string $description;
    /**
     * A string label to differentiate this status from the status of other systems. This field is case-insensitive.
     */
    public string $context;

    public function __construct(string $state, string $target_url, string $description, string $context)
    {
        $this->state       = $state;
        $this->target_url  = $target_url;
        $this->description = $description;
        $this->context     = $context;
    }
}
