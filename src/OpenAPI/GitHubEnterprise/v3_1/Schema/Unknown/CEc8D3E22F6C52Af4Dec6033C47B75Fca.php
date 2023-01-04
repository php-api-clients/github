<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CEc8D3E22F6C52Af4Dec6033C47B75Fca
{
    public const SCHEMA_JSON = '{"required":["required_status_checks","enforce_admins","required_pull_request_reviews","restrictions"],"type":"object","properties":{"required_status_checks":{"required":["strict","contexts"],"type":["object","null"],"properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"**Deprecated**: The list of status checks to require in order to merge into this branch. If any of these checks have recently been set by a particular GitHub App, they will be required to come from that app in future for the branch to merge. Use `checks` instead of `contexts` for more fine-grained control.\\n","deprecated":true},"checks":{"type":"array","items":{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}},"description":"The list of status checks to require in order to merge into this branch."}},"description":"Require status checks to pass before merging. Set to `null` to disable."},"enforce_admins":{"type":["boolean","null"],"description":"Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable."},"required_pull_request_reviews":{"type":["object","null"],"properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/articles\\/about-code-owners\\/) review them."},"required_approving_review_count":{"type":"integer","description":"Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6."}},"description":"Require at least one approving review on a pull request, before merging. Set to `null` to disable."},"restrictions":{"required":["users","teams"],"type":["object","null"],"properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with push access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with push access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with push access"}},"description":"Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."},"required_linear_history":{"type":"boolean","description":"Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see \\"[Requiring a linear commit history](https:\\/\\/docs.github.com\\/github\\/administering-a-repository\\/requiring-a-linear-commit-history)\\" in the GitHub Help documentation."},"allow_force_pushes":{"type":["boolean","null"],"description":"Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see \\"[Enabling force pushes to a protected branch](https:\\/\\/docs.github.com\\/en\\/github\\/administering-a-repository\\/enabling-force-pushes-to-a-protected-branch)\\" in the GitHub Help documentation.\\""},"allow_deletions":{"type":"boolean","description":"Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see \\"[Enabling force pushes to a protected branch](https:\\/\\/docs.github.com\\/en\\/github\\/administering-a-repository\\/enabling-force-pushes-to-a-protected-branch)\\" in the GitHub Help documentation."},"block_creations":{"type":"boolean","description":"If set to `true`, the `restrictions` branch protection settings which limits who can push will also block pushes which create new branches, unless the push is initiated by a user, team, or app which has the ability to push. Set to `true` to restrict new branch creation. Default: `false`."},"required_conversation_resolution":{"type":"boolean","description":"Requires all conversations on code to be resolved before a pull request can be merged into a branch that matches this rule. Set to `false` to disable. Default: `false`."},"contexts":{"type":"array","items":{"type":"string"},"description":"The list of status checks to require in order to merge into this branch."}}}';
    public const SCHEMA_TITLE = 'c_ec8d3e22f6c52af4dec6033c47b75fca';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Require status checks to pass before merging. Set to `null` to disable.
     */
    private $required_status_checks;
    /**
     * Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable.
     */
    private $enforce_admins;
    /**
     * Require at least one approving review on a pull request, before merging. Set to `null` to disable.
     */
    private $required_pull_request_reviews;
    /**
     * Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.
     */
    private $restrictions;
    /**
     * Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see "[Requiring a linear commit history](https://docs.github.com/github/administering-a-repository/requiring-a-linear-commit-history)" in the GitHub Help documentation.
     */
    private ?bool $required_linear_history = null;
    /**
     * Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://docs.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation."
     */
    private $allow_force_pushes;
    /**
     * Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://docs.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation.
     */
    private ?bool $allow_deletions = null;
    /**
     * If set to `true`, the `restrictions` branch protection settings which limits who can push will also block pushes which create new branches, unless the push is initiated by a user, team, or app which has the ability to push. Set to `true` to restrict new branch creation. Default: `false`.
     */
    private ?bool $block_creations = null;
    /**
     * Requires all conversations on code to be resolved before a pull request can be merged into a branch that matches this rule. Set to `false` to disable. Default: `false`.
     */
    private ?bool $required_conversation_resolution = null;
    /**
     * The list of status checks to require in order to merge into this branch.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CEc8D3E22F6C52Af4Dec6033C47B75Fca\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CEc8D3E22F6C52Af4Dec6033C47B75Fca\Contexts::class)
     */
    private array $contexts = array();
    /**
     * Require status checks to pass before merging. Set to `null` to disable.
     */
    public function required_status_checks()
    {
        return $this->required_status_checks;
    }
    /**
     * Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable.
     */
    public function enforce_admins()
    {
        return $this->enforce_admins;
    }
    /**
     * Require at least one approving review on a pull request, before merging. Set to `null` to disable.
     */
    public function required_pull_request_reviews()
    {
        return $this->required_pull_request_reviews;
    }
    /**
     * Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.
     */
    public function restrictions()
    {
        return $this->restrictions;
    }
    /**
     * Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see "[Requiring a linear commit history](https://docs.github.com/github/administering-a-repository/requiring-a-linear-commit-history)" in the GitHub Help documentation.
     */
    public function required_linear_history() : ?bool
    {
        return $this->required_linear_history;
    }
    /**
     * Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://docs.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation."
     */
    public function allow_force_pushes()
    {
        return $this->allow_force_pushes;
    }
    /**
     * Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://docs.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation.
     */
    public function allow_deletions() : ?bool
    {
        return $this->allow_deletions;
    }
    /**
     * If set to `true`, the `restrictions` branch protection settings which limits who can push will also block pushes which create new branches, unless the push is initiated by a user, team, or app which has the ability to push. Set to `true` to restrict new branch creation. Default: `false`.
     */
    public function block_creations() : ?bool
    {
        return $this->block_creations;
    }
    /**
     * Requires all conversations on code to be resolved before a pull request can be merged into a branch that matches this rule. Set to `false` to disable. Default: `false`.
     */
    public function required_conversation_resolution() : ?bool
    {
        return $this->required_conversation_resolution;
    }
    /**
     * The list of status checks to require in order to merge into this branch.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CEc8D3E22F6C52Af4Dec6033C47B75Fca\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
