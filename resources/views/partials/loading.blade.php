<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style type="text/css">


        .page    { display: block;
        }
        #loading {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            /*background-color: rgba(192, 192, 192, 0.5);*/
            background-image: url("https://media2.giphy.com/media/10kTz4r3ishQwU/giphy.gif?cid=790b7611b5a13ca0cc3871ac347a16f037693fd9d211af86&rid=giphy.gif");
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>


<link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">


<script type="text/javascript">

    function onReady(callback) {
        var intervalId = window.setInterval(function() {
            if (document.getElementsByTagName('body')[0] !== undefined) {
                window.clearInterval(intervalId);
                callback.call(this);
            }
        }, 1000);
    }
    function setVisible(selector, visible) {
        document.querySelector(selector).style.display = visible ? 'block' : 'none';
    }
    onReady(function() {
        setVisible('.page', true);
        setVisible('#loading', false);
    });
</script>
</body>
</html>
