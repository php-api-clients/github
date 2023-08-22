<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\CodeScanningAlert;
use ApiClients\Client\GitHub\Schema\DependabotAlert;
use ApiClients\Client\GitHub\Schema\GitRef;
use ApiClients\Client\GitHub\Schema\IssueComment;
use ApiClients\Client\GitHub\Schema\PorterAuthor;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Client\GitHub\Schema\SecretScanningAlert;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
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

    /** @return |array{code: int}|(Schema\SecretScanningAlert|array{code: int}) */
    public function call(string $call, array $params, array $pathChunks): TeamDiscussion|CodeScanningAlert|DependabotAlert|GitRef|WebhookConfig|PorterAuthor|IssueComment|PullRequestReviewComment|ReleaseAsset|SecretScanningAlert|TeamDiscussionComment|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Teams::class, $this->router) === false) {
                                            $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Teams::class]->UpdateDiscussionInOrg($params);
                                    }
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
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/actions/variables/{name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                            $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Actions::class]->UpdateRepoVariable($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\CodeScanning::class, $this->router) === false) {
                                            $this->router[Router\Patch\CodeScanning::class] = new Router\Patch\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\CodeScanning::class]->UpdateAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/dependabot/alerts/{alert_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Patch\Dependabot::class] = new Router\Patch\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Dependabot::class]->UpdateAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'refs') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/git/refs/{ref}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Git::class, $this->router) === false) {
                                            $this->router[Router\Patch\Git::class] = new Router\Patch\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Git::class]->UpdateRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'config') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                            $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Repos::class]->UpdateWebhookConfigForRepo($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'authors') {
                                if ($pathChunks[6] === '{author_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/import/authors/{author_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Migrations::class, $this->router) === false) {
                                            $this->router[Router\Patch\Migrations::class] = new Router\Patch\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Migrations::class]->MapCommitAuthor($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                            $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Issues::class]->UpdateComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Patch\Pulls::class] = new Router\Patch\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Pulls::class]->UpdateReviewComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'assets') {
                                if ($pathChunks[6] === '{asset_id}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                            $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Repos::class]->UpdateReleaseAsset($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\SecretScanning::class, $this->router) === false) {
                                            $this->router[Router\Patch\SecretScanning::class] = new Router\Patch\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\SecretScanning::class]->UpdateAlert($params);
                                    }
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
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                            $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Actions::class]->UpdateEnvironmentVariable($params);
                                    }
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
                                if ($pathChunks[6] === '{comment_number}') {
                                    if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Patch\Teams::class, $this->router) === false) {
                                            $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Patch\Teams::class]->UpdateDiscussionCommentLegacy($params);
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
