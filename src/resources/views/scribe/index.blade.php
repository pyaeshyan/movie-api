<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-admin-register">
                                <a href="#endpoints-POSTapi-v1-admin-register">POST api/v1/admin/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-admin-login">
                                <a href="#endpoints-POSTapi-v1-admin-login">POST api/v1/admin/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-admin-movies-detail--movie_id-">
                                <a href="#endpoints-GETapi-v1-admin-movies-detail--movie_id-">GET api/v1/admin/movies/detail/{movie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-admin-movies-list">
                                <a href="#endpoints-GETapi-v1-admin-movies-list">GET api/v1/admin/movies/list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-admin-movies-create">
                                <a href="#endpoints-POSTapi-v1-admin-movies-create">POST api/v1/admin/movies/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-admin-movies-update--movie_id-">
                                <a href="#endpoints-POSTapi-v1-admin-movies-update--movie_id-">POST api/v1/admin/movies/update/{movie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-admin-movies--movie_id-">
                                <a href="#endpoints-DELETEapi-v1-admin-movies--movie_id-">DELETE api/v1/admin/movies/{movie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-public-movies">
                                <a href="#endpoints-GETapi-v1-public-movies">GET api/v1/public/movies</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-public-movies--movie_id-">
                                <a href="#endpoints-GETapi-v1-public-movies--movie_id-">GET api/v1/public/movies/{movie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-public-movies--movie_id--comments">
                                <a href="#endpoints-POSTapi-v1-public-movies--movie_id--comments">POST api/v1/public/movies/{movie_id}/comments</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 30, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-admin-register">POST api/v1/admin/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-admin-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"email\": \"carolyne.luettgen@example.org\",
    \"password\": \"ij-e\\/dl4m\",
    \"password_confirmation\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "email": "carolyne.luettgen@example.org",
    "password": "ij-e\/dl4m",
    "password_confirmation": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-register">
</span>
<span id="execution-results-POSTapi-v1-admin-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-register" data-method="POST"
      data-path="api/v1/admin/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-register"
                    onclick="tryItOut('POSTapi-v1-admin-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-register"
                    onclick="cancelTryOut('POSTapi-v1-admin-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-admin-register"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-admin-register"
               value="ij-e/dl4m"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>ij-e/dl4m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-v1-admin-register"
               value="consequatur"
               data-component="body">
    <br>
<p>The value and <code>password</code> must match. Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-admin-login">POST api/v1/admin/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-admin-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-login">
</span>
<span id="execution-results-POSTapi-v1-admin-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-login" data-method="POST"
      data-path="api/v1/admin/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-login"
                    onclick="tryItOut('POSTapi-v1-admin-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-login"
                    onclick="cancelTryOut('POSTapi-v1-admin-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-admin-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-admin-login"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-admin-movies-detail--movie_id-">GET api/v1/admin/movies/detail/{movie_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-admin-movies-detail--movie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/movies/detail/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/movies/detail/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-movies-detail--movie_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-movies-detail--movie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-movies-detail--movie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-movies-detail--movie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-movies-detail--movie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-movies-detail--movie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-movies-detail--movie_id-" data-method="GET"
      data-path="api/v1/admin/movies/detail/{movie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-movies-detail--movie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-movies-detail--movie_id-"
                    onclick="tryItOut('GETapi-v1-admin-movies-detail--movie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-movies-detail--movie_id-"
                    onclick="cancelTryOut('GETapi-v1-admin-movies-detail--movie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-movies-detail--movie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/movies/detail/{movie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-movies-detail--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-movies-detail--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="GETapi-v1-admin-movies-detail--movie_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-admin-movies-list">GET api/v1/admin/movies/list</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-admin-movies-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/movies/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/movies/list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-movies-list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-movies-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-movies-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-movies-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-movies-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-movies-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-movies-list" data-method="GET"
      data-path="api/v1/admin/movies/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-movies-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-movies-list"
                    onclick="tryItOut('GETapi-v1-admin-movies-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-movies-list"
                    onclick="cancelTryOut('GETapi-v1-admin-movies-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-movies-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/movies/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-movies-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-movies-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-admin-movies-create">POST api/v1/admin/movies/create</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-admin-movies-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/movies/create" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=consequatur"\
    --form "summary=consequatur"\
    --form "imdb_rating=11613.31890586"\
    --form "pdf_link=http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html"\
    --form "author_id=consequatur"\
    --form "cover_image=@/tmp/php38qDhu" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/movies/create"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'consequatur');
body.append('summary', 'consequatur');
body.append('imdb_rating', '11613.31890586');
body.append('pdf_link', 'http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html');
body.append('author_id', 'consequatur');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-movies-create">
</span>
<span id="execution-results-POSTapi-v1-admin-movies-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-movies-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-movies-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-movies-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-movies-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-movies-create" data-method="POST"
      data-path="api/v1/admin/movies/create"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-movies-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-movies-create"
                    onclick="tryItOut('POSTapi-v1-admin-movies-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-movies-create"
                    onclick="cancelTryOut('POSTapi-v1-admin-movies-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-movies-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/movies/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="summary"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover_image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="cover_image"                data-endpoint="POSTapi-v1-admin-movies-create"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>/tmp/php38qDhu</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imdb_rating</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="imdb_rating"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pdf_link</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="pdf_link"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="POSTapi-v1-admin-movies-create"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the authors table. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-v1-admin-movies-create"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-v1-admin-movies-create"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the genres table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tags</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tags[0]"                data-endpoint="POSTapi-v1-admin-movies-create"
               data-component="body">
        <input type="text" style="display: none"
               name="tags[1]"                data-endpoint="POSTapi-v1-admin-movies-create"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the tags table.</p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-admin-movies-update--movie_id-">POST api/v1/admin/movies/update/{movie_id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-admin-movies-update--movie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/movies/update/2" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=consequatur"\
    --form "summary=consequatur"\
    --form "imdb_rating=11613.31890586"\
    --form "pdf_link=http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html"\
    --form "cover_image=@/tmp/php6k6uNT" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/movies/update/2"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'consequatur');
body.append('summary', 'consequatur');
body.append('imdb_rating', '11613.31890586');
body.append('pdf_link', 'http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-movies-update--movie_id-">
</span>
<span id="execution-results-POSTapi-v1-admin-movies-update--movie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-movies-update--movie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-movies-update--movie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-movies-update--movie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-movies-update--movie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-movies-update--movie_id-" data-method="POST"
      data-path="api/v1/admin/movies/update/{movie_id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-movies-update--movie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-movies-update--movie_id-"
                    onclick="tryItOut('POSTapi-v1-admin-movies-update--movie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-movies-update--movie_id-"
                    onclick="cancelTryOut('POSTapi-v1-admin-movies-update--movie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-movies-update--movie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/movies/update/{movie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="summary"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover_image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="cover_image"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>/tmp/php6k6uNT</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imdb_rating</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="imdb_rating"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pdf_link</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="pdf_link"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value="http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://www.moore.com/dolor-dolores-minus-voluptatem-quisquam-quibusdam-sed-vel.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the authors table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the genres table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tags</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tags[0]"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               data-component="body">
        <input type="text" style="display: none"
               name="tags[1]"                data-endpoint="POSTapi-v1-admin-movies-update--movie_id-"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the tags table.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-admin-movies--movie_id-">DELETE api/v1/admin/movies/{movie_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-admin-movies--movie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/movies/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/movies/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-movies--movie_id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-movies--movie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-movies--movie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-movies--movie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-movies--movie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-movies--movie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-movies--movie_id-" data-method="DELETE"
      data-path="api/v1/admin/movies/{movie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-movies--movie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-movies--movie_id-"
                    onclick="tryItOut('DELETEapi-v1-admin-movies--movie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-movies--movie_id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-movies--movie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-movies--movie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/movies/{movie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-movies--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-movies--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="DELETEapi-v1-admin-movies--movie_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-public-movies">GET api/v1/public/movies</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-public-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/public/movies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/public/movies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-public-movies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Movies fetched successfully&quot;,
    &quot;success&quot;: true,
    &quot;movies&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Qui magnam ut.&quot;,
                &quot;summary&quot;: &quot;Repudiandae dolor voluptatem placeat nemo fuga. Dolores excepturi aliquam in in corporis impedit. Consequatur eos veniam ad nam quas id. Labore reiciendis necessitatibus amet ab eos.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00ff77?text=movies+perspiciatis&quot;,
                &quot;imdb_rating&quot;: 2.1,
                &quot;pdf_link&quot;: &quot;http://www.gleichner.net/impedit-quia-molestiae-ut-magnam-velit-ut-ratione&quot;,
                &quot;author_id&quot;: 7,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 4,
                &quot;author&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Loyal Bode DDS&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;quo&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 2,
                            &quot;genre_id&quot;: 5
                        }
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;consequuntur&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 2,
                            &quot;genre_id&quot;: 6
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;error&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 2,
                            &quot;tag_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;non&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 2,
                            &quot;tag_id&quot;: 5
                        }
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;qui&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 2,
                            &quot;tag_id&quot;: 6
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Consequatur similique aut nostrum.&quot;,
                &quot;summary&quot;: &quot;Vero iusto nihil itaque quaerat voluptatem velit. Sunt ab quia sequi voluptatem possimus nesciunt quo autem. Ad quo soluta quod amet dolores praesentium est.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/0011ee?text=movies+id&quot;,
                &quot;imdb_rating&quot;: 3.3,
                &quot;pdf_link&quot;: &quot;http://predovic.org/cumque-quam-voluptate-maxime-dignissimos-quia-labore.html&quot;,
                &quot;author_id&quot;: 8,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Devon Oberbrunner&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;voluptatem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 3,
                            &quot;genre_id&quot;: 3
                        }
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;name&quot;: &quot;aperiam&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 3,
                            &quot;genre_id&quot;: 10
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;qui&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 3,
                            &quot;tag_id&quot;: 6
                        }
                    },
                    {
                        &quot;id&quot;: 7,
                        &quot;name&quot;: &quot;nulla&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 3,
                            &quot;tag_id&quot;: 7
                        }
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;name&quot;: &quot;magnam&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 3,
                            &quot;tag_id&quot;: 10
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Nemo est beatae non.&quot;,
                &quot;summary&quot;: &quot;Dolorem deleniti ratione sint explicabo aliquid placeat incidunt magnam. Nisi ea aut id vero odio voluptatibus. Voluptatem et et voluptatum voluptatum voluptatem qui ea. Enim suscipit voluptas quo eum dicta dolores minima quos. Autem recusandae aliquam illum.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/003355?text=movies+dolorem&quot;,
                &quot;imdb_rating&quot;: 8.5,
                &quot;pdf_link&quot;: &quot;http://www.dubuque.net/nemo-ea-fuga-quam-reiciendis-a-repellat-labore.html&quot;,
                &quot;author_id&quot;: 9,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Princess Robel&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;officia&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 4,
                            &quot;genre_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;name&quot;: &quot;aperiam&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 4,
                            &quot;genre_id&quot;: 10
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;error&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 4,
                            &quot;tag_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;non&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 4,
                            &quot;tag_id&quot;: 5
                        }
                    },
                    {
                        &quot;id&quot;: 7,
                        &quot;name&quot;: &quot;nulla&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 4,
                            &quot;tag_id&quot;: 7
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Et doloribus tempore sint officia.&quot;,
                &quot;summary&quot;: &quot;Aut molestias ut sed reprehenderit. Corrupti repellat repellat sit explicabo quas. Asperiores consequuntur dicta quis.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/003366?text=movies+animi&quot;,
                &quot;imdb_rating&quot;: 2.3,
                &quot;pdf_link&quot;: &quot;http://www.gutmann.com/molestias-ipsam-vel-eos-quo.html&quot;,
                &quot;author_id&quot;: 10,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;Nia Witting&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;iure&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 5,
                            &quot;genre_id&quot;: 1
                        }
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;voluptatem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 5,
                            &quot;genre_id&quot;: 3
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;sed&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 5,
                            &quot;tag_id&quot;: 3
                        }
                    },
                    {
                        &quot;id&quot;: 4,
                        &quot;name&quot;: &quot;beatae&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 5,
                            &quot;tag_id&quot;: 4
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;non&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 5,
                            &quot;tag_id&quot;: 5
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Provident atque recusandae neque.&quot;,
                &quot;summary&quot;: &quot;Corrupti quae alias sed aut dolores quia. Eligendi nisi qui enim a blanditiis. Labore optio est nulla perferendis omnis debitis. Expedita voluptatibus quibusdam fugiat deleniti sit dicta dolore.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/0022aa?text=movies+laborum&quot;,
                &quot;imdb_rating&quot;: 2.5,
                &quot;pdf_link&quot;: &quot;https://miller.com/atque-tempora-cupiditate-debitis-omnis.html&quot;,
                &quot;author_id&quot;: 11,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 11,
                    &quot;name&quot;: &quot;Triston Hagenes&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;iure&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 6,
                            &quot;genre_id&quot;: 1
                        }
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;name&quot;: &quot;aperiam&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 6,
                            &quot;genre_id&quot;: 10
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;error&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 6,
                            &quot;tag_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;qui&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 6,
                            &quot;tag_id&quot;: 6
                        }
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;name&quot;: &quot;autem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 6,
                            &quot;tag_id&quot;: 8
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Ullam nostrum iure vitae.&quot;,
                &quot;summary&quot;: &quot;Sit dolorem excepturi accusamus consectetur cum repellendus cumque. Qui sit amet qui.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/002233?text=movies+adipisci&quot;,
                &quot;imdb_rating&quot;: 3.4,
                &quot;pdf_link&quot;: &quot;https://thiel.info/suscipit-iste-nobis-officiis-voluptas-consectetur.html&quot;,
                &quot;author_id&quot;: 12,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 12,
                    &quot;name&quot;: &quot;Miss Juliet Carter&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;quo&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 7,
                            &quot;genre_id&quot;: 5
                        }
                    },
                    {
                        &quot;id&quot;: 9,
                        &quot;name&quot;: &quot;quas&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 7,
                            &quot;genre_id&quot;: 9
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;error&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 7,
                            &quot;tag_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;sed&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 7,
                            &quot;tag_id&quot;: 3
                        }
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;name&quot;: &quot;autem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 7,
                            &quot;tag_id&quot;: 8
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Saepe harum culpa.&quot;,
                &quot;summary&quot;: &quot;Nam perferendis eum non facilis molestiae. Repudiandae repellat aut laudantium voluptate ut. Possimus beatae fugiat nihil numquam. Aut et culpa error.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00ee66?text=movies+dolor&quot;,
                &quot;imdb_rating&quot;: 1.6,
                &quot;pdf_link&quot;: &quot;https://ondricka.info/dolores-ipsum-nesciunt-ea-eos-minus.html&quot;,
                &quot;author_id&quot;: 13,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 13,
                    &quot;name&quot;: &quot;Omari Yost&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;voluptatem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 8,
                            &quot;genre_id&quot;: 3
                        }
                    },
                    {
                        &quot;id&quot;: 7,
                        &quot;name&quot;: &quot;consequatur&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 8,
                            &quot;genre_id&quot;: 7
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;sed&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 8,
                            &quot;tag_id&quot;: 3
                        }
                    },
                    {
                        &quot;id&quot;: 4,
                        &quot;name&quot;: &quot;beatae&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 8,
                            &quot;tag_id&quot;: 4
                        }
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;name&quot;: &quot;autem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 8,
                            &quot;tag_id&quot;: 8
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Porro sint dignissimos.&quot;,
                &quot;summary&quot;: &quot;Iste recusandae dolores et et. Omnis quo ad minus error. Eum veniam ut nulla tenetur dolore sed est animi. Voluptatem mollitia labore dignissimos odit quam.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/001166?text=movies+laboriosam&quot;,
                &quot;imdb_rating&quot;: 7.5,
                &quot;pdf_link&quot;: &quot;http://stoltenberg.com/impedit-tenetur-commodi-adipisci-voluptate-quia-dolor-tempora&quot;,
                &quot;author_id&quot;: 14,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 14,
                    &quot;name&quot;: &quot;Dr. Mack D&#039;Amore PhD&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;iure&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 9,
                            &quot;genre_id&quot;: 1
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;quo&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 9,
                            &quot;genre_id&quot;: 5
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;error&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 9,
                            &quot;tag_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;qui&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 9,
                            &quot;tag_id&quot;: 6
                        }
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;name&quot;: &quot;autem&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 9,
                            &quot;tag_id&quot;: 8
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Voluptates sit voluptatem cumque.&quot;,
                &quot;summary&quot;: &quot;Quo iste maxime excepturi. Et labore earum libero unde eos.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/002244?text=movies+laboriosam&quot;,
                &quot;imdb_rating&quot;: 2.8,
                &quot;pdf_link&quot;: &quot;http://www.purdy.biz/&quot;,
                &quot;author_id&quot;: 15,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 15,
                    &quot;name&quot;: &quot;Clinton Walsh&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;officia&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 10,
                            &quot;genre_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;consequuntur&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 10,
                            &quot;genre_id&quot;: 6
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 4,
                        &quot;name&quot;: &quot;beatae&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 10,
                            &quot;tag_id&quot;: 4
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;non&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 10,
                            &quot;tag_id&quot;: 5
                        }
                    },
                    {
                        &quot;id&quot;: 9,
                        &quot;name&quot;: &quot;architecto&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 10,
                            &quot;tag_id&quot;: 9
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;Recusandae repellat aut.&quot;,
                &quot;summary&quot;: &quot;Repellendus a quidem impedit et ea. Praesentium molestiae repellat ad culpa accusantium recusandae voluptatem.&quot;,
                &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00dd44?text=movies+necessitatibus&quot;,
                &quot;imdb_rating&quot;: 9.2,
                &quot;pdf_link&quot;: &quot;https://lang.com/commodi-nulla-earum-suscipit-impedit-qui.html&quot;,
                &quot;author_id&quot;: 16,
                &quot;created_by&quot;: null,
                &quot;updated_by&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;comments_count&quot;: 3,
                &quot;author&quot;: {
                    &quot;id&quot;: 16,
                    &quot;name&quot;: &quot;Landen Hagenes&quot;,
                    &quot;bio&quot;: null,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
                },
                &quot;genres&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;officia&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 11,
                            &quot;genre_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;quo&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 11,
                            &quot;genre_id&quot;: 5
                        }
                    }
                ],
                &quot;tags&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;error&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 11,
                            &quot;tag_id&quot;: 2
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;non&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 11,
                            &quot;tag_id&quot;: 5
                        }
                    },
                    {
                        &quot;id&quot;: 9,
                        &quot;name&quot;: &quot;architecto&quot;,
                        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;movie_id&quot;: 11,
                            &quot;tag_id&quot;: 9
                        }
                    }
                ]
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/v1/public/movies?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 3,
        &quot;last_page_url&quot;: &quot;http://localhost/api/v1/public/movies?page=3&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/public/movies?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/public/movies?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/public/movies?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/public/movies?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost/api/v1/public/movies?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost/api/v1/public/movies&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 23
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-public-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-public-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-public-movies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-public-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-public-movies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-public-movies" data-method="GET"
      data-path="api/v1/public/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-public-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-public-movies"
                    onclick="tryItOut('GETapi-v1-public-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-public-movies"
                    onclick="cancelTryOut('GETapi-v1-public-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-public-movies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/public/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-public-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-public-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-public-movies--movie_id-">GET api/v1/public/movies/{movie_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-public-movies--movie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/public/movies/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/public/movies/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-public-movies--movie_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Movie fetched successfully&quot;,
    &quot;success&quot;: true,
    &quot;movie&quot;: {
        &quot;id&quot;: 2,
        &quot;title&quot;: &quot;Qui magnam ut.&quot;,
        &quot;summary&quot;: &quot;Repudiandae dolor voluptatem placeat nemo fuga. Dolores excepturi aliquam in in corporis impedit. Consequatur eos veniam ad nam quas id. Labore reiciendis necessitatibus amet ab eos.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00ff77?text=movies+perspiciatis&quot;,
        &quot;imdb_rating&quot;: 2.1,
        &quot;pdf_link&quot;: &quot;http://www.gleichner.net/impedit-quia-molestiae-ut-magnam-velit-ut-ratione&quot;,
        &quot;author_id&quot;: 7,
        &quot;created_by&quot;: null,
        &quot;updated_by&quot;: null,
        &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
        &quot;author&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Loyal Bode DDS&quot;,
            &quot;bio&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
        },
        &quot;genres&quot;: [
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;quo&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;movie_id&quot;: 2,
                    &quot;genre_id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;consequuntur&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;movie_id&quot;: 2,
                    &quot;genre_id&quot;: 6
                }
            }
        ],
        &quot;tags&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;error&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;movie_id&quot;: 2,
                    &quot;tag_id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;non&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;movie_id&quot;: 2,
                    &quot;tag_id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;qui&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;movie_id&quot;: 2,
                    &quot;tag_id&quot;: 6
                }
            }
        ],
        &quot;comments&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;movie_id&quot;: 2,
                &quot;name&quot;: &quot;Dr. Afton Will III&quot;,
                &quot;email&quot;: &quot;therese26@example.net&quot;,
                &quot;comment&quot;: &quot;Sit a ea voluptatum non laborum placeat tempore.&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;movie_id&quot;: 2,
                &quot;name&quot;: &quot;Dr. Buster Gutkowski DVM&quot;,
                &quot;email&quot;: &quot;king.nyasia@example.org&quot;,
                &quot;comment&quot;: &quot;Aut impedit qui dolores illo.&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;movie_id&quot;: 2,
                &quot;name&quot;: &quot;Jayde Lubowitz&quot;,
                &quot;email&quot;: &quot;tiana60@example.org&quot;,
                &quot;comment&quot;: &quot;Et sapiente doloremque cupiditate id.&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            },
            {
                &quot;id&quot;: 61,
                &quot;movie_id&quot;: 2,
                &quot;name&quot;: &quot;adfafd&quot;,
                &quot;email&quot;: &quot;fasdf@jkljio.com&quot;,
                &quot;comment&quot;: &quot;fasdfasd&quot;,
                &quot;created_at&quot;: &quot;2025-07-30T06:50:15.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T06:50:15.000000Z&quot;
            }
        ]
    },
    &quot;related_movies&quot;: [
        {
            &quot;id&quot;: 15,
            &quot;title&quot;: &quot;Est sit qui.&quot;,
            &quot;summary&quot;: &quot;Quas voluptatem ipsam velit voluptatem officia ullam labore. Dolorem aut voluptatem dolorum vel est. Molestias sit sapiente in fugit. Aliquid rerum velit inventore asperiores.&quot;,
            &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00eecc?text=movies+quaerat&quot;,
            &quot;imdb_rating&quot;: 9.3,
            &quot;pdf_link&quot;: &quot;http://www.towne.com/&quot;,
            &quot;author_id&quot;: 20,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;consequatur&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 15,
                        &quot;genre_id&quot;: 7
                    }
                },
                {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;quas&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 15,
                        &quot;genre_id&quot;: 9
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;sed&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 15,
                        &quot;tag_id&quot;: 3
                    }
                },
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;qui&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 15,
                        &quot;tag_id&quot;: 6
                    }
                },
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;magnam&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 15,
                        &quot;tag_id&quot;: 10
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 20,
                &quot;name&quot;: &quot;Alessandra Kuhlman&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;Recusandae repellat aut.&quot;,
            &quot;summary&quot;: &quot;Repellendus a quidem impedit et ea. Praesentium molestiae repellat ad culpa accusantium recusandae voluptatem.&quot;,
            &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00dd44?text=movies+necessitatibus&quot;,
            &quot;imdb_rating&quot;: 9.2,
            &quot;pdf_link&quot;: &quot;https://lang.com/commodi-nulla-earum-suscipit-impedit-qui.html&quot;,
            &quot;author_id&quot;: 16,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;officia&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 11,
                        &quot;genre_id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;quo&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 11,
                        &quot;genre_id&quot;: 5
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;error&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 11,
                        &quot;tag_id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;non&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 11,
                        &quot;tag_id&quot;: 5
                    }
                },
                {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;architecto&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 11,
                        &quot;tag_id&quot;: 9
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 16,
                &quot;name&quot;: &quot;Landen Hagenes&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;Nemo est beatae non.&quot;,
            &quot;summary&quot;: &quot;Dolorem deleniti ratione sint explicabo aliquid placeat incidunt magnam. Nisi ea aut id vero odio voluptatibus. Voluptatem et et voluptatum voluptatum voluptatem qui ea. Enim suscipit voluptas quo eum dicta dolores minima quos. Autem recusandae aliquam illum.&quot;,
            &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/003355?text=movies+dolorem&quot;,
            &quot;imdb_rating&quot;: 8.5,
            &quot;pdf_link&quot;: &quot;http://www.dubuque.net/nemo-ea-fuga-quam-reiciendis-a-repellat-labore.html&quot;,
            &quot;author_id&quot;: 9,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;officia&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 4,
                        &quot;genre_id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;aperiam&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 4,
                        &quot;genre_id&quot;: 10
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;error&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 4,
                        &quot;tag_id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;non&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 4,
                        &quot;tag_id&quot;: 5
                    }
                },
                {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;nulla&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 4,
                        &quot;tag_id&quot;: 7
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Princess Robel&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Porro sint dignissimos.&quot;,
            &quot;summary&quot;: &quot;Iste recusandae dolores et et. Omnis quo ad minus error. Eum veniam ut nulla tenetur dolore sed est animi. Voluptatem mollitia labore dignissimos odit quam.&quot;,
            &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/001166?text=movies+laboriosam&quot;,
            &quot;imdb_rating&quot;: 7.5,
            &quot;pdf_link&quot;: &quot;http://stoltenberg.com/impedit-tenetur-commodi-adipisci-voluptate-quia-dolor-tempora&quot;,
            &quot;author_id&quot;: 14,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;iure&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 9,
                        &quot;genre_id&quot;: 1
                    }
                },
                {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;quo&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 9,
                        &quot;genre_id&quot;: 5
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;error&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 9,
                        &quot;tag_id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;qui&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 9,
                        &quot;tag_id&quot;: 6
                    }
                },
                {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;autem&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 9,
                        &quot;tag_id&quot;: 8
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 14,
                &quot;name&quot;: &quot;Dr. Mack D&#039;Amore PhD&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 23,
            &quot;title&quot;: &quot;fasdfasdf&quot;,
            &quot;summary&quot;: &quot;fasdfasdfsdfasdfasdfasdfasdf&quot;,
            &quot;cover_image&quot;: &quot;public/movies/s8dL0N3yOW7WWIANutL8ZWo80JscmFP5vhrb3Sji.png&quot;,
            &quot;imdb_rating&quot;: 6.7,
            &quot;pdf_link&quot;: null,
            &quot;author_id&quot;: 1,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T06:13:57.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T06:13:57.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;iure&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 23,
                        &quot;genre_id&quot;: 1
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;error&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 23,
                        &quot;tag_id&quot;: 2
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Dr. Lorenzo Quitzon DVM&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 24,
            &quot;title&quot;: &quot;fasdfasdf&quot;,
            &quot;summary&quot;: &quot;fasdfasdfsdfasdfasdfasdfasdf&quot;,
            &quot;cover_image&quot;: &quot;http://localhost:8000/storage/movies/pd0c6zjrxm7Jr6uKZAmmzdIBFFNfLNa7dZhUQ60T.png&quot;,
            &quot;imdb_rating&quot;: 6.7,
            &quot;pdf_link&quot;: null,
            &quot;author_id&quot;: 1,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T06:16:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T06:25:38.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;iure&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 24,
                        &quot;genre_id&quot;: 1
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;error&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 24,
                        &quot;tag_id&quot;: 2
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Dr. Lorenzo Quitzon DVM&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 22,
            &quot;title&quot;: &quot;fasdfasdf&quot;,
            &quot;summary&quot;: &quot;fasdfasdfsdfasdfasdfasdfasdf&quot;,
            &quot;cover_image&quot;: &quot;var/www/storage/app/public/movies/inNbSVzoBz6UeWblOETTdkIpUu3pEaFqncMrV4d0.png&quot;,
            &quot;imdb_rating&quot;: 6.7,
            &quot;pdf_link&quot;: null,
            &quot;author_id&quot;: 1,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;created_at&quot;: &quot;2025-07-30T06:12:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-30T06:12:38.000000Z&quot;,
            &quot;genres&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;iure&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 22,
                        &quot;genre_id&quot;: 1
                    }
                }
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;error&quot;,
                    &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                    &quot;pivot&quot;: {
                        &quot;movie_id&quot;: 22,
                        &quot;tag_id&quot;: 2
                    }
                }
            ],
            &quot;author&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Dr. Lorenzo Quitzon DVM&quot;,
                &quot;bio&quot;: null,
                &quot;created_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-30T04:20:52.000000Z&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-public-movies--movie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-public-movies--movie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-public-movies--movie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-public-movies--movie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-public-movies--movie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-public-movies--movie_id-" data-method="GET"
      data-path="api/v1/public/movies/{movie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-public-movies--movie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-public-movies--movie_id-"
                    onclick="tryItOut('GETapi-v1-public-movies--movie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-public-movies--movie_id-"
                    onclick="cancelTryOut('GETapi-v1-public-movies--movie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-public-movies--movie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/public/movies/{movie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-public-movies--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-public-movies--movie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="GETapi-v1-public-movies--movie_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-public-movies--movie_id--comments">POST api/v1/public/movies/{movie_id}/comments</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-public-movies--movie_id--comments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/public/movies/2/comments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"email\": \"kunde.eloisa@example.com\",
    \"comment\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/public/movies/2/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "email": "kunde.eloisa@example.com",
    "comment": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-public-movies--movie_id--comments">
</span>
<span id="execution-results-POSTapi-v1-public-movies--movie_id--comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-public-movies--movie_id--comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-public-movies--movie_id--comments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-public-movies--movie_id--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-public-movies--movie_id--comments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-public-movies--movie_id--comments" data-method="POST"
      data-path="api/v1/public/movies/{movie_id}/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-public-movies--movie_id--comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-public-movies--movie_id--comments"
                    onclick="tryItOut('POSTapi-v1-public-movies--movie_id--comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-public-movies--movie_id--comments"
                    onclick="cancelTryOut('POSTapi-v1-public-movies--movie_id--comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-public-movies--movie_id--comments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/public/movies/{movie_id}/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-public-movies--movie_id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-public-movies--movie_id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="movie_id"                data-endpoint="POSTapi-v1-public-movies--movie_id--comments"
               value="2"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-public-movies--movie_id--comments"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-public-movies--movie_id--comments"
               value="kunde.eloisa@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>kunde.eloisa@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comment</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="comment"                data-endpoint="POSTapi-v1-public-movies--movie_id--comments"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
