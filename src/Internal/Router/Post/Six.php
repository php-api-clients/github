<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Routers;
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
use ApiClients\Client\GitHub\Schema\SecretScanningPushProtectionBypass;
use ApiClients\Client\GitHub\Schema\ShortBlob;
use ApiClients\Client\GitHub\Schema\Status;
use ApiClients\Client\GitHub\Schema\TagProtection;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\ShortBlob */
    public function call(string $call, array $params, array $pathChunks): Json|Created|AuthenticationToken|WithoutBody|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created\Application\Json|TeamDiscussion|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|EmptyObject|CodeScanningSarifsReceipt|\ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|ShortBlob|GitCommit|GitRef|GitTag|GitTree|PageBuildStatus|PageDeployment|ReleaseNotesContent|SecretScanningPushProtectionBypass|RepositoryAdvisory|Status|TagProtection|TeamDiscussionComment|Reaction
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($pathChunks[5] === 'attempts') {
                                if ($call === 'POST /app/hook/deliveries/{delivery_id}/attempts') {
                                    return $this->routers->internal🔀Router🔀Post🔀Apps()->redeliverWebhookDelivery($params);
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
                                    return $this->routers->internal🔀Router🔀Post🔀Actions()->generateRunnerJitconfigForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'registration-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/registration-token') {
                                    return $this->routers->internal🔀Router🔀Post🔀Actions()->createRegistrationTokenForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'remove-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/remove-token') {
                                    return $this->routers->internal🔀Router🔀Post🔀Actions()->createRemoveTokenForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'access') {
                            if ($pathChunks[5] === 'selected_users') {
                                if ($call === 'POST /orgs/{org}/codespaces/access/selected_users') {
                                    return $this->routers->internal🔀Router🔀Post🔀Codespaces()->setCodespacesAccessUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'selected_teams') {
                                if ($call === 'POST /orgs/{org}/copilot/billing/selected_teams') {
                                    return $this->routers->internal🔀Router🔀Post🔀Copilot()->addCopilotSeatsForTeams($params);
                                }
                            } elseif ($pathChunks[5] === 'selected_users') {
                                if ($call === 'POST /orgs/{org}/copilot/billing/selected_users') {
                                    return $this->routers->internal🔀Router🔀Post🔀Copilot()->addCopilotSeatsForUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'pings') {
                                if ($call === 'POST /orgs/{org}/hooks/{hook_id}/pings') {
                                    return $this->routers->internal🔀Router🔀Post🔀Orgs()->pingWebhook($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions') {
                                    return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionInOrg($params);
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
                                    return $this->routers->internal🔀Router🔀Post🔀Projects()->moveCard($params);
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
                                    return $this->routers->internal🔀Router🔀Post🔀Actions()->createRepoVariable($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'sarifs') {
                                if ($call === 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
                                    return $this->routers->internal🔀Router🔀Post🔀CodeScanning()->uploadSarif($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependency-graph') {
                            if ($pathChunks[5] === 'snapshots') {
                                if ($call === 'POST /repos/{owner}/{repo}/dependency-graph/snapshots') {
                                    return $this->routers->internal🔀Router🔀Post🔀DependencyGraph()->createRepositorySnapshot($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'blobs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/blobs') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createBlob($params);
                                }
                            } elseif ($pathChunks[5] === 'commits') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/commits') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createCommit($params);
                                }
                            } elseif ($pathChunks[5] === 'refs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/refs') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createRef($params);
                                }
                            } elseif ($pathChunks[5] === 'tags') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/tags') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createTag($params);
                                }
                            } elseif ($pathChunks[5] === 'trees') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/trees') {
                                    return $this->routers->internal🔀Router🔀Post🔀Git()->createTree($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/builds') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->requestPagesBuild($params);
                                }
                            } elseif ($pathChunks[5] === 'deployments') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/deployments') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->createPagesDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'generate-notes') {
                                if ($call === 'POST /repos/{owner}/{repo}/releases/generate-notes') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->generateReleaseNotes($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'push-protection-bypasses') {
                                if ($call === 'POST /repos/{owner}/{repo}/secret-scanning/push-protection-bypasses') {
                                    return $this->routers->internal🔀Router🔀Post🔀SecretScanning()->createPushProtectionBypass($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === 'reports') {
                                if ($call === 'POST /repos/{owner}/{repo}/security-advisories/reports') {
                                    return $this->routers->internal🔀Router🔀Post🔀SecurityAdvisories()->createPrivateVulnerabilityReport($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'statuses') {
                            if ($pathChunks[5] === '{sha}') {
                                if ($call === 'POST /repos/{owner}/{repo}/statuses/{sha}') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->createCommitStatus($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'POST /repos/{owner}/{repo}/tags/protection') {
                                    return $this->routers->internal🔀Router🔀Post🔀Repos()->createTagProtection($params);
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
                                    return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionCommentLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForTeamDiscussionLegacy($params);
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
                                    return $this->routers->internal🔀Router🔀Post🔀Packages()->restorePackageForAuthenticatedUser($params);
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
