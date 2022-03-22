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
        <title>Goodspeed Manuscript Collection</title>
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

            var arks = {
                '0019': 'ark:61001/b22r97w8w16z',
                '0046': 'ark:61001/b2r49613m73b',
                '0050': 'ark:61001/b2252c21c40b',
                '0062': 'ark:61001/b21h2qs1kq9s',
                '0125': 'ark:61001/b27k6f76xv22',
                '0126': 'ark:61001/b2zw1sk10z2p',
                '0128': 'ark:61001/b2v66c772m2q',
                '0129': 'ark:61001/b2hg4dv0t19t',
                '0130': 'ark:61001/b2jm34q08d9t',
                '0131': 'ark:61001/b20b66b16m9w',
                '0132': 'ark:61001/b25p7648f44x',
                '0133': 'ark:61001/b2xt9r51m290',
                '0134': 'ark:61001/b21653s2b68c',
                '0135': 'ark:61001/b2rx8tc4c38d',
                '0136': 'ark:61001/b28g3660148f',
                '0137': 'ark:61001/b2tf8607b642',
                '0138': 'ark:61001/b2kc4bv6dq74',
                '0139': 'ark:61001/b2j22s88pv5v',
                '0140': 'ark:61001/b2rr3474jq62',
                '0141': 'ark:61001/b2q863x32r5v',
                '0142': 'ark:61001/b21n41w4z031',
                '0166': 'ark:61001/b2w68f28t31c',
                '0202': 'ark:61001/b24n8sx0v587',
                '0229': 'ark:61001/b2hd51r0ds6s',
                '0232': 'ark:61001/b2x05jb9ms3w',
                '0234': 'ark:61001/b23668t4z96n',
                '0251': 'ark:61001/b2xm88p9hm7f',
                '0270': 'ark:61001/b2619jx9x49j',
                '0275': 'ark:61001/b2f890560z54',
                '0277': 'ark:61001/b2v41cd8r53m',
                '0338': 'ark:61001/b2qc0fc02r1s',
                '0342': 'ark:61001/b2hv6vj5b32w',
                '0378': 'ark:61001/b2s81tv2344w',
                '0702': 'ark:61001/b2db1qf0q58s',
                '0715': 'ark:61001/b22g06x7hj0d',
                '0716': 'ark:61001/b26z1nt4b47b',
                '0727': 'ark:61001/b27918964p35',
                '0773': 'ark:61001/b2pd0579k975',
                '0781': 'ark:61001/b2cz19g5k38d',
                '0823': 'ark:61001/b2cm6k73k70k',
                '0828': 'ark:61001/b2cw3797p05h',
                '0829': 'ark:61001/b2vg2mb1n33d',
                '0862': 'ark:61001/b22w1jb97910',
                '0879': 'ark:61001/b21p0qs8d876',
                '0899': 'ark:61001/b2tq83r8fn4n',
                '0902': 'ark:61001/b2dw8vx36d1b',
                '0922': 'ark:61001/b2mx17c0p66p',
                '0931': 'ark:61001/b2m029n2bp53',
                '0937': 'ark:61001/b2ct6dp7rr2c',
                '0938': 'ark:61001/b2x09589fj7v',
                '0939': 'ark:61001/b2xg70z1x193',
                '0943': 'ark:61001/b2ng6835gv0h',
                '0947': 'ark:61001/b2v389m6pq3m',
                '0948': 'ark:61001/b29b1tv7xn73',
                '0949': 'ark:61001/b2df0vt15q4q',
                '0951': 'ark:61001/b2356md6v073',
                '0953': 'ark:61001/b2mt6k84q34z',
                '0965': 'ark:61001/b27p6dn4xz0k',
                '0972': 'ark:61001/b2p35sm3m743',
                '0995': 'ark:61001/b2c28xt9t89x',
                '0996': 'ark:61001/b2r71z62cp8p',
                '1017': 'ark:61001/b2n921x8508t',
                '1040': 'ark:61001/b2vp2vt5xm8x',
                '1054': 'ark:61001/b28c3rs3cn8j',
                '1341': 'ark:61001/b24h5461cb1b',
                '1342': 'ark:61001/b27f7vt1wm3f',
                '2057': 'ark:61001/b2rh24g80h55',
                '9351': 'ark:61001/b25p3r42st00'
            };

            urlDataProvider = new UV.URLDataProvider();
            var doc = getUrlVars()['doc'];
            var manifest_uri = "https://iiif-manifest.lib.uchicago.edu/" + arks[doc];

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
