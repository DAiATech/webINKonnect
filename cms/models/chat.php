<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.7.4.5.js"></script>
    <?php
    include("consultas.php");
    include("../../models/conexao.php"); ?>
    <script>
        const buttonClick = () => {
            var input = document.getElementById('message-body');
            publishMessage(input.value);
            input.value = '';
        };

        const showMessage = (msg) => {
            var message = document.createElement('div');
            message.innerText = msg;
            document.getElementById('messages').appendChild(message);
        };

        let pubnub;

        const setupPubNub = () => {
            // Update this block with your publish/subscribe keys
            pubnub = new PubNub({
                publishKey: "pub-c-252461c1-43b4-4f3c-90ae-d1b4a0241b6a",
                subscribeKey: "sub-c-e3018162-35d9-4840-857d-34de4111e9e6",
                userId: "sub-c-e3018162-35d9-4840-857d-34de4111e9e6"
            });

            // add listener
            const listener = {
                status: (statusEvent) => {
                    if (statusEvent.category === "PNConnectedCategory") {
                        console.log("Connected");
                    }
                },
                message: (messageEvent) => {
                    showMessage(messageEvent.message.description);
                },
                presence: (presenceEvent) => {
                    // handle presence
                }
            };
            pubnub.addListener(listener);

            // publish message
            const publishMessage = async (message) => {
                // With the right payload, you can publish a message, add a reaction to a message,
                // send a push notification, or send a small payload called a signal.
                const publishPayload = {
                    channel: "hello_world",
                    message: {
                        title: "greeting",
                        description: message
                    }
                };
                await pubnub.publish(publishPayload);
            }

            // subscribe to a channel
            pubnub.subscribe({
                channels: ["hello_world"]

            };

            // run after page is loaded
            window.onload = setupPubNub;


    </script>


    <div>
        <input id="message-body" type="text">
        <button onclick="buttonClick()">Send</button>
        <div id="messages"></div>
    </div>
</div>