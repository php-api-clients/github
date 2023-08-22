<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuitePreference;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryInvitation;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Six
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}| */
    public function call(string $call, array $params, array $pathChunks): WebhookConfig|CheckRun|CheckSuitePreference|EmptyObject|CodeScanningDefaultSetupUpdateResponse|CommitComment|Hook|Import|RepositoryInvitation|Issue|BasicError|Label|Milestone|PullRequest|Release|RepositoryAdvisory|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /orgs/{org}/actions/variables/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Actions::class]->UpdateOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Orgs::class]->UpdateWebhookConfigForOrg($params);
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
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Checks::class, $this->router) === false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Checks::class]->Update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === 'preferences') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Checks::class, $this->router) === false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Checks::class]->SetSuitesPreferences($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'default-setup') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/default-setup') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Patch\CodeScanning::class] = new Router\Patch\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\CodeScanning::class]->UpdateDefaultSetup($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->UpdateCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->UpdateWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'lfs') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/import/lfs') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Patch\Migrations::class] = new Router\Patch\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Migrations::class]->SetLfsPreference($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->UpdateInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->Update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->UpdateLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->UpdateMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Patch\Pulls::class] = new Router\Patch\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Pulls::class]->Update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->UpdateRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === '{ghsa_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/security-advisories/{ghsa_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\SecurityAdvisories::class, $this->router) === false) {
                                        $this->router[Router\Patch\SecurityAdvisories::class] = new Router\Patch\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\SecurityAdvisories::class]->UpdateRepositoryAdvisory($params);
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
