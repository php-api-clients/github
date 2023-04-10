<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot;

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
            'ApiClients\Client\Github\Schema\DependabotAlertWithRepository' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertPackage' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers($payload),
                'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References($payload),
                'ApiClients\Client\Github\Schema\SimpleRepository' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertWithRepository
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

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['dependency'] ?? null;

            if ($value === null) {
                $missingFields[] = 'dependency';
                goto after_dependency;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dependency';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dependency'] = $value;

            after_dependency:

            $value = $payload['security_advisory'] ?? null;

            if ($value === null) {
                $missingFields[] = 'security_advisory';
                goto after_securityAdvisory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'securityAdvisory';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['securityAdvisory'] = $value;

            after_securityAdvisory:

            $value = $payload['security_vulnerability'] ?? null;

            if ($value === null) {
                $missingFields[] = 'security_vulnerability';
                goto after_securityVulnerability;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'securityVulnerability';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['securityVulnerability'] = $value;

            after_securityVulnerability:

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

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['dismissed_at'] ?? null;

            if ($value === null) {
                $properties['dismissedAt'] = null;
                goto after_dismissedAt;
            }

            $properties['dismissedAt'] = $value;

            after_dismissedAt:

            $value = $payload['dismissed_by'] ?? null;

            if ($value === null) {
                $properties['dismissedBy'] = null;
                goto after_dismissedBy;
            }

            $properties['dismissedBy'] = $value;

            after_dismissedBy:

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

            $value = $payload['fixed_at'] ?? null;

            if ($value === null) {
                $properties['fixedAt'] = null;
                goto after_fixedAt;
            }

            $properties['fixedAt'] = $value;

            after_fixedAt:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertWithRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertWithRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertWithRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertWithRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency
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
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['package'] = $value;

            after_package:

            $value = $payload['manifest_path'] ?? null;

            if ($value === null) {
                $properties['manifestPath'] = null;
                goto after_manifestPath;
            }

            $properties['manifestPath'] = $value;

            after_manifestPath:

            $value = $payload['scope'] ?? null;

            if ($value === null) {
                $properties['scope'] = null;
                goto after_scope;
            }

            $properties['scope'] = $value;

            after_scope:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertPackage
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
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertPackage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertPackage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertPackage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertPackage', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory
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

            $value = $payload['summary'] ?? null;

            if ($value === null) {
                $missingFields[] = 'summary';
                goto after_summary;
            }

            $properties['summary'] = $value;

            after_summary:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $missingFields[] = 'description';
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['vulnerabilities'] ?? null;

            if ($value === null) {
                $missingFields[] = 'vulnerabilities';
                goto after_vulnerabilities;
            }

            static $vulnerabilitiesCaster1;

            if ($vulnerabilitiesCaster1 === null) {
                $vulnerabilitiesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityVulnerability',
));
            }

            $value = $vulnerabilitiesCaster1->cast($value, $this);

            $properties['vulnerabilities'] = $value;

            after_vulnerabilities:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $missingFields[] = 'severity';
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['cvss'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cvss';
                goto after_cvss;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'cvss';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['cvss'] = $value;

            after_cvss:

            $value = $payload['cwes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cwes';
                goto after_cwes;
            }

            static $cwesCaster1;

            if ($cwesCaster1 === null) {
                $cwesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityAdvisory\\Cwes',
));
            }

            $value = $cwesCaster1->cast($value, $this);

            $properties['cwes'] = $value;

            after_cwes:

            $value = $payload['identifiers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'identifiers';
                goto after_identifiers;
            }

            static $identifiersCaster1;

            if ($identifiersCaster1 === null) {
                $identifiersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers',
));
            }

            $value = $identifiersCaster1->cast($value, $this);

            $properties['identifiers'] = $value;

            after_identifiers:

            $value = $payload['references'] ?? null;

            if ($value === null) {
                $missingFields[] = 'references';
                goto after_references;
            }

            static $referencesCaster1;

            if ($referencesCaster1 === null) {
                $referencesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityAdvisory\\References',
));
            }

            $value = $referencesCaster1->cast($value, $this);

            $properties['references'] = $value;

            after_references:

            $value = $payload['published_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'published_at';
                goto after_publishedAt;
            }

            $properties['publishedAt'] = $value;

            after_publishedAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['withdrawn_at'] ?? null;

            if ($value === null) {
                $properties['withdrawnAt'] = null;
                goto after_withdrawnAt;
            }

            $properties['withdrawnAt'] = $value;

            after_withdrawnAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['package'] ?? null;

            if ($value === null) {
                $missingFields[] = 'package';
                goto after_package;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'package';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['package'] = $value;

            after_package:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $missingFields[] = 'severity';
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['vulnerable_version_range'] ?? null;

            if ($value === null) {
                $missingFields[] = 'vulnerable_version_range';
                goto after_vulnerableVersionRange;
            }

            $properties['vulnerableVersionRange'] = $value;

            after_vulnerableVersionRange:

            $value = $payload['first_patched_version'] ?? null;

            if ($value === null) {
                $properties['firstPatchedVersion'] = null;
                goto after_firstPatchedVersion;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'firstPatchedVersion';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['firstPatchedVersion'] = $value;

            after_firstPatchedVersion:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['identifier'] ?? null;

            if ($value === null) {
                $missingFields[] = 'identifier';
                goto after_identifier;
            }

            $properties['identifier'] = $value;

            after_identifier:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['score'] ?? null;

            if ($value === null) {
                $missingFields[] = 'score';
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:

            $value = $payload['vector_string'] ?? null;

            if ($value === null) {
                $properties['vectorString'] = null;
                goto after_vectorString;
            }

            $properties['vectorString'] = $value;

            after_vectorString:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References(array $payload): \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple(array $payload): \ApiClients\Client\Github\Schema\ValidationErrorSimple
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

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationErrorSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\DependabotAlertWithRepository' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository($object),
            'ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($object),
            'ApiClients\Client\Github\Schema\DependabotAlertPackage' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers($object),
            'ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References($object),
            'ApiClients\Client\Github\Schema\SimpleRepository' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($object),
            'ApiClients\Client\Github\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\Github\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertWithRepository);
        $result = [];

        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $dependency = $object->dependency;
        $dependency = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($dependency);
        after_dependency:        $result['dependency'] = $dependency;

        
        $securityAdvisory = $object->securityAdvisory;
        $securityAdvisory = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory($securityAdvisory);
        after_securityAdvisory:        $result['security_advisory'] = $securityAdvisory;

        
        $securityVulnerability = $object->securityVulnerability;
        $securityVulnerability = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability($securityVulnerability);
        after_securityVulnerability:        $result['security_vulnerability'] = $securityVulnerability;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $dismissedAt = $object->dismissedAt;

        if ($dismissedAt === null) {
            goto after_dismissedAt;
        }
        after_dismissedAt:        $result['dismissed_at'] = $dismissedAt;

        
        $dismissedBy = $object->dismissedBy;

        if ($dismissedBy === null) {
            goto after_dismissedBy;
        }
        after_dismissedBy:        $result['dismissed_by'] = $dismissedBy;

        
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

        
        $fixedAt = $object->fixedAt;

        if ($fixedAt === null) {
            goto after_fixedAt;
        }
        after_fixedAt:        $result['fixed_at'] = $fixedAt;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleRepository($repository);
        after_repository:        $result['repository'] = $repository;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency);
        $result = [];

        $package = $object->package;

        if ($package === null) {
            goto after_package;
        }
        $package = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($package);
        after_package:        $result['package'] = $package;

        
        $manifestPath = $object->manifestPath;

        if ($manifestPath === null) {
            goto after_manifestPath;
        }
        after_manifestPath:        $result['manifest_path'] = $manifestPath;

        
        $scope = $object->scope;

        if ($scope === null) {
            goto after_scope;
        }
        after_scope:        $result['scope'] = $scope;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertPackage);
        $result = [];

        $ecosystem = $object->ecosystem;
        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory);
        $result = [];

        $ghsaId = $object->ghsaId;
        after_ghsaId:        $result['ghsa_id'] = $ghsaId;

        
        $cveId = $object->cveId;

        if ($cveId === null) {
            goto after_cveId;
        }
        after_cveId:        $result['cve_id'] = $cveId;

        
        $summary = $object->summary;
        after_summary:        $result['summary'] = $summary;

        
        $description = $object->description;
        after_description:        $result['description'] = $description;

        
        $vulnerabilities = $object->vulnerabilities;
        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityVulnerability',
));
        }
        
        $vulnerabilities = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        
        $severity = $object->severity;
        after_severity:        $result['severity'] = $severity;

        
        $cvss = $object->cvss;
        $cvss = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($cvss);
        after_cvss:        $result['cvss'] = $cvss;

        
        $cwes = $object->cwes;
        static $cwesSerializer0;

        if ($cwesSerializer0 === null) {
            $cwesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityAdvisory\\Cwes',
));
        }
        
        $cwes = $cwesSerializer0->serialize($cwes, $this);
        after_cwes:        $result['cwes'] = $cwes;

        
        $identifiers = $object->identifiers;
        static $identifiersSerializer0;

        if ($identifiersSerializer0 === null) {
            $identifiersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers',
));
        }
        
        $identifiers = $identifiersSerializer0->serialize($identifiers, $this);
        after_identifiers:        $result['identifiers'] = $identifiers;

        
        $references = $object->references;
        static $referencesSerializer0;

        if ($referencesSerializer0 === null) {
            $referencesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DependabotAlertSecurityAdvisory\\References',
));
        }
        
        $references = $referencesSerializer0->serialize($references, $this);
        after_references:        $result['references'] = $references;

        
        $publishedAt = $object->publishedAt;
        after_publishedAt:        $result['published_at'] = $publishedAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $withdrawnAt = $object->withdrawnAt;

        if ($withdrawnAt === null) {
            goto after_withdrawnAt;
        }
        after_withdrawnAt:        $result['withdrawn_at'] = $withdrawnAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability);
        $result = [];

        $package = $object->package;
        $package = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertPackage($package);
        after_package:        $result['package'] = $package;

        
        $severity = $object->severity;
        after_severity:        $result['severity'] = $severity;

        
        $vulnerableVersionRange = $object->vulnerableVersionRange;
        after_vulnerableVersionRange:        $result['vulnerable_version_range'] = $vulnerableVersionRange;

        
        $firstPatchedVersion = $object->firstPatchedVersion;

        if ($firstPatchedVersion === null) {
            goto after_firstPatchedVersion;
        }
        $firstPatchedVersion = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($firstPatchedVersion);
        after_firstPatchedVersion:        $result['first_patched_version'] = $firstPatchedVersion;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion);
        $result = [];

        $identifier = $object->identifier;
        after_identifier:        $result['identifier'] = $identifier;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cvss);
        $result = [];

        $score = $object->score;
        after_score:        $result['score'] = $score;

        
        $vectorString = $object->vectorString;

        if ($vectorString === null) {
            goto after_vectorString;
        }
        after_vectorString:        $result['vector_string'] = $vectorString;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes);
        $result = [];

        $cweId = $object->cweId;
        after_cweId:        $result['cwe_id'] = $cweId;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers);
        $result = [];

        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $value = $object->value;
        after_value:        $result['value'] = $value;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;


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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationErrorSimple);
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
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


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
