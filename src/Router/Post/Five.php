<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Routers;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Client\GitHub\Schema\Commit;
use ApiClients\Client\GitHub\Schema\DeployKey;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Client\GitHub\Schema\MergedUpstream;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |array{code:int}|Schema\ProjectCard|Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|Schema\Deployment|Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|Schema\MergedUpstream|Schema\Commit|Schema\Codespace */
    public function call(string $call, array $params, array $pathChunks): InstallationToken|Authorization|EmptyObject|ProjectCard|Json|Autolink|CheckRun|CheckSuite|Codespace|Deployment|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|FullRepository|Hook|Issue|DeployKey|Label|MergedUpstream|Commit|Milestone|Page|Project|PullRequest|Release|RepositoryRuleset|RepositoryAdvisory|MinimalRepository|Repository|CodespaceExportDetails|CodespaceWithFullRepository|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'access_tokens') {
                            if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
                                return $this->routers->router🔀Post🔀Apps()->createInstallationAccessToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($pathChunks[4] === 'scoped') {
                            if ($call === 'POST /applications/{client_id}/token/scoped') {
                                return $this->routers->router🔀Post🔀Apps()->scopeToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'variables') {
                            if ($call === 'POST /orgs/{org}/actions/variables') {
                                return $this->routers->router🔀Post🔀Actions()->createOrgVariable($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}') {
                                return $this->routers->router🔀Post🔀Orgs()->reviewPatGrantRequest($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-tokens/{pat_id}') {
                                return $this->routers->router🔀Post🔀Orgs()->updatePatAccess($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
                                return $this->routers->router🔀Post🔀Orgs()->enableOrDisableSecurityProductOnAllOrgRepos($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'POST /projects/columns/{column_id}/cards') {
                                return $this->routers->router🔀Post🔀Projects()->createCard($params);
                            }
                        } elseif ($pathChunks[4] === 'moves') {
                            if ($call === 'POST /projects/columns/{column_id}/moves') {
                                return $this->routers->router🔀Post🔀Projects()->moveColumn($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'autolinks') {
                            if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->router🔀Post🔀Repos()->createAutolink($params);
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
                                return $this->routers->router🔀Post🔀Checks()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
                                return $this->routers->router🔀Post🔀Checks()->createSuite($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'POST /repos/{owner}/{repo}/codespaces') {
                                return $this->routers->router🔀Post🔀Codespaces()->createWithRepoForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'POST /repos/{owner}/{repo}/deployments') {
                                return $this->routers->router🔀Post🔀Repos()->createDeployment($params);
                            }
                        } elseif ($pathChunks[4] === 'dispatches') {
                            if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
                                return $this->routers->router🔀Post🔀Repos()->createDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'POST /repos/{owner}/{repo}/forks') {
                                return $this->routers->router🔀Post🔀Repos()->createFork($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'POST /repos/{owner}/{repo}/hooks') {
                                return $this->routers->router🔀Post🔀Repos()->createWebhook($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'POST /repos/{owner}/{repo}/issues') {
                                return $this->routers->router🔀Post🔀Issues()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'POST /repos/{owner}/{repo}/keys') {
                                return $this->routers->router🔀Post🔀Repos()->createDeployKey($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'POST /repos/{owner}/{repo}/labels') {
                                return $this->routers->router🔀Post🔀Issues()->createLabel($params);
                            }
                        } elseif ($pathChunks[4] === 'merge-upstream') {
                            if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
                                return $this->routers->router🔀Post🔀Repos()->mergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] === 'merges') {
                            if ($call === 'POST /repos/{owner}/{repo}/merges') {
                                return $this->routers->router🔀Post🔀Repos()->merge($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'POST /repos/{owner}/{repo}/milestones') {
                                return $this->routers->router🔀Post🔀Issues()->createMilestone($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'POST /repos/{owner}/{repo}/pages') {
                                return $this->routers->router🔀Post🔀Repos()->createPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'POST /repos/{owner}/{repo}/projects') {
                                return $this->routers->router🔀Post🔀Projects()->createForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'POST /repos/{owner}/{repo}/pulls') {
                                return $this->routers->router🔀Post🔀Pulls()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'POST /repos/{owner}/{repo}/releases') {
                                return $this->routers->router🔀Post🔀Repos()->createRelease($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'POST /repos/{owner}/{repo}/rulesets') {
                                return $this->routers->router🔀Post🔀Repos()->createRepoRuleset($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'POST /repos/{owner}/{repo}/security-advisories') {
                                return $this->routers->router🔀Post🔀SecurityAdvisories()->createRepositoryAdvisory($params);
                            }
                        } elseif ($pathChunks[4] === 'transfer') {
                            if ($call === 'POST /repos/{owner}/{repo}/transfer') {
                                return $this->routers->router🔀Post🔀Repos()->transfer($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{template_owner}') {
                    if ($pathChunks[3] === '{template_repo}') {
                        if ($pathChunks[4] === 'generate') {
                            if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
                                return $this->routers->router🔀Post🔀Repos()->createUsingTemplate($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'exports') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/exports') {
                                return $this->routers->router🔀Post🔀Codespaces()->exportForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'publish') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/publish') {
                                return $this->routers->router🔀Post🔀Codespaces()->publishForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'start') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/start') {
                                return $this->routers->router🔀Post🔀Codespaces()->startForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'stop') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/stop') {
                                return $this->routers->router🔀Post🔀Codespaces()->stopForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
