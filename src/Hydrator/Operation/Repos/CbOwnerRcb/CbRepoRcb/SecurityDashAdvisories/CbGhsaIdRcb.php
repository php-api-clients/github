<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecurityDashAdvisories;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbGhsaIdRcb implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\RepositoryAdvisory' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Identifiers($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Submission($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability⚡️Package($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cwes($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Credits($payload),
                'ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryCredit($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisory
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ghsa_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ghsa_id';
                goto after_ghsaId;
            }

            $properties['ghsaId'] = $value;

            after_ghsaId:

            $value = $payload['cve_id'] ?? null;

            if ($value === null) {
                $properties['cveId'] = null;
                goto after_cveId;
            }

            $properties['cveId'] = $value;

            after_cveId:

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

            $value = $payload['summary'] ?? null;

            if ($value === null) {
                $missingFields[] = 'summary';
                goto after_summary;
            }

            $properties['summary'] = $value;

            after_summary:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $properties['severity'] = null;
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['publisher'] ?? null;

            if ($value === null) {
                $missingFields[] = 'publisher';
                goto after_publisher;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'publisher';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['publisher'] = $value;

            after_publisher:

            $value = $payload['identifiers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'identifiers';
                goto after_identifiers;
            }

            static $identifiersCaster1;

            if ($identifiersCaster1 === null) {
                $identifiersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisory\\Identifiers',
));
            }

            $value = $identifiersCaster1->cast($value, $this);

            $properties['identifiers'] = $value;

            after_identifiers:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
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

            $value = $payload['published_at'] ?? null;

            if ($value === null) {
                $properties['publishedAt'] = null;
                goto after_publishedAt;
            }

            $properties['publishedAt'] = $value;

            after_publishedAt:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['withdrawn_at'] ?? null;

            if ($value === null) {
                $properties['withdrawnAt'] = null;
                goto after_withdrawnAt;
            }

            $properties['withdrawnAt'] = $value;

            after_withdrawnAt:

            $value = $payload['submission'] ?? null;

            if ($value === null) {
                $properties['submission'] = null;
                goto after_submission;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'submission';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Submission($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['submission'] = $value;

            after_submission:

            $value = $payload['vulnerabilities'] ?? null;

            if ($value === null) {
                $properties['vulnerabilities'] = null;
                goto after_vulnerabilities;
            }

            static $vulnerabilitiesCaster1;

            if ($vulnerabilitiesCaster1 === null) {
                $vulnerabilitiesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisoryVulnerability',
));
            }

            $value = $vulnerabilitiesCaster1->cast($value, $this);

            $properties['vulnerabilities'] = $value;

            after_vulnerabilities:

            $value = $payload['cvss'] ?? null;

            if ($value === null) {
                $properties['cvss'] = null;
                goto after_cvss;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'cvss';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['cvss'] = $value;

            after_cvss:

            $value = $payload['cwes'] ?? null;

            if ($value === null) {
                $properties['cwes'] = null;
                goto after_cwes;
            }

            static $cwesCaster1;

            if ($cwesCaster1 === null) {
                $cwesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisory\\Cwes',
));
            }

            $value = $cwesCaster1->cast($value, $this);

            $properties['cwes'] = $value;

            after_cwes:

            $value = $payload['cwe_ids'] ?? null;

            if ($value === null) {
                $properties['cweIds'] = null;
                goto after_cweIds;
            }

            $properties['cweIds'] = $value;

            after_cweIds:

            $value = $payload['credits'] ?? null;

            if ($value === null) {
                $properties['credits'] = null;
                goto after_credits;
            }

            static $creditsCaster1;

            if ($creditsCaster1 === null) {
                $creditsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisory\\Credits',
));
            }

            $value = $creditsCaster1->cast($value, $this);

            $properties['credits'] = $value;

            after_credits:

            $value = $payload['credits_detailed'] ?? null;

            if ($value === null) {
                $properties['creditsDetailed'] = null;
                goto after_creditsDetailed;
            }

            static $creditsDetailedCaster1;

            if ($creditsDetailedCaster1 === null) {
                $creditsDetailedCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisoryCredit',
));
            }

            $value = $creditsDetailedCaster1->cast($value, $this);

            $properties['creditsDetailed'] = $value;

            after_creditsDetailed:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisory(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Identifiers(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $missingFields[] = 'value';
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Submission(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['accepted'] ?? null;

            if ($value === null) {
                $missingFields[] = 'accepted';
                goto after_accepted;
            }

            $properties['accepted'] = $value;

            after_accepted:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['package'] ?? null;

            if ($value === null) {
                $properties['package'] = null;
                goto after_package;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'package';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability⚡️Package($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['package'] = $value;

            after_package:

            $value = $payload['vulnerable_version_range'] ?? null;

            if ($value === null) {
                $properties['vulnerableVersionRange'] = null;
                goto after_vulnerableVersionRange;
            }

            $properties['vulnerableVersionRange'] = $value;

            after_vulnerableVersionRange:

            $value = $payload['patched_versions'] ?? null;

            if ($value === null) {
                $properties['patchedVersions'] = null;
                goto after_patchedVersions;
            }

            $properties['patchedVersions'] = $value;

            after_patchedVersions:

            $value = $payload['vulnerable_functions'] ?? null;

            if ($value === null) {
                $properties['vulnerableFunctions'] = null;
                goto after_vulnerableFunctions;
            }

            $properties['vulnerableFunctions'] = $value;

            after_vulnerableFunctions:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability⚡️Package(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ecosystem'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ecosystem';
                goto after_ecosystem;
            }

            $properties['ecosystem'] = $value;

            after_ecosystem:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cvss(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['vector_string'] ?? null;

            if ($value === null) {
                $properties['vectorString'] = null;
                goto after_vectorString;
            }

            $properties['vectorString'] = $value;

            after_vectorString:

            $value = $payload['score'] ?? null;

            if ($value === null) {
                $properties['score'] = null;
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cwes(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['cwe_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cwe_id';
                goto after_cweId;
            }

            $properties['cweId'] = $value;

            after_cweId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Credits(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['login'] ?? null;

            if ($value === null) {
                $properties['login'] = null;
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryCredit(array $payload): \ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['user'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user';
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\Schema\ValidationError
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
  0 => 'ApiClients\\Client\\Github\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\Github\Schema\ValidationError\Errors
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\RepositoryAdvisory' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory($object),
            'ApiClients\Client\Github\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Identifiers($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Submission($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability⚡️Package($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cwes($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Credits($object),
            'ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryCredit($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\Github\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisory);
        $result = [];

        $ghsaId = $object->ghsaId;
        after_ghsaId:        $result['ghsa_id'] = $ghsaId;

        
        $cveId = $object->cveId;

        if ($cveId === null) {
            goto after_cveId;
        }
        after_cveId:        $result['cve_id'] = $cveId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $summary = $object->summary;
        after_summary:        $result['summary'] = $summary;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $author = $object->author;
        $author = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($author);
        after_author:        $result['author'] = $author;

        
        $publisher = $object->publisher;
        $publisher = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($publisher);
        after_publisher:        $result['publisher'] = $publisher;

        
        $identifiers = $object->identifiers;
        static $identifiersSerializer0;

        if ($identifiersSerializer0 === null) {
            $identifiersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisory\\Identifiers',
));
        }
        
        $identifiers = $identifiersSerializer0->serialize($identifiers, $this);
        after_identifiers:        $result['identifiers'] = $identifiers;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $publishedAt = $object->publishedAt;

        if ($publishedAt === null) {
            goto after_publishedAt;
        }
        after_publishedAt:        $result['published_at'] = $publishedAt;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $withdrawnAt = $object->withdrawnAt;

        if ($withdrawnAt === null) {
            goto after_withdrawnAt;
        }
        after_withdrawnAt:        $result['withdrawn_at'] = $withdrawnAt;

        
        $submission = $object->submission;

        if ($submission === null) {
            goto after_submission;
        }
        $submission = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Submission($submission);
        after_submission:        $result['submission'] = $submission;

        
        $vulnerabilities = $object->vulnerabilities;

        if ($vulnerabilities === null) {
            goto after_vulnerabilities;
        }
        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisoryVulnerability',
));
        }
        
        $vulnerabilities = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        
        $cvss = $object->cvss;

        if ($cvss === null) {
            goto after_cvss;
        }
        $cvss = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($cvss);
        after_cvss:        $result['cvss'] = $cvss;

        
        $cwes = $object->cwes;

        if ($cwes === null) {
            goto after_cwes;
        }
        static $cwesSerializer0;

        if ($cwesSerializer0 === null) {
            $cwesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisory\\Cwes',
));
        }
        
        $cwes = $cwesSerializer0->serialize($cwes, $this);
        after_cwes:        $result['cwes'] = $cwes;

        
        $cweIds = $object->cweIds;

        if ($cweIds === null) {
            goto after_cweIds;
        }
        static $cweIdsSerializer0;

        if ($cweIdsSerializer0 === null) {
            $cweIdsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $cweIds = $cweIdsSerializer0->serialize($cweIds, $this);
        after_cweIds:        $result['cwe_ids'] = $cweIds;

        
        $credits = $object->credits;

        if ($credits === null) {
            goto after_credits;
        }
        static $creditsSerializer0;

        if ($creditsSerializer0 === null) {
            $creditsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisory\\Credits',
));
        }
        
        $credits = $creditsSerializer0->serialize($credits, $this);
        after_credits:        $result['credits'] = $credits;

        
        $creditsDetailed = $object->creditsDetailed;

        if ($creditsDetailed === null) {
            goto after_creditsDetailed;
        }
        static $creditsDetailedSerializer0;

        if ($creditsDetailedSerializer0 === null) {
            $creditsDetailedSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\RepositoryAdvisoryCredit',
));
        }
        
        $creditsDetailed = $creditsDetailedSerializer0->serialize($creditsDetailed, $this);
        after_creditsDetailed:        $result['credits_detailed'] = $creditsDetailed;


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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Identifiers(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisory\Identifiers);
        $result = [];

        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $value = $object->value;
        after_value:        $result['value'] = $value;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Submission(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisory\Submission);
        $result = [];

        $accepted = $object->accepted;
        after_accepted:        $result['accepted'] = $accepted;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability);
        $result = [];

        $package = $object->package;

        if ($package === null) {
            goto after_package;
        }
        $package = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability⚡️Package($package);
        after_package:        $result['package'] = $package;

        
        $vulnerableVersionRange = $object->vulnerableVersionRange;

        if ($vulnerableVersionRange === null) {
            goto after_vulnerableVersionRange;
        }
        after_vulnerableVersionRange:        $result['vulnerable_version_range'] = $vulnerableVersionRange;

        
        $patchedVersions = $object->patchedVersions;

        if ($patchedVersions === null) {
            goto after_patchedVersions;
        }
        after_patchedVersions:        $result['patched_versions'] = $patchedVersions;

        
        $vulnerableFunctions = $object->vulnerableFunctions;

        if ($vulnerableFunctions === null) {
            goto after_vulnerableFunctions;
        }
        static $vulnerableFunctionsSerializer0;

        if ($vulnerableFunctionsSerializer0 === null) {
            $vulnerableFunctionsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $vulnerableFunctions = $vulnerableFunctionsSerializer0->serialize($vulnerableFunctions, $this);
        after_vulnerableFunctions:        $result['vulnerable_functions'] = $vulnerableFunctions;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryVulnerability⚡️Package(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisoryVulnerability\Package);
        $result = [];

        $ecosystem = $object->ecosystem;
        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cvss(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisory\Cvss);
        $result = [];

        $vectorString = $object->vectorString;

        if ($vectorString === null) {
            goto after_vectorString;
        }
        after_vectorString:        $result['vector_string'] = $vectorString;

        
        $score = $object->score;

        if ($score === null) {
            goto after_score;
        }
        after_score:        $result['score'] = $score;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Cwes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisory\Cwes);
        $result = [];

        $cweId = $object->cweId;
        after_cweId:        $result['cwe_id'] = $cweId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisory⚡️Credits(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisory\Credits);
        $result = [];

        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️RepositoryAdvisoryCredit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\RepositoryAdvisoryCredit);
        $result = [];

        $user = $object->user;
        $user = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($user);
        after_user:        $result['user'] = $user;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;


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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
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
  0 => 'ApiClients\\Client\\Github\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError\Errors);
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
