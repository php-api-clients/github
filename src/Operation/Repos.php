<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Repos
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listForOrg(string $org, string $direction, string $type, string $sort, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForOrg::class] = new Operator\Repos\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->operator[Operator\Repos\ListForOrg::class]->call($org, $direction, $type, $sort, $perPage, $page);
    }

    public function listForOrgListing(string $org, string $direction, string $type, string $sort, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListForOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForOrgListing::class] = new Operator\Repos\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->operator[Operator\Repos\ListForOrgListing::class]->call($org, $direction, $type, $sort, $perPage, $page);
    }

    public function createInOrg(string $org, array $params): Schema\Repository
    {
        if (array_key_exists(Operator\Repos\CreateInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateInOrg::class] = new Operator\Repos\CreateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->operator[Operator\Repos\CreateInOrg::class]->call($org, $params);
    }

    public function getOrgRulesets(string $org, int $perPage, int $page): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\GetOrgRulesets::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetOrgRulesets::class] = new Operator\Repos\GetOrgRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->operator[Operator\Repos\GetOrgRulesets::class]->call($org, $perPage, $page);
    }

    public function getOrgRulesetsListing(string $org, int $perPage, int $page): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\GetOrgRulesetsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetOrgRulesetsListing::class] = new Operator\Repos\GetOrgRulesetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->operator[Operator\Repos\GetOrgRulesetsListing::class]->call($org, $perPage, $page);
    }

    public function createOrgRuleset(string $org, array $params): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\CreateOrgRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateOrgRuleset::class] = new Operator\Repos\CreateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->operator[Operator\Repos\CreateOrgRuleset::class]->call($org, $params);
    }

    public function getOrgRuleset(string $org, int $rulesetId): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\GetOrgRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetOrgRuleset::class] = new Operator\Repos\GetOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->operator[Operator\Repos\GetOrgRuleset::class]->call($org, $rulesetId);
    }

    public function updateOrgRuleset(string $org, int $rulesetId, array $params): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\UpdateOrgRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateOrgRuleset::class] = new Operator\Repos\UpdateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->operator[Operator\Repos\UpdateOrgRuleset::class]->call($org, $rulesetId, $params);
    }

    public function deleteOrgRuleset(string $org, int $rulesetId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteOrgRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteOrgRuleset::class] = new Operator\Repos\DeleteOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->operator[Operator\Repos\DeleteOrgRuleset::class]->call($org, $rulesetId);
    }

    public function get(string $owner, string $repo): Schema\FullRepository|Schema\BasicError
    {
        if (array_key_exists(Operator\Repos\Get::class, $this->operator) === false) {
            $this->operator[Operator\Repos\Get::class] = new Operator\Repos\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Repos\Get::class]->call($owner, $repo);
    }

    public function delete(string $owner, string $repo): Schema\BasicError
    {
        if (array_key_exists(Operator\Repos\Delete::class, $this->operator) === false) {
            $this->operator[Operator\Repos\Delete::class] = new Operator\Repos\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Repos\Delete::class]->call($owner, $repo);
    }

    public function update(string $owner, string $repo, array $params): Schema\FullRepository|Schema\BasicError
    {
        if (array_key_exists(Operator\Repos\Update::class, $this->operator) === false) {
            $this->operator[Operator\Repos\Update::class] = new Operator\Repos\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Repos\Update::class]->call($owner, $repo, $params);
    }

    public function listActivities(string $owner, string $repo, string $before, string $after, string $ref, string $actor, string $timePeriod, string $activityType, string $direction, int $perPage): Schema\Activity
    {
        if (array_key_exists(Operator\Repos\ListActivities::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListActivities::class] = new Operator\Repos\ListActivities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Activity());
        }

        return $this->operator[Operator\Repos\ListActivities::class]->call($owner, $repo, $before, $after, $ref, $actor, $timePeriod, $activityType, $direction, $perPage);
    }

    public function listAutolinks(string $owner, string $repo, int $page): Schema\Autolink
    {
        if (array_key_exists(Operator\Repos\ListAutolinks::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListAutolinks::class] = new Operator\Repos\ListAutolinks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->operator[Operator\Repos\ListAutolinks::class]->call($owner, $repo, $page);
    }

    public function createAutolink(string $owner, string $repo, array $params): Schema\Autolink
    {
        if (array_key_exists(Operator\Repos\CreateAutolink::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateAutolink::class] = new Operator\Repos\CreateAutolink($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->operator[Operator\Repos\CreateAutolink::class]->call($owner, $repo, $params);
    }

    public function getAutolink(string $owner, string $repo, int $autolinkId): Schema\Autolink
    {
        if (array_key_exists(Operator\Repos\GetAutolink::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAutolink::class] = new Operator\Repos\GetAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->operator[Operator\Repos\GetAutolink::class]->call($owner, $repo, $autolinkId);
    }

    public function deleteAutolink(string $owner, string $repo, int $autolinkId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteAutolink::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteAutolink::class] = new Operator\Repos\DeleteAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->operator[Operator\Repos\DeleteAutolink::class]->call($owner, $repo, $autolinkId);
    }

    public function checkAutomatedSecurityFixes(string $owner, string $repo): Schema\CheckAutomatedSecurityFixes
    {
        if (array_key_exists(Operator\Repos\CheckAutomatedSecurityFixes::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CheckAutomatedSecurityFixes::class] = new Operator\Repos\CheckAutomatedSecurityFixes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes());
        }

        return $this->operator[Operator\Repos\CheckAutomatedSecurityFixes::class]->call($owner, $repo);
    }

    public function enableAutomatedSecurityFixes(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\EnableAutomatedSecurityFixes::class, $this->operator) === false) {
            $this->operator[Operator\Repos\EnableAutomatedSecurityFixes::class] = new Operator\Repos\EnableAutomatedSecurityFixes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes());
        }

        return $this->operator[Operator\Repos\EnableAutomatedSecurityFixes::class]->call($owner, $repo);
    }

    public function disableAutomatedSecurityFixes(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DisableAutomatedSecurityFixes::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DisableAutomatedSecurityFixes::class] = new Operator\Repos\DisableAutomatedSecurityFixes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes());
        }

        return $this->operator[Operator\Repos\DisableAutomatedSecurityFixes::class]->call($owner, $repo);
    }

    public function listBranches(string $owner, string $repo, bool $protected, int $perPage, int $page): Schema\ShortBranch
    {
        if (array_key_exists(Operator\Repos\ListBranches::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListBranches::class] = new Operator\Repos\ListBranches($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->operator[Operator\Repos\ListBranches::class]->call($owner, $repo, $protected, $perPage, $page);
    }

    public function listBranchesListing(string $owner, string $repo, bool $protected, int $perPage, int $page): Schema\ShortBranch
    {
        if (array_key_exists(Operator\Repos\ListBranchesListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListBranchesListing::class] = new Operator\Repos\ListBranchesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->operator[Operator\Repos\ListBranchesListing::class]->call($owner, $repo, $protected, $perPage, $page);
    }

    public function getBranch(string $owner, string $repo, string $branch): Schema\BranchWithProtection|Schema\BasicError
    {
        if (array_key_exists(Operator\Repos\GetBranch::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetBranch::class] = new Operator\Repos\GetBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch());
        }

        return $this->operator[Operator\Repos\GetBranch::class]->call($owner, $repo, $branch);
    }

    public function getBranchProtection(string $owner, string $repo, string $branch): Schema\BranchProtection
    {
        if (array_key_exists(Operator\Repos\GetBranchProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetBranchProtection::class] = new Operator\Repos\GetBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->operator[Operator\Repos\GetBranchProtection::class]->call($owner, $repo, $branch);
    }

    public function updateBranchProtection(string $owner, string $repo, string $branch, array $params): Schema\ProtectedBranch
    {
        if (array_key_exists(Operator\Repos\UpdateBranchProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateBranchProtection::class] = new Operator\Repos\UpdateBranchProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->operator[Operator\Repos\UpdateBranchProtection::class]->call($owner, $repo, $branch, $params);
    }

    public function deleteBranchProtection(string $owner, string $repo, string $branch): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteBranchProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteBranchProtection::class] = new Operator\Repos\DeleteBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->operator[Operator\Repos\DeleteBranchProtection::class]->call($owner, $repo, $branch);
    }

    public function getAdminBranchProtection(string $owner, string $repo, string $branch): Schema\ProtectedBranchAdminEnforced
    {
        if (array_key_exists(Operator\Repos\GetAdminBranchProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAdminBranchProtection::class] = new Operator\Repos\GetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->operator[Operator\Repos\GetAdminBranchProtection::class]->call($owner, $repo, $branch);
    }

    public function setAdminBranchProtection(string $owner, string $repo, string $branch): Schema\ProtectedBranchAdminEnforced
    {
        if (array_key_exists(Operator\Repos\SetAdminBranchProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\SetAdminBranchProtection::class] = new Operator\Repos\SetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->operator[Operator\Repos\SetAdminBranchProtection::class]->call($owner, $repo, $branch);
    }

    public function deleteAdminBranchProtection(string $owner, string $repo, string $branch): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteAdminBranchProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteAdminBranchProtection::class] = new Operator\Repos\DeleteAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->operator[Operator\Repos\DeleteAdminBranchProtection::class]->call($owner, $repo, $branch);
    }

    public function getPullRequestReviewProtection(string $owner, string $repo, string $branch): Schema\ProtectedBranchPullRequestReview
    {
        if (array_key_exists(Operator\Repos\GetPullRequestReviewProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetPullRequestReviewProtection::class] = new Operator\Repos\GetPullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->operator[Operator\Repos\GetPullRequestReviewProtection::class]->call($owner, $repo, $branch);
    }

    public function deletePullRequestReviewProtection(string $owner, string $repo, string $branch): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeletePullRequestReviewProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeletePullRequestReviewProtection::class] = new Operator\Repos\DeletePullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->operator[Operator\Repos\DeletePullRequestReviewProtection::class]->call($owner, $repo, $branch);
    }

    public function updatePullRequestReviewProtection(string $owner, string $repo, string $branch, array $params): Schema\ProtectedBranchPullRequestReview
    {
        if (array_key_exists(Operator\Repos\UpdatePullRequestReviewProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdatePullRequestReviewProtection::class] = new Operator\Repos\UpdatePullRequestReviewProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->operator[Operator\Repos\UpdatePullRequestReviewProtection::class]->call($owner, $repo, $branch, $params);
    }

    public function getCommitSignatureProtection(string $owner, string $repo, string $branch): Schema\ProtectedBranchAdminEnforced
    {
        if (array_key_exists(Operator\Repos\GetCommitSignatureProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCommitSignatureProtection::class] = new Operator\Repos\GetCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->operator[Operator\Repos\GetCommitSignatureProtection::class]->call($owner, $repo, $branch);
    }

    public function createCommitSignatureProtection(string $owner, string $repo, string $branch): Schema\ProtectedBranchAdminEnforced
    {
        if (array_key_exists(Operator\Repos\CreateCommitSignatureProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateCommitSignatureProtection::class] = new Operator\Repos\CreateCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->operator[Operator\Repos\CreateCommitSignatureProtection::class]->call($owner, $repo, $branch);
    }

    public function deleteCommitSignatureProtection(string $owner, string $repo, string $branch): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteCommitSignatureProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteCommitSignatureProtection::class] = new Operator\Repos\DeleteCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->operator[Operator\Repos\DeleteCommitSignatureProtection::class]->call($owner, $repo, $branch);
    }

    public function getStatusChecksProtection(string $owner, string $repo, string $branch): Schema\StatusCheckPolicy
    {
        if (array_key_exists(Operator\Repos\GetStatusChecksProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetStatusChecksProtection::class] = new Operator\Repos\GetStatusChecksProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->operator[Operator\Repos\GetStatusChecksProtection::class]->call($owner, $repo, $branch);
    }

    public function removeStatusCheckProtection(string $owner, string $repo, string $branch): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\RemoveStatusCheckProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RemoveStatusCheckProtection::class] = new Operator\Repos\RemoveStatusCheckProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->operator[Operator\Repos\RemoveStatusCheckProtection::class]->call($owner, $repo, $branch);
    }

    public function updateStatusCheckProtection(string $owner, string $repo, string $branch, array $params): Schema\StatusCheckPolicy
    {
        if (array_key_exists(Operator\Repos\UpdateStatusCheckProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateStatusCheckProtection::class] = new Operator\Repos\UpdateStatusCheckProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->operator[Operator\Repos\UpdateStatusCheckProtection::class]->call($owner, $repo, $branch, $params);
    }

    public function getAllStatusCheckContexts(string $owner, string $repo, string $branch): Schema\Operations\Repos\GetAllStatusCheckContexts\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\GetAllStatusCheckContexts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAllStatusCheckContexts::class] = new Operator\Repos\GetAllStatusCheckContexts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->operator[Operator\Repos\GetAllStatusCheckContexts::class]->call($owner, $repo, $branch);
    }

    public function setStatusCheckContexts(string $owner, string $repo, string $branch, array $params): Schema\Operations\Repos\SetStatusCheckContexts\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\SetStatusCheckContexts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\SetStatusCheckContexts::class] = new Operator\Repos\SetStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->operator[Operator\Repos\SetStatusCheckContexts::class]->call($owner, $repo, $branch, $params);
    }

    public function addStatusCheckContexts(string $owner, string $repo, string $branch, array $params): Schema\Operations\Repos\AddStatusCheckContexts\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\AddStatusCheckContexts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\AddStatusCheckContexts::class] = new Operator\Repos\AddStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->operator[Operator\Repos\AddStatusCheckContexts::class]->call($owner, $repo, $branch, $params);
    }

    public function removeStatusCheckContexts(string $owner, string $repo, string $branch, array $params): Schema\Operations\Repos\RemoveStatusCheckContexts\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\RemoveStatusCheckContexts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RemoveStatusCheckContexts::class] = new Operator\Repos\RemoveStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->operator[Operator\Repos\RemoveStatusCheckContexts::class]->call($owner, $repo, $branch, $params);
    }

    public function getAccessRestrictions(string $owner, string $repo, string $branch): Schema\BranchRestrictionPolicy
    {
        if (array_key_exists(Operator\Repos\GetAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAccessRestrictions::class] = new Operator\Repos\GetAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions());
        }

        return $this->operator[Operator\Repos\GetAccessRestrictions::class]->call($owner, $repo, $branch);
    }

    public function deleteAccessRestrictions(string $owner, string $repo, string $branch): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteAccessRestrictions::class] = new Operator\Repos\DeleteAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions());
        }

        return $this->operator[Operator\Repos\DeleteAccessRestrictions::class]->call($owner, $repo, $branch);
    }

    public function getAppsWithAccessToProtectedBranch(string $owner, string $repo, string $branch): Schema\Integration
    {
        if (array_key_exists(Operator\Repos\GetAppsWithAccessToProtectedBranch::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAppsWithAccessToProtectedBranch::class] = new Operator\Repos\GetAppsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->operator[Operator\Repos\GetAppsWithAccessToProtectedBranch::class]->call($owner, $repo, $branch);
    }

    public function setAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\Integration
    {
        if (array_key_exists(Operator\Repos\SetAppAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\SetAppAccessRestrictions::class] = new Operator\Repos\SetAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->operator[Operator\Repos\SetAppAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function addAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\Integration
    {
        if (array_key_exists(Operator\Repos\AddAppAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\AddAppAccessRestrictions::class] = new Operator\Repos\AddAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->operator[Operator\Repos\AddAppAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function removeAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\Integration
    {
        if (array_key_exists(Operator\Repos\RemoveAppAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RemoveAppAccessRestrictions::class] = new Operator\Repos\RemoveAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->operator[Operator\Repos\RemoveAppAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function getTeamsWithAccessToProtectedBranch(string $owner, string $repo, string $branch): Schema\Team
    {
        if (array_key_exists(Operator\Repos\GetTeamsWithAccessToProtectedBranch::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetTeamsWithAccessToProtectedBranch::class] = new Operator\Repos\GetTeamsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->operator[Operator\Repos\GetTeamsWithAccessToProtectedBranch::class]->call($owner, $repo, $branch);
    }

    public function setTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\Team
    {
        if (array_key_exists(Operator\Repos\SetTeamAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\SetTeamAccessRestrictions::class] = new Operator\Repos\SetTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->operator[Operator\Repos\SetTeamAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function addTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\Team
    {
        if (array_key_exists(Operator\Repos\AddTeamAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\AddTeamAccessRestrictions::class] = new Operator\Repos\AddTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->operator[Operator\Repos\AddTeamAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function removeTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\Team
    {
        if (array_key_exists(Operator\Repos\RemoveTeamAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RemoveTeamAccessRestrictions::class] = new Operator\Repos\RemoveTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->operator[Operator\Repos\RemoveTeamAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function getUsersWithAccessToProtectedBranch(string $owner, string $repo, string $branch): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Repos\GetUsersWithAccessToProtectedBranch::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetUsersWithAccessToProtectedBranch::class] = new Operator\Repos\GetUsersWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->operator[Operator\Repos\GetUsersWithAccessToProtectedBranch::class]->call($owner, $repo, $branch);
    }

    public function setUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Repos\SetUserAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\SetUserAccessRestrictions::class] = new Operator\Repos\SetUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->operator[Operator\Repos\SetUserAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function addUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Repos\AddUserAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\AddUserAccessRestrictions::class] = new Operator\Repos\AddUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->operator[Operator\Repos\AddUserAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function removeUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Repos\RemoveUserAccessRestrictions::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RemoveUserAccessRestrictions::class] = new Operator\Repos\RemoveUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->operator[Operator\Repos\RemoveUserAccessRestrictions::class]->call($owner, $repo, $branch, $params);
    }

    public function renameBranch(string $owner, string $repo, string $branch, array $params): Schema\BranchWithProtection
    {
        if (array_key_exists(Operator\Repos\RenameBranch::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RenameBranch::class] = new Operator\Repos\RenameBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename());
        }

        return $this->operator[Operator\Repos\RenameBranch::class]->call($owner, $repo, $branch, $params);
    }

    public function codeownersErrors(string $owner, string $repo, string $ref): Schema\CodeownersErrors
    {
        if (array_key_exists(Operator\Repos\CodeownersErrors::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CodeownersErrors::class] = new Operator\Repos\CodeownersErrors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors());
        }

        return $this->operator[Operator\Repos\CodeownersErrors::class]->call($owner, $repo, $ref);
    }

    public function listCollaborators(string $owner, string $repo, string $permission, string $affiliation, int $perPage, int $page): Schema\Collaborator
    {
        if (array_key_exists(Operator\Repos\ListCollaborators::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCollaborators::class] = new Operator\Repos\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->operator[Operator\Repos\ListCollaborators::class]->call($owner, $repo, $permission, $affiliation, $perPage, $page);
    }

    public function listCollaboratorsListing(string $owner, string $repo, string $permission, string $affiliation, int $perPage, int $page): Schema\Collaborator
    {
        if (array_key_exists(Operator\Repos\ListCollaboratorsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCollaboratorsListing::class] = new Operator\Repos\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->operator[Operator\Repos\ListCollaboratorsListing::class]->call($owner, $repo, $permission, $affiliation, $perPage, $page);
    }

    public function checkCollaborator(string $owner, string $repo, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\CheckCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CheckCollaborator::class] = new Operator\Repos\CheckCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->operator[Operator\Repos\CheckCollaborator::class]->call($owner, $repo, $username);
    }

    public function addCollaborator(string $owner, string $repo, string $username, array $params): Schema\RepositoryInvitation
    {
        if (array_key_exists(Operator\Repos\AddCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Repos\AddCollaborator::class] = new Operator\Repos\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->operator[Operator\Repos\AddCollaborator::class]->call($owner, $repo, $username, $params);
    }

    public function removeCollaborator(string $owner, string $repo, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\RemoveCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RemoveCollaborator::class] = new Operator\Repos\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->operator[Operator\Repos\RemoveCollaborator::class]->call($owner, $repo, $username);
    }

    public function getCollaboratorPermissionLevel(string $owner, string $repo, string $username): Schema\RepositoryCollaboratorPermission
    {
        if (array_key_exists(Operator\Repos\GetCollaboratorPermissionLevel::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCollaboratorPermissionLevel::class] = new Operator\Repos\GetCollaboratorPermissionLevel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission());
        }

        return $this->operator[Operator\Repos\GetCollaboratorPermissionLevel::class]->call($owner, $repo, $username);
    }

    public function listCommitCommentsForRepo(string $owner, string $repo, int $perPage, int $page): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\ListCommitCommentsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommitCommentsForRepo::class] = new Operator\Repos\ListCommitCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->operator[Operator\Repos\ListCommitCommentsForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function listCommitCommentsForRepoListing(string $owner, string $repo, int $perPage, int $page): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\ListCommitCommentsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommitCommentsForRepoListing::class] = new Operator\Repos\ListCommitCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->operator[Operator\Repos\ListCommitCommentsForRepoListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function getCommitComment(string $owner, string $repo, int $commentId): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\GetCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCommitComment::class] = new Operator\Repos\GetCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Repos\GetCommitComment::class]->call($owner, $repo, $commentId);
    }

    public function deleteCommitComment(string $owner, string $repo, int $commentId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteCommitComment::class] = new Operator\Repos\DeleteCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Repos\DeleteCommitComment::class]->call($owner, $repo, $commentId);
    }

    public function updateCommitComment(string $owner, string $repo, int $commentId, array $params): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\UpdateCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateCommitComment::class] = new Operator\Repos\UpdateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Repos\UpdateCommitComment::class]->call($owner, $repo, $commentId, $params);
    }

    public function listCommits(string $owner, string $repo, string $sha, string $path, string $author, string $committer, string $since, string $until, int $perPage, int $page): Schema\Commit
    {
        if (array_key_exists(Operator\Repos\ListCommits::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommits::class] = new Operator\Repos\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->operator[Operator\Repos\ListCommits::class]->call($owner, $repo, $sha, $path, $author, $committer, $since, $until, $perPage, $page);
    }

    public function listCommitsListing(string $owner, string $repo, string $sha, string $path, string $author, string $committer, string $since, string $until, int $perPage, int $page): Schema\Commit
    {
        if (array_key_exists(Operator\Repos\ListCommitsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommitsListing::class] = new Operator\Repos\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->operator[Operator\Repos\ListCommitsListing::class]->call($owner, $repo, $sha, $path, $author, $committer, $since, $until, $perPage, $page);
    }

    public function listBranchesForHeadCommit(string $owner, string $repo, string $commitSha): Schema\BranchShort
    {
        if (array_key_exists(Operator\Repos\ListBranchesForHeadCommit::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListBranchesForHeadCommit::class] = new Operator\Repos\ListBranchesForHeadCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead());
        }

        return $this->operator[Operator\Repos\ListBranchesForHeadCommit::class]->call($owner, $repo, $commitSha);
    }

    public function listCommentsForCommit(string $owner, string $repo, string $commitSha, int $perPage, int $page): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\ListCommentsForCommit::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommentsForCommit::class] = new Operator\Repos\ListCommentsForCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->operator[Operator\Repos\ListCommentsForCommit::class]->call($owner, $repo, $commitSha, $perPage, $page);
    }

    public function listCommentsForCommitListing(string $owner, string $repo, string $commitSha, int $perPage, int $page): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\ListCommentsForCommitListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommentsForCommitListing::class] = new Operator\Repos\ListCommentsForCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->operator[Operator\Repos\ListCommentsForCommitListing::class]->call($owner, $repo, $commitSha, $perPage, $page);
    }

    public function createCommitComment(string $owner, string $repo, string $commitSha, array $params): Schema\CommitComment
    {
        if (array_key_exists(Operator\Repos\CreateCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateCommitComment::class] = new Operator\Repos\CreateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->operator[Operator\Repos\CreateCommitComment::class]->call($owner, $repo, $commitSha, $params);
    }

    public function listPullRequestsAssociatedWithCommit(string $owner, string $repo, string $commitSha, int $perPage, int $page): Schema\PullRequestSimple
    {
        if (array_key_exists(Operator\Repos\ListPullRequestsAssociatedWithCommit::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListPullRequestsAssociatedWithCommit::class] = new Operator\Repos\ListPullRequestsAssociatedWithCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->operator[Operator\Repos\ListPullRequestsAssociatedWithCommit::class]->call($owner, $repo, $commitSha, $perPage, $page);
    }

    public function listPullRequestsAssociatedWithCommitListing(string $owner, string $repo, string $commitSha, int $perPage, int $page): Schema\PullRequestSimple
    {
        if (array_key_exists(Operator\Repos\ListPullRequestsAssociatedWithCommitListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListPullRequestsAssociatedWithCommitListing::class] = new Operator\Repos\ListPullRequestsAssociatedWithCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->operator[Operator\Repos\ListPullRequestsAssociatedWithCommitListing::class]->call($owner, $repo, $commitSha, $perPage, $page);
    }

    public function getCommit(string $owner, string $repo, string $ref, int $page, int $perPage): Schema\Commit
    {
        if (array_key_exists(Operator\Repos\GetCommit::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCommit::class] = new Operator\Repos\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref());
        }

        return $this->operator[Operator\Repos\GetCommit::class]->call($owner, $repo, $ref, $page, $perPage);
    }

    public function getCombinedStatusForRef(string $owner, string $repo, string $ref, int $perPage, int $page): Schema\CombinedCommitStatus
    {
        if (array_key_exists(Operator\Repos\GetCombinedStatusForRef::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCombinedStatusForRef::class] = new Operator\Repos\GetCombinedStatusForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status());
        }

        return $this->operator[Operator\Repos\GetCombinedStatusForRef::class]->call($owner, $repo, $ref, $perPage, $page);
    }

    public function listCommitStatusesForRef(string $owner, string $repo, string $ref, int $perPage, int $page): Schema\Status|Schema\BasicError
    {
        if (array_key_exists(Operator\Repos\ListCommitStatusesForRef::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommitStatusesForRef::class] = new Operator\Repos\ListCommitStatusesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->operator[Operator\Repos\ListCommitStatusesForRef::class]->call($owner, $repo, $ref, $perPage, $page);
    }

    public function listCommitStatusesForRefListing(string $owner, string $repo, string $ref, int $perPage, int $page): Schema\Status|Schema\BasicError
    {
        if (array_key_exists(Operator\Repos\ListCommitStatusesForRefListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCommitStatusesForRefListing::class] = new Operator\Repos\ListCommitStatusesForRefListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->operator[Operator\Repos\ListCommitStatusesForRefListing::class]->call($owner, $repo, $ref, $perPage, $page);
    }

    public function getCommunityProfileMetrics(string $owner, string $repo): Schema\CommunityProfile
    {
        if (array_key_exists(Operator\Repos\GetCommunityProfileMetrics::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCommunityProfileMetrics::class] = new Operator\Repos\GetCommunityProfileMetrics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile());
        }

        return $this->operator[Operator\Repos\GetCommunityProfileMetrics::class]->call($owner, $repo);
    }

    public function compareCommits(string $owner, string $repo, string $basehead, int $page, int $perPage): Schema\CommitComparison
    {
        if (array_key_exists(Operator\Repos\CompareCommits::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CompareCommits::class] = new Operator\Repos\CompareCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead());
        }

        return $this->operator[Operator\Repos\CompareCommits::class]->call($owner, $repo, $basehead, $page, $perPage);
    }

    public function getContent(string $owner, string $repo, string $path, string $ref): Schema\ContentTree|Schema\Operations\Repos\GetContent\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\GetContent::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetContent::class] = new Operator\Repos\GetContent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->operator[Operator\Repos\GetContent::class]->call($owner, $repo, $path, $ref);
    }

    public function createOrUpdateFileContents(string $owner, string $repo, string $path, array $params): Schema\FileCommit
    {
        if (array_key_exists(Operator\Repos\CreateOrUpdateFileContents::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateOrUpdateFileContents::class] = new Operator\Repos\CreateOrUpdateFileContents($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->operator[Operator\Repos\CreateOrUpdateFileContents::class]->call($owner, $repo, $path, $params);
    }

    public function deleteFile(string $owner, string $repo, string $path, array $params): Schema\FileCommit
    {
        if (array_key_exists(Operator\Repos\DeleteFile::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteFile::class] = new Operator\Repos\DeleteFile($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->operator[Operator\Repos\DeleteFile::class]->call($owner, $repo, $path, $params);
    }

    public function listContributors(string $owner, string $repo, string $anon, int $perPage, int $page): Schema\Contributor
    {
        if (array_key_exists(Operator\Repos\ListContributors::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListContributors::class] = new Operator\Repos\ListContributors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->operator[Operator\Repos\ListContributors::class]->call($owner, $repo, $anon, $perPage, $page);
    }

    public function listContributorsListing(string $owner, string $repo, string $anon, int $perPage, int $page): Schema\Contributor
    {
        if (array_key_exists(Operator\Repos\ListContributorsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListContributorsListing::class] = new Operator\Repos\ListContributorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->operator[Operator\Repos\ListContributorsListing::class]->call($owner, $repo, $anon, $perPage, $page);
    }

    public function listDeployments(string $owner, string $repo, string $sha, string $ref, string $task, string|null $environment, int $perPage, int $page): Schema\Deployment
    {
        if (array_key_exists(Operator\Repos\ListDeployments::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeployments::class] = new Operator\Repos\ListDeployments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->operator[Operator\Repos\ListDeployments::class]->call($owner, $repo, $sha, $ref, $task, $environment, $perPage, $page);
    }

    public function listDeploymentsListing(string $owner, string $repo, string $sha, string $ref, string $task, string|null $environment, int $perPage, int $page): Schema\Deployment
    {
        if (array_key_exists(Operator\Repos\ListDeploymentsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeploymentsListing::class] = new Operator\Repos\ListDeploymentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->operator[Operator\Repos\ListDeploymentsListing::class]->call($owner, $repo, $sha, $ref, $task, $environment, $perPage, $page);
    }

    public function createDeployment(string $owner, string $repo, array $params): Schema\Deployment|Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Repos\CreateDeployment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateDeployment::class] = new Operator\Repos\CreateDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->operator[Operator\Repos\CreateDeployment::class]->call($owner, $repo, $params);
    }

    public function getDeployment(string $owner, string $repo, int $deploymentId): Schema\Deployment
    {
        if (array_key_exists(Operator\Repos\GetDeployment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetDeployment::class] = new Operator\Repos\GetDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->operator[Operator\Repos\GetDeployment::class]->call($owner, $repo, $deploymentId);
    }

    public function deleteDeployment(string $owner, string $repo, int $deploymentId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteDeployment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteDeployment::class] = new Operator\Repos\DeleteDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->operator[Operator\Repos\DeleteDeployment::class]->call($owner, $repo, $deploymentId);
    }

    public function listDeploymentStatuses(string $owner, string $repo, int $deploymentId, int $perPage, int $page): Schema\DeploymentStatus
    {
        if (array_key_exists(Operator\Repos\ListDeploymentStatuses::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeploymentStatuses::class] = new Operator\Repos\ListDeploymentStatuses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->operator[Operator\Repos\ListDeploymentStatuses::class]->call($owner, $repo, $deploymentId, $perPage, $page);
    }

    public function listDeploymentStatusesListing(string $owner, string $repo, int $deploymentId, int $perPage, int $page): Schema\DeploymentStatus
    {
        if (array_key_exists(Operator\Repos\ListDeploymentStatusesListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeploymentStatusesListing::class] = new Operator\Repos\ListDeploymentStatusesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->operator[Operator\Repos\ListDeploymentStatusesListing::class]->call($owner, $repo, $deploymentId, $perPage, $page);
    }

    public function createDeploymentStatus(string $owner, string $repo, int $deploymentId, array $params): Schema\DeploymentStatus
    {
        if (array_key_exists(Operator\Repos\CreateDeploymentStatus::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateDeploymentStatus::class] = new Operator\Repos\CreateDeploymentStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->operator[Operator\Repos\CreateDeploymentStatus::class]->call($owner, $repo, $deploymentId, $params);
    }

    public function getDeploymentStatus(string $owner, string $repo, int $deploymentId, int $statusId): Schema\DeploymentStatus
    {
        if (array_key_exists(Operator\Repos\GetDeploymentStatus::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetDeploymentStatus::class] = new Operator\Repos\GetDeploymentStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId());
        }

        return $this->operator[Operator\Repos\GetDeploymentStatus::class]->call($owner, $repo, $deploymentId, $statusId);
    }

    public function createDispatchEvent(string $owner, string $repo, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\CreateDispatchEvent::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateDispatchEvent::class] = new Operator\Repos\CreateDispatchEvent($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches());
        }

        return $this->operator[Operator\Repos\CreateDispatchEvent::class]->call($owner, $repo, $params);
    }

    public function getAllEnvironments(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\GetAllEnvironments::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAllEnvironments::class] = new Operator\Repos\GetAllEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments());
        }

        return $this->operator[Operator\Repos\GetAllEnvironments::class]->call($owner, $repo, $perPage, $page);
    }

    public function getEnvironment(string $owner, string $repo, string $environmentName): Schema\Environment
    {
        if (array_key_exists(Operator\Repos\GetEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetEnvironment::class] = new Operator\Repos\GetEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->operator[Operator\Repos\GetEnvironment::class]->call($owner, $repo, $environmentName);
    }

    public function createOrUpdateEnvironment(string $owner, string $repo, string $environmentName, array $params): Schema\Environment
    {
        if (array_key_exists(Operator\Repos\CreateOrUpdateEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateOrUpdateEnvironment::class] = new Operator\Repos\CreateOrUpdateEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->operator[Operator\Repos\CreateOrUpdateEnvironment::class]->call($owner, $repo, $environmentName, $params);
    }

    public function deleteAnEnvironment(string $owner, string $repo, string $environmentName): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteAnEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteAnEnvironment::class] = new Operator\Repos\DeleteAnEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->operator[Operator\Repos\DeleteAnEnvironment::class]->call($owner, $repo, $environmentName);
    }

    public function listDeploymentBranchPolicies(string $owner, string $repo, string $environmentName, int $perPage, int $page): Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\ListDeploymentBranchPolicies::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeploymentBranchPolicies::class] = new Operator\Repos\ListDeploymentBranchPolicies($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->operator[Operator\Repos\ListDeploymentBranchPolicies::class]->call($owner, $repo, $environmentName, $perPage, $page);
    }

    public function createDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, array $params): Schema\DeploymentBranchPolicy
    {
        if (array_key_exists(Operator\Repos\CreateDeploymentBranchPolicy::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateDeploymentBranchPolicy::class] = new Operator\Repos\CreateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->operator[Operator\Repos\CreateDeploymentBranchPolicy::class]->call($owner, $repo, $environmentName, $params);
    }

    public function getDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId): Schema\DeploymentBranchPolicy
    {
        if (array_key_exists(Operator\Repos\GetDeploymentBranchPolicy::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetDeploymentBranchPolicy::class] = new Operator\Repos\GetDeploymentBranchPolicy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->operator[Operator\Repos\GetDeploymentBranchPolicy::class]->call($owner, $repo, $environmentName, $branchPolicyId);
    }

    public function updateDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId, array $params): Schema\DeploymentBranchPolicy
    {
        if (array_key_exists(Operator\Repos\UpdateDeploymentBranchPolicy::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateDeploymentBranchPolicy::class] = new Operator\Repos\UpdateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->operator[Operator\Repos\UpdateDeploymentBranchPolicy::class]->call($owner, $repo, $environmentName, $branchPolicyId, $params);
    }

    public function deleteDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteDeploymentBranchPolicy::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteDeploymentBranchPolicy::class] = new Operator\Repos\DeleteDeploymentBranchPolicy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->operator[Operator\Repos\DeleteDeploymentBranchPolicy::class]->call($owner, $repo, $environmentName, $branchPolicyId);
    }

    public function getAllDeploymentProtectionRules(string $environmentName, string $repo, string $owner): Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\GetAllDeploymentProtectionRules::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAllDeploymentProtectionRules::class] = new Operator\Repos\GetAllDeploymentProtectionRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->operator[Operator\Repos\GetAllDeploymentProtectionRules::class]->call($environmentName, $repo, $owner);
    }

    public function createDeploymentProtectionRule(string $environmentName, string $repo, string $owner, array $params): Schema\DeploymentProtectionRule
    {
        if (array_key_exists(Operator\Repos\CreateDeploymentProtectionRule::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateDeploymentProtectionRule::class] = new Operator\Repos\CreateDeploymentProtectionRule($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->operator[Operator\Repos\CreateDeploymentProtectionRule::class]->call($environmentName, $repo, $owner, $params);
    }

    public function listCustomDeploymentRuleIntegrations(string $environmentName, string $repo, string $owner, int $page, int $perPage): Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\ListCustomDeploymentRuleIntegrations::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListCustomDeploymentRuleIntegrations::class] = new Operator\Repos\ListCustomDeploymentRuleIntegrations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps());
        }

        return $this->operator[Operator\Repos\ListCustomDeploymentRuleIntegrations::class]->call($environmentName, $repo, $owner, $page, $perPage);
    }

    public function getCustomDeploymentProtectionRule(string $owner, string $repo, string $environmentName, int $protectionRuleId): Schema\DeploymentProtectionRule
    {
        if (array_key_exists(Operator\Repos\GetCustomDeploymentProtectionRule::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCustomDeploymentProtectionRule::class] = new Operator\Repos\GetCustomDeploymentProtectionRule($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId());
        }

        return $this->operator[Operator\Repos\GetCustomDeploymentProtectionRule::class]->call($owner, $repo, $environmentName, $protectionRuleId);
    }

    public function disableDeploymentProtectionRule(string $environmentName, string $repo, string $owner, int $protectionRuleId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DisableDeploymentProtectionRule::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DisableDeploymentProtectionRule::class] = new Operator\Repos\DisableDeploymentProtectionRule($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId());
        }

        return $this->operator[Operator\Repos\DisableDeploymentProtectionRule::class]->call($environmentName, $repo, $owner, $protectionRuleId);
    }

    public function listForks(string $owner, string $repo, string $sort, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListForks::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForks::class] = new Operator\Repos\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->operator[Operator\Repos\ListForks::class]->call($owner, $repo, $sort, $perPage, $page);
    }

    public function listForksListing(string $owner, string $repo, string $sort, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListForksListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForksListing::class] = new Operator\Repos\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->operator[Operator\Repos\ListForksListing::class]->call($owner, $repo, $sort, $perPage, $page);
    }

    public function createFork(string $owner, string $repo, array $params): Schema\FullRepository
    {
        if (array_key_exists(Operator\Repos\CreateFork::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateFork::class] = new Operator\Repos\CreateFork($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->operator[Operator\Repos\CreateFork::class]->call($owner, $repo, $params);
    }

    public function listWebhooks(string $owner, string $repo, int $perPage, int $page): Schema\Hook
    {
        if (array_key_exists(Operator\Repos\ListWebhooks::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListWebhooks::class] = new Operator\Repos\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->operator[Operator\Repos\ListWebhooks::class]->call($owner, $repo, $perPage, $page);
    }

    public function listWebhooksListing(string $owner, string $repo, int $perPage, int $page): Schema\Hook
    {
        if (array_key_exists(Operator\Repos\ListWebhooksListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListWebhooksListing::class] = new Operator\Repos\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->operator[Operator\Repos\ListWebhooksListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function createWebhook(string $owner, string $repo, array $params): Schema\Hook
    {
        if (array_key_exists(Operator\Repos\CreateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateWebhook::class] = new Operator\Repos\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->operator[Operator\Repos\CreateWebhook::class]->call($owner, $repo, $params);
    }

    public function getWebhook(string $owner, string $repo, int $hookId): Schema\Hook
    {
        if (array_key_exists(Operator\Repos\GetWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetWebhook::class] = new Operator\Repos\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Repos\GetWebhook::class]->call($owner, $repo, $hookId);
    }

    public function deleteWebhook(string $owner, string $repo, int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteWebhook::class] = new Operator\Repos\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Repos\DeleteWebhook::class]->call($owner, $repo, $hookId);
    }

    public function updateWebhook(string $owner, string $repo, int $hookId, array $params): Schema\Hook
    {
        if (array_key_exists(Operator\Repos\UpdateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateWebhook::class] = new Operator\Repos\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Repos\UpdateWebhook::class]->call($owner, $repo, $hookId, $params);
    }

    public function getWebhookConfigForRepo(string $owner, string $repo, int $hookId): Schema\WebhookConfig
    {
        if (array_key_exists(Operator\Repos\GetWebhookConfigForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetWebhookConfigForRepo::class] = new Operator\Repos\GetWebhookConfigForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Repos\GetWebhookConfigForRepo::class]->call($owner, $repo, $hookId);
    }

    public function updateWebhookConfigForRepo(string $owner, string $repo, int $hookId, array $params): Schema\WebhookConfig
    {
        if (array_key_exists(Operator\Repos\UpdateWebhookConfigForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateWebhookConfigForRepo::class] = new Operator\Repos\UpdateWebhookConfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Repos\UpdateWebhookConfigForRepo::class]->call($owner, $repo, $hookId, $params);
    }

    public function listWebhookDeliveries(string $owner, string $repo, int $hookId, string $cursor, bool $redelivery, int $perPage): Schema\HookDeliveryItem
    {
        if (array_key_exists(Operator\Repos\ListWebhookDeliveries::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListWebhookDeliveries::class] = new Operator\Repos\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->operator[Operator\Repos\ListWebhookDeliveries::class]->call($owner, $repo, $hookId, $cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(string $owner, string $repo, int $hookId, int $deliveryId): Schema\HookDelivery
    {
        if (array_key_exists(Operator\Repos\GetWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetWebhookDelivery::class] = new Operator\Repos\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->operator[Operator\Repos\GetWebhookDelivery::class]->call($owner, $repo, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $owner, string $repo, int $hookId, int $deliveryId): Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Repos\RedeliverWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RedeliverWebhookDelivery::class] = new Operator\Repos\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->operator[Operator\Repos\RedeliverWebhookDelivery::class]->call($owner, $repo, $hookId, $deliveryId);
    }

    public function pingWebhook(string $owner, string $repo, int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\PingWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Repos\PingWebhook::class] = new Operator\Repos\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings());
        }

        return $this->operator[Operator\Repos\PingWebhook::class]->call($owner, $repo, $hookId);
    }

    public function testPushWebhook(string $owner, string $repo, int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\TestPushWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Repos\TestPushWebhook::class] = new Operator\Repos\TestPushWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests());
        }

        return $this->operator[Operator\Repos\TestPushWebhook::class]->call($owner, $repo, $hookId);
    }

    public function listInvitations(string $owner, string $repo, int $perPage, int $page): Schema\RepositoryInvitation
    {
        if (array_key_exists(Operator\Repos\ListInvitations::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListInvitations::class] = new Operator\Repos\ListInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->operator[Operator\Repos\ListInvitations::class]->call($owner, $repo, $perPage, $page);
    }

    public function listInvitationsListing(string $owner, string $repo, int $perPage, int $page): Schema\RepositoryInvitation
    {
        if (array_key_exists(Operator\Repos\ListInvitationsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListInvitationsListing::class] = new Operator\Repos\ListInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->operator[Operator\Repos\ListInvitationsListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function deleteInvitation(string $owner, string $repo, int $invitationId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteInvitation::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteInvitation::class] = new Operator\Repos\DeleteInvitation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId());
        }

        return $this->operator[Operator\Repos\DeleteInvitation::class]->call($owner, $repo, $invitationId);
    }

    public function updateInvitation(string $owner, string $repo, int $invitationId, array $params): Schema\RepositoryInvitation
    {
        if (array_key_exists(Operator\Repos\UpdateInvitation::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateInvitation::class] = new Operator\Repos\UpdateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId());
        }

        return $this->operator[Operator\Repos\UpdateInvitation::class]->call($owner, $repo, $invitationId, $params);
    }

    public function listDeployKeys(string $owner, string $repo, int $perPage, int $page): Schema\DeployKey
    {
        if (array_key_exists(Operator\Repos\ListDeployKeys::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeployKeys::class] = new Operator\Repos\ListDeployKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->operator[Operator\Repos\ListDeployKeys::class]->call($owner, $repo, $perPage, $page);
    }

    public function listDeployKeysListing(string $owner, string $repo, int $perPage, int $page): Schema\DeployKey
    {
        if (array_key_exists(Operator\Repos\ListDeployKeysListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListDeployKeysListing::class] = new Operator\Repos\ListDeployKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->operator[Operator\Repos\ListDeployKeysListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function createDeployKey(string $owner, string $repo, array $params): Schema\DeployKey
    {
        if (array_key_exists(Operator\Repos\CreateDeployKey::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateDeployKey::class] = new Operator\Repos\CreateDeployKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->operator[Operator\Repos\CreateDeployKey::class]->call($owner, $repo, $params);
    }

    public function getDeployKey(string $owner, string $repo, int $keyId): Schema\DeployKey
    {
        if (array_key_exists(Operator\Repos\GetDeployKey::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetDeployKey::class] = new Operator\Repos\GetDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId());
        }

        return $this->operator[Operator\Repos\GetDeployKey::class]->call($owner, $repo, $keyId);
    }

    public function deleteDeployKey(string $owner, string $repo, int $keyId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteDeployKey::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteDeployKey::class] = new Operator\Repos\DeleteDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId());
        }

        return $this->operator[Operator\Repos\DeleteDeployKey::class]->call($owner, $repo, $keyId);
    }

    public function listLanguages(string $owner, string $repo): Schema\Language
    {
        if (array_key_exists(Operator\Repos\ListLanguages::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListLanguages::class] = new Operator\Repos\ListLanguages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages());
        }

        return $this->operator[Operator\Repos\ListLanguages::class]->call($owner, $repo);
    }

    public function mergeUpstream(string $owner, string $repo, array $params): Schema\MergedUpstream
    {
        if (array_key_exists(Operator\Repos\MergeUpstream::class, $this->operator) === false) {
            $this->operator[Operator\Repos\MergeUpstream::class] = new Operator\Repos\MergeUpstream($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream());
        }

        return $this->operator[Operator\Repos\MergeUpstream::class]->call($owner, $repo, $params);
    }

    public function merge(string $owner, string $repo, array $params): Schema\Commit
    {
        if (array_key_exists(Operator\Repos\Merge::class, $this->operator) === false) {
            $this->operator[Operator\Repos\Merge::class] = new Operator\Repos\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges());
        }

        return $this->operator[Operator\Repos\Merge::class]->call($owner, $repo, $params);
    }

    public function getPages(string $owner, string $repo): Schema\Page
    {
        if (array_key_exists(Operator\Repos\GetPages::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetPages::class] = new Operator\Repos\GetPages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->operator[Operator\Repos\GetPages::class]->call($owner, $repo);
    }

    public function updateInformationAboutPagesSite(string $owner, string $repo, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\UpdateInformationAboutPagesSite::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateInformationAboutPagesSite::class] = new Operator\Repos\UpdateInformationAboutPagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->operator[Operator\Repos\UpdateInformationAboutPagesSite::class]->call($owner, $repo, $params);
    }

    public function createPagesSite(string $owner, string $repo, array $params): Schema\Page
    {
        if (array_key_exists(Operator\Repos\CreatePagesSite::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreatePagesSite::class] = new Operator\Repos\CreatePagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->operator[Operator\Repos\CreatePagesSite::class]->call($owner, $repo, $params);
    }

    public function deletePagesSite(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeletePagesSite::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeletePagesSite::class] = new Operator\Repos\DeletePagesSite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->operator[Operator\Repos\DeletePagesSite::class]->call($owner, $repo);
    }

    public function listPagesBuilds(string $owner, string $repo, int $perPage, int $page): Schema\PageBuild
    {
        if (array_key_exists(Operator\Repos\ListPagesBuilds::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListPagesBuilds::class] = new Operator\Repos\ListPagesBuilds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->operator[Operator\Repos\ListPagesBuilds::class]->call($owner, $repo, $perPage, $page);
    }

    public function listPagesBuildsListing(string $owner, string $repo, int $perPage, int $page): Schema\PageBuild
    {
        if (array_key_exists(Operator\Repos\ListPagesBuildsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListPagesBuildsListing::class] = new Operator\Repos\ListPagesBuildsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->operator[Operator\Repos\ListPagesBuildsListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function requestPagesBuild(string $owner, string $repo): Schema\PageBuildStatus
    {
        if (array_key_exists(Operator\Repos\RequestPagesBuild::class, $this->operator) === false) {
            $this->operator[Operator\Repos\RequestPagesBuild::class] = new Operator\Repos\RequestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->operator[Operator\Repos\RequestPagesBuild::class]->call($owner, $repo);
    }

    public function getLatestPagesBuild(string $owner, string $repo): Schema\PageBuild
    {
        if (array_key_exists(Operator\Repos\GetLatestPagesBuild::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetLatestPagesBuild::class] = new Operator\Repos\GetLatestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest());
        }

        return $this->operator[Operator\Repos\GetLatestPagesBuild::class]->call($owner, $repo);
    }

    public function getPagesBuild(string $owner, string $repo, int $buildId): Schema\PageBuild
    {
        if (array_key_exists(Operator\Repos\GetPagesBuild::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetPagesBuild::class] = new Operator\Repos\GetPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId());
        }

        return $this->operator[Operator\Repos\GetPagesBuild::class]->call($owner, $repo, $buildId);
    }

    public function createPagesDeployment(string $owner, string $repo, array $params): Schema\PageDeployment
    {
        if (array_key_exists(Operator\Repos\CreatePagesDeployment::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreatePagesDeployment::class] = new Operator\Repos\CreatePagesDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployment());
        }

        return $this->operator[Operator\Repos\CreatePagesDeployment::class]->call($owner, $repo, $params);
    }

    public function getPagesHealthCheck(string $owner, string $repo): Schema\PagesHealthCheck|Schema\EmptyObject
    {
        if (array_key_exists(Operator\Repos\GetPagesHealthCheck::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetPagesHealthCheck::class] = new Operator\Repos\GetPagesHealthCheck($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health());
        }

        return $this->operator[Operator\Repos\GetPagesHealthCheck::class]->call($owner, $repo);
    }

    public function enablePrivateVulnerabilityReporting(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\EnablePrivateVulnerabilityReporting::class, $this->operator) === false) {
            $this->operator[Operator\Repos\EnablePrivateVulnerabilityReporting::class] = new Operator\Repos\EnablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->operator[Operator\Repos\EnablePrivateVulnerabilityReporting::class]->call($owner, $repo);
    }

    public function disablePrivateVulnerabilityReporting(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DisablePrivateVulnerabilityReporting::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DisablePrivateVulnerabilityReporting::class] = new Operator\Repos\DisablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->operator[Operator\Repos\DisablePrivateVulnerabilityReporting::class]->call($owner, $repo);
    }

    public function getReadme(string $owner, string $repo, string $ref): Schema\ContentFile
    {
        if (array_key_exists(Operator\Repos\GetReadme::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetReadme::class] = new Operator\Repos\GetReadme($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme());
        }

        return $this->operator[Operator\Repos\GetReadme::class]->call($owner, $repo, $ref);
    }

    public function getReadmeInDirectory(string $owner, string $repo, string $dir, string $ref): Schema\ContentFile
    {
        if (array_key_exists(Operator\Repos\GetReadmeInDirectory::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetReadmeInDirectory::class] = new Operator\Repos\GetReadmeInDirectory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir());
        }

        return $this->operator[Operator\Repos\GetReadmeInDirectory::class]->call($owner, $repo, $dir, $ref);
    }

    public function listReleases(string $owner, string $repo, int $perPage, int $page): Schema\Release
    {
        if (array_key_exists(Operator\Repos\ListReleases::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListReleases::class] = new Operator\Repos\ListReleases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->operator[Operator\Repos\ListReleases::class]->call($owner, $repo, $perPage, $page);
    }

    public function listReleasesListing(string $owner, string $repo, int $perPage, int $page): Schema\Release
    {
        if (array_key_exists(Operator\Repos\ListReleasesListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListReleasesListing::class] = new Operator\Repos\ListReleasesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->operator[Operator\Repos\ListReleasesListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function createRelease(string $owner, string $repo, array $params): Schema\Release
    {
        if (array_key_exists(Operator\Repos\CreateRelease::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateRelease::class] = new Operator\Repos\CreateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->operator[Operator\Repos\CreateRelease::class]->call($owner, $repo, $params);
    }

    public function getReleaseAsset(string $owner, string $repo, int $assetId): Schema\ReleaseAsset
    {
        if (array_key_exists(Operator\Repos\GetReleaseAsset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetReleaseAsset::class] = new Operator\Repos\GetReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->operator[Operator\Repos\GetReleaseAsset::class]->call($owner, $repo, $assetId);
    }

    public function deleteReleaseAsset(string $owner, string $repo, int $assetId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteReleaseAsset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteReleaseAsset::class] = new Operator\Repos\DeleteReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->operator[Operator\Repos\DeleteReleaseAsset::class]->call($owner, $repo, $assetId);
    }

    public function updateReleaseAsset(string $owner, string $repo, int $assetId, array $params): Schema\ReleaseAsset
    {
        if (array_key_exists(Operator\Repos\UpdateReleaseAsset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateReleaseAsset::class] = new Operator\Repos\UpdateReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->operator[Operator\Repos\UpdateReleaseAsset::class]->call($owner, $repo, $assetId, $params);
    }

    public function generateReleaseNotes(string $owner, string $repo, array $params): Schema\ReleaseNotesContent
    {
        if (array_key_exists(Operator\Repos\GenerateReleaseNotes::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GenerateReleaseNotes::class] = new Operator\Repos\GenerateReleaseNotes($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes());
        }

        return $this->operator[Operator\Repos\GenerateReleaseNotes::class]->call($owner, $repo, $params);
    }

    public function getLatestRelease(string $owner, string $repo): Schema\Release
    {
        if (array_key_exists(Operator\Repos\GetLatestRelease::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetLatestRelease::class] = new Operator\Repos\GetLatestRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest());
        }

        return $this->operator[Operator\Repos\GetLatestRelease::class]->call($owner, $repo);
    }

    public function getReleaseByTag(string $owner, string $repo, string $tag): Schema\Release
    {
        if (array_key_exists(Operator\Repos\GetReleaseByTag::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetReleaseByTag::class] = new Operator\Repos\GetReleaseByTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag());
        }

        return $this->operator[Operator\Repos\GetReleaseByTag::class]->call($owner, $repo, $tag);
    }

    public function getRelease(string $owner, string $repo, int $releaseId): Schema\Release
    {
        if (array_key_exists(Operator\Repos\GetRelease::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetRelease::class] = new Operator\Repos\GetRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->operator[Operator\Repos\GetRelease::class]->call($owner, $repo, $releaseId);
    }

    public function deleteRelease(string $owner, string $repo, int $releaseId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteRelease::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteRelease::class] = new Operator\Repos\DeleteRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->operator[Operator\Repos\DeleteRelease::class]->call($owner, $repo, $releaseId);
    }

    public function updateRelease(string $owner, string $repo, int $releaseId, array $params): Schema\Release
    {
        if (array_key_exists(Operator\Repos\UpdateRelease::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateRelease::class] = new Operator\Repos\UpdateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->operator[Operator\Repos\UpdateRelease::class]->call($owner, $repo, $releaseId, $params);
    }

    public function listReleaseAssets(string $owner, string $repo, int $releaseId, int $perPage, int $page): Schema\ReleaseAsset
    {
        if (array_key_exists(Operator\Repos\ListReleaseAssets::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListReleaseAssets::class] = new Operator\Repos\ListReleaseAssets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->operator[Operator\Repos\ListReleaseAssets::class]->call($owner, $repo, $releaseId, $perPage, $page);
    }

    public function listReleaseAssetsListing(string $owner, string $repo, int $releaseId, int $perPage, int $page): Schema\ReleaseAsset
    {
        if (array_key_exists(Operator\Repos\ListReleaseAssetsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListReleaseAssetsListing::class] = new Operator\Repos\ListReleaseAssetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->operator[Operator\Repos\ListReleaseAssetsListing::class]->call($owner, $repo, $releaseId, $perPage, $page);
    }

    public function uploadReleaseAsset(string $owner, string $repo, int $releaseId, string $name, string $label, array $params): Schema\ReleaseAsset
    {
        if (array_key_exists(Operator\Repos\UploadReleaseAsset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UploadReleaseAsset::class] = new Operator\Repos\UploadReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->operator[Operator\Repos\UploadReleaseAsset::class]->call($owner, $repo, $releaseId, $name, $label, $params);
    }

    public function getBranchRules(string $owner, string $repo, string $branch, int $perPage, int $page): Schema\RepositoryRuleDetailed
    {
        if (array_key_exists(Operator\Repos\GetBranchRules::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetBranchRules::class] = new Operator\Repos\GetBranchRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->operator[Operator\Repos\GetBranchRules::class]->call($owner, $repo, $branch, $perPage, $page);
    }

    public function getBranchRulesListing(string $owner, string $repo, string $branch, int $perPage, int $page): Schema\RepositoryRuleDetailed
    {
        if (array_key_exists(Operator\Repos\GetBranchRulesListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetBranchRulesListing::class] = new Operator\Repos\GetBranchRulesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->operator[Operator\Repos\GetBranchRulesListing::class]->call($owner, $repo, $branch, $perPage, $page);
    }

    public function getRepoRulesets(string $owner, string $repo, int $perPage, int $page, bool $includesParents): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\GetRepoRulesets::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetRepoRulesets::class] = new Operator\Repos\GetRepoRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->operator[Operator\Repos\GetRepoRulesets::class]->call($owner, $repo, $perPage, $page, $includesParents);
    }

    public function getRepoRulesetsListing(string $owner, string $repo, int $perPage, int $page, bool $includesParents): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\GetRepoRulesetsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetRepoRulesetsListing::class] = new Operator\Repos\GetRepoRulesetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->operator[Operator\Repos\GetRepoRulesetsListing::class]->call($owner, $repo, $perPage, $page, $includesParents);
    }

    public function createRepoRuleset(string $owner, string $repo, array $params): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\CreateRepoRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateRepoRuleset::class] = new Operator\Repos\CreateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->operator[Operator\Repos\CreateRepoRuleset::class]->call($owner, $repo, $params);
    }

    public function getRepoRuleset(string $owner, string $repo, int $rulesetId, bool $includesParents): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\GetRepoRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetRepoRuleset::class] = new Operator\Repos\GetRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->operator[Operator\Repos\GetRepoRuleset::class]->call($owner, $repo, $rulesetId, $includesParents);
    }

    public function updateRepoRuleset(string $owner, string $repo, int $rulesetId, array $params): Schema\RepositoryRuleset
    {
        if (array_key_exists(Operator\Repos\UpdateRepoRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\UpdateRepoRuleset::class] = new Operator\Repos\UpdateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->operator[Operator\Repos\UpdateRepoRuleset::class]->call($owner, $repo, $rulesetId, $params);
    }

    public function deleteRepoRuleset(string $owner, string $repo, int $rulesetId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteRepoRuleset::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteRepoRuleset::class] = new Operator\Repos\DeleteRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->operator[Operator\Repos\DeleteRepoRuleset::class]->call($owner, $repo, $rulesetId);
    }

    public function getCodeFrequencyStats(string $owner, string $repo): Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Ok|Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Repos\GetCodeFrequencyStats::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCodeFrequencyStats::class] = new Operator\Repos\GetCodeFrequencyStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency());
        }

        return $this->operator[Operator\Repos\GetCodeFrequencyStats::class]->call($owner, $repo);
    }

    public function getCommitActivityStats(string $owner, string $repo): Schema\CommitActivity|Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Repos\GetCommitActivityStats::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetCommitActivityStats::class] = new Operator\Repos\GetCommitActivityStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity());
        }

        return $this->operator[Operator\Repos\GetCommitActivityStats::class]->call($owner, $repo);
    }

    public function getContributorsStats(string $owner, string $repo): Schema\ContributorActivity|Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Repos\GetContributorsStats::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetContributorsStats::class] = new Operator\Repos\GetContributorsStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors());
        }

        return $this->operator[Operator\Repos\GetContributorsStats::class]->call($owner, $repo);
    }

    public function getParticipationStats(string $owner, string $repo): Schema\ParticipationStats
    {
        if (array_key_exists(Operator\Repos\GetParticipationStats::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetParticipationStats::class] = new Operator\Repos\GetParticipationStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation());
        }

        return $this->operator[Operator\Repos\GetParticipationStats::class]->call($owner, $repo);
    }

    public function getPunchCardStats(string $owner, string $repo): Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Repos\GetPunchCardStats::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetPunchCardStats::class] = new Operator\Repos\GetPunchCardStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard());
        }

        return $this->operator[Operator\Repos\GetPunchCardStats::class]->call($owner, $repo);
    }

    public function createCommitStatus(string $owner, string $repo, string $sha, array $params): Schema\Status
    {
        if (array_key_exists(Operator\Repos\CreateCommitStatus::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateCommitStatus::class] = new Operator\Repos\CreateCommitStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha());
        }

        return $this->operator[Operator\Repos\CreateCommitStatus::class]->call($owner, $repo, $sha, $params);
    }

    public function listTags(string $owner, string $repo, int $perPage, int $page): Schema\Tag
    {
        if (array_key_exists(Operator\Repos\ListTags::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListTags::class] = new Operator\Repos\ListTags($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->operator[Operator\Repos\ListTags::class]->call($owner, $repo, $perPage, $page);
    }

    public function listTagsListing(string $owner, string $repo, int $perPage, int $page): Schema\Tag
    {
        if (array_key_exists(Operator\Repos\ListTagsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListTagsListing::class] = new Operator\Repos\ListTagsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->operator[Operator\Repos\ListTagsListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function listTagProtection(string $owner, string $repo): Schema\TagProtection
    {
        if (array_key_exists(Operator\Repos\ListTagProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListTagProtection::class] = new Operator\Repos\ListTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->operator[Operator\Repos\ListTagProtection::class]->call($owner, $repo);
    }

    public function createTagProtection(string $owner, string $repo, array $params): Schema\TagProtection
    {
        if (array_key_exists(Operator\Repos\CreateTagProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateTagProtection::class] = new Operator\Repos\CreateTagProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->operator[Operator\Repos\CreateTagProtection::class]->call($owner, $repo, $params);
    }

    public function deleteTagProtection(string $owner, string $repo, int $tagProtectionId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeleteTagProtection::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeleteTagProtection::class] = new Operator\Repos\DeleteTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId());
        }

        return $this->operator[Operator\Repos\DeleteTagProtection::class]->call($owner, $repo, $tagProtectionId);
    }

    public function downloadTarballArchive(string $owner, string $repo, string $ref): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DownloadTarballArchive::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DownloadTarballArchive::class] = new Operator\Repos\DownloadTarballArchive($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref());
        }

        return $this->operator[Operator\Repos\DownloadTarballArchive::class]->call($owner, $repo, $ref);
    }

    public function downloadTarballArchiveStreaming(string $owner, string $repo, string $ref): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DownloadTarballArchiveStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DownloadTarballArchiveStreaming::class] = new Operator\Repos\DownloadTarballArchiveStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref());
        }

        return $this->operator[Operator\Repos\DownloadTarballArchiveStreaming::class]->call($owner, $repo, $ref);
    }

    public function listTeams(string $owner, string $repo, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Repos\ListTeams::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListTeams::class] = new Operator\Repos\ListTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->operator[Operator\Repos\ListTeams::class]->call($owner, $repo, $perPage, $page);
    }

    public function listTeamsListing(string $owner, string $repo, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Repos\ListTeamsListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListTeamsListing::class] = new Operator\Repos\ListTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->operator[Operator\Repos\ListTeamsListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function getAllTopics(string $owner, string $repo, int $page, int $perPage): Schema\Topic
    {
        if (array_key_exists(Operator\Repos\GetAllTopics::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetAllTopics::class] = new Operator\Repos\GetAllTopics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->operator[Operator\Repos\GetAllTopics::class]->call($owner, $repo, $page, $perPage);
    }

    public function replaceAllTopics(string $owner, string $repo, array $params): Schema\Topic
    {
        if (array_key_exists(Operator\Repos\ReplaceAllTopics::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ReplaceAllTopics::class] = new Operator\Repos\ReplaceAllTopics($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->operator[Operator\Repos\ReplaceAllTopics::class]->call($owner, $repo, $params);
    }

    public function getClones(string $owner, string $repo, string $per): Schema\CloneTraffic
    {
        if (array_key_exists(Operator\Repos\GetClones::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetClones::class] = new Operator\Repos\GetClones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones());
        }

        return $this->operator[Operator\Repos\GetClones::class]->call($owner, $repo, $per);
    }

    public function getTopPaths(string $owner, string $repo): Schema\ContentTraffic
    {
        if (array_key_exists(Operator\Repos\GetTopPaths::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetTopPaths::class] = new Operator\Repos\GetTopPaths($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths());
        }

        return $this->operator[Operator\Repos\GetTopPaths::class]->call($owner, $repo);
    }

    public function getTopReferrers(string $owner, string $repo): Schema\ReferrerTraffic
    {
        if (array_key_exists(Operator\Repos\GetTopReferrers::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetTopReferrers::class] = new Operator\Repos\GetTopReferrers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers());
        }

        return $this->operator[Operator\Repos\GetTopReferrers::class]->call($owner, $repo);
    }

    public function getViews(string $owner, string $repo, string $per): Schema\ViewTraffic
    {
        if (array_key_exists(Operator\Repos\GetViews::class, $this->operator) === false) {
            $this->operator[Operator\Repos\GetViews::class] = new Operator\Repos\GetViews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views());
        }

        return $this->operator[Operator\Repos\GetViews::class]->call($owner, $repo, $per);
    }

    public function transfer(string $owner, string $repo, array $params): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\Transfer::class, $this->operator) === false) {
            $this->operator[Operator\Repos\Transfer::class] = new Operator\Repos\Transfer($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer());
        }

        return $this->operator[Operator\Repos\Transfer::class]->call($owner, $repo, $params);
    }

    public function checkVulnerabilityAlerts(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\CheckVulnerabilityAlerts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CheckVulnerabilityAlerts::class] = new Operator\Repos\CheckVulnerabilityAlerts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts());
        }

        return $this->operator[Operator\Repos\CheckVulnerabilityAlerts::class]->call($owner, $repo);
    }

    public function enableVulnerabilityAlerts(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\EnableVulnerabilityAlerts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\EnableVulnerabilityAlerts::class] = new Operator\Repos\EnableVulnerabilityAlerts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts());
        }

        return $this->operator[Operator\Repos\EnableVulnerabilityAlerts::class]->call($owner, $repo);
    }

    public function disableVulnerabilityAlerts(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DisableVulnerabilityAlerts::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DisableVulnerabilityAlerts::class] = new Operator\Repos\DisableVulnerabilityAlerts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts());
        }

        return $this->operator[Operator\Repos\DisableVulnerabilityAlerts::class]->call($owner, $repo);
    }

    public function downloadZipballArchive(string $owner, string $repo, string $ref): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DownloadZipballArchive::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DownloadZipballArchive::class] = new Operator\Repos\DownloadZipballArchive($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref());
        }

        return $this->operator[Operator\Repos\DownloadZipballArchive::class]->call($owner, $repo, $ref);
    }

    public function downloadZipballArchiveStreaming(string $owner, string $repo, string $ref): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DownloadZipballArchiveStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DownloadZipballArchiveStreaming::class] = new Operator\Repos\DownloadZipballArchiveStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref());
        }

        return $this->operator[Operator\Repos\DownloadZipballArchiveStreaming::class]->call($owner, $repo, $ref);
    }

    public function createUsingTemplate(string $templateOwner, string $templateRepo, array $params): Schema\Repository
    {
        if (array_key_exists(Operator\Repos\CreateUsingTemplate::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateUsingTemplate::class] = new Operator\Repos\CreateUsingTemplate($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate());
        }

        return $this->operator[Operator\Repos\CreateUsingTemplate::class]->call($templateOwner, $templateRepo, $params);
    }

    public function listPublic(int $since): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListPublic::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListPublic::class] = new Operator\Repos\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories());
        }

        return $this->operator[Operator\Repos\ListPublic::class]->call($since);
    }

    public function listForAuthenticatedUser(string $direction, string $since, string $before, string $visibility, string $affiliation, string $type, string $sort, int $perPage, int $page): Schema\Repository
    {
        if (array_key_exists(Operator\Repos\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForAuthenticatedUser::class] = new Operator\Repos\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->operator[Operator\Repos\ListForAuthenticatedUser::class]->call($direction, $since, $before, $visibility, $affiliation, $type, $sort, $perPage, $page);
    }

    public function listForAuthenticatedUserListing(string $direction, string $since, string $before, string $visibility, string $affiliation, string $type, string $sort, int $perPage, int $page): Schema\Repository
    {
        if (array_key_exists(Operator\Repos\ListForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForAuthenticatedUserListing::class] = new Operator\Repos\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->operator[Operator\Repos\ListForAuthenticatedUserListing::class]->call($direction, $since, $before, $visibility, $affiliation, $type, $sort, $perPage, $page);
    }

    public function createForAuthenticatedUser(array $params): Schema\Repository
    {
        if (array_key_exists(Operator\Repos\CreateForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Repos\CreateForAuthenticatedUser::class] = new Operator\Repos\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->operator[Operator\Repos\CreateForAuthenticatedUser::class]->call($params);
    }

    public function listInvitationsForAuthenticatedUser(int $perPage, int $page): Schema\RepositoryInvitation
    {
        if (array_key_exists(Operator\Repos\ListInvitationsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListInvitationsForAuthenticatedUser::class] = new Operator\Repos\ListInvitationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->operator[Operator\Repos\ListInvitationsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listInvitationsForAuthenticatedUserListing(int $perPage, int $page): Schema\RepositoryInvitation
    {
        if (array_key_exists(Operator\Repos\ListInvitationsForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListInvitationsForAuthenticatedUserListing::class] = new Operator\Repos\ListInvitationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->operator[Operator\Repos\ListInvitationsForAuthenticatedUserListing::class]->call($perPage, $page);
    }

    public function declineInvitationForAuthenticatedUser(int $invitationId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\DeclineInvitationForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Repos\DeclineInvitationForAuthenticatedUser::class] = new Operator\Repos\DeclineInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->operator[Operator\Repos\DeclineInvitationForAuthenticatedUser::class]->call($invitationId);
    }

    public function acceptInvitationForAuthenticatedUser(int $invitationId): ResponseInterface
    {
        if (array_key_exists(Operator\Repos\AcceptInvitationForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Repos\AcceptInvitationForAuthenticatedUser::class] = new Operator\Repos\AcceptInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->operator[Operator\Repos\AcceptInvitationForAuthenticatedUser::class]->call($invitationId);
    }

    public function listForUser(string $username, string $direction, string $type, string $sort, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListForUser::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForUser::class] = new Operator\Repos\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->operator[Operator\Repos\ListForUser::class]->call($username, $direction, $type, $sort, $perPage, $page);
    }

    public function listForUserListing(string $username, string $direction, string $type, string $sort, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Repos\ListForUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Repos\ListForUserListing::class] = new Operator\Repos\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->operator[Operator\Repos\ListForUserListing::class]->call($username, $direction, $type, $sort, $perPage, $page);
    }
}
