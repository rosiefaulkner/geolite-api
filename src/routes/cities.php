<?php
use GeoIp2\Database\Reader;
require '../vendor/autoload.php';

// This creates the Reader object, which should be reused across
// lookups.
$reader = new Reader('/src/geolite/cities.mmdb');

// Replace "city" with the appropriate method for your database, e.g.,
// "country".
$record = $reader->city('128.101.101.101');

print($record->country->isoCode . "\n"); // 'US'
print($record->country->name . "\n"); // 'United States'
print($record->country->names['zh-CN'] . "\n"); // '美国'

print($record->mostSpecificSubdivision->name . "\n"); // 'Minnesota'
print($record->mostSpecificSubdivision->isoCode . "\n"); // 'MN'

print($record->city->name . "\n"); // 'Minneapolis'

print($record->postal->code . "\n"); // '55455'

print($record->location->latitude . "\n"); // 44.9733
print($record->location->longitude . "\n"); // -93.2323

print($record->traits->network . "\n"); // '128.101.101.101/32'
