<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'suspended') {
                            if ($call === 'DELETE /app/installations/{installation_id}/suspended') {
                                return $this->routers->internal🔀Router🔀Delete🔀Apps()->unsuspendInstallation($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'DELETE /gists/{gist_id}/comments/{comment_id}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Gists()->deleteComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'DELETE /notifications/threads/{thread_id}/subscription') {
                                return $this->routers->internal🔀Router🔀Delete🔀Activity()->deleteThreadSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/blocks/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->unblockUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'DELETE /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->deleteWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($pathChunks[4] === '{invitation_id}') {
                            if ($call === 'DELETE /orgs/{org}/invitations/{invitation_id}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->cancelInvitation($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->removeMember($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->removeMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/outside_collaborators/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->removeOutsideCollaborator($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/public_members/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Orgs()->removePublicMembershipForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'DELETE /orgs/{org}/rulesets/{ruleset_id}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteOrgRuleset($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Teams()->deleteInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'DELETE /projects/columns/cards/{card_id}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Projects()->deleteCard($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /projects/{project_id}/collaborators/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Projects()->removeCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/automated-security-fixes') {
                                return $this->routers->internal🔀Router🔀Delete🔀Repos()->disableAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/import') {
                                return $this->routers->internal🔀Router🔀Delete🔀Migrations()->cancelImport($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/interaction-limits') {
                                return $this->routers->internal🔀Router🔀Delete🔀Interactions()->removeRestrictionsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/pages') {
                                return $this->routers->internal🔀Router🔀Delete🔀Repos()->deletePagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'private-vulnerability-reporting') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/private-vulnerability-reporting') {
                                return $this->routers->internal🔀Router🔀Delete🔀Repos()->disablePrivateVulnerabilityReporting($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/subscription') {
                                return $this->routers->internal🔀Router🔀Delete🔀Activity()->deleteRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/vulnerability-alerts') {
                                return $this->routers->internal🔀Router🔀Delete🔀Repos()->disableVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Teams()->deleteDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /teams/{team_id}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /teams/{team_id}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'DELETE /teams/{team_id}/projects/{project_id}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'DELETE /user/codespaces/secrets/{secret_name}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->deleteSecretForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'archive') {
                            if ($call === 'DELETE /user/migrations/{migration_id}/archive') {
                                return $this->routers->internal🔀Router🔀Delete🔀Migrations()->deleteArchiveForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($call === 'DELETE /user/packages/{package_type}/{package_name}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Packages()->deletePackageForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'DELETE /user/starred/{owner}/{repo}') {
                                return $this->routers->internal🔀Router🔀Delete🔀Activity()->unstarRepoForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
