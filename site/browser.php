<!DOCTYPE html>
<html>

<head>
    <script>
        function getCookies() {
            const cDisplay = document.getElementById("cookies-info-display");
            cDisplay.textContent = "Cookies: " + document.cookie;
        }

        function getUserAgent() {
            const uaDisplay = document.getElementById("useragent-info-display");
            uaDisplay.textContent = "Your UserAgent: " + navigator.userAgent;
        }

        function getTimezone() {
            const tzDisplay = document.getElementById("timezone-info-display");
            tzDisplay.textContent = "Timezone: " + Intl.DateTimeFormat().resolvedOptions().timeZone;
        }

        function networkStatus() {
            const nsDisplay = document.getElementById("network-info-display");
            nsDisplay.textContent = "Network Status: " + navigator.onLine;
        }

        function getGeolocation() {
            navigator.geolocation.getCurrentPosition(function (position) {
                let lat = position.coords.latitude;
                let long = position.coords.longitude;

                document.getElementById("geolocation-info-display").innerHTML = "Lat: " + lat.toFixed(2) + " Long: " + long.toFixed(2) + "";
            });
        }

        function handleCheckboxClick(cb) {
            const cbDisplay = document.getElementById("checkbox-info-display");
            if (cb.checked) {
                cbDisplay.textContent = "Thanks for checking the box"
            } else {
                cbDisplay.textContent = "You've just unchecked the box"
            }
        }

        function handleInputText(it) {
            const itDisplay = document.getElementById("text-info-display");
            if (it.value !== "") {
                itDisplay.textContent = "Thanks for filling in the input text field"
            } else {
                itDisplay.textContent = "You've just removed everything from the input text field"
            }
        }

        function inputTextOnFocus(it) {
            const itDisplay = document.getElementById("text-info-display");
            itDisplay.textContent = "focused on input text field"
        }

        function inputTextOnFocusOut(it) {
            const itDisplay = document.getElementById("text-info-display");
            itDisplay.textContent = "focused out off input text field"
        }

        function getLocale() {
            const userLocale =
                navigator.languages && navigator.languages.length
                    ? navigator.languages[0]
                    : navigator.language;

            document.getElementById("locale-info-display").innerHTML = userLocale;
        }

        var counter = 0;
        function incrementCounter() {
            const counterDisplay = document.getElementById("counter-info-display");
            console.log(counter)
            counterDisplay.textContent = "Counter: " + ++counter;
            console.log(counter);
        }

        function selectOnChange(sel) {
            const sDisplay = document.getElementById("select-multiple-info-display");
            var opts = "Selected: ", opt;
            var len = sel.options.length;
            for (var i = 0; i < len; i++) {
                opt = sel.options[i];

                if (opt.selected) {
                    opts = opts + opt.value + " ";
                }
            }
            sDisplay.textContent = opts;
        }
    </script>
</head>

<body onload="getLocale(); getTimezone(); getUserAgent(); networkStatus(); getCookies();">

    <p><a href="/">&lt; Back</a></p>

    <table>
        <tr>
            <td><button type="button" onclick="getGeolocation()">Get geolocation</button></td>
            <td>
                <p id="geolocation-info-display">Lat: ? Long: ?</p>
            </td>
        </tr>
        <tr>
            <td>NA</td>
            <td>
                <p id="locale-info-display">Locale: ?</p>
            </td>
        </tr>
        <tr>
            <td><button type="button" onclick="networkStatus()">Refresh network status</button></td>
            <td>
                <p id="network-info-display">Network Status: ?</p>
            </td>
        </tr>
        <tr>
            <td>NA</td>
            <td>
                <p id="timezone-info-display">Timezone: ?</p>
            </td>
        </tr>
        <tr>
            <td>NA</td>
            <td>
                <p id="useragent-info-display">Your UserAgent: ?</p>
            </td>
        </tr>
        <tr>
            <td><button type="button" onclick="getCookies()">Refresh cookies</button></td>
            <td>
                <p id="cookies-info-display">Cookies: ?</p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" onclick="handleCheckboxClick(this);" id="checkbox1" name="checkbox1"
                    value="Checkbox test 1">
                <label for="checkbox1">Checkbox test 1</label><br>
            </td>
            <td>
                <p id="checkbox-info-display">No interaction</p>
            </td>
        </tr>
        <tr>
            <td><button type="button" id="counter-button" onclick="incrementCounter()">Increment</button></td>
            <td>
                <p id="counter-info-display">Counter: 0</p>
            </td>
        </tr>
        <tr>
            <td><input type="text" oninput="handleInputText(this);" onfocus="inputTextOnFocus(this);" onfocusout="inputTextOnFocusOut(this);" id="text1"></td>
            <td>
                <p id="text-info-display">No interaction</p>
            </td>
        </tr>
        <tr>
            <td><input type="text" disabled="true" id="input-text-disabled"></td>
            <td>Disabled input text field</td>
        </tr>
        <tr>
            <td><input type="text" hidden="true" id="input-text-hidden"></td>
            <td>Hidden input text field</td>
        </tr>
        <tr>
            <td><label for="numbers">Choose one or more numbers:</label></td>
            <td>
                <select name="numbers" id="numbers-options" onchange="selectOnChange(this)" multiple>
                    <option value="zero">Zero</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                    <option value="four">Four</option>
                    <option value="five">Five</option>
                </select>
                <p id="select-multiple-info-display">Nothing selected</p>
            </td>
        </tr>
        <tr>
            <td><label for="colors">Choose a color:</label></td>
            <td>
                <select name="colors" id="colors-options">
                    <option value="none">None</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="black">Black</option>
                    <option value="white">White</option>
                </select>
            </td>
        </tr>
    </table>

    <div id="off-screen" style="position: absolute; top: 150vh; left: 100px;">
        Off page div
    </div>

</body>

</html>