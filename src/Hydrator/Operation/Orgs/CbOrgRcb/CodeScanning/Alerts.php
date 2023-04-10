<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Alerts implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningOrganizationAlertItems($payload),
                'ApiClients\Client\Github\Schema\CodeScanningAlertRule' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertRule($payload),
                'ApiClients\Client\Github\Schema\CodeScanningAnalysisTool' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAnalysisTool($payload),
                'ApiClients\Client\Github\Schema\CodeScanningAlertInstance' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance($payload),
                'ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($payload),
                'ApiClients\Client\Github\Schema\CodeScanningAlertLocation' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertLocation($payload),
                'ApiClients\Client\Github\Schema\SimpleRepository' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningOrganizationAlertItems(array $payload): \ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['instances_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'instances_url';
                goto after_instancesUrl;
            }

            $properties['instancesUrl'] = $value;

            after_instancesUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['fixed_at'] ?? null;

            if ($value === null) {
                $properties['fixedAt'] = null;
                goto after_fixedAt;
            }

            $properties['fixedAt'] = $value;

            after_fixedAt:

            $value = $payload['dismissed_by'] ?? null;

            if ($value === null) {
                $properties['dismissedBy'] = null;
                goto after_dismissedBy;
            }

            $properties['dismissedBy'] = $value;

            after_dismissedBy:

            $value = $payload['dismissed_at'] ?? null;

            if ($value === null) {
                $properties['dismissedAt'] = null;
                goto after_dismissedAt;
            }

            $properties['dismissedAt'] = $value;

            after_dismissedAt:

            $value = $payload['dismissed_reason'] ?? null;

            if ($value === null) {
                $properties['dismissedReason'] = null;
                goto after_dismissedReason;
            }

            $properties['dismissedReason'] = $value;

            after_dismissedReason:

            $value = $payload['dismissed_comment'] ?? null;

            if ($value === null) {
                $properties['dismissedComment'] = null;
                goto after_dismissedComment;
            }

            $properties['dismissedComment'] = $value;

            after_dismissedComment:

            $value = $payload['rule'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rule';
                goto after_rule;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rule';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertRule($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rule'] = $value;

            after_rule:

            $value = $payload['tool'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tool';
                goto after_tool;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tool';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAnalysisTool($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tool'] = $value;

            after_tool:

            $value = $payload['most_recent_instance'] ?? null;

            if ($value === null) {
                $missingFields[] = 'most_recent_instance';
                goto after_mostRecentInstance;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'mostRecentInstance';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['mostRecentInstance'] = $value;

            after_mostRecentInstance:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertRule(array $payload): \ApiClients\Client\Github\Schema\CodeScanningAlertRule
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $properties['severity'] = null;
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['security_severity_level'] ?? null;

            if ($value === null) {
                $properties['securitySeverityLevel'] = null;
                goto after_securitySeverityLevel;
            }

            $properties['securitySeverityLevel'] = $value;

            after_securitySeverityLevel:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['full_description'] ?? null;

            if ($value === null) {
                $properties['fullDescription'] = null;
                goto after_fullDescription;
            }

            $properties['fullDescription'] = $value;

            after_fullDescription:

            $value = $payload['tags'] ?? null;

            if ($value === null) {
                $properties['tags'] = null;
                goto after_tags;
            }

            $properties['tags'] = $value;

            after_tags:

            $value = $payload['help'] ?? null;

            if ($value === null) {
                $properties['help'] = null;
                goto after_help;
            }

            $properties['help'] = $value;

            after_help:

            $value = $payload['help_uri'] ?? null;

            if ($value === null) {
                $properties['helpUri'] = null;
                goto after_helpUri;
            }

            $properties['helpUri'] = $value;

            after_helpUri:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertRule', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeScanningAlertRule::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeScanningAlertRule(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertRule', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAnalysisTool(array $payload): \ApiClients\Client\Github\Schema\CodeScanningAnalysisTool
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['version'] ?? null;

            if ($value === null) {
                $properties['version'] = null;
                goto after_version;
            }

            $properties['version'] = $value;

            after_version:

            $value = $payload['guid'] ?? null;

            if ($value === null) {
                $properties['guid'] = null;
                goto after_guid;
            }

            $properties['guid'] = $value;

            after_guid:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeScanningAnalysisTool::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeScanningAnalysisTool(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance(array $payload): \ApiClients\Client\Github\Schema\CodeScanningAlertInstance
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $properties['ref'] = null;
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['analysis_key'] ?? null;

            if ($value === null) {
                $properties['analysisKey'] = null;
                goto after_analysisKey;
            }

            $properties['analysisKey'] = $value;

            after_analysisKey:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $properties['environment'] = null;
                goto after_environment;
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['category'] ?? null;

            if ($value === null) {
                $properties['category'] = null;
                goto after_category;
            }

            $properties['category'] = $value;

            after_category:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['commit_sha'] ?? null;

            if ($value === null) {
                $properties['commitSha'] = null;
                goto after_commitSha;
            }

            $properties['commitSha'] = $value;

            after_commitSha:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'message';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['location'] ?? null;

            if ($value === null) {
                $properties['location'] = null;
                goto after_location;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'location';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertLocation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['location'] = $value;

            after_location:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['classifications'] ?? null;

            if ($value === null) {
                $properties['classifications'] = null;
                goto after_classifications;
            }

            $properties['classifications'] = $value;

            after_classifications:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeScanningAlertInstance::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeScanningAlertInstance(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(array $payload): \ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertLocation(array $payload): \ApiClients\Client\Github\Schema\CodeScanningAlertLocation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['path'] ?? null;

            if ($value === null) {
                $properties['path'] = null;
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['start_line'] ?? null;

            if ($value === null) {
                $properties['startLine'] = null;
                goto after_startLine;
            }

            $properties['startLine'] = $value;

            after_startLine:

            $value = $payload['end_line'] ?? null;

            if ($value === null) {
                $properties['endLine'] = null;
                goto after_endLine;
            }

            $properties['endLine'] = $value;

            after_endLine:

            $value = $payload['start_column'] ?? null;

            if ($value === null) {
                $properties['startColumn'] = null;
                goto after_startColumn;
            }

            $properties['startColumn'] = $value;

            after_startColumn:

            $value = $payload['end_column'] ?? null;

            if ($value === null) {
                $properties['endColumn'] = null;
                goto after_endColumn;
            }

            $properties['endColumn'] = $value;

            after_endColumn:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CodeScanningAlertLocation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CodeScanningAlertLocation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository(array $payload): \ApiClients\Client\Github\Schema\SimpleRepository
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees_url';
                goto after_assigneesUrl;
            }

            $properties['assigneesUrl'] = $value;

            after_assigneesUrl:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blobs_url';
                goto after_blobsUrl;
            }

            $properties['blobsUrl'] = $value;

            after_blobsUrl:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branches_url';
                goto after_branchesUrl;
            }

            $properties['branchesUrl'] = $value;

            after_branchesUrl:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'collaborators_url';
                goto after_collaboratorsUrl;
            }

            $properties['collaboratorsUrl'] = $value;

            after_collaboratorsUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commitsUrl;
            }

            $properties['commitsUrl'] = $value;

            after_commitsUrl:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare_url';
                goto after_compareUrl;
            }

            $properties['compareUrl'] = $value;

            after_compareUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contributors_url';
                goto after_contributorsUrl;
            }

            $properties['contributorsUrl'] = $value;

            after_contributorsUrl:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'downloads_url';
                goto after_downloadsUrl;
            }

            $properties['downloadsUrl'] = $value;

            after_downloadsUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_commits_url';
                goto after_gitCommitsUrl;
            }

            $properties['gitCommitsUrl'] = $value;

            after_gitCommitsUrl:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_refs_url';
                goto after_gitRefsUrl;
            }

            $properties['gitRefsUrl'] = $value;

            after_gitRefsUrl:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_tags_url';
                goto after_gitTagsUrl;
            }

            $properties['gitTagsUrl'] = $value;

            after_gitTagsUrl:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_comment_url';
                goto after_issueCommentUrl;
            }

            $properties['issueCommentUrl'] = $value;

            after_issueCommentUrl:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_events_url';
                goto after_issueEventsUrl;
            }

            $properties['issueEventsUrl'] = $value;

            after_issueEventsUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'keys_url';
                goto after_keysUrl;
            }

            $properties['keysUrl'] = $value;

            after_keysUrl:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merges_url';
                goto after_mergesUrl;
            }

            $properties['mergesUrl'] = $value;

            after_mergesUrl:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestones_url';
                goto after_milestonesUrl;
            }

            $properties['milestonesUrl'] = $value;

            after_milestonesUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_url';
                goto after_stargazersUrl;
            }

            $properties['stargazersUrl'] = $value;

            after_stargazersUrl:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscribers_url';
                goto after_subscribersUrl;
            }

            $properties['subscribersUrl'] = $value;

            after_subscribersUrl:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscription_url';
                goto after_subscriptionUrl;
            }

            $properties['subscriptionUrl'] = $value;

            after_subscriptionUrl:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags_url';
                goto after_tagsUrl;
            }

            $properties['tagsUrl'] = $value;

            after_tagsUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SimpleRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\Github\Schema\SimpleUser
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SimpleUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningOrganizationAlertItems($object),
            'ApiClients\Client\Github\Schema\CodeScanningAlertRule' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertRule($object),
            'ApiClients\Client\Github\Schema\CodeScanningAnalysisTool' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAnalysisTool($object),
            'ApiClients\Client\Github\Schema\CodeScanningAlertInstance' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance($object),
            'ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($object),
            'ApiClients\Client\Github\Schema\CodeScanningAlertLocation' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertLocation($object),
            'ApiClients\Client\Github\Schema\SimpleRepository' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($object),
            'ApiClients\Client\Github\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningOrganizationAlertItems(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeScanningOrganizationAlertItems);
        $result = [];

        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $instancesUrl = $object->instancesUrl;
        after_instancesUrl:        $result['instances_url'] = $instancesUrl;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $fixedAt = $object->fixedAt;

        if ($fixedAt === null) {
            goto after_fixedAt;
        }
        after_fixedAt:        $result['fixed_at'] = $fixedAt;

        
        $dismissedBy = $object->dismissedBy;

        if ($dismissedBy === null) {
            goto after_dismissedBy;
        }
        after_dismissedBy:        $result['dismissed_by'] = $dismissedBy;

        
        $dismissedAt = $object->dismissedAt;

        if ($dismissedAt === null) {
            goto after_dismissedAt;
        }
        after_dismissedAt:        $result['dismissed_at'] = $dismissedAt;

        
        $dismissedReason = $object->dismissedReason;

        if ($dismissedReason === null) {
            goto after_dismissedReason;
        }
        after_dismissedReason:        $result['dismissed_reason'] = $dismissedReason;

        
        $dismissedComment = $object->dismissedComment;

        if ($dismissedComment === null) {
            goto after_dismissedComment;
        }
        after_dismissedComment:        $result['dismissed_comment'] = $dismissedComment;

        
        $rule = $object->rule;
        $rule = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertRule($rule);
        after_rule:        $result['rule'] = $rule;

        
        $tool = $object->tool;
        $tool = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAnalysisTool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $mostRecentInstance = $object->mostRecentInstance;
        $mostRecentInstance = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance($mostRecentInstance);
        after_mostRecentInstance:        $result['most_recent_instance'] = $mostRecentInstance;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($repository);
        after_repository:        $result['repository'] = $repository;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertRule(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeScanningAlertRule);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $securitySeverityLevel = $object->securitySeverityLevel;

        if ($securitySeverityLevel === null) {
            goto after_securitySeverityLevel;
        }
        after_securitySeverityLevel:        $result['security_severity_level'] = $securitySeverityLevel;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fullDescription = $object->fullDescription;

        if ($fullDescription === null) {
            goto after_fullDescription;
        }
        after_fullDescription:        $result['full_description'] = $fullDescription;

        
        $tags = $object->tags;

        if ($tags === null) {
            goto after_tags;
        }
        static $tagsSerializer0;

        if ($tagsSerializer0 === null) {
            $tagsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $tags = $tagsSerializer0->serialize($tags, $this);
        after_tags:        $result['tags'] = $tags;

        
        $help = $object->help;

        if ($help === null) {
            goto after_help;
        }
        after_help:        $result['help'] = $help;

        
        $helpUri = $object->helpUri;

        if ($helpUri === null) {
            goto after_helpUri;
        }
        after_helpUri:        $result['help_uri'] = $helpUri;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAnalysisTool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeScanningAnalysisTool);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;

        
        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }
        after_guid:        $result['guid'] = $guid;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeScanningAlertInstance);
        $result = [];

        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $analysisKey = $object->analysisKey;

        if ($analysisKey === null) {
            goto after_analysisKey;
        }
        after_analysisKey:        $result['analysis_key'] = $analysisKey;

        
        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }
        after_environment:        $result['environment'] = $environment;

        
        $category = $object->category;

        if ($category === null) {
            goto after_category;
        }
        after_category:        $result['category'] = $category;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $commitSha = $object->commitSha;

        if ($commitSha === null) {
            goto after_commitSha;
        }
        after_commitSha:        $result['commit_sha'] = $commitSha;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        $message = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($message);
        after_message:        $result['message'] = $message;

        
        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }
        $location = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertLocation($location);
        after_location:        $result['location'] = $location;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $classifications = $object->classifications;

        if ($classifications === null) {
            goto after_classifications;
        }
        static $classificationsSerializer0;

        if ($classificationsSerializer0 === null) {
            $classificationsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $classifications = $classificationsSerializer0->serialize($classifications, $this);
        after_classifications:        $result['classifications'] = $classifications;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message);
        $result = [];

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CodeScanningAlertLocation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CodeScanningAlertLocation);
        $result = [];

        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $startLine = $object->startLine;

        if ($startLine === null) {
            goto after_startLine;
        }
        after_startLine:        $result['start_line'] = $startLine;

        
        $endLine = $object->endLine;

        if ($endLine === null) {
            goto after_endLine;
        }
        after_endLine:        $result['end_line'] = $endLine;

        
        $startColumn = $object->startColumn;

        if ($startColumn === null) {
            goto after_startColumn;
        }
        after_startColumn:        $result['start_column'] = $startColumn;

        
        $endColumn = $object->endColumn;

        if ($endColumn === null) {
            goto after_endColumn;
        }
        after_endColumn:        $result['end_column'] = $endColumn;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SimpleRepository);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $fullName = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        
        $owner = $object->owner;
        $owner = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $archiveUrl = $object->archiveUrl;
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        
        $assigneesUrl = $object->assigneesUrl;
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        
        $blobsUrl = $object->blobsUrl;
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        
        $branchesUrl = $object->branchesUrl;
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        
        $collaboratorsUrl = $object->collaboratorsUrl;
        after_collaboratorsUrl:        $result['collaborators_url'] = $collaboratorsUrl;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $commitsUrl = $object->commitsUrl;
        after_commitsUrl:        $result['commits_url'] = $commitsUrl;

        
        $compareUrl = $object->compareUrl;
        after_compareUrl:        $result['compare_url'] = $compareUrl;

        
        $contentsUrl = $object->contentsUrl;
        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        
        $contributorsUrl = $object->contributorsUrl;
        after_contributorsUrl:        $result['contributors_url'] = $contributorsUrl;

        
        $deploymentsUrl = $object->deploymentsUrl;
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        
        $downloadsUrl = $object->downloadsUrl;
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $forksUrl = $object->forksUrl;
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        
        $gitCommitsUrl = $object->gitCommitsUrl;
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        
        $gitRefsUrl = $object->gitRefsUrl;
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        
        $gitTagsUrl = $object->gitTagsUrl;
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        
        $issueCommentUrl = $object->issueCommentUrl;
        after_issueCommentUrl:        $result['issue_comment_url'] = $issueCommentUrl;

        
        $issueEventsUrl = $object->issueEventsUrl;
        after_issueEventsUrl:        $result['issue_events_url'] = $issueEventsUrl;

        
        $issuesUrl = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        
        $keysUrl = $object->keysUrl;
        after_keysUrl:        $result['keys_url'] = $keysUrl;

        
        $labelsUrl = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        
        $languagesUrl = $object->languagesUrl;
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        
        $mergesUrl = $object->mergesUrl;
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        
        $milestonesUrl = $object->milestonesUrl;
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        
        $notificationsUrl = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        
        $pullsUrl = $object->pullsUrl;
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        
        $releasesUrl = $object->releasesUrl;
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        
        $stargazersUrl = $object->stargazersUrl;
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        
        $statusesUrl = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $subscribersUrl = $object->subscribersUrl;
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        
        $subscriptionUrl = $object->subscriptionUrl;
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        
        $tagsUrl = $object->tagsUrl;
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        
        $teamsUrl = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        
        $treesUrl = $object->treesUrl;
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        
        $hooksUrl = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }
        after_starredAt:        $result['starred_at'] = $starredAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
