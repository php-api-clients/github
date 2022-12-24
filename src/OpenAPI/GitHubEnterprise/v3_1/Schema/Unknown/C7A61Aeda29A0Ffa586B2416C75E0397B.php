<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C7A61Aeda29A0Ffa586B2416C75E0397B
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`."}}}';
    public const SCHEMA_TITLE = 'c_7a61aeda29a0ffa586b2416c75e0397b';
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
     * Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
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
     * Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
     */
    public function merge_method() : string
    {
        return $this->merge_method;
    }
}
