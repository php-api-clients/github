<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C4Ac5Bd69B713Fdc2C2Cf44988Ee4256B
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The title of the pull request."},"body":{"type":"string","description":"The contents of the pull request."},"state":{"enum":["open","closed"],"type":"string","description":"State of this Pull Request. Either `open` or `closed`."},"base":{"type":"string","description":"The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."}}}';
    public const SCHEMA_TITLE = 'c_4ac5bd69b713fdc2c2cf44988ee4256b';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the pull request.
     */
    private string $title;
    /**
     * The contents of the pull request.
     */
    private string $body;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    private string $state;
    /**
     * The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     */
    private string $base;
    /**
     * Indicates whether [maintainers can modify](https://docs.github.com/github-ae@latest/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    private bool $maintainer_can_modify;
    /**
     * The title of the pull request.
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The contents of the pull request.
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     */
    public function base() : string
    {
        return $this->base;
    }
    /**
     * Indicates whether [maintainers can modify](https://docs.github.com/github-ae@latest/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    public function maintainer_can_modify() : bool
    {
        return $this->maintainer_can_modify;
    }
}
