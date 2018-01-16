# About

A Collection of 32 useful php helper functions.

[![Build Status](https://travis-ci.org/clausnz/php-helpers.svg?branch=master)](https://travis-ci.org/clausnz/php-helpers)

# Install

```php
todo
```
# Available PHP Functions

## Table of Contents

* [Device](#is_mobile)
    * [is_mobile](#is_mobile)
    * [is_smartphone](#is_smartphone)
    * [is_tablet](#is_tablet)
    * [is_desktop](#is_desktop)
    * [is_robot](#is_robot)
    * [is_ios](#is_ios)
    * [is_android](#is_android)
    * [is_iphone](#is_iphone)
    * [is_samsung](#is_samsung)
* [Array](#array_first)
    * [array_first](#array_first)
    * [array_last](#array_last)
    * [to_array](#to_array)
    * [to_object](#to_object)
    * [is_assoc](#is_assoc)
* [String](#str_before)
    * [str_before](#str_before)
    * [str_after](#str_after)
    * [str_between](#str_between)
    * [str_insert](#str_insert)
    * [str_limit](#str_limit)
    * [str_limit_words](#str_limit_words)
    * [str_contains](#str_contains)
    * [str_icontains](#str_icontains)
    * [str_starts_with](#str_starts_with)
    * [str_istarts_with](#str_istarts_with)
    * [str_ends_with](#str_ends_with)
    * [str_iends_with](#str_iends_with)
* [Utils](#ip)
    * [ip](#ip)
    * [is_email](#is_email)
    * [dump](#dump)
    * [dd](#dd)
    * [crypt_password](#crypt_password)
    * [is_password](#is_password)
# API Documentation

## Table of Contents

* [Arr](#arr)
    * [isAssoc](#isassoc)
    * [toObject](#toobject)
    * [toArray](#toarray)
    * [first](#first)
    * [last](#last)
* [Dev](#dev)
    * [isSmartphone](#issmartphone)
    * [isMobile](#ismobile)
    * [mobileDetect](#mobiledetect)
    * [isTablet](#istablet)
    * [isDesktop](#isdesktop)
    * [isRobot](#isrobot)
    * [crawlerDetect](#crawlerdetect)
    * [isAndroid](#isandroid)
    * [isIphone](#isiphone)
    * [isSamsung](#issamsung)
    * [isIOS](#isios)
* [Str](#str)
    * [insert](#insert)
    * [between](#between)
    * [after](#after)
    * [before](#before)
    * [limitWords](#limitwords)
    * [limit](#limit)
    * [contains](#contains)
    * [containsIgnoreCase](#containsignorecase)
    * [startsWith](#startswith)
    * [startsWithIgnoreCase](#startswithignorecase)
    * [endsWith](#endswith)
    * [endsWithIgnoreCase](#endswithignorecase)
* [Util](#util)
    * [isEmail](#isemail)
    * [ip](#ip)
    * [cryptPassword](#cryptpassword)
    * [isPassword](#ispassword)
    * [dd](#dd)
    * [dump](#dump)

## Arr

Helper class that provides easy access to useful php array functions.

Class Arr

* Full name: \CNZ\Helpers\Arr


### isAssoc

Detects if the given value is an associative array.

```php
Arr::isAssoc( array $array ): boolean
```

### is_assoc
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_assoc( array $array ): boolean
```

#### Example
```php
$array = [
    'foo' => 'bar'
];

echo is_assoc( $array ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | Any type of array. |


**Return Value:**

True if the array is associative, false otherwise.



---

### toObject

Converts an array to an object.

```php
Arr::toObject( array $array ): object
```

### to_object
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
to_object( array $array ): object
```

#### Example
```php
$array = [
    'foo' => [
         'bar' => 'baz'
    ]
];

$obj = to_object($array);
echo $obj->foo->bar;

// baz
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | The array to be converted. |


**Return Value:**

A std object representation of the converted array.



---

### toArray

Converts a string or an object to an array.

```php
Arr::toArray(  $var ): mixed
```

### to_array
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
to_array( object $object ): array
```

#### Example
```php
$var = 'php';
dump( $var );

// (
     [0] => p
     [1] => h
     [2] => p
)

$var = new stdClass;
$var->foo = 'bar';
dump( $var );

// (
     [foo] => bar
)
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **** | Array or string. |


**Return Value:**

An array representation of the converted string or object.
Returns null if $var is no a string or array.



---

### first

Returns the first element of an array.

```php
Arr::first( array $array ): mixed
```

### array_first
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
array_first( array $array ): mixed
```

#### Example
```php
$array = [
     'foo' => 'bar',
     'baz' => 'qux'
];

dump( array_first( $array ) )

// bar
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | The concerned array. |


**Return Value:**

The value of the first element, without key. Mixed type.



---

### last

Returns the last element of an array.

```php
Arr::last( array $array ): mixed
```

### array_last
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
array_last( array $array ): mixed
```

#### Example
```php
$array = [
     'foo' => 'bar',
     'baz' => 'qux'
];

dump( array_last( $array ) )

// qux
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | The concerned array. |


**Return Value:**

The value of the last element, without key. Mixed type.



---

## Dev

Helper class that provides easy access to useful php functions in conjunction with the user agent.

Class Dev

* Full name: \CNZ\Helpers\Dev


### isSmartphone

Determes if the current device is a smartphone.

```php
Dev::isSmartphone(  ): boolean
```

### is_smartphone
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_smartphone(  ): boolean
```

#### Example
```php
if ( is_smartphone() ) {
     // I am a smartphone
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses a smartphone, false otherwise.



---

### isMobile

Detects if the current visitor uses a mobile device (Smartphone/Tablet/Handheld).

```php
Dev::isMobile(  ): boolean
```

### is_mobile
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_mobile(  ): boolean
```

#### Example
```php
if ( is_mobile() ) {
     // I am a mobile device (smartphone/tablet or handheld)
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses a mobile device, false otherwise.



---

### mobileDetect

Get a singleton MobileDetect object to call every method it provides.

```php
Dev::mobileDetect(  ): \Detection\MobileDetect
```

Public access for use of outside this class.
Mobile_Detect doku: https://github.com/serbanghita/Mobile-Detect

***This method has no related global function!***
> #### [( jump back )](#available-php-functions)

#### Example
```php
echo Dev::mobileDetect()->version('Android');

// 8.1
```

* This method is **static**.

**Return Value:**

A singleton MobileDetect object to call every method it provides.



---

### isTablet

Determes if the current visitor uses a tablet device.

```php
Dev::isTablet(  ): boolean
```

### is_tablet
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_tablet(  ): boolean
```

#### Example
```php
if ( is_tablet() ) {
     // I am a tablet
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses a tablet device, false otherwise.



---

### isDesktop

Determes if the current visitor uses a desktop computer.

```php
Dev::isDesktop(  ): boolean
```

### is_desktop
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_desktop(  ): boolean
```

#### Example
```php
if ( is_desktop() ) {
     // I am a desktop computer (Mac, Linux, Windows)
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses a desktop computer, false otherwise.



---

### isRobot

Determes if the current visitor is a search engine/bot/crawler/spider.

```php
Dev::isRobot(  ): boolean
```

### is_robot
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_robot(  ): boolean
```

#### Example
```php
if ( is_robot() ) {
     // I am a robot (search engine, bot, crawler, spider)
}
```

* This method is **static**.



---

### crawlerDetect

Get a singleton CrawlerDetect object to call every method it provides.

```php
Dev::crawlerDetect(  ): \Jaybizzle\CrawlerDetect\CrawlerDetect
```

Public access for use of outside this class.
Crawler-Detect doku: https://github.com/JayBizzle/Crawler-Detect

***This method has no related global function!***

> #### [( jump back )](#available-php-functions)

#### Example
```php
echo Dev::crawlerDetect()->getMatches();

// Output the name of the bot that matched (if any)
```

* This method is **static**.



---

### isAndroid

Determes if the current device is running an Android operating system.

```php
Dev::isAndroid(  ): boolean
```

### is_android
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_android(  ): boolean
```

#### Example
```php
if ( is_android() ) {
     // I am an Android based device
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses an Android based device, false otherwise.



---

### isIphone

Determes if the current device is an iPhone.

```php
Dev::isIphone(  ): boolean
```

### is_iphone
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_iphone(  ): boolean
```

#### Example
```php
if ( is_iphone() ) {
     // I am an iPhone
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses an iPhone, false otherwise.



---

### isSamsung

Determes if the current device is from Samsung.

```php
Dev::isSamsung(  ): boolean
```

### is_samsung
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_samsung(  ): boolean
```

#### Example
```php
if ( is_samsung() ) {
     // I am a device from Samsung
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses a Samsung device, false otherwise.



---

### isIOS

Determes if the current device is running an iOS operating system.

```php
Dev::isIOS(  ): boolean
```

### is_ios
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
is_ios(  ): boolean
```

#### Example
```php
if ( is_ios() ) {
     // I am an iOS based device
}
```

* This method is **static**.

**Return Value:**

True if current visitor uses an iOS device, false otherwise.



---

## Str

Helper class that provides easy access to useful php string functions.

Class Str

* Full name: \CNZ\Helpers\Str


### insert

Inserts one or more strings into another string on a defined position.

```php
Str::insert( array $inserts, string $string ): string
```

### str_insert
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_insert( $string, $inserts ): array
```

#### Example
```php
$array = [
     ':name' => 'John',
     ':age' => 25
]
$string = 'But :name is older. :name is :age years old.';

echo str_insert( $array, $string );

// But John is older. John is 25 years old.
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inserts` | **array** | An associative array with key => value pairs. |
| `$string` | **string** | The text with the strings to be replaced. |


**Return Value:**

The replaced string.



---

### between

Return the content in a string between a left and right element.

```php
Str::between( string $left, string $right, string $string ): array
```

### str_between
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_between( string $left, string $right, string $string ): array
```

#### Example
```php
$string = '<tag>foo</tag>foobar<tag>bar</tag>'

dump( str_between( '<tag>', '</tag>' $string ) );

// (
     [0] => foo
     [1] => bar
)
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$left` | **string** | The left element of the string to search. |
| `$right` | **string** | The right element of the string to search. |
| `$string` | **string** | The string to search in. |


**Return Value:**

A result array with all matches of the search.



---

### after

Return the part of a string after a given value.

```php
Str::after( string $search, string $string ): string
```

### str_after
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_after( string $search, string $string ): string
```

#### Example
```php
$string = 'The quick brown fox jumps over the lazy dog';

echo str_after( 'fox' $string );

// jumps over the lazy dog
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$search` | **string** | The string to search for. |
| `$string` | **string** | The string to search in. |


**Return Value:**

The found string after the search string. Whitespaces at beginning will be removed.



---

### before

Get the part of a string before a given value.

```php
Str::before( string $search, string $string ): string
```

### str_before
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_before( string $search, string $string ): string
```

#### Example
```php
$string = 'The quick brown fox jumps over the lazy dog';

echo str_before( 'fox' $string );

// The quick brown
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$search` | **string** | The string to search for. |
| `$string` | **string** | The string to search in. |


**Return Value:**

The found string before the search string. Whitespaces at end will be removed.



---

### limitWords

Limit the number of words in a string. Put value of $end to the string end.

```php
Str::limitWords( string $string, integer $limit = 10, string $end = '...' ): string
```

### str_limit_words
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_limit_words( string $string, int $limit = 10, string $end = '...' ): string
```

#### Example
```php
$string = 'The quick brown fox jumps over the lazy dog';

echo str_limit_words( $string, 3 );

// The quick brown...
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to limit the words. |
| `$limit` | **integer** | The number of words to limit. Defaults to 10. |
| `$end` | **string** | The string to end the cut string. Defaults to '...' |


**Return Value:**

The limited string with $end at the end.



---

### limit

Limit the number of characters in a string. Put value of $end to the string end.

```php
Str::limit( string $string, integer $limit = 100, string $end = '...' ): string
```

### str_limit
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_limit( string $string, int $limit = 100, string $end = '...' ): string
```

#### Example
```php
$string = 'The quick brown fox jumps over the lazy dog';

echo str_limit( $string, 15 );

// The quick brown...
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to limit the characters. |
| `$limit` | **integer** | The number of characters to limit. |
| `$end` | **string** | The string to end the cut string. Defaults to '...' |


**Return Value:**

The limited string with $end at the end.



---

### contains

Tests if a string contains a given element

```php
Str::contains( string|array $needle, string $haystack ): boolean
```

### str_contains
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_contains( string|array $needle, string $haystack ): boolean
```

#### Example
```php
$string = 'The quick brown fox jumps over the lazy dog';
$array = [
     'cat',
     'fox'
];

echo str_contains( $array, $string ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;array** | A string or an array of strings. |
| `$haystack` | **string** | The string to search in. |


**Return Value:**

True if $needle is found, false otherwise.



---

### containsIgnoreCase

Tests if a string contains a given element. Ignore case sensitivity.

```php
Str::containsIgnoreCase( string|array $needle, string $haystack ): boolean
```

### str_icontains
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_icontains( string|array $needle, string $haystack ): boolean
```

#### Example
```php
$string = 'The quick brown fox jumps over the lazy dog';
$array = [
     'Cat',
     'Fox'
];

echo str_icontains( $array, $string ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;array** | A string or an array of strings. |
| `$haystack` | **string** | The string to search in. |


**Return Value:**

True if $needle is found, false otherwise.



---

### startsWith

Determine if a given string starts with a given substring.

```php
Str::startsWith( string|array $needle, string $haystack ): boolean
```

### str_starts_with
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_starts_with( string|array $needle, string $haystack ): boolean
```

#### Example
````php
$string = 'The quick brown fox jumps over the lazy dog';
$array = [
     'Cat',
     'The'
];

echo str_starts_with( $array, $string ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;array** | The string or array of strings to search for. |
| `$haystack` | **string** | The string to search in. |


**Return Value:**

True if $needle was found, false otherwise.



---

### startsWithIgnoreCase

Determine if a given string starts with a given substring. Ignore case sensitivity.

```php
Str::startsWithIgnoreCase( string|array $needle, string $haystack ): boolean
```

### str_istarts_with
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_istarts_with( string|array $needle, string $haystack ): boolean
```

#### Example
````php
$string = 'The quick brown fox jumps over the lazy dog';
$array = [
     'cat',
     'the'
];

echo str_istarts_with( $array, $string ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;array** | The string or array of strings to search for. |
| `$haystack` | **string** | The string to search in. |


**Return Value:**

True if $needle was found, false otherwise.



---

### endsWith

Determine if a given string ends with a given substring.

```php
Str::endsWith( string|array $needle, string $haystack ): boolean
```

### str_ends_with
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_ends_with( string|array $needle, string $haystack ): boolean
```

#### Example
````php
$string = 'The quick brown fox jumps over the lazy dog';
$array = [
     'cat',
     'dog'
];

echo str_ends_with( $array, $string ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;array** | The string or array of strings to search for. |
| `$haystack` | **string** | The string to search in. |


**Return Value:**

True if $needle was found, false otherwise.



---

### endsWithIgnoreCase

Determine if a given string ends with a given substring.

```php
Str::endsWithIgnoreCase( string|array $needle, string $haystack ): boolean
```

### str_iends_with
Related global function (description see above).

> #### [( jump back )](#available-php-functions)

```php
str_iends_with( string|array $needle, string $haystack ): boolean
```

#### Example
````php
$string = 'The quick brown fox jumps over the lazy dog';
$array = [
     'Cat',
     'Dog'
];

echo str_istarts_with( $array, $string ) ? 'true' : 'false';

// true
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;array** | The string or array of strings to search for. |
| `$haystack` | **string** | The string to search in. |


**Return Value:**

True if $needle was found, false otherwise.



---

## Util

Helper class that provides easy access to useful common php functions.

Class Util

* Full name: \CNZ\Helpers\Util


### isEmail

Validate a given email address.

```php
Util::isEmail( string $email ): boolean
```

### is_email
Related global function (description see above).
> #### [( jump back )](#available-php-functions)
```php
is_email( string $email ): boolean
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




---

### ip

Get the current ip address of the user.

```php
Util::ip( boolean $cli = false ): null|string
```

### user_ip
Related global function (description see above).
> #### [( jump back )](#available-php-functions)
```php
user_ip(  ): null|string
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cli` | **boolean** |  |




---

### cryptPassword

Creates a secure hash from a given password. Uses the CRYPT_BLOWFISH algorithm.

```php
Util::cryptPassword( string $password ): string
```

Note: 255 characters for database column recommended!

### crypt_password
Related global function (description see above).
> #### [( jump back )](#available-php-functions)
```php
crypt_password( string $password ): string
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$password` | **string** |  |




---

### isPassword

Verifies that a password matches a crypted password (CRYPT_BLOWFISH algorithm).

```php
Util::isPassword( string $password, string $cryptedPassword ): boolean
```

### is_password
Related global function (description see above).
> #### [( jump back )](#available-php-functions)
```php
is_password( string $password, string $cryptedPassword ): boolean
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$password` | **string** |  |
| `$cryptedPassword` | **string** |  |




---

### dd

Dumps the content of the given variable and exits the script.

```php
Util::dd( mixed $var )
```

### dd
Related global function (description see above).
> #### [( jump back )](#available-php-functions)
```php
dd( mixed $var )
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **mixed** |  |




---

### dump

Dumps the content of the given variable.

```php
Util::dump( mixed $var )
```

### dump
Related global function (description see above).
> #### [( jump back )](#available-php-functions)
```php
dump( mixed $var )
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **mixed** |  |




---



--------
> This document was automatically generated from source code comments on 2018-01-16 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
