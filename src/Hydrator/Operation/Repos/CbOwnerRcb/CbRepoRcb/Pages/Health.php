<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Health implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\PagesHealthCheck' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\PagesHealthCheck\Domain' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($payload),
                'ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck(array $payload): \ApiClients\Client\Github\Schema\PagesHealthCheck
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'domain';
                    goto after_domain;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'domain';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['domain'] = $value;
    
                after_domain:

                $value = $payload['alt_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'alt_domain';
                    goto after_alt_domain;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'alt_domain';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['alt_domain'] = $value;
    
                after_alt_domain:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PagesHealthCheck::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\PagesHealthCheck(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
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

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
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

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain(array $payload): \ApiClients\Client\Github\Schema\PagesHealthCheck\Domain
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['host'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'host';
                    goto after_host;
                }

                $properties['host'] = $value;
    
                after_host:

                $value = $payload['uri'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'uri';
                    goto after_uri;
                }

                $properties['uri'] = $value;
    
                after_uri:

                $value = $payload['nameservers'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'nameservers';
                    goto after_nameservers;
                }

                $properties['nameservers'] = $value;
    
                after_nameservers:

                $value = $payload['dns_resolves'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dns_resolves';
                    goto after_dns_resolves;
                }

                $properties['dns_resolves'] = $value;
    
                after_dns_resolves:

                $value = $payload['is_proxied'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_proxied';
                    goto after_is_proxied;
                }

                $properties['is_proxied'] = $value;
    
                after_is_proxied:

                $value = $payload['is_cloudflare_ip'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cloudflare_ip';
                    goto after_is_cloudflare_ip;
                }

                $properties['is_cloudflare_ip'] = $value;
    
                after_is_cloudflare_ip:

                $value = $payload['is_fastly_ip'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_fastly_ip';
                    goto after_is_fastly_ip;
                }

                $properties['is_fastly_ip'] = $value;
    
                after_is_fastly_ip:

                $value = $payload['is_old_ip_address'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_old_ip_address';
                    goto after_is_old_ip_address;
                }

                $properties['is_old_ip_address'] = $value;
    
                after_is_old_ip_address:

                $value = $payload['is_a_record'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_a_record';
                    goto after_is_a_record;
                }

                $properties['is_a_record'] = $value;
    
                after_is_a_record:

                $value = $payload['has_cname_record'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_cname_record';
                    goto after_has_cname_record;
                }

                $properties['has_cname_record'] = $value;
    
                after_has_cname_record:

                $value = $payload['has_mx_records_present'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_mx_records_present';
                    goto after_has_mx_records_present;
                }

                $properties['has_mx_records_present'] = $value;
    
                after_has_mx_records_present:

                $value = $payload['is_valid_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_valid_domain';
                    goto after_is_valid_domain;
                }

                $properties['is_valid_domain'] = $value;
    
                after_is_valid_domain:

                $value = $payload['is_apex_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_apex_domain';
                    goto after_is_apex_domain;
                }

                $properties['is_apex_domain'] = $value;
    
                after_is_apex_domain:

                $value = $payload['should_be_a_record'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'should_be_a_record';
                    goto after_should_be_a_record;
                }

                $properties['should_be_a_record'] = $value;
    
                after_should_be_a_record:

                $value = $payload['is_cname_to_github_user_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cname_to_github_user_domain';
                    goto after_is_cname_to_github_user_domain;
                }

                $properties['is_cname_to_github_user_domain'] = $value;
    
                after_is_cname_to_github_user_domain:

                $value = $payload['is_cname_to_pages_dot_github_dot_com'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cname_to_pages_dot_github_dot_com';
                    goto after_is_cname_to_pages_dot_github_dot_com;
                }

                $properties['is_cname_to_pages_dot_github_dot_com'] = $value;
    
                after_is_cname_to_pages_dot_github_dot_com:

                $value = $payload['is_cname_to_fastly'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cname_to_fastly';
                    goto after_is_cname_to_fastly;
                }

                $properties['is_cname_to_fastly'] = $value;
    
                after_is_cname_to_fastly:

                $value = $payload['is_pointed_to_github_pages_ip'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_pointed_to_github_pages_ip';
                    goto after_is_pointed_to_github_pages_ip;
                }

                $properties['is_pointed_to_github_pages_ip'] = $value;
    
                after_is_pointed_to_github_pages_ip:

                $value = $payload['is_non_github_pages_ip_present'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_non_github_pages_ip_present';
                    goto after_is_non_github_pages_ip_present;
                }

                $properties['is_non_github_pages_ip_present'] = $value;
    
                after_is_non_github_pages_ip_present:

                $value = $payload['is_pages_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_pages_domain';
                    goto after_is_pages_domain;
                }

                $properties['is_pages_domain'] = $value;
    
                after_is_pages_domain:

                $value = $payload['is_served_by_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_served_by_pages';
                    goto after_is_served_by_pages;
                }

                $properties['is_served_by_pages'] = $value;
    
                after_is_served_by_pages:

                $value = $payload['is_valid'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_valid';
                    goto after_is_valid;
                }

                $properties['is_valid'] = $value;
    
                after_is_valid:

                $value = $payload['reason'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reason';
                    goto after_reason;
                }

                $properties['reason'] = $value;
    
                after_reason:

                $value = $payload['responds_to_https'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'responds_to_https';
                    goto after_responds_to_https;
                }

                $properties['responds_to_https'] = $value;
    
                after_responds_to_https:

                $value = $payload['enforces_https'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforces_https';
                    goto after_enforces_https;
                }

                $properties['enforces_https'] = $value;
    
                after_enforces_https:

                $value = $payload['https_error'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'https_error';
                    goto after_https_error;
                }

                $properties['https_error'] = $value;
    
                after_https_error:

                $value = $payload['is_https_eligible'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_https_eligible';
                    goto after_is_https_eligible;
                }

                $properties['is_https_eligible'] = $value;
    
                after_is_https_eligible:

                $value = $payload['caa_error'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'caa_error';
                    goto after_caa_error;
                }

                $properties['caa_error'] = $value;
    
                after_caa_error:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\Domain', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PagesHealthCheck\Domain::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\PagesHealthCheck\Domain(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\Domain', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain(array $payload): \ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['host'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'host';
                    goto after_host;
                }

                $properties['host'] = $value;
    
                after_host:

                $value = $payload['uri'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'uri';
                    goto after_uri;
                }

                $properties['uri'] = $value;
    
                after_uri:

                $value = $payload['nameservers'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'nameservers';
                    goto after_nameservers;
                }

                $properties['nameservers'] = $value;
    
                after_nameservers:

                $value = $payload['dns_resolves'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'dns_resolves';
                    goto after_dns_resolves;
                }

                $properties['dns_resolves'] = $value;
    
                after_dns_resolves:

                $value = $payload['is_proxied'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_proxied';
                    goto after_is_proxied;
                }

                $properties['is_proxied'] = $value;
    
                after_is_proxied:

                $value = $payload['is_cloudflare_ip'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cloudflare_ip';
                    goto after_is_cloudflare_ip;
                }

                $properties['is_cloudflare_ip'] = $value;
    
                after_is_cloudflare_ip:

                $value = $payload['is_fastly_ip'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_fastly_ip';
                    goto after_is_fastly_ip;
                }

                $properties['is_fastly_ip'] = $value;
    
                after_is_fastly_ip:

                $value = $payload['is_old_ip_address'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_old_ip_address';
                    goto after_is_old_ip_address;
                }

                $properties['is_old_ip_address'] = $value;
    
                after_is_old_ip_address:

                $value = $payload['is_a_record'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_a_record';
                    goto after_is_a_record;
                }

                $properties['is_a_record'] = $value;
    
                after_is_a_record:

                $value = $payload['has_cname_record'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_cname_record';
                    goto after_has_cname_record;
                }

                $properties['has_cname_record'] = $value;
    
                after_has_cname_record:

                $value = $payload['has_mx_records_present'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_mx_records_present';
                    goto after_has_mx_records_present;
                }

                $properties['has_mx_records_present'] = $value;
    
                after_has_mx_records_present:

                $value = $payload['is_valid_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_valid_domain';
                    goto after_is_valid_domain;
                }

                $properties['is_valid_domain'] = $value;
    
                after_is_valid_domain:

                $value = $payload['is_apex_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_apex_domain';
                    goto after_is_apex_domain;
                }

                $properties['is_apex_domain'] = $value;
    
                after_is_apex_domain:

                $value = $payload['should_be_a_record'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'should_be_a_record';
                    goto after_should_be_a_record;
                }

                $properties['should_be_a_record'] = $value;
    
                after_should_be_a_record:

                $value = $payload['is_cname_to_github_user_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cname_to_github_user_domain';
                    goto after_is_cname_to_github_user_domain;
                }

                $properties['is_cname_to_github_user_domain'] = $value;
    
                after_is_cname_to_github_user_domain:

                $value = $payload['is_cname_to_pages_dot_github_dot_com'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cname_to_pages_dot_github_dot_com';
                    goto after_is_cname_to_pages_dot_github_dot_com;
                }

                $properties['is_cname_to_pages_dot_github_dot_com'] = $value;
    
                after_is_cname_to_pages_dot_github_dot_com:

                $value = $payload['is_cname_to_fastly'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_cname_to_fastly';
                    goto after_is_cname_to_fastly;
                }

                $properties['is_cname_to_fastly'] = $value;
    
                after_is_cname_to_fastly:

                $value = $payload['is_pointed_to_github_pages_ip'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_pointed_to_github_pages_ip';
                    goto after_is_pointed_to_github_pages_ip;
                }

                $properties['is_pointed_to_github_pages_ip'] = $value;
    
                after_is_pointed_to_github_pages_ip:

                $value = $payload['is_non_github_pages_ip_present'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_non_github_pages_ip_present';
                    goto after_is_non_github_pages_ip_present;
                }

                $properties['is_non_github_pages_ip_present'] = $value;
    
                after_is_non_github_pages_ip_present:

                $value = $payload['is_pages_domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_pages_domain';
                    goto after_is_pages_domain;
                }

                $properties['is_pages_domain'] = $value;
    
                after_is_pages_domain:

                $value = $payload['is_served_by_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_served_by_pages';
                    goto after_is_served_by_pages;
                }

                $properties['is_served_by_pages'] = $value;
    
                after_is_served_by_pages:

                $value = $payload['is_valid'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_valid';
                    goto after_is_valid;
                }

                $properties['is_valid'] = $value;
    
                after_is_valid:

                $value = $payload['reason'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reason';
                    goto after_reason;
                }

                $properties['reason'] = $value;
    
                after_reason:

                $value = $payload['responds_to_https'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'responds_to_https';
                    goto after_responds_to_https;
                }

                $properties['responds_to_https'] = $value;
    
                after_responds_to_https:

                $value = $payload['enforces_https'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enforces_https';
                    goto after_enforces_https;
                }

                $properties['enforces_https'] = $value;
    
                after_enforces_https:

                $value = $payload['https_error'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'https_error';
                    goto after_https_error;
                }

                $properties['https_error'] = $value;
    
                after_https_error:

                $value = $payload['is_https_eligible'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'is_https_eligible';
                    goto after_is_https_eligible;
                }

                $properties['is_https_eligible'] = $value;
    
                after_is_https_eligible:

                $value = $payload['caa_error'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'caa_error';
                    goto after_caa_error;
                }

                $properties['caa_error'] = $value;
    
                after_caa_error:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PagesHealthCheck\AltDomain', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\Github\Schema\PagesHealthCheck' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PagesHealthCheck);
        $result = [];
        
        $domain = $object->domain;

        if ($domain === null) {
            goto after_domain;
        }
        $domain = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️Domain($domain);
        after_domain:        $result['domain'] = $domain;

        
        $alt_domain = $object->alt_domain;

        if ($alt_domain === null) {
            goto after_alt_domain;
        }
        $alt_domain = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PagesHealthCheck⚡️AltDomain($alt_domain);
        after_alt_domain:        $result['alt_domain'] = $alt_domain;


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
