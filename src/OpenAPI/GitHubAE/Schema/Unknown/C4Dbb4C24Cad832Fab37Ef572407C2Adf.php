<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C4Dbb4C24Cad832Fab37Ef572407C2Adf
{
    public const SCHEMA_JSON = '{"required":["head","base"],"type":"object","properties":{"title":{"type":"string","description":"The title of the new pull request. Required unless `issue` is specified."},"head":{"type":"string","description":"The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`."},"base":{"type":"string","description":"The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository."},"body":{"type":"string","description":"The contents of the pull request."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."},"draft":{"type":"boolean","description":"Indicates whether the pull request is a draft. See \\"[Draft Pull Requests](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/about-pull-requests#draft-pull-requests)\\" in the GitHub Help documentation to learn more."},"issue":{"type":"integer","description":"An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.","examples":[1]}}}';
    public const SCHEMA_TITLE = 'c_4dbb4c24cad832fab37ef572407c2adf';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the new pull request. Required unless `issue` is specified.
     */
    private ?string $title = null;
    /**
     * The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     */
    private string $head;
    /**
     * The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     */
    private string $base;
    /**
     * The contents of the pull request.
     */
    private ?string $body = null;
    /**
     * Indicates whether [maintainers can modify](https://docs.github.com/github-ae@latest/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    private ?bool $maintainer_can_modify = null;
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/github-ae@latest/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     */
    private ?bool $draft = null;
    /**
     * An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
     */
    private ?int $issue = null;
    /**
     * The title of the new pull request. Required unless `issue` is specified.
     */
    public function title() : ?string
    {
        return $this->title;
    }
    /**
     * The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     */
    public function head() : string
    {
        return $this->head;
    }
    /**
     * The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     */
    public function base() : string
    {
        return $this->base;
    }
    /**
     * The contents of the pull request.
     */
    public function body() : ?string
    {
        return $this->body;
    }
    /**
     * Indicates whether [maintainers can modify](https://docs.github.com/github-ae@latest/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    public function maintainer_can_modify() : ?bool
    {
        return $this->maintainer_can_modify;
    }
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/github-ae@latest/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     */
    public function draft() : ?bool
    {
        return $this->draft;
    }
    /**
     * An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
     */
    public function issue() : ?int
    {
        return $this->issue;
    }
}
