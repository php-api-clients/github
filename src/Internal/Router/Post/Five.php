<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
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
use ApiClients\Client\GitHub\Schema\Operations\Repos\CreateAttestation\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\RunnerGroupsOrg;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\RunnerGroupsOrg */
    public function call(string $call, array $params, array $pathChunks): InstallationToken|Authorization|RunnerGroupsOrg|EmptyObject|CodeSecurityConfiguration|WithoutBody|ProjectCard|Json|Created|Autolink|CheckRun|CheckSuite|Codespace|Deployment|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|FullRepository|Hook|Issue|DeployKey|Label|MergedUpstream|Commit|Milestone|Page|Project|PullRequest|Release|RepositoryRuleset|RepositoryAdvisory|MinimalRepository|CodespaceExportDetails|CodespaceWithFullRepository
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'access_tokens') {
                            if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
                                return $this->routers->internal🔀Router🔀Post🔀Apps()->createInstallationAccessToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($pathChunks[4] === 'scoped') {
                            if ($call === 'POST /applications/{client_id}/token/scoped') {
                                return $this->routers->internal🔀Router🔀Post🔀Apps()->scopeToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'POST /orgs/{org}/actions/runner-groups') {
                                return $this->routers->internal🔀Router🔀Post🔀Actions()->createSelfHostedRunnerGroupForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'POST /orgs/{org}/actions/variables') {
                                return $this->routers->internal🔀Router🔀Post🔀Actions()->createOrgVariable($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($call === 'POST /orgs/{org}/code-security/configurations') {
                                return $this->routers->internal🔀Router🔀Post🔀CodeSecurity()->createConfiguration($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}') {
                                return $this->routers->internal🔀Router🔀Post🔀Orgs()->reviewPatGrantRequest($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-tokens/{pat_id}') {
                                return $this->routers->internal🔀Router🔀Post🔀Orgs()->updatePatAccess($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
                                return $this->routers->internal🔀Router🔀Post🔀Orgs()->enableOrDisableSecurityProductOnAllOrgRepos($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'POST /projects/columns/{column_id}/cards') {
                                return $this->routers->internal🔀Router🔀Post🔀Projects()->createCard($params);
                            }
                        } elseif ($pathChunks[4] === 'moves') {
                            if ($call === 'POST /projects/columns/{column_id}/moves') {
                                return $this->routers->internal🔀Router🔀Post🔀Projects()->moveColumn($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'attestations') {
                            if ($call === 'POST /repos/{owner}/{repo}/attestations') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createAttestation($params);
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createAutolink($params);
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
                                return $this->routers->internal🔀Router🔀Post🔀Checks()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
                                return $this->routers->internal🔀Router🔀Post🔀Checks()->createSuite($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'POST /repos/{owner}/{repo}/codespaces') {
                                return $this->routers->internal🔀Router🔀Post🔀Codespaces()->createWithRepoForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'POST /repos/{owner}/{repo}/deployments') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeployment($params);
                            }
                        } elseif ($pathChunks[4] === 'dispatches') {
                            if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'POST /repos/{owner}/{repo}/forks') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createFork($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'POST /repos/{owner}/{repo}/hooks') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createWebhook($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'POST /repos/{owner}/{repo}/issues') {
                                return $this->routers->internal🔀Router🔀Post🔀Issues()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'POST /repos/{owner}/{repo}/keys') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeployKey($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'POST /repos/{owner}/{repo}/labels') {
                                return $this->routers->internal🔀Router🔀Post🔀Issues()->createLabel($params);
                            }
                        } elseif ($pathChunks[4] === 'merge-upstream') {
                            if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->mergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] === 'merges') {
                            if ($call === 'POST /repos/{owner}/{repo}/merges') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->merge($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'POST /repos/{owner}/{repo}/milestones') {
                                return $this->routers->internal🔀Router🔀Post🔀Issues()->createMilestone($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'POST /repos/{owner}/{repo}/pages') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'POST /repos/{owner}/{repo}/projects') {
                                return $this->routers->internal🔀Router🔀Post🔀Projects()->createForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'POST /repos/{owner}/{repo}/pulls') {
                                return $this->routers->internal🔀Router🔀Post🔀Pulls()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'POST /repos/{owner}/{repo}/releases') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createRelease($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'POST /repos/{owner}/{repo}/rulesets') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createRepoRuleset($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'POST /repos/{owner}/{repo}/security-advisories') {
                                return $this->routers->internal🔀Router🔀Post🔀SecurityAdvisories()->createRepositoryAdvisory($params);
                            }
                        } elseif ($pathChunks[4] === 'transfer') {
                            if ($call === 'POST /repos/{owner}/{repo}/transfer') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->transfer($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{template_owner}') {
                    if ($pathChunks[3] === '{template_repo}') {
                        if ($pathChunks[4] === 'generate') {
                            if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createUsingTemplate($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'exports') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/exports') {
                                return $this->routers->internal🔀Router🔀Post🔀Codespaces()->exportForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'publish') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/publish') {
                                return $this->routers->internal🔀Router🔀Post🔀Codespaces()->publishForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'start') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/start') {
                                return $this->routers->internal🔀Router🔀Post🔀Codespaces()->startForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'stop') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/stop') {
                                return $this->routers->internal🔀Router🔀Post🔀Codespaces()->stopForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
