<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Events implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\IssueEvent' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventLabel' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($payload),
                'ApiClients\Client\GitHub\Schema\Team' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($payload),
                'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventDismissedReview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventMilestone' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventProjectCard' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventRename' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent(array $payload): \ApiClients\Client\GitHub\Schema\IssueEvent
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['actor'] ?? null;

            if ($value === null) {
                $properties['actor'] = null;
                goto after_actor;
            }

            $properties['actor'] = $value;

            after_actor:

            $value = $payload['event'] ?? null;

            if ($value === null) {
                $missingFields[] = 'event';
                goto after_event;
            }

            $properties['event'] = $value;

            after_event:

            $value = $payload['commit_id'] ?? null;

            if ($value === null) {
                $properties['commitId'] = null;
                goto after_commitId;
            }

            $properties['commitId'] = $value;

            after_commitId:

            $value = $payload['commit_url'] ?? null;

            if ($value === null) {
                $properties['commitUrl'] = null;
                goto after_commitUrl;
            }

            $properties['commitUrl'] = $value;

            after_commitUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $properties['issue'] = null;
                goto after_issue;
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['label'] ?? null;

            if ($value === null) {
                $properties['label'] = null;
                goto after_label;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'label';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['label'] = $value;

            after_label:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assigner'] ?? null;

            if ($value === null) {
                $properties['assigner'] = null;
                goto after_assigner;
            }

            $properties['assigner'] = $value;

            after_assigner:

            $value = $payload['review_requester'] ?? null;

            if ($value === null) {
                $properties['reviewRequester'] = null;
                goto after_reviewRequester;
            }

            $properties['reviewRequester'] = $value;

            after_reviewRequester:

            $value = $payload['requested_reviewer'] ?? null;

            if ($value === null) {
                $properties['requestedReviewer'] = null;
                goto after_requestedReviewer;
            }

            $properties['requestedReviewer'] = $value;

            after_requestedReviewer:

            $value = $payload['requested_team'] ?? null;

            if ($value === null) {
                $properties['requestedTeam'] = null;
                goto after_requestedTeam;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requestedTeam';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requestedTeam'] = $value;

            after_requestedTeam:

            $value = $payload['dismissed_review'] ?? null;

            if ($value === null) {
                $properties['dismissedReview'] = null;
                goto after_dismissedReview;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissedReview';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dismissedReview'] = $value;

            after_dismissedReview:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['project_card'] ?? null;

            if ($value === null) {
                $properties['projectCard'] = null;
                goto after_projectCard;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'projectCard';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['projectCard'] = $value;

            after_projectCard:

            $value = $payload['rename'] ?? null;

            if ($value === null) {
                $properties['rename'] = null;
                goto after_rename;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rename';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rename'] = $value;

            after_rename:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $properties['authorAssociation'] = null;
                goto after_authorAssociation;
            }

            $properties['authorAssociation'] = $value;

            after_authorAssociation:

            $value = $payload['lock_reason'] ?? null;

            if ($value === null) {
                $properties['lockReason'] = null;
                goto after_lockReason;
            }

            $properties['lockReason'] = $value;

            after_lockReason:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEvent', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEvent::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEvent(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEvent', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventLabel
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

            $value = $payload['color'] ?? null;

            if ($value === null) {
                $properties['color'] = null;
                goto after_color;
            }

            $properties['color'] = $value;

            after_color:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventLabel', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventLabel::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventLabel(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventLabel', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(array $payload): \ApiClients\Client\GitHub\Schema\Team
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

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['permission'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permission';
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

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

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['parent'] ?? null;

            if ($value === null) {
                $properties['parent'] = null;
                goto after_parent;
            }

            $properties['parent'] = $value;

            after_parent:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Team(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Team\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'triage';
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $missingFields[] = 'maintain';
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Team\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventDismissedReview
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['review_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_id';
                goto after_reviewId;
            }

            $properties['reviewId'] = $value;

            after_reviewId:

            $value = $payload['dismissal_message'] ?? null;

            if ($value === null) {
                $properties['dismissalMessage'] = null;
                goto after_dismissalMessage;
            }

            $properties['dismissalMessage'] = $value;

            after_dismissalMessage:

            $value = $payload['dismissal_commit_id'] ?? null;

            if ($value === null) {
                $properties['dismissalCommitId'] = null;
                goto after_dismissalCommitId;
            }

            $properties['dismissalCommitId'] = $value;

            after_dismissalCommitId:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventDismissedReview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventDismissedReview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventDismissedReview(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventDismissedReview', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventMilestone
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventMilestone', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventMilestone::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventMilestone(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventMilestone', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventProjectCard
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['project_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'project_url';
                goto after_projectUrl;
            }

            $properties['projectUrl'] = $value;

            after_projectUrl:

            $value = $payload['project_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'project_id';
                goto after_projectId;
            }

            $properties['projectId'] = $value;

            after_projectId:

            $value = $payload['column_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'column_name';
                goto after_columnName;
            }

            $properties['columnName'] = $value;

            after_columnName:

            $value = $payload['previous_column_name'] ?? null;

            if ($value === null) {
                $properties['previousColumnName'] = null;
                goto after_previousColumnName;
            }

            $properties['previousColumnName'] = $value;

            after_previousColumnName:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventProjectCard', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventProjectCard::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventProjectCard(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventProjectCard', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventRename
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $missingFields[] = 'from';
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

            $value = $payload['to'] ?? null;

            if ($value === null) {
                $missingFields[] = 'to';
                goto after_to;
            }

            $properties['to'] = $value;

            after_to:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventRename', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventRename::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventRename(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventRename', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\IssueEvent' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent($object),
            'ApiClients\Client\GitHub\Schema\IssueEventLabel' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($object),
            'ApiClients\Client\GitHub\Schema\Team' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($object),
            'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\IssueEventDismissedReview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($object),
            'ApiClients\Client\GitHub\Schema\IssueEventMilestone' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($object),
            'ApiClients\Client\GitHub\Schema\IssueEventProjectCard' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($object),
            'ApiClients\Client\GitHub\Schema\IssueEventRename' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($object),
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEvent);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $actor = $object->actor;

        if ($actor === null) {
            goto after_actor;
        }
        after_actor:        $result['actor'] = $actor;

        
        $event = $object->event;
        after_event:        $result['event'] = $event;

        
        $commitId = $object->commitId;

        if ($commitId === null) {
            goto after_commitId;
        }
        after_commitId:        $result['commit_id'] = $commitId;

        
        $commitUrl = $object->commitUrl;

        if ($commitUrl === null) {
            goto after_commitUrl;
        }
        after_commitUrl:        $result['commit_url'] = $commitUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $issue = $object->issue;

        if ($issue === null) {
            goto after_issue;
        }
        after_issue:        $result['issue'] = $issue;

        
        $label = $object->label;

        if ($label === null) {
            goto after_label;
        }
        $label = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($label);
        after_label:        $result['label'] = $label;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        after_assignee:        $result['assignee'] = $assignee;

        
        $assigner = $object->assigner;

        if ($assigner === null) {
            goto after_assigner;
        }
        after_assigner:        $result['assigner'] = $assigner;

        
        $reviewRequester = $object->reviewRequester;

        if ($reviewRequester === null) {
            goto after_reviewRequester;
        }
        after_reviewRequester:        $result['review_requester'] = $reviewRequester;

        
        $requestedReviewer = $object->requestedReviewer;

        if ($requestedReviewer === null) {
            goto after_requestedReviewer;
        }
        after_requestedReviewer:        $result['requested_reviewer'] = $requestedReviewer;

        
        $requestedTeam = $object->requestedTeam;

        if ($requestedTeam === null) {
            goto after_requestedTeam;
        }
        $requestedTeam = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($requestedTeam);
        after_requestedTeam:        $result['requested_team'] = $requestedTeam;

        
        $dismissedReview = $object->dismissedReview;

        if ($dismissedReview === null) {
            goto after_dismissedReview;
        }
        $dismissedReview = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($dismissedReview);
        after_dismissedReview:        $result['dismissed_review'] = $dismissedReview;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $projectCard = $object->projectCard;

        if ($projectCard === null) {
            goto after_projectCard;
        }
        $projectCard = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($projectCard);
        after_projectCard:        $result['project_card'] = $projectCard;

        
        $rename = $object->rename;

        if ($rename === null) {
            goto after_rename;
        }
        $rename = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($rename);
        after_rename:        $result['rename'] = $rename;

        
        $authorAssociation = $object->authorAssociation;

        if ($authorAssociation === null) {
            goto after_authorAssociation;
        }
        after_authorAssociation:        $result['author_association'] = $authorAssociation;

        
        $lockReason = $object->lockReason;

        if ($lockReason === null) {
            goto after_lockReason;
        }
        after_lockReason:        $result['lock_reason'] = $lockReason;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventLabel);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $color = $object->color;

        if ($color === null) {
            goto after_color;
        }
        after_color:        $result['color'] = $color;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Team);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $privacy = $object->privacy;

        if ($privacy === null) {
            goto after_privacy;
        }
        after_privacy:        $result['privacy'] = $privacy;

        
        $permission = $object->permission;
        after_permission:        $result['permission'] = $permission;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $membersUrl = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $repositoriesUrl = $object->repositoriesUrl;
        after_repositoriesUrl:        $result['repositories_url'] = $repositoriesUrl;

        
        $parent = $object->parent;

        if ($parent === null) {
            goto after_parent;
        }
        after_parent:        $result['parent'] = $parent;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Team\Permissions);
        $result = [];

        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;

        
        $triage = $object->triage;
        after_triage:        $result['triage'] = $triage;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $maintain = $object->maintain;
        after_maintain:        $result['maintain'] = $maintain;

        
        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventDismissedReview);
        $result = [];

        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $reviewId = $object->reviewId;
        after_reviewId:        $result['review_id'] = $reviewId;

        
        $dismissalMessage = $object->dismissalMessage;

        if ($dismissalMessage === null) {
            goto after_dismissalMessage;
        }
        after_dismissalMessage:        $result['dismissal_message'] = $dismissalMessage;

        
        $dismissalCommitId = $object->dismissalCommitId;

        if ($dismissalCommitId === null) {
            goto after_dismissalCommitId;
        }
        after_dismissalCommitId:        $result['dismissal_commit_id'] = $dismissalCommitId;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventMilestone);
        $result = [];

        $title = $object->title;
        after_title:        $result['title'] = $title;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventProjectCard);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $projectUrl = $object->projectUrl;
        after_projectUrl:        $result['project_url'] = $projectUrl;

        
        $projectId = $object->projectId;
        after_projectId:        $result['project_id'] = $projectId;

        
        $columnName = $object->columnName;
        after_columnName:        $result['column_name'] = $columnName;

        
        $previousColumnName = $object->previousColumnName;

        if ($previousColumnName === null) {
            goto after_previousColumnName;
        }
        after_previousColumnName:        $result['previous_column_name'] = $previousColumnName;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventRename);
        $result = [];

        $from = $object->from;
        after_from:        $result['from'] = $from;

        
        $to = $object->to;
        after_to:        $result['to'] = $to;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


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
