<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/static/favicon.ico" sizes="32x32">
    <link rel="stylesheet" href="/static/css/site.css" type="text/css">
    <title>Demo website for load testing</title>
</head>
<body>
<main class="page">
    <header class="header">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="220.227" height="213.73" viewBox="0 0 220.227 213.73">
                <path d="M220.727,213.731H.5L73.815,57.346l44.163,32.466L175.581,0Zm-80.746-33.778h.471a21.028,21.028,0,0,0,14.619-5.876,19.166,19.166,0,0,0,6.284-14.454,17.546,17.546,0,0,0-6.057-13.873,18.426,18.426,0,0,0-12.568-5.412h-.361a6.567,6.567,0,0,0-1.83.251l11.626-17.282-9.262-6.465-4.383,6.465-11.2,17.109c-1.925,2.836-3.535,5.334-4.533,7.07a40.655,40.655,0,0,0-2.663,5.726,17.816,17.816,0,0,0-1.272,6.6,19.145,19.145,0,0,0,6.206,14.3,20.709,20.709,0,0,0,14.485,5.876Zm-49.237-18.6,12.836,18.154H117.3l-15.1-21.06,13.41-18.617-8.9-6.159-3.927,5.184-12.058,17V121.674l-12.019-9.8V179.5H90.727V161.336ZM140,168.618a8.837,8.837,0,1,1,0-17.675h.079a8.639,8.639,0,0,1,6.229,2.663,8.228,8.228,0,0,1,2.663,6.127A8.978,8.978,0,0,1,140,168.6Z"
                      transform="translate(-0.5 -0.001)" fill="#7d64ff"/>
            </svg>
        </div>
        <div>
            <h1 class="title">test.<span class="text-blue">k6</span>.io</h1>
            <p class="description">Collection of simple web-pages suitable for load testing.</p>
        </div>
        <ul class="header-icons">
            <li>
                <a href="https://github.com/loadimpact/k6">
                    <svg height="20" width="20" aria-hidden="true" focusable="false"
                         viewBox="0 0 496 512">
                        <path fill="currentColor"
                              d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/k6_io">
                    <svg height="20" width="20" aria-hidden="true" focusable="false"
                         viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </header>
    <section class="page-section">

        <h2 class="heading-underlined">Public pages</h2>
        <table>
            <tbody>
            <tr>
                <td>GET</td>
                <td><a href="/contacts.php">/contacts.php</a></td>
                <td>Short public page.</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><a href="/news.php">/news.php</a></td>
                <td>Longer public page (slower)</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><a href="/pi.php?decimals=3">/pi.php?decimals=3</a></td>
                <td>Calculating π decimals</td>
            </tr>
            <tr>
                <td>GET+POST</td>
                <td><a href="/flip_coin.php">/flip_coin.php</a></td>
                <td>Coin flip game</td>
            </tr>
            </tbody>
        </table>

        <h2 class="heading-underlined">Authenticated pages</h2>
        <table>
            <tbody>
            <tr>
                <td>GET+POST</td>
                <td><a href="/my_messages.php">/my_messages.php</a></td>
                <td>Login form + authenticated page</td>
            </tr>
            </tbody>
        </table>

    </section>

    <section class="page-section">
        <h2>Sample script</h2>

        <pre>
<code class="code language-js">import http from "k6/http";
import { check, group, sleep } from "k6";
import { Counter, Rate, Trend } from "k6/metrics";
import { randomIntBetween } from "https://jslib.k6.io/k6-utils/1.0.0/index.js";

const loginData = JSON.parse(open("./users.json"));  // download the data file here: https://test.k6.io/static/examples/users.json

/* Options
Global options for your script
stages - Ramping pattern
thresholds - pass/fail criteria for the test
ext - Options used by Load Impact cloud service test name and distribution
*/
export let options = {
    stages: [
        { target: 200, duration: "1m" },
        { target: 200, duration: "3m" },
        { target: 0, duration: "1m" }
    ],
    thresholds: {
        "http_req_duration": ["p(95)<500"],
        "http_req_duration{staticAsset:yes}": ["p(95)<100"],
        "check_failure_rate": ["rate<0.3"]
    },
    ext: {
        loadimpact: {
          // projectID: 3113635,
            name: "Insights Demo with Cloud Execution",
            distribution: {
                scenarioLabel1: { loadZone: "amazon:us:ashburn", percent: 50 },
                scenarioLabel2: { loadZone: "amazon:ie:dublin", percent: 50 }
            }
        }
    }
};

