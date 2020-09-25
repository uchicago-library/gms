<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="uv/uv.css"/>
        <script src="https://unpkg.com/resize-observer-polyfill@1.5.1/dist/ResizeObserver.js"></script>
        <script type="text/javascript" src="uv/uv-assets/js/bundle.js"></script>
        <script type="text/javascript" src="uv/uv-helpers.js"></script>
        <script type="text/javascript" src="uv-dist-umd/UV.js"></script>
        <title>Rose and Chess</title>
        <style>
            html, body {
                 height: 100%;
                 margin: 0;
            }   
            #uv {
                width: 100%;
                height: 100%;
            }   
        </style>
    </head>
    <body>

        <div id="uv"></div>

        <script type="text/javascript">
            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }

            urlDataProvider = new UV.URLDataProvider();
            var doc = getUrlVars()['doc'];
            var manifest_uri = "https://iiif-manifest.lib.uchicago.edu/gms/" + doc + "/gms-" + doc + ".json";
            //var manifest_uri = "https://iiif-manifest-dev.lib.uchicago.edu/gms-0019.json";

            if ('cv' in getUrlVars()) {
                var cv = Number(urlDataProvider.get('cv', 0));
            } else {
                var cv = parseInt(getUrlVars()['obj']) - 1;
            }

            var uv = createUV("uv", {
                manifestUri: manifest_uri,
                assetsDir: "uv/uv-assets",
                configUri: "/uv-config.json",
                canvasIndex: cv
            }, new UV.URLDataProvider());
        </script>

    </body>
</html>
