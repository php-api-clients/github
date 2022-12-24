<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C5B6Cab08F2E973200Ec82Cb5742D9Dd4
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}}}';
    public const SCHEMA_TITLE = 'c_5b6cab08f2e973200ec82cb5742d9dd4';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Title for the automatic commit message.
     */
    private string $commit_title;
    /**
     * Extra detail to append to automatic commit message.
     */
    private string $commit_message;
    /**
     * SHA that pull request head must match to allow merge.
     */
    private string $sha;
    /**
     * The merge method to use.
     */
    private string $merge_method;
    /**
     * Title for the automatic commit message.
     */
    public function commit_title() : string
    {
        return $this->commit_title;
    }
    /**
     * Extra detail to append to automatic commit message.
     */
    public function commit_message() : string
    {
        return $this->commit_message;
    }
    /**
     * SHA that pull request head must match to allow merge.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * The merge method to use.
     */
    public function merge_method() : string
    {
        return $this->merge_method;
    }
}