// Custom metrics
// We instantiate them before our main function
let successfulLogins = new Counter("successful_logins");
let checkFailureRate = new Rate("check_failure_rate");
let timeToFirstByte = new Trend("time_to_first_byte", true);


/* Main function
The main function is what the virtual users will loop over during test execution.
*/
export default function() {
    // We define our first group.  Pages natually fit a concept of a group
    // You may have other similar actions you wish to "group" together
    group("Front page", function() {
        let res = null;
        // As mentioned above, this logic just forces the performance alert for too many urls, use env URL_ALERT to force it
        // It also highlights the ability to programmatically do things right in your script
        if (__ENV.URL_ALERT) {
            res = http.get("http://test.k6.io/?ts=" + Math.round(randomIntBetween(1,2000)));
        } else {
            res = http.get("http://test.k6.io/?ts=" + Math.round(randomIntBetween(1,2000)), { tags: { name: "http://test.k6.io/ Aggregated"}});
        }
        let checkRes = check(res, {
            "Homepage body size is 11026 bytes": (r) => r.body.length === 11026,
            "Homepage welcome header present": (r) => r.body.indexOf("Welcome to the k6.io demo site!") !== -1
        });

        // Record check failures
        checkFailureRate.add(!checkRes);

        // Record time to first byte and tag it with the URL to be able to filter the results in Insights
        timeToFirstByte.add(res.timings.waiting, { ttfbURL: res.url });

        // Load static assets
        group("Static assets", function() {
            let res = http.batch([
                ["GET", "http://test.k6.io/static/css/site.css", {}, { tags: { staticAsset: "yes" } }],
                ["GET", "http://test.k6.io/static/js/prisms.js", {}, { tags: { staticAsset: "yes" } }]
            ]);
            checkRes = check(res[0], {
                "Is stylesheet 4859 bytes?": (r) => r.body.length === 4859,
            });

            // Record check failures
            checkFailureRate.add(!checkRes);

            // Record time to first byte and tag it with the URL to be able to filter the results in Insights
            timeToFirstByte.add(res[0].timings.waiting, { ttfbURL: res[0].url, staticAsset: "yes" });
            timeToFirstByte.add(res[1].timings.waiting, { ttfbURL: res[1].url, staticAsset: "yes" });
        });

    });

    sleep(10);

    group("Login", function() {
        let res = http.get("http://test.k6.io/my_messages.php");
        let checkRes = check(res, {
            "Users should not be auth'd. Is unauthorized header present?": (r) => r.body.indexOf("Unauthorized") !== -1
        });
            
        //extracting the CSRF token from the response

        const vars = {};

        vars["csrftoken"] = res
            .html()
            .find("input[name=csrftoken]")
            .first()
            .attr("value");    

        // Record check failures
        checkFailureRate.add(!checkRes);

        let position = Math.floor(Math.random()*loginData.users.length);
        let credentials = loginData.users[position];

        res = http.post("http://test.k6.io/login.php", { login: credentials.username, password: credentials.password, redir: '1', csrftoken: `${vars["csrftoken"]}` });
        checkRes = check(res, {
            "is logged in welcome header present": (r) => r.body.indexOf("Welcome, admin!") !== -1
        });

        // Record successful logins
        if (checkRes) {
            successfulLogins.add(1);
        }

        // Record check failures
        checkFailureRate.add(!checkRes, { page: "login" });

        // Record time to first byte and tag it with the URL to be able to filter the results in Insights
        timeToFirstByte.add(res.timings.waiting, { ttfbURL: res.url });

        sleep(10);
    });
}
</code></pre>
    </section>
</main>
<script src="/static/js/prisms.js"></script>
</body>
</html>
