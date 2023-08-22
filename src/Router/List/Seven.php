<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Seven
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<Schema\PackageVersion>|iterable<Schema\CheckAnnotation>|iterable<Schema\Reaction>|iterable<Schema\CommitComment>|iterable<Schema\PullRequestSimple>|(iterable<Schema\Status>|Schema\BasicError)|iterable<Schema\DeploymentStatus>|iterable<Schema\IssueComment>|iterable<(Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent)>|(iterable<Schema\Label>|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent)>|iterable<Schema\Label>|iterable<Schema\PullRequestReviewComment>|iterable<Schema\Commit>|iterable<Schema\DiffEntry>|iterable<Schema\PullRequestReview>|iterable<Schema\ReleaseAsset>|iterable<(Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern)> */
    public function call(string $call, array $params, array $pathChunks): iterable|BasicError
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($call === 'LIST /orgs/{org}/packages/{package_type}/{package_name}/versions') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Packages::class, $this->router) === false) {
                                            $this->router[Router\List\Packages::class] = new Router\List\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Packages::class]->GetAllPackageVersionsForPackageOwnedByOrgListing($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($pathChunks[6] === 'annotations') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Checks::class, $this->router) === false) {
                                            $this->router[Router\List\Checks::class] = new Router\List\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Checks::class]->ListAnnotationsListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                            $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Reactions::class]->ListForCommitCommentListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{commit_sha}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Repos::class]->ListCommentsForCommitListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'pulls') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Repos::class]->ListPullRequestsAssociatedWithCommitListing($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{ref}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/commits/{ref}/statuses') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Repos::class]->ListCommitStatusesForRefListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Repos::class]->ListDeploymentStatusesListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Issues::class]->ListCommentsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'events') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/events') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Issues::class]->ListEventsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Issues::class]->ListLabelsOnIssueListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                            $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Reactions::class]->ListForIssueListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'timeline') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Issues::class]->ListEventsForTimelineListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Issues::class]->ListLabelsForMilestoneListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                            $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Pulls::class]->ListReviewCommentsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'commits') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                            $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Pulls::class]->ListCommitsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'files') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/files') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                            $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Pulls::class]->ListFilesListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'reviews') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                            $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Pulls::class]->ListReviewsListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'assets') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/assets') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Repos::class]->ListReleaseAssetsListing($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                            $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Reactions::class]->ListForReleaseListing($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'rules') {
                            if ($pathChunks[5] === 'branches') {
                                if ($pathChunks[6] === '{branch}') {
                                    if ($call === 'LIST /repos/{owner}/{repo}/rules/branches/{branch}') {
                                        $matched = true;
                                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\List\Repos::class]->GetBranchRulesListing($params);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
