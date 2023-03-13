<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbAlertNumberRcb implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\DependabotAlert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlert($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertPackage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers($payload),
                'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlert(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlert
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dependency'] = $value;

            after_dependency:

            $value = $payload['security_advisory'] ?? null;

            if ($value === null) {
                $missingFields[] = 'security_advisory';
                goto after_security_advisory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'security_advisory';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['security_advisory'] = $value;

            after_security_advisory:

            $value = $payload['security_vulnerability'] ?? null;

            if ($value === null) {
                $missingFields[] = 'security_vulnerability';
                goto after_security_vulnerability;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'security_vulnerability';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['security_vulnerability'] = $value;

            after_security_vulnerability:

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
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['dismissed_at'] ?? null;

            if ($value === null) {
                $properties['dismissed_at'] = null;
                goto after_dismissed_at;
            }

            $properties['dismissed_at'] = $value;

            after_dismissed_at:

            $value = $payload['dismissed_by'] ?? null;

            if ($value === null) {
                $properties['dismissed_by'] = null;
                goto after_dismissed_by;
            }

            $properties['dismissed_by'] = $value;

            after_dismissed_by:

            $value = $payload['dismissed_reason'] ?? null;

            if ($value === null) {
                $properties['dismissed_reason'] = null;
                goto after_dismissed_reason;
            }

            $properties['dismissed_reason'] = $value;

            after_dismissed_reason:

            $value = $payload['dismissed_comment'] ?? null;

            if ($value === null) {
                $properties['dismissed_comment'] = null;
                goto after_dismissed_comment;
            }

            $properties['dismissed_comment'] = $value;

            after_dismissed_comment:

            $value = $payload['fixed_at'] ?? null;

            if ($value === null) {
                $properties['fixed_at'] = null;
                goto after_fixed_at;
            }

            $properties['fixed_at'] = $value;

            after_fixed_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlert', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlert::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlert(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlert', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['package'] = $value;

            after_package:

            $value = $payload['manifest_path'] ?? null;

            if ($value === null) {
                $properties['manifest_path'] = null;
                goto after_manifest_path;
            }

            $properties['manifest_path'] = $value;

            after_manifest_path:

            $value = $payload['scope'] ?? null;

            if ($value === null) {
                $properties['scope'] = null;
                goto after_scope;
            }

            $properties['scope'] = $value;

            after_scope:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertPackage
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertPackage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertPackage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertPackage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertPackage', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ghsa_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ghsa_id';
                goto after_ghsa_id;
            }

            $properties['ghsa_id'] = $value;

            after_ghsa_id:

            $value = $payload['cve_id'] ?? null;

            if ($value === null) {
                $properties['cve_id'] = null;
                goto after_cve_id;
            }

            $properties['cve_id'] = $value;

            after_cve_id:

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
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability',
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($value);
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
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cwes',
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
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers',
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
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\References',
));
            }

            $value = $referencesCaster1->cast($value, $this);

            $properties['references'] = $value;

            after_references:

            $value = $payload['published_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'published_at';
                goto after_published_at;
            }

            $properties['published_at'] = $value;

            after_published_at:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['withdrawn_at'] ?? null;

            if ($value === null) {
                $properties['withdrawn_at'] = null;
                goto after_withdrawn_at;
            }

            $properties['withdrawn_at'] = $value;

            after_withdrawn_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage($value);
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
                goto after_vulnerable_version_range;
            }

            $properties['vulnerable_version_range'] = $value;

            after_vulnerable_version_range:

            $value = $payload['first_patched_version'] ?? null;

            if ($value === null) {
                $properties['first_patched_version'] = null;
                goto after_first_patched_version;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'first_patched_version';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['first_patched_version'] = $value;

            after_first_patched_version:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss
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
                $properties['vector_string'] = null;
                goto after_vector_string;
            }

            $properties['vector_string'] = $value;

            after_vector_string:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['cwe_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cwe_id';
                goto after_cwe_id;
            }

            $properties['cwe_id'] = $value;

            after_cwe_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References(array $payload): \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
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
                $properties['documentation_url'] = null;
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(array $payload): \ApiClients\Client\GitHub\Schema\ScimError
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
                $properties['documentation_url'] = null;
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['detail'] ?? null;

            if ($value === null) {
                $properties['detail'] = null;
                goto after_detail;
            }

            $properties['detail'] = $value;

            after_detail:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['scim_type'] ?? null;

            if ($value === null) {
                $properties['scimType'] = null;
                goto after_scimType;
            }

            $properties['scimType'] = $value;

            after_scimType:

            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $properties['schemas'] = null;
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ScimError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(array $payload): \ApiClients\Client\GitHub\Schema\ValidationErrorSimple
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
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationErrorSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\DependabotAlert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlert($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertPackage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers($object),
            'ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($object),
            'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlert);
        $result = [];

        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $dependency = $object->dependency;
        $dependency = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency($dependency);
        after_dependency:        $result['dependency'] = $dependency;

        
        $security_advisory = $object->security_advisory;
        $security_advisory = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory($security_advisory);
        after_security_advisory:        $result['security_advisory'] = $security_advisory;

        
        $security_vulnerability = $object->security_vulnerability;
        $security_vulnerability = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability($security_vulnerability);
        after_security_vulnerability:        $result['security_vulnerability'] = $security_vulnerability;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $dismissed_at = $object->dismissed_at;

        if ($dismissed_at === null) {
            goto after_dismissed_at;
        }
        after_dismissed_at:        $result['dismissed_at'] = $dismissed_at;

        
        $dismissed_by = $object->dismissed_by;

        if ($dismissed_by === null) {
            goto after_dismissed_by;
        }
        after_dismissed_by:        $result['dismissed_by'] = $dismissed_by;

        
        $dismissed_reason = $object->dismissed_reason;

        if ($dismissed_reason === null) {
            goto after_dismissed_reason;
        }
        after_dismissed_reason:        $result['dismissed_reason'] = $dismissed_reason;

        
        $dismissed_comment = $object->dismissed_comment;

        if ($dismissed_comment === null) {
            goto after_dismissed_comment;
        }
        after_dismissed_comment:        $result['dismissed_comment'] = $dismissed_comment;

        
        $fixed_at = $object->fixed_at;

        if ($fixed_at === null) {
            goto after_fixed_at;
        }
        after_fixed_at:        $result['fixed_at'] = $fixed_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertWithRepository⚡️Dependency(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency);
        $result = [];

        $package = $object->package;

        if ($package === null) {
            goto after_package;
        }
        $package = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage($package);
        after_package:        $result['package'] = $package;

        
        $manifest_path = $object->manifest_path;

        if ($manifest_path === null) {
            goto after_manifest_path;
        }
        after_manifest_path:        $result['manifest_path'] = $manifest_path;

        
        $scope = $object->scope;

        if ($scope === null) {
            goto after_scope;
        }
        after_scope:        $result['scope'] = $scope;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertPackage);
        $result = [];

        $ecosystem = $object->ecosystem;
        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory);
        $result = [];

        $ghsa_id = $object->ghsa_id;
        after_ghsa_id:        $result['ghsa_id'] = $ghsa_id;

        
        $cve_id = $object->cve_id;

        if ($cve_id === null) {
            goto after_cve_id;
        }
        after_cve_id:        $result['cve_id'] = $cve_id;

        
        $summary = $object->summary;
        after_summary:        $result['summary'] = $summary;

        
        $description = $object->description;
        after_description:        $result['description'] = $description;

        
        $vulnerabilities = $object->vulnerabilities;
        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability',
));
        }
        
        $vulnerabilities = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        
        $severity = $object->severity;
        after_severity:        $result['severity'] = $severity;

        
        $cvss = $object->cvss;
        $cvss = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss($cvss);
        after_cvss:        $result['cvss'] = $cvss;

        
        $cwes = $object->cwes;
        static $cwesSerializer0;

        if ($cwesSerializer0 === null) {
            $cwesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cwes',
));
        }
        
        $cwes = $cwesSerializer0->serialize($cwes, $this);
        after_cwes:        $result['cwes'] = $cwes;

        
        $identifiers = $object->identifiers;
        static $identifiersSerializer0;

        if ($identifiersSerializer0 === null) {
            $identifiersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers',
));
        }
        
        $identifiers = $identifiersSerializer0->serialize($identifiers, $this);
        after_identifiers:        $result['identifiers'] = $identifiers;

        
        $references = $object->references;
        static $referencesSerializer0;

        if ($referencesSerializer0 === null) {
            $referencesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\References',
));
        }
        
        $references = $referencesSerializer0->serialize($references, $this);
        after_references:        $result['references'] = $references;

        
        $published_at = $object->published_at;
        after_published_at:        $result['published_at'] = $published_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $withdrawn_at = $object->withdrawn_at;

        if ($withdrawn_at === null) {
            goto after_withdrawn_at;
        }
        after_withdrawn_at:        $result['withdrawn_at'] = $withdrawn_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability);
        $result = [];

        $package = $object->package;
        $package = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertPackage($package);
        after_package:        $result['package'] = $package;

        
        $severity = $object->severity;
        after_severity:        $result['severity'] = $severity;

        
        $vulnerable_version_range = $object->vulnerable_version_range;
        after_vulnerable_version_range:        $result['vulnerable_version_range'] = $vulnerable_version_range;

        
        $first_patched_version = $object->first_patched_version;

        if ($first_patched_version === null) {
            goto after_first_patched_version;
        }
        $first_patched_version = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion($first_patched_version);
        after_first_patched_version:        $result['first_patched_version'] = $first_patched_version;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityVulnerability⚡️FirstPatchedVersion(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability\FirstPatchedVersion);
        $result = [];

        $identifier = $object->identifier;
        after_identifier:        $result['identifier'] = $identifier;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cvss(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss);
        $result = [];

        $score = $object->score;
        after_score:        $result['score'] = $score;

        
        $vector_string = $object->vector_string;

        if ($vector_string === null) {
            goto after_vector_string;
        }
        after_vector_string:        $result['vector_string'] = $vector_string;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Cwes(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes);
        $result = [];

        $cwe_id = $object->cwe_id;
        after_cwe_id:        $result['cwe_id'] = $cwe_id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️Identifiers(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Identifiers);
        $result = [];

        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $value = $object->value;
        after_value:        $result['value'] = $value;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependabotAlertSecurityAdvisory⚡️References(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\References);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ScimError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $detail = $object->detail;

        if ($detail === null) {
            goto after_detail;
        }
        after_detail:        $result['detail'] = $detail;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $scimType = $object->scimType;

        if ($scimType === null) {
            goto after_scimType;
        }
        after_scimType:        $result['scim_type'] = $scimType;

        
        $schemas = $object->schemas;

        if ($schemas === null) {
            goto after_schemas;
        }
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $schemas = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationErrorSimple);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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
