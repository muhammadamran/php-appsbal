<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        /* HTML: <div class="loader"></div> */
        .loader {
            width: fit-content;
            font-weight: bold;
            font-family: monospace;
            font-size: 30px;
            background: radial-gradient(circle closest-side, #000 94%, #0000) right/calc(200% - 1em) 100%;
            animation: l24 1s infinite alternate linear;
        }

        .loader::before {
            content: "Loading...";
            line-height: 1em;
            color: #0000;
            background: inherit;
            background-image: radial-gradient(circle closest-side, #fff 94%, #000);
            -webkit-background-clip: text;
            background-clip: text;
        }

        @keyframes l24 {
            100% {
                background-position: left
            }
        }
    </style>
    <div class="loader"></div>
    <?= date('Y') + 1 ?>
</body>

</html>