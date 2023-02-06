<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Merge\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Merge\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Title for the automatic commit message.
     */
    public readonly string $commit_title;
    /**
     * Extra detail to append to automatic commit message.
     */
    public readonly string $commit_message;
    /**
     * SHA that pull request head must match to allow merge.
     */
    public readonly string $sha;
    /**
     * The merge method to use.
     */
    public readonly string $merge_method;
    public function __construct(string $commit_title, string $commit_message, string $sha, string $merge_method)
    {
        $this->commit_title = $commit_title;
        $this->commit_message = $commit_message;
        $this->sha = $sha;
        $this->merge_method = $merge_method;
    }
}
