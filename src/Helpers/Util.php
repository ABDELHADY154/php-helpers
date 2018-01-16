<?php
/**
 * Helper class that provides easy access to useful common php functions.
 *
 * @author      Claus Bayer <claus.bayer@gmail.com>
 * @version     1.0
 * @link        https://github.com/clausnz/php-helpers
 * @license     MIT
 *
 */

namespace CNZ\Helpers;

/**
 * Helper class that provides easy access to useful common php functions.
 *
 * Class Util
 *
 * @package CNZ\Helpers
 */
class Util
{
    /**
     * Holds the value of $localhost
     *
     * @codeCoverageIgnore
     * @ignore
     */
    const LOCALHOST = '127.0.0.1';

    /**
     * Only for testing.
     *
     * @codeCoverageIgnore
     * @ignore
     */
    private static $cli;

    /**
     * Validate a given email address.
     *
     * ### is_email
     * Related global function (description see above).
     *
     * > #### [( jump back )](#available-php-functions)
     *
     * ```php
     * is_email( string $email ): boolean
     * ```
     *
     * #### Example
     * ```php
     * $email = 'foobar@example.com';
     *
     * echo is_email( $email ) ? 'true' : 'false';
     *
     * // true
     * ```
     *
     * @param string $email
     * The email address to test.
     *
     * @return boolean
     * True if given string is a valid email address, false otherwise.
     */
    public static function isEmail($email)
    {
        return (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) ? true : false;
    }

    /**
     * Get the current ip address of the user.
     *
     * ### user_ip
     * Related global function (description see above).
     *
     * > #### [( jump back )](#available-php-functions)
     *
     * ```php
     * ip(  ): null|string
     * ```
     *
     * #### Example
     * ```php
     * echo ip();
     *
     * // 127.0.0.1
     * ```
     *
     * @return null|string
     * The detected ip address, null if the ip was not detected.
     */
    public static function ip()
    {
        if (php_sapi_name() == 'cli' && self::$cli) {
            return self::LOCALHOST;
        }

        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
    }

    /**
     * Set if the script is cli. For testing only.
     *
     * @codeCoverageIgnore
     * @ignore
     *
     * @param bool $cli
     * True or false.
     */
    public static function setCli($cli = true)
    {
        self::$cli = $cli;
    }

    /**
     * Creates a secure hash from a given password. Uses the CRYPT_BLOWFISH algorithm.
     * Note: 255 characters for database column recommended!
     *
     * ### crypt_password
     * Related global function (description see above).
     *
     * > #### [( jump back )](#available-php-functions)
     *
     * ```php
     * crypt_password( string $password ): string
     * ```
     *
     * #### Example
     * ```php
     * $password = 'foobar';
     *
     * echo crypt_password( $password );
     *
     * // $2y$10$6qKwbwTgwQNcmcaw04eSf.QpP3.4T0..bEnY62dd1ozM8L61nb8AC
     * ```
     *
     * @param string $password
     * The password to crypt.
     *
     * @return string
     * The crypted password.
     */
    public static function cryptPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * Verifies that a password matches a crypted password (CRYPT_BLOWFISH algorithm).
     *
     * ### is_password
     * Related global function (description see above).
     *
     * > #### [( jump back )](#available-php-functions)
     *
     * ```php
     * is_password( string $password, string $cryptedPassword ): boolean
     * ```
     *
     * #### Example
     * ```php
     * $password = 'foobar';
     * $cryptedPassword = '$2y$10$6qKwbwTgwQNcmcaw04eSf.QpP3.4T0..bEnY62dd1ozM8L61nb8AC';
     *
     * echo is_password( $password, $cryptedPassword ) ? 'true' : 'false';
     *
     * // true
     * ```
     *
     * @param string $password
     * @param string $cryptedPassword
     *
     * @return boolean
     */
    public static function isPassword($password, $cryptedPassword)
    {
        return password_verify($password, $cryptedPassword);
    }

    /**
     * Dumps the content of the given variable and exits the script.
     *
     * ### dd
     * Related global function (description see above).
     *
     * > #### [( jump back )](#available-php-functions)
     *
     * ```php
     * dd( mixed $var )
     * ```
     *
     * #### Example
     * ```php
     * $array = [
     *      'foo' => 'bar',
     *      'baz' => 'qux'
     * ];
     *
     * dd( $array );
     *
     * // (
     *      [foo] => bar
     *      [baz] => qux
     * )
     * ```
     *
     * @codeCoverageIgnore
     *
     * @param mixed $var
     * The var to dump out.
     */
    public static function dd($var)
    {
        self::dump($var);
        die();
    }

    /**
     * Dumps the content of the given variable. Script does NOT stop after call.
     *
     * ### dump
     * Related global function (description see above).
     *
     * > #### [( jump back )](#available-php-functions)
     *
     * ```php
     * dump( mixed $var )
     * ```
     *
     * #### Example
     * ```php
     * $array = [
     *      'foo' => 'bar',
     *      'baz' => 'qux'
     * ];
     *
     * dump( $array );
     *
     * // (
     *      [foo] => bar
     *      [baz] => qux
     * )
     * ```
     *
     * @codeCoverageIgnore
     *
     * @param mixed $var
     * The var to dump out.
     */
    public static function dump($var)
    {
        if (php_sapi_name() == 'cli') {
            print_r($var);
        } else {
            highlight_string("<?php\n" . var_export($var, true));
        }
    }
}