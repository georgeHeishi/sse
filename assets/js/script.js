document.addEventListener("DOMContentLoaded", () => {
    const parameterButton = document.getElementById("parameter-btn");

    const stream = document.getElementById("stream");
    let source = null;
    let subscribed = false;

    parameterButton.addEventListener("click", () => {
        const parameter = document.getElementById("parameter");

        const y1 = document.getElementById("y1");
        const y2 = document.getElementById("y2");
        const y3 = document.getElementById("y3");

        const url = 'api/submitParameter.php';
        const request = new Request(url, {
            method: 'POST',
            body: JSON.stringify({
                parameter: parameter.value,
                y1: y1.checked,
                y2: y2.checked,
                y3: y3.checked
            }),
            headers: {
                'Content-type': 'application/json; charset=UTF-8'
            }
        });

        fetch(request)
            .then((response) => response.json())
            .then((data) => {
            })

        if (typeof (EventSource) !== "undefined") {
            if (source == null) {
                source = new EventSource("api/sse.php");

                source.addEventListener("open", function (e) {
                    console.log("open");
                    document.getElementById("message").innerText += "OPENED";
                }, false);

                source.addEventListener("message", function (e) {
                    stream.innerHTML += "<li>";
                    stream.innerHTML += e.data;
                    stream.innerHTML += "</li>";
                }, false);

                source.addEventListener("error", function (e) {
                    console.log(e);
                    console.log("error");
                }, false);
            }
        } else {
            document.getElementById("message").innerHTML = "Sorry, your browser does not support server-sent events...";
        }

    });
});

