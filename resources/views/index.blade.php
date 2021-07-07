<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>robot base control panle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: url(&quot;assets/img/—Pngtree—smart%20robot%20palm%20advertising%20background_979721.jpg&quot;);background-size: cover;">
    <div class="row justify-content-center align-items-center" style="width: 100%;padding-top: 15%;">
        <div class="col text-center">
            <form action="{{ route('forward')}}" method="POST">
                @csrf
                <button name="top" class="btn btn-primary" type="Submit" style="width: 60px;height: 70px;box-shadow: 0px 0px 20px 7px rgb(100,69,110);"><i class="fa fa-chevron-up"></i></button>
            </form>
        </div>
    </div>
    <div class="row" style="width: 100%;margin-top: 5%;">
        <div class="col text-center">
            <form action="{{ route('left')}}" method="POST">
                @csrf
                <button name="left" class="btn btn-primary" type="Submit" style="width: 70px;height: 60px;box-shadow: 0px 0px 20px 7px rgb(100,69,110);"><i class="fa fa-chevron-left"></i></button>
            </form>
        </div>
        <div class="col text-center">
            <form action="{{ route('stop')}}" method="POST">
                @csrf
                <button name="stop" class="btn btn-primary" type="Submit" style="width: 60px;height: 60px;box-shadow: 0px 0px 20px 7px rgb(100,69,110);"><i class="fa fa-stop-circle-o"></i></button>
            </form>
        </div>
        <div class="col text-center">
            <form action="{{ route('right')}}" method="POST">
                @csrf
                <button name="right" class="btn btn-primary" type="Submit" style="width: 70px;height: 60px;background: rgb(13, 110, 253);box-shadow: 0px 0px 20px 7px rgb(100,69,110);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"><i class="fa fa-chevron-right"></i></button>
            </form>
        </div>
    </div>
    <div class="row" style="width: 100%;margin-top: 5%;">
        <div class="col text-center">
            <form action="{{ route('backward')}}" method="POST">
                @csrf
                <button name="backward" class="btn btn-primary" type="Submit" style="height: 70px;width: 60px;box-shadow: 0px 0px 20px 7px rgb(100,69,110);"><i class="fa fa-chevron-down"></i></button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        window.watsonAssistantChatOptions = {
        integrationID: "efc49929-c905-484e-af70-576d5fa7f2a2", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "d0b8a429-26f4-4433-a073-85e3ee90d40c", // The ID of your service instance.
            onLoad: function(instance) { instance.render(); }
        };
        setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>
</body>

</html>