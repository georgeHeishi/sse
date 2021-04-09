document.addEventListener("DOMContentLoaded", () => {
    const parameterButton = document.getElementById("parameter-btn");
    const parameter = document.getElementById("parameter");

    parameterButton.addEventListener("click",() => {
        console.log(parameter.value);
        const url = 'api/submitParameter.php';
        const request = new Request(url, {
            method: 'POST',
            body: JSON.stringify({
                parameter: parameter.value,
            }),
            headers: {
                'Content-type': 'application/json; charset=UTF-8'
            }
        });
    });

    if (typeof (EventSource) !== "undefined") {
        let source = new EventSource("api/sse.php");

        source.addEventListener("open", function (e) {
            console.log("open");
            document.getElementById("message").innerText += "OPENED<br>";
        }, false);

        source.addEventListener("message", function (e) {
            console.log(e.data);
            console.log("message");
        }, false);

        source.addEventListener("mojaUdalost", function (e) {
            console.log(e);
            console.log("mojaUdalost");
        }, false);

        source.addEventListener("error", function (e) {
            console.log(e);
            console.log("error");
        }, false);


    } else {
        document.getElementById("message").innerHTML = "Sorry, your browser does not support server-sent events...";
    }

});

