<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Pulls\Create\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["head","base"],"type":"object","properties":{"title":{"type":"string","description":"The title of the new pull request. Required unless `issue` is specified."},"head":{"type":"string","description":"The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`."},"head_repo":{"type":"string","description":"The name of the repository where the changes in the pull request were made. This field is required for cross-repository pull requests if both repositories are owned by the same organization.","format":"repo.nwo","examples":["octo-org\\/octo-repo"]},"base":{"type":"string","description":"The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository."},"body":{"type":"string","description":"The contents of the pull request."},"maintainer_can_modify":{"type":"boolean","description":"Indicates whether [maintainers can modify](https:\\/\\/docs.github.com\\/articles\\/allowing-changes-to-a-pull-request-branch-created-from-a-fork\\/) the pull request."},"draft":{"type":"boolean","description":"Indicates whether the pull request is a draft. See \\"[Draft Pull Requests](https:\\/\\/docs.github.com\\/articles\\/about-pull-requests#draft-pull-requests)\\" in the GitHub Help documentation to learn more."},"issue":{"type":"integer","description":"An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.","examples":[1]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","head":"generated_head","head_repo":"octo-org\\/octo-repo","base":"generated_base","body":"generated_body","maintainer_can_modify":false,"draft":false,"issue":1}';
    /**
     * title: The title of the new pull request. Required unless `issue` is specified.
     * head: The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     * head_repo: The name of the repository where the changes in the pull request were made. This field is required for cross-repository pull requests if both repositories are owned by the same organization.
     * base: The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     * body: The contents of the pull request.
     * maintainer_can_modify: Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     * draft: Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     * issue: An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
     */
    public function __construct(public ?string $title, public string $head, public ?string $head_repo, public string $base, public ?string $body, public ?bool $maintainer_can_modify, public ?bool $draft, public ?int $issue)
    {
    }
}
