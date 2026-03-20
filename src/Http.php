<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Foundation\Testing\Test_Case;
use Illuminate\Testing\Test_Response;
/**
 * Define additional headers to be sent with the request.
 *
 * @return TestCase
 */
function with_headers(array $headers)
{
    return test()->with_headers(...func_get_args());
}
/**
 * Add a header to be sent with the request.
 *
 * @return TestCase
 */
function with_header(string $name, string $value)
{
    return test()->with_header(...func_get_args());
}
/**
 *  Add an authorization token for the request.
 *
 * @return TestCase
 */
function with_token(string $token, string $type = 'Bearer')
{
    return test()->with_token(...func_get_args());
}
/**
 * Add a basic authentication header to the request with the given credentials.
 *
 * @return TestCase
 */
function with_basic_auth(string $username, string $password)
{
    return test()->with_basic_auth(...func_get_args());
}
/**
 *  Remove the authorization token from the request.
 *
 * @return TestCase
 */
function without_token()
{
    return test()->without_token();
}
/**
 * Flush all the configured headers.
 *
 * @return TestCase
 */
function flush_headers()
{
    return test()->flush_headers(...func_get_args());
}
/**
 * Define a set of server variables to be sent with the requests.
 *
 * @return TestCase
 */
function with_server_variables(array $server)
{
    return test()->with_server_variables(...func_get_args());
}
/**
 * Disable middleware for the test.
 *
 * @param  string|array|null  $middleware
 * @return TestCase
 */
function without_middleware($middleware = null)
{
    return test()->without_middleware(...func_get_args());
}
/**
 * Enable the given middleware for the test.
 *
 * @param  string|array|null  $middleware
 * @return TestCase
 */
function with_middleware($middleware = null)
{
    return test()->with_middleware(...func_get_args());
}
/**
 * Define additional cookies to be sent with the request.
 *
 * @return TestCase
 */
function with_cookies(array $cookies)
{
    return test()->with_cookies(...func_get_args());
}
/**
 * Add a cookie to be sent with the request.
 *
 * @return TestCase
 */
function with_cookie(string $name, string $value)
{
    return test()->with_cookie(...func_get_args());
}
/**
 * Define additional cookies will not be encrypted before sending with the request.
 *
 * @return TestCase
 */
function with_unencrypted_cookies(array $cookies)
{
    return test()->with_unencrypted_cookies(...func_get_args());
}
/**
 * Add a cookie will not be encrypted before sending with the request.
 *
 * @return TestCase
 */
function with_unencrypted_cookie(string $name, string $value)
{
    return test()->with_unencrypted_cookie(...func_get_args());
}
/**
 * Automatically follow any redirects returned from the response.
 *
 * @return TestCase
 */
function following_redirects()
{
    return test()->following_redirects(...func_get_args());
}
/**
 * Include cookies and authorization headers for JSON requests.
 *
 * @return TestCase
 */
function with_credentials()
{
    return test()->with_credentials(...func_get_args());
}
/**
 * Disable automatic encryption of cookie values.
 *
 * @return TestCase
 */
function disable_cookie_encryption()
{
    return test()->disable_cookie_encryption(...func_get_args());
}
/**
 * Set the referer header and previous URL session value in order to simulate a previous request.
 *
 * @return TestCase
 */
function from(string $url)
{
    return test()->from(...func_get_args());
}
/**
 * Visit the given URI with a GET request.
 *
 * @return TestResponse
 */
function get(string $uri, array $headers = [])
{
    return test()->get(...func_get_args());
}
/**
 * Visit the given URI with a GET request, expecting a JSON response.
 *
 * @return TestResponse
 */
function get_json(string $uri, array $headers = [])
{
    return test()->get_json(...func_get_args());
}
/**
 * Visit the given URI with a POST request.
 *
 * @return TestResponse
 */
function post(string $uri, array $data = [], array $headers = [])
{
    return test()->post(...func_get_args());
}
/**
 * Visit the given URI with a POST request, expecting a JSON response.
 *
 * @return TestResponse
 */
function post_json(string $uri, array $data = [], array $headers = [])
{
    return test()->post_json(...func_get_args());
}
/**
 * Visit the given URI with a PUT request.
 *
 * @return TestResponse
 */
function put(string $uri, array $data = [], array $headers = [])
{
    return test()->put(...func_get_args());
}
/**
 * Visit the given URI with a PUT request, expecting a JSON response.
 *
 * @return TestResponse
 */
function put_json(string $uri, array $data = [], array $headers = [])
{
    return test()->put_json(...func_get_args());
}
/**
 * Visit the given URI with a PATCH request.
 *
 * @return TestResponse
 */
function patch(string $uri, array $data = [], array $headers = [])
{
    return test()->patch(...func_get_args());
}
/**
 * Visit the given URI with a PATCH request, expecting a JSON response.
 *
 * @return TestResponse
 */
function patch_json(string $uri, array $data = [], array $headers = [])
{
    return test()->patch_json(...func_get_args());
}
/**
 * Visit the given URI with a DELETE request.
 *
 * @return TestResponse
 */
function delete(string $uri, array $data = [], array $headers = [])
{
    return test()->delete(...func_get_args());
}
/**
 * Visit the given URI with a DELETE request, expecting a JSON response.
 *
 * @return TestResponse
 */
function delete_json(string $uri, array $data = [], array $headers = [])
{
    return test()->delete_json(...func_get_args());
}
/**
 * Visit the given URI with a OPTIONS request.
 *
 * @return TestResponse
 */
function options(string $uri, array $data = [], array $headers = [])
{
    return test()->options(...func_get_args());
}
/**
 * Visit the given URI with a OPTIONS request, expecting a JSON response.
 *
 * @return TestResponse
 */
function options_json(string $uri, array $data = [], array $headers = [])
{
    return test()->options_json(...func_get_args());
}
/**
 * Visit the given URI with a HEAD request.
 *
 * @return TestResponse
 */
function head(string $uri, array $headers = [])
{
    return test()->head(...func_get_args());
}
/**
 * Call the given URI with a JSON request.
 *
 * @return TestResponse
 */
function json(string $method, string $uri, array $data = [], array $headers = [])
{
    return test()->json(...func_get_args());
}
/**
 * Call the given URI and return the Response.
 *
 * @return TestResponse
 */
function call(string $method, string $uri, array $parameters = [], array $cookies = [], array $files = [], array $server = [], ?string $content = null)
{
    return test()->call(...func_get_args());
}