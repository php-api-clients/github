<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\ChunkSize\Patch;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Cc6
{
    private array $router = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'required_workflows') {
                            if ($pathChunks[5] === '{required_workflow_id}') {
                                if ($call === 'PATCH /orgs/{org}/actions/required_workflows/{required_workflow_id}') {
                                    if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Actions::class]->updateRequiredWorkflow($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /orgs/{org}/actions/variables/{name}') {
                                    if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Actions::class]->updateOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
                                    if (array_key_exists(Router\Patch\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Orgs::class]->updateWebhookConfigForOrg($params);
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
                                    if (array_key_exists(Router\Patch\Checks::class, $this->router) === false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Checks::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === 'preferences') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
                                    if (array_key_exists(Router\Patch\Checks::class, $this->router) === false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Checks::class]->setSuitesPreferences($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'default-setup') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/default-setup') {
                                    if (array_key_exists(Router\Patch\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Patch\CodeScanning::class] = new Router\Patch\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\CodeScanning::class]->updateDefaultSetup($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'lfs') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/import/lfs') {
                                    if (array_key_exists(Router\Patch\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Patch\Migrations::class] = new Router\Patch\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Migrations::class]->setLfsPreference($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->updateLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->updateMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    if (array_key_exists(Router\Patch\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Patch\Pulls::class] = new Router\Patch\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Pulls::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === '{ghsa_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/security-advisories/{ghsa_id}') {
                                    if (array_key_exists(Router\Patch\SecurityAdvisories::class, $this->router) === false) {
                                        $this->router[Router\Patch\SecurityAdvisories::class] = new Router\Patch\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\SecurityAdvisories::class]->updateRepositoryAdvisory($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
