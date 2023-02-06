<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Create\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["head","base"],"type":"object","properties":{"title":{"type":"string","description":"The title of the new pull request. Required unless `issue` is specified."},"head":{"type":"string","description":"The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`."},"base":{"type":"string","description":"The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository."},"body":{"type":"string","description":"The contents of the pull request."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."},"draft":{"type":"boolean","description":"Indicates whether the pull request is a draft. See \\"[Draft Pull Requests](https:\\/\\/docs.github.com\\/articles\\/about-pull-requests#draft-pull-requests)\\" in the GitHub Help documentation to learn more."},"issue":{"type":"integer","description":"An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.","examples":[1]}}}';
    public const SCHEMA_EXAMPLE = '{"issue":1}';
    public const SCHEMA_TITLE = 'Create\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the new pull request. Required unless `issue` is specified.
     */
    public readonly ?string $title;
    /**
     * The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     */
    public readonly string $head;
    /**
     * The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     */
    public readonly string $base;
    /**
     * The contents of the pull request.
     */
    public readonly ?string $body;
    /**
     * Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     */
    public readonly ?bool $maintainer_can_modify;
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     */
    public readonly ?bool $draft;
    /**
     * An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
     */
    public readonly ?int $issue;
    public function __construct(string $title, string $head, string $base, string $body, bool $maintainer_can_modify, bool $draft, int $issue)
    {
        $this->title = $title;
        $this->head = $head;
        $this->base = $base;
        $this->body = $body;
        $this->maintainer_can_modify = $maintainer_can_modify;
        $this->draft = $draft;
        $this->issue = $issue;
    }
}
