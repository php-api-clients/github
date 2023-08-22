<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\GitCommit;
use ApiClients\Client\GitHub\Schema\GitRef;
use ApiClients\Client\GitHub\Schema\GitTag;
use ApiClients\Client\GitHub\Schema\GitTree;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\PageBuildStatus;
use ApiClients\Client\GitHub\Schema\PageDeployment;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Client\GitHub\Schema\ReleaseNotesContent;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\ShortBlob;
use ApiClients\Client\GitHub\Schema\Status;
use ApiClients\Client\GitHub\Schema\TagProtection;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
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

    /** @return |array{code: int}|(Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created|array{code: int})|(Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json|(Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|(Schema\CodeScanningSarifsReceipt */
    public function call(string $call, array $params, array $pathChunks): Json|Created|AuthenticationToken|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json|TeamDiscussion|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|EmptyObject|CodeScanningSarifsReceipt|\ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|ShortBlob|GitCommit|GitRef|GitTag|GitTree|PageBuildStatus|PageDeployment|ReleaseNotesContent|RepositoryAdvisory|Status|TagProtection|TeamDiscussionComment|Reaction|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($pathChunks[5] === 'attempts') {
                                if ($call === 'POST /app/hook/deliveries/{delivery_id}/attempts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                        $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Apps::class]->RedeliverWebhookDelivery($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'generate-jitconfig') {
                                if ($call === 'POST /orgs/{org}/actions/runners/generate-jitconfig') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->GenerateRunnerJitconfigForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'registration-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/registration-token') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->CreateRegistrationTokenForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'remove-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/remove-token') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->CreateRemoveTokenForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'access') {
                            if ($pathChunks[5] === 'selected_users') {
                                if ($call === 'POST /orgs/{org}/codespaces/access/selected_users') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Codespaces::class]->SetCodespacesAccessUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'selected_teams') {
                                if ($call === 'POST /orgs/{org}/copilot/billing/selected_teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Copilot::class, $this->router) === false) {
                                        $this->router[Router\Post\Copilot::class] = new Router\Post\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Copilot::class]->AddCopilotForBusinessSeatsForTeams($params);
                                }
                            } elseif ($pathChunks[5] === 'selected_users') {
                                if ($call === 'POST /orgs/{org}/copilot/billing/selected_users') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Copilot::class, $this->router) === false) {
                                        $this->router[Router\Post\Copilot::class] = new Router\Post\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Copilot::class]->AddCopilotForBusinessSeatsForUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'pings') {
                                if ($call === 'POST /orgs/{org}/hooks/{hook_id}/pings') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Orgs::class]->PingWebhook($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                        $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Teams::class]->CreateDiscussionInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($pathChunks[5] === 'moves') {
                                if ($call === 'POST /projects/columns/cards/{card_id}/moves') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                        $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Projects::class]->MoveCard($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'variables') {
                                if ($call === 'POST /repos/{owner}/{repo}/actions/variables') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->CreateRepoVariable($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'sarifs') {
                                if ($call === 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Post\CodeScanning::class] = new Router\Post\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\CodeScanning::class]->UploadSarif($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependency-graph') {
                            if ($pathChunks[5] === 'snapshots') {
                                if ($call === 'POST /repos/{owner}/{repo}/dependency-graph/snapshots') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\DependencyGraph::class, $this->router) === false) {
                                        $this->router[Router\Post\DependencyGraph::class] = new Router\Post\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\DependencyGraph::class]->CreateRepositorySnapshot($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'blobs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/blobs') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->CreateBlob($params);
                                }
                            } elseif ($pathChunks[5] === 'commits') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/commits') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->CreateCommit($params);
                                }
                            } elseif ($pathChunks[5] === 'refs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/refs') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->CreateRef($params);
                                }
                            } elseif ($pathChunks[5] === 'tags') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/tags') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->CreateTag($params);
                                }
                            } elseif ($pathChunks[5] === 'trees') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/trees') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->CreateTree($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/builds') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->RequestPagesBuild($params);
                                }
                            } elseif ($pathChunks[5] === 'deployment') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/deployment') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->CreatePagesDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'generate-notes') {
                                if ($call === 'POST /repos/{owner}/{repo}/releases/generate-notes') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->GenerateReleaseNotes($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === 'reports') {
                                if ($call === 'POST /repos/{owner}/{repo}/security-advisories/reports') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\SecurityAdvisories::class, $this->router) === false) {
                                        $this->router[Router\Post\SecurityAdvisories::class] = new Router\Post\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\SecurityAdvisories::class]->CreatePrivateVulnerabilityReport($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'statuses') {
                            if ($pathChunks[5] === '{sha}') {
                                if ($call === 'POST /repos/{owner}/{repo}/statuses/{sha}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->CreateCommitStatus($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'POST /repos/{owner}/{repo}/tags/protection') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->CreateTagProtection($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($pathChunks[2] === '{repository_id}') {
                    if ($pathChunks[3] === 'environments') {
                        if ($pathChunks[4] === '{environment_name}') {
                            if ($pathChunks[5] === 'variables') {
                                if ($call === 'POST /repositories/{repository_id}/environments/{environment_name}/variables') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->CreateEnvironmentVariable($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                        $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Teams::class]->CreateDiscussionCommentLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Reactions::class, $this->router) === false) {
                                        $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Reactions::class]->CreateForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'restore') {
                                if ($call === 'POST /user/packages/{package_type}/{package_name}/restore') {
                                    $matched = true;
                                    if (array_key_exists(Router\Post\Packages::class, $this->router) === false) {
                                        $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Packages::class]->RestorePackageForAuthenticatedUser($params);
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
