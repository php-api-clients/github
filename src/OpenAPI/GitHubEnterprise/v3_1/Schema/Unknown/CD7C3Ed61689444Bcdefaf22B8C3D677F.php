<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CD7C3Ed61689444Bcdefaf22B8C3D677F
{
    public const SCHEMA_JSON = '{"required":["head","base"],"type":"object","properties":{"title":{"type":"string","description":"The title of the new pull request."},"head":{"type":"string","description":"The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`."},"base":{"type":"string","description":"The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository."},"body":{"type":"string","description":"The contents of the pull request."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."},"draft":{"type":"boolean","description":"Indicates whether the pull request is a draft. See \\"[Draft Pull Requests](https:\\/\\/docs.github.com\\/en\\/articles\\/about-pull-requests#draft-pull-requests)\\" in the GitHub Help documentation to learn more."},"issue":{"type":"integer","examples":[1]}}}';
    public const SCHEMA_TITLE = 'c_d7c3ed61689444bcdefaf22b8c3d677f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the new pull request.
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
     * Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    private ?bool $maintainer_can_modify = null;
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/en/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     */
    private ?bool $draft = null;
    private ?int $issue = null;
    /**
     * The title of the new pull request.
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
     * Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    public function maintainer_can_modify() : ?bool
    {
        return $this->maintainer_can_modify;
    }
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/en/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     */
    public function draft() : ?bool
    {
        return $this->draft;
    }
    public function issue() : ?int
    {
        return $this->issue;
    }
}